<div class="footer">
    <div class="wrapper">
      <div class="footer-col1">
        <h4>Contact E-Mails</h4>
        <p>Principal and Management: <a href="mailto:'vvit2009@gmail.com'">vvit2009@gmail.com</a><br />
          Admission Details: <a href="mailto:'vvit.admissions@gmail.com'">vvit.admissions@gmail.com</a><br />
          Job Related Queries: <a href="mailto:'vvit.jobs@gmail.com'">vvit.jobs@gmail.com</a><br />
          Sales Quotations: <a href="mailto:'vvit.purchases@gmail.com'">vvit.purchases@gmail.com</a></p>
      </div>
      <div class="footer-col2">
        <h4>USEFUL LINKS</h4>
        <ul>
          <li><a href="students-placed.php">STUDENTS PLACED</a></li>
          <li><a href="placements.php">PLACEMENTS ACTIVITIES</a></li>
          <li><a href="admission.php">ADMISSIONS</a></li>
      <li><a href="curriculum-info.php">CURRICULUM INFORMATION</a></li>
       <!--   <li><a href="faculty-profile.php">FACULTY PROFILE</a></li> -->
          <li><a href="student-profile.php">CAMPUS LIFE</a></li>
          <li><a href="research-lab.php">RESEARCH</a></li>
        </ul>
        <ul>
          <li><a href="conferences.php">CONFERENCES</a></li>
          <li><a href="library.php">LIBRARY</a></li>
          <li><a href="hostel.php">HOSTEL</a></li>
          <li><a href="industry-partnership.php">INDUSTRY PARTNERSHIP</a></li>
          <li><a href="results.php">RESULTS</a></li>
          <!--<li><a href="#">Site Map</a></li> -->
        </ul>
      </div>
      <div class="footer-col3">
        <h4>MAILING</h4>
        <p>Sign up for our mailing list to get latest u
          pdates and offers.</p>
        <p>We respect your privacy</p>
      </div>
      <div class="footer-col4">
        <div class="foo-social"> <a href="https://m.facebook.com/Vijaya-Vittala-Institute-of-Technology-756482747843476/?ref=bookmarks" target="_blank"><img src="images/VVIT_GUI_69.jpg" /></a> <a href="https://mobile.twitter.com/VijayaVittala09" target="_blank"><img src="images/VVIT_GUI_65.jpg" /></a> <a href="https://www.linkedin.com/m/company/7922794" target="_blank"><img src="images/VVIT_GUI_71.jpg" /></a> <!--<img src="images/VVIT_GUI_67.jpg" /> <img src="images/VVIT_GUI_73.jpg" /> </div>-->
      </div>
      <div class="last-foo">
        <p>Terms of Use Privacy Policy Disclaimer Sitemap Copyright © Sri Vijaya Vittala Charitable and Educational Trust. 2018 | Designed by <a href="http://aikya.net/" target="_blank">Aikya.net</a></p>
      </div>
    </div>
  </div>
</div>
<script type="text/javascript">
$(document).ready(function(){
  
  
  $(".side-menu div").toggle(
        function(){$(".side-menu ul").css({"left": "0"});},
        function(){$(".side-menu ul").css({"left": "-101%"});});
    });


$(document).ready(function(){
  
  
  $(".side-menu-response div").toggle(
        function(){$(".side-menu-response ul").css({"left": "0"});},
        function(){$(".side-menu-response ul").css({"left": "-104%"});});
    });

   $(".usn-stu-sm span").click(
        function(){

          $(".usn-stu-tbl tr").show();
          $(".usn-stu-sm").hide()

      }
        
        );


  $(document).ready(function(){
  $('.slider2').bxSlider({
    slideWidth: 500,
    minSlides: 2,
    maxSlides: 2,
    slideMargin: 10,
    auto: true,
    pause: 3000,
  });
});




    (function($) {
    
  var allPanels = $('.accordion > dd').hide();
    
  $('.accordion > dt > a').click(function() {
    allPanels.slideUp();
    $(this).parent().next().slideDown();
    return false;
  });

})(jQuery);

  </script>

  <script type="text/javascript" src="js/jquery.nivo.slider.js"></script> 

</body>
</html>