
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<meta name="viewport" content="width=device-width, initial-scale=1.0"/>

<title>Vijaya Vittala Institute of Technology</title>

<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />

<link rel="stylesheet" type="text/css" href="css/style.css" />

<!-- some pretty fonts for this demo page - not required for the slider -->



<link rel="stylesheet" href="css/nivo-slider.css" type="text/css" media="screen" />

<link rel="stylesheet" href="css/default.css" type="text/css" media="screen" />



<link href='https://fonts.googleapis.com/css?family=Roboto+Condensed:400,700' rel='stylesheet' type='text/css'>



<script type="text/javascript" src="js/jquery-1.7.2.min.js"></script>



<script src="http://code.jquery.com/jquery-1.7.1.min.js"></script>

<script src="js/bjqs-1.3.js"></script>

<script src="js/jquery.bxslider.js"></script>

<link href="css/jquery.bxslider.css" rel="stylesheet" />

</head>

<body>

<div class="outer-wrap">

<div class="admission-enguiry-bott-response "><a href="admission.php"><img src="images/AdmissionEnquiry.png" /></a></div>

<div class="side-menu-response">

    <div> &gt; Quick links</div>

    <ul>

      <li><a href="students-placed.php">STUDENTS PLACED</a></li>
       <li><a href="results.php">ACADEMIC ACHIEVEMENT</a></li>
       <li><a href="student-profile.php">CAMPUS LIFE</a></li>
       <li><a href="hostel.php">HOSTEL</a></li>
      <li><a href="curriculum-info.php">CURRICULUM INFORMATION</a></li>
      <li><a href="admission.php">ADMISSIONS</a></li>
      <li><a href="research-lab.php">RESEARCH</a></li>
     <li><a href="placements.php">PLACEMENT ACTIVITIES</a></li>
     <li><a href="library.php">LIBRARY</a></li>
      <!--<li><a href="faculty-profile.php">FACULTY PROFILE</a></li>-->
      <li><a href="conferences.php">CONFERENCES</a></li>

      <li><a href="industry-partnership.php">INDUSTRY PARTNERSHIP</a></li>
      <li><a href="transportation.php">TRANSPORATION FACILITIES</a></li>     
      <li><a href="contact-us.php#contact_address">HOW TO REACH US</a></li>

    </ul>

  </div>

  <div class="top-header">

    <div class="wrapper">

      <p><a href="https://www.facebook.com/VVITBangalore">"For latest and instant updates you can also visit our Facebook page"</a>&nbsp&nbsp;&nbsp&nbsp;&nbsp&nbsp;&nbsp&nbsp; &nbsp&nbsp;&nbsp&nbsp;&nbsp&nbsp;&nbsp&nbsp; &nbsp&nbsp;&nbsp&nbsp;&nbsp&nbsp;&nbsp&nbsp;&nbsp&nbsp;&nbsp&nbsp;&nbsp&nbsp;&nbsp&nbsp;&nbsp&nbsp;&nbsp&nbsp;&nbsp&nbsp;&nbsp&nbsp;&nbsp&nbsp;&nbsp&nbsp;&nbsp&nbsp;&nbsp&nbsp;&nbsp&nbsp;&nbsp&nbsp;&nbsp&nbsp;&nbsp&nbsp;&nbsp&nbsp;&nbsp&nbsp;&nbsp&nbsp;&nbsp&nbsp;Mobile: +919845264811 | +919480998948 | E-mail: <a href="mailto:'vvit.info@gmail.com'">vvit.info@gmail.com</a> </p>

    </div>

  </div>

  <div class="logo-header">

    <div class="wrapper"> 

    <a href="index.php" class="logo"><img src="images/VVIT_GUI_17.jpg" /></a>

      <div class="social-sec">

       <div class="cet-code"><img src="images/comedk-code.png" /></div>

        <div class="cet-code"><img src="images/cet-code.png" /></div>

        <a href="https://m.facebook.com/Vijaya-Vittala-Institute-of-Technology-756482747843476/?ref=bookmarks" target="_blank"><img src="images/VVIT_GUI_10.jpg" /><img src="images/VVIT_GUI_80.jpg" /></a> 

        <a href="https://mobile.twitter.com/VijayaVittala09" target="_blank"><img src="images/VVIT_GUI_06.jpg" /><img src="images/VVIT_GUI_79.jpg" /></a> 

        <a href="https://www.linkedin.com/m/company/7922794" target="_blank"><img src="images/VVIT_GUI_12.jpg" /><img src="images/VVIT_GUI_78.jpg" /></a> 

      <!--  <a href="javascript:;"><img src="images/VVIT_GUI_08.jpg" /><img src="images/VVIT_GUI_82.jpg" /></a> 

        <a href="javascript:;"><img src="images/VVIT_GUI_14.jpg" /><img src="images/VVIT_GUI_81.jpg" /></a>-->

        </div>

      <div class="admission-enguiry-bott"><a href="admission.php"><img src="images/AdmissionEnquiry.png" /></a></div>

      <div class="menu">

      <?php $pageurl=$_SERVER['PHP_SELF'];

