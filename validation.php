<?php include_once("db.php");?>
<?php
// Initialize variables to null.
$name ="";		//Sender Name
$email =""; 	//Sender's email ID
$purpose ="";	//Subject of mail
$message ="";	//Sender's Message 

$nameError ="";			
$emailError ="";
$purposeError ="";
$messageError ="";
$successMessage ="";

//On submitting form below function will execute

if(isset($_POST['submit']))
{
    if (empty($_POST["name"])){
        $nameError = "Name is required";
      } 
   else {
       $name = test_input($_POST["name"]);

       if (!preg_match("/^[a-zA-Z ]*$/",$name)){
            $nameError = "Only letters and white space allowed"; 
         }
     }

   if (empty($_POST["email"])) {
       $emailError = "Email is required";
      } 
   else {
      $email = test_input($_POST["email"]);
      }

   if (empty($_POST["phone"])) {
      $phoneError = "Phone is required";
     }
/*	else if(!preg_match('/^[0-9]{3}-[0-9]{3}-[0-9]{4}$/', $_POST['phone']))
	{
		$phoneError = 'Invalid Number!';
	}
*/   else { 
	  $phone = test_input($_POST["phone"]);  
	 } 

   if (empty($_POST["age"])) {
      $ageError = "Age is required";
     }
/*		if(!preg_match('/^[0-9]{3}-[0-9]{3}-[0-9]{4}$/', $_POST['age']))
		{
			$ageError = 'Invalid Number!';
		}*/
   else { 
	  $age = test_input($_POST["age"]);  
	 } 

   if (empty($_POST["sex"])) {
      $sexError = "<br />Sex is required";
     } 
   else { 
	  $sex = test_input($_POST["sex"]);  
	 } 

   if (empty($_POST["standerd"])) {
      $standerdError = "Standerd completed is required";
     } 
   else { 
	  $standerd = test_input($_POST["standerd"]);  
	 } 

   if (empty($_POST["percentage"])) {
      $percentageError = "Percentage of mark is required";
     } 
   else { 
	  $percentage = test_input($_POST["percentage"]);  
	 } 

   if (empty($_POST["course"])) {
      $courseError = "Course interested is required";
     } 
   else { 
	  $course = test_input($_POST["course"]);  
	 } 

   if (empty($_POST["branch_interested"])) {
      $branch_interestedError = "Branch interested is required";
     } 
   else { 
	  $branch_interested = test_input($_POST["branch_interested"]);  
	 } 

   if (empty($_POST["enquiry"])) {
      $enquiryError = "Enquiry is required";
     } 
   else { 
	  $enquiry = test_input($_POST["enquiry"]);  
	 } 

if(!($name=='') && !($email=='') && !($phone=='') &&!($age=='') &&!($sex=='') &&!($standerd=='') &&!($percentage=='') &&!($course=='') &&!($branch_interested=='') &&!($enquiry==''))
{
		if (preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/",$email)) 
		{
			$data['Name']=$name;
			$data['Email']=$email;
			$data['Phone']=$phone;
			$data['Age']=$age;
			$data['Sex']=$sex;
			$data['StanderdCompleted']=$standerd;
			$data['PercentageMark']=$percentage;
			$data['CourseInterested']=$course;
			$data['BranchInterested']=$branch_interested;
			$data['Enquiry']=$enquiry;
			$data['AddedDate']=date("Y-m-d");

			insert($mysqli,'addmissions',$data);
			
			$standerd_name=$list_standerd[$standerd];$course_name=$list_course[$course];$branch_interested_name=$list_branch[$course][$branch_interested];$sex_name=$list_gender[$sex];
			/* Let's prepare the message for the e-mail */
			$msg = '<html><body>';
			$msg .= "<p style='font-size:12px; line-height: 21px;'>Hello! $name,<br /> Thank you...! For Contacting Us.</p>";
			$msg .= "<br/>";
			$msg .= '<table rules="all" style="border: #666 1px solid; width:65%;" cellpadding="10">';
			$msg .= "<tr style='background: #eee;'><td style='width:15%;border: #666 1px solid;'><strong>Name:</strong> </td><td style='width:50%;border: #666 1px solid;'>".$name."</td></tr>";
			$msg .= "<tr style='border: #666 1px solid;'><td style='border: #666 1px solid;'><strong>E-mail:</strong> </td><td style='border: #666 1px solid;'>".$email."</td></tr>";
			$msg .= "<tr style='border: #666 1px solid;'><td style='border: #666 1px solid;'><strong>Phone:</strong> </td><td style='border: #666 1px solid;'>".$phone."</td></tr>";
			$msg .= "<tr style='border: #666 1px solid;'><td style='border: #666 1px solid;'><strong>Age:</strong> </td><td style='border: #666 1px solid;'>".$age."</td></tr>";
			$msg .= "<tr style='border: #666 1px solid;'><td style='border: #666 1px solid;'><strong>Sex:</strong> </td><td style='border: #666 1px solid;'>".$sex_name."</td></tr>";
			$msg .= "<tr style='border: #666 1px solid;'><td style='border: #666 1px solid;'><strong>Standard Completed:</strong> </td><td style='border: #666 1px solid;'>".$standerd_name."</td></tr>";
			$msg .= "<tr style='border: #666 1px solid;'><td style='border: #666 1px solid;'><strong>Percentage of Mark:</strong> </td><td style='border: #666 1px solid;'>".$percentage."</td></tr>";
			$msg .= "<tr style='border: #666 1px solid;'><td style='border: #666 1px solid;'><strong>Course Interested:</strong> </td><td style='border: #666 1px solid;'>".$course_name."</td></tr>";
			$msg .= "<tr style='border: #666 1px solid;'><td style='border: #666 1px solid;'><strong>Branch interested:</strong> </td><td style='border: #666 1px solid;'>".$branch_interested_name."</td></tr>";
			$msg .= "<tr style='border: #666 1px solid;'><td style='border: #666 1px solid;'><strong>Enquiry:</strong> </td><td style='border: #666 1px solid;'>".$enquiry."</td></tr>";	
			$msg .= "</table>";	
			$msg .= "<br/>";		
			$msg .= "<p style='font-size:12px; line-height: 21px;'>This is a Contact Confirmation mail.<br />
			We Will contact You as soon as possible.<br /><br />
			Thanks,<br />Admin.</p>";		
			$msg .= "</body></html>";
			
			
						
			$msg1 = '<html><body>';
			$msg1 .= " <p style='font-size:12px; line-height: 21px;'>$name Contacted Us.<br /><i>Here are some information about $name.</i></p>";
			$msg1 .= "<br/>";
			$msg1 .= '<table rules="all" style="border: #666 1px solid; width:65%;" cellpadding="10">';
			$msg1 .= "<tr style='background: #eee;'><td style='width:15%;border: #666 1px solid;'><strong>Name:</strong> </td><td style='width:50%;border: #666 1px solid;'>".$name."</td></tr>";
			$msg1 .= "<tr style='border: #666 1px solid;'><td style='border: #666 1px solid;'><strong>E-mail:</strong> </td><td style='border: #666 1px solid;'>".$email."</td></tr>";
			$msg1 .= "<tr style='border: #666 1px solid;'><td style='border: #666 1px solid;'><strong>Phone:</strong> </td><td style='border: #666 1px solid;'>".$phone."</td></tr>";
			$msg1 .= "<tr style='border: #666 1px solid;'><td style='border: #666 1px solid;'><strong>Age:</strong> </td><td style='border: #666 1px solid;'>".$age."</td></tr>";
			$msg1 .= "<tr style='border: #666 1px solid;'><td style='border: #666 1px solid;'><strong>Sex:</strong> </td><td style='border: #666 1px solid;'>".$sex_name."</td></tr>";
			$msg1 .= "<tr style='border: #666 1px solid;'><td style='border: #666 1px solid;'><strong>Standard Completed:</strong> </td><td style='border: #666 1px solid;'>".$standerd_name."</td></tr>";
			$msg1 .= "<tr style='border: #666 1px solid;'><td style='border: #666 1px solid;'><strong>Percentage of Mark:</strong> </td><td style='border: #666 1px solid;'>".$percentage."</td></tr>";
			$msg1 .= "<tr style='border: #666 1px solid;'><td style='border: #666 1px solid;'><strong>Course Interested:</strong> </td><td style='border: #666 1px solid;'>".$course_name."</td></tr>";
			$msg1 .= "<tr style='border: #666 1px solid;'><td style='border: #666 1px solid;'><strong>Branch interested:</strong> </td><td style='border: #666 1px solid;'>".$branch_interested_name."</td></tr>";
			$msg1 .= "<tr style='border: #666 1px solid;'><td style='border: #666 1px solid;'><strong>Enquiry:</strong> </td><td style='border: #666 1px solid;'>".$enquiry."</td></tr>";
			$msg1 .= "</table>";	
			$msg1 .= "<br/>";
			$msg1 .= "<p style='font-size:12px; line-height: 21px;'>Thanks,<br />Admin</p>";
			$msg1 .= "</body></html>";
			$headers.= 'MIME-Version: 1.0' . "\r\n";
			$headers.= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
			$headers1= "From: ADMISSIONS Form <vvit.info@gmail.com>" . "\r\n";
			$headers2= "From: ADMISSIONS Form <$name>" . "\r\n";
			$subject="ADMISSIONS Form";
			if(mail($email,$subject,$msg,$headers) && mail("vvit.info@gmail.com",$subject,$msg1,$headers.$headers2))
			{
				?>
                <script type="application/javascript">
				alert("Message sent successfully.");
				window.location='admission.php';
				</script>
                <?
			}
		}
		else { $emailError = "Invalid Email"; }
	}
}
// function for filtering input values
function test_input($data) {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
}

?>