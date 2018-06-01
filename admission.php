<?php include_once("header.php");?>

<?php include_once("validation.php");?>



<div class="main-content">

<div class="wrapper">

<div class="content-part">

<h1>ADMISSIONS</h1>

<div class="half-width">



<h2>Bachelor of Engineering</h2>

<ul>

<li> Civil Engineering</li>

<li>Computer Science and Engineering</li>

<li>Electronics and Communication Engineering</li>

<li>Mechanical Engineering</li>

</ul>

<p>Duration : 4 years (8 Semesters) - Full Time<br />

</p>

<h3>Eligiblity:</h3>

<ul>

<li>Candidates should have passed PUC/10+2/or equivalent with 45% aggregate in PCM (45% in case of candidates belonging to reserved category). </li>

<li>Diploma candidates should have minimum aggregate of 40% (45 in case of candidates belonging to reserved category) for lateral entry. </li>

<li>Non-Karnataka candidates are also eligible for lateral entry.</li>

</ul>


<h2>Diploma</h2>

<ul>

<li>Civil Engineering</li>

<li>Mechanical Engineering</li>

</ul>

<p>Duration : 3 years (6 Semesters) - Full Time<br />

</p>

<h3>Eligiblity:</h3>

<p>Candidates should have passed SSLC/10 with 35%.</p>

<p>Original certificates to be submitted at the time of admission:</p>

<ul>

<li>PUC/Intermediate/10+2 Certificate/Diploma/Marks Card/Diploma Certificate/ BE Marks Card</li>

<li>CET allotment letter</li>

<li>Transfer Certificate</li>

<li>Medical Certificate</li>

<li>Migration Certificate in case of Non- Karnataka</li>

<li>Eligibility fee for Non-Karnataka/Foreign students to be paid to Visvesvaraya Technological University</li>

<li>Four Passport Size Photographs and two stamp size photographs</li>

</ul>


<h2>Master Degree</h2>

<ul>

<li>Construction Technology</li>

<li>Machine Design</li>

<li>Structural Engineering</li>

<li>Computer Integrated Manufacturing</li>

<li>Signal Processing</li>

<li>Computer Science and Networking</li>

<li>VLSI and Embedded System Design</li>

</ul>

<p>Duration : 2 years (4 Semesters) - Full Time<br />

</p>

<h3>Eligiblity:</h3>

<p>Candidates who have passed the prescribed Qualifying Examinations (PG-CET) with not less than 45% of the marks in aggregrate of all the semesters/years of the degree examination (Cumulative sum of the secured marks of all the semesters/years divided by the sum of the maximum marks). However, in the case of candidates belonging to SC/ST and CAT-1, marks shall not be less than 40%.</p>





<h3>Details of Admission</h3>

<p>Students interested in applying for the specific courses should fill up the application form and mail it to us at the below address. For Prospectus and Application Form send a DD of Rs 500/- drawn in favor of "Secretary, Vijaya Vittala Institute of Technology" payable at Bangalore. Management admissions for the Academic Year 2016-2017 are underway kindly contact the Chairperson Smt Rukmini T for further information, on availiability a seat can be confimed by sending a DD of Rs 25000/(B.E course), 50000/-(M.Tech) and 5000/-(Diploma) - drawn in favor of "Secretary, Vijaya Vittala Institute of Technology" payable at Bangalore.</p>

</div>

<div class="half-width">

<p> <strong>Smt Rukmini T</strong><br />

Chair Person<br />

Sri Vijaya Vittala Charitable and Educational Trust<br />

# 35/1, Dodda Gubbi Post,<br />

Hennur-Bagalur Road,<br />

Bengaluru - 560077.<br />

Mobile: +919845264811, +919480998948<br />

Phone: 080-65472867, 28465969.<br />

</p>

<h2>Students who are interested can fill the details and submit:</h2>

<form class="admission-form" method="post">

<ul>

<li>

<label>Name:</label>

<input value="<?php echo $name?>" type="text" name="name" />

<span class="error"><?php echo $nameError;?></span>

</li>

<li>

<label>Email:</label>

<input value="<?php echo $email?>" type="text" name="email" />

<span class="error"><?php echo $emailError;?></span>

</li>

<li>

<label>Phone:</label>

<input value="<?php echo $phone?>" type="text" name="phone" />

<span class="error"><?php echo $phoneError;?></span>

</li>

<li>

<label>Age:</label>

<input value="<?php echo $age?>" type="text" name="age" />

<span class="error"><?php echo $ageError;?></span>

</li>

<li>

<label>Sex:</label>

<input <?php if($sex==1)echo 'checked="checked"';?> name="sex" type="radio" value="1" /> Male 

<input <?php if($sex==2)echo 'checked="checked"';?> name="sex" type="radio" value="2" /> Female <span class="error"><?php echo $sexError;?></span>

</li>

<li>

<label>Standard Completed:</label>

<select name="standerd">

<option>Select</option>

<?php foreach($list_standerd as $liststandaredkey=>$standardvalue){?>

<option <?php if($standerd==$liststandaredkey)echo 'selected="selected"';?> value="<? echo $liststandaredkey?>"><? echo $standardvalue?></option>

<?php }?>

</select>

<span class="error"><?php echo $standerdError;?></span>

</li>

<li>

<label>Percentage of Mark:</label>

<input value="<?php echo $percentage?>" type="text" name="percentage"/>

<span class="error"><?php echo $percentageError;?></span>

</li>

<li>

<label>Course Interested:</label>

<select name="course" onchange="changesub(this.value)">

<option>Select</option>

<?php foreach($list_course as $list_course_key=>$list_course_value){?>

<option <?php if($course==$list_course_key)echo 'selected="selected"';?> value="<? echo $list_course_key?>"><? echo $list_course_value?></option>

<?php }?>

</select>

<span class="error"><?php echo $courseError;?></span>

</li>

<li>

<label>Branch interested:</label>

<select name="branch_interested" id="branch_interested">

<option>Select</option>

</select>

<span class="error"><?php echo $branch_interestedError;?></span>

</li>

<li>

<label>Enquiry:</label>

<textarea name="enquiry"><?php echo $enquiry?></textarea>

<span class="error"><?php echo $enquiryError;?></span>

</li>

<li>

<input type="submit" name="submit" value="Submit" />

</li>

</ul>

</form>

</div>

</div>

</div>

</div>

<?php include("news-media.php");?>

<script type="application/javascript">

function changesub(getCourse,getbranch)

{

	$.ajax({

	url: "list_branch_interested.php?getCourse="+getCourse+"&getbranch="+getbranch,

	success: function(response) {

		$("#branch_interested").html(response);

	},

	error: function(xhr) {

		//Do Something to handle error

	}

	});

}

changesub('<?php echo $course?>','<?php echo $branch_interested?>');

</script>

<?php include("footer.php");?>