$expolode_pagename=explode("/",$pageurl);

$get_pagename2=$expolode_pagename[1];?>

        <ul>

          <li><a href="index.php" <?php if($get_pagename2=="index.php"){?>class="menu-set"<?php }?>>home</a></li>

          <li class="has-drop"><a href="about.php"<?php if($get_pagename2=="about.php" || $get_pagename2=="a-unique-approach.php" || $get_pagename2=="management.php" || $get_pagename2=="advisors.php" || $get_pagename2=="principal-desk.php"){?> class="menu-set"<?php }?>>about us</a> <img src="images/arrow.png">

            <ul>

              <li><a href="a-unique-approach.php">A Unique Approach</a></li>

              <li><a href="management.php">Management</a></li>

              <li><a href="advisors.php">Advisory Board</a></li>

              <li><a href="principal-desk.php">Principal's Desk</a></li>

            </ul>

          </li>

         <li class="has-drop"><a href="#"<?php if($get_pagename2=="diploma-in-civil-engineering.php" || $get_pagename2=="diploma-in-mechanical-engineering.php" || $get_pagename2=="be-in-civil-engineering.php" || $get_pagename2=="be-in-electronics-and-communications.php" || $get_pagename2=="be-in-computer-science-and-engineering.php" || $get_pagename2=="be-in-mechanical-engineering.php" || $get_pagename2=="construction-technology.php" || $get_pagename2=="machine-design.php" || $get_pagename2=="structural-engineering.php" || $get_pagename2=="signal-processing.php" || $get_pagename2=="computer-network-engineering.php" || $get_pagename2=="computer-network-engineering.php" || $get_pagename2=="vlsi-and-embedded-system.php"){?> class="menu-set"<?php }?>>Courses</a><img src="images/arrow.png">

            <ul>

              <li class="has-drop"><a href="#">Diploma</a><img src="images/arrow.png">

                <ul>

                  <li><a href="diploma-in-civil-engineering.php">Civil Engineering</a></li>

                  <li><a href="diploma-in-mechanical-engineering.php">Mechanical Engineering </a></li>

                </ul>

              </li>

              <li class="has-drop"><a href="#">Graduate : B.E.</a><img src="images/arrow.png">

                <ul>

                  <li><a href="be-in-civil-engineering.php">Civil Engineering</a></li>

                  <li><a href="be-in-computer-science-and-engineering.php">Computer Science &amp; Engineering</a></li>

                  <li><a href="be-in-electronics-and-communications.php">Electronics &amp; Communications Engineering</a></li>

                  <li><a href="be-in-mechanical-engineering.php">Mechanical Engineering </a></li>

                </ul>

              </li>

              <li class="has-drop"><a href="#" style="text-transform:none;">POSTGRADUATE : M.Tech.</a><img src="images/arrow.png">

                <ul>

                  <li><a href="construction-technology.php">Construction Technology</a></li>

                  <li><a href="machine-design.php">Machine Design</a></li>

                  <li><a href="structural-engineering.php">Structural Engineering </a></li>

                  <li><a href="computer-integrated-manufacturing.php">Computer Integrated Manufacturing</a></li>

                  <li><a href="signal-processing.php">Signal Processing</a></li>

                  <li><a href="computer-network-engineering.php">Computer Network Engineering</a></li>

                  <li><a href="vlsi-and-embedded-system.php"> VLSI & Embedded System </a></li>

                </ul>

              </li>              

            </ul>

          </li>

          <li class="last-item has-drop"><a href="#"<?php if($get_pagename2=="department-of-basic-sciences.php" || $get_pagename2=="department-of-civil-engineering.php" || $get_pagename2=="department-of-computer-science-and-engineering.php" || $get_pagename2=="department-of-electronics-and-communications.php" || $get_pagename2=="department-of-mechanical-engineering.php"){?> class="menu-set"<?php }?>>Department</a><img src="images/arrow.png">

            <ul>

              <li><a href="department-of-basic-sciences.php">Basic Sciences</a></li>

              <li><a href="department-of-civil-engineering.php">Civil Engineering</a></li>

              <li><a href="department-of-computer-science-and-engineering.php">Computer Science &amp; Engineering</a></li>

              <li><a href="department-of-electronics-and-communications.php">Electronics &amp; Communications Engineering</a></li>

              <li><a href="department-of-mechanical-engineering.php">Mechanical Engineering </a></li>

            </ul>

          </li>

          <li><a href="placements.php" <?php if($get_pagename2=="placements.php"){?>class="menu-set"<?php }?>>Placements</a></li>
          
          <li><a href="research-lab.php" <?php if($get_pagename2=="research-lab.php"){?>class="menu-set"<?php }?>>R & D Center</a></li>

          <li class="last-item has-drop"><a href="infrastructure.php"<?php if($get_pagename2=="infrastructure.php" || $get_pagename2=="canteen.php" || $get_pagename2=="hostel.php" || $get_pagename2=="library.php" || $get_pagename2=="seminar-halls-and-open-air-amphitheater.php" || $get_pagename2=="sports-and-gymnasium.php"){?> class="menu-set"<?php }?>>Infrastructure</a><img src="images/arrow.png">

            <ul>

               <li><a href="canteen.php">Cafeteria</a></li>

              <!-- <li><a href="lecture-hall.php">Lecture halls</a></li>-->

               <li><a href="hostel.php">Hostel</a></li>

               <li><a href="library.php">Library &amp; Information Center</a></li>

               <li><a href="seminar-halls-and-open-air-amphitheater.php">Seminar Hall &amp; Open air Auditorium</a></li>

               <li><a href="sports-and-gymnasium.php">Sports &amp; Gymnasium</a></li>

            </ul>

          </li>

          

          <li class="has-drop"><a href="admission.php" <?php if($get_pagename2=="admission.php" || $get_pagename2=="diploma-admission.php" || $get_pagename2=="graduate-be-admission.php" || $get_pagename2=="postgraduate-mtech-admission.php"){?> class="menu-set"<?php }?>>Admissions</a><img src="images/arrow.png">

            <ul>

              <li><a href="diploma-admission.php">Diploma</a></li>

              <li><a href="graduate-be-admission.php">Graduate : B.E.</a></li>

              <li><a href="postgraduate-mtech-admission.php">Postgraduate : M.TECH.</a></li>

            </ul>

          </li>

          <li><a href="gallery.php" <?php if($get_pagename2=="gallery.php"){?>class="menu-set"<?php }?>>gallery</a></li>

          <li><a href="contact-us.php#contact_address" <?php if($get_pagename2=="contact-us.php"){?>class="menu-set"<?php }?>>contact us</a></li>
          <li><a href="https://svvit.nowfloats.com/updates-1" <?php if($get_pagename2=="contact-us.php"){?>class="menu-set"<?php }?>>Updates</a></li>


        </ul>

      </div>

    </div>

  </div>

  <div class="side-menu">

    <div> &gt; Quick links</div>

    <ul>

      <li><a href="students-placed.php">STUDENTS PLACED</a></li>

      <li><a href="placements.php">PLACEMENT ACTIVITIES</a></li>

      <li><a href="admission.php">ADMISSIONS</a></li>

      <!--<li><a href="faculty-profile.php">FACULTY PROFILE</a></li>-->

      <li><a href="curriculum-info.php">CURRICULUM INFORMATION</a></li>

      <li><a href="student-profile.php">CAMPUS LIFE</a></li>

      <li><a href="research-lab.php">RESEARCH</a></li>

      <li><a href="conferences.php">CONFERENCES</a></li>

      <li><a href="library.php">LIBRARY</a></li>

      <li><a href="hostel.php">HOSTEL</a></li>

      <li><a href="industry-partnership.php">INDUSTRY PARTNERSHIP</a></li>

      <li><a href="results.php">ACADEMIC ACHIEVEMENT</a></li>

      <li><a href="transportation.php">TRANSPORTATION FACILITIES</a></li>
      
      <li><a href="contact-us.php#contact_address">HOW TO REACH US</a></li>

    </ul>

  </div>

 

