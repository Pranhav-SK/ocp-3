<?php
if(!empty($_GET['error']))
{
	$error=$_GET['error'];
}
else
{
	$error='';
}
?>
<?php
if(!empty($_GET['id']))
{
	$id=$_GET['id'];
	require "connect.inc.php";
	$sql1="select * from candidate_details where candidate_id='$id'";
	$result1=mysql_query($sql1);
	$row1=mysql_fetch_array($result1);
	$email=$row1["email"];
	
	$sql2="select * from candidate_reg_log_check where email='$email'";
	$result2=mysql_query($sql2);
	$row2=mysql_fetch_array($result2);
	$acode=$row2["activation_code"];
}
else
{
	$id='';
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="EN" lang="EN" dir="ltr">
<head profile="http://gmpg.org/xfn/11">
<title>MCA Online Counselling</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta http-equiv="imagetoolbar" content="no" />
<link rel="stylesheet" href="styles/layout.css" type="text/css" />
<link rel="stylesheet" href="styles/mycss.css" type="text/css" />
<link rel="stylesheet" href="styles/mybuttons.css" type="text/css" />
<link rel="stylesheet" href="styles/style.css" type="text/css" />
<script type="text/javascript" src="scripts/jquery-1.8.2.min.js"></script>
<script type="text/javascript" src="scrolleffect_home.js"></script>
<script type="text/javascript" src="scripts/jquery.leanModal.min.js"></script>
<script type="text/javascript" src="scripts/ajaxpageload.js"></script>
<script type="text/javascript" src="scripts/hover_description.js"></script>

<script type="text/javascript">
$(document).ready(function(e) {
	 $('#msg').fadeIn(3000).delay(3000).fadeOut(3000);
    $('#code').focusout(function(e) {
        var cd = $(this).val().length;
			if(cd < 1) {
				$('#label_code').addClass('error_msg');
				$('#label_code').text('*You must enter the activation code.');
			} else {
				$('#label_code').text('');
			}
    });
});
</script>

 <script type="text/javascript">
      $(function () {
          $('#loginform').submit(function (e) {
              return false;
          });

          $('#modaltrigger').leanModal({ top: 110, overlay: 0.45, closeButton: ".hidemodal" });
      });
</script>
<!-- liteAccordion is Homepage Only -->
<link rel="stylesheet" href="scripts/liteaccordion-v2.2/css/liteaccordion.css" type="text/css" />
</head>
<body id="top">
<div class="wrapper row1">
  <div id="header" class="clear" >
    <div class="fl_left" style="margin:-14px 0 0 0">
      <h1><a href="index.php"><img src="images/logo.png" /></a></h1>
    </div>
   
  </div>

</div>

<!-- ####################################################################################################### -->
<div class="wrapper row2" style="margin:-20px 0 0 0">
  <div id="topnav">
        <ul>
      <li class="active"><a href="index.php">Homepage</a></li>
      <li><a href="#" onclick="javascript:void window.open('static/counselling_overview.html','1389728149356',
'width=1480,height=1020,toolbar=0,menubar=0,location=0,status=1,scrollbars=1,resizable=0,left=0,top=0'
);return false;">Over View</a></li>
      <li><a href="#" onclick="javascript:void window.open('static/counselling_rules.html','1389728149356',
'width=1480,height=1020,toolbar=0,menubar=0,location=0,status=1,scrollbars=1,resizable=0,left=0,top=0'
);return false;">Counselling Rules</a></li>
      <li><a href="#">Participating Institutions</a>
        <ul>
          <li><a href="#" onclick="javascript:void window.open('static/govt_college.php','1389728149356',
'width=1480,height=1020,toolbar=0,menubar=0,location=0,status=1,scrollbars=1,resizable=0,left=0,top=0'
);return false;">Goverment Institutions</a></li>
          <li><a href="#" onclick="javascript:void window.open('static/semi_govt_college.php','1389728149356',
'width=1480,height=1020,toolbar=0,menubar=0,location=0,status=1,scrollbars=1,resizable=0,left=0,top=0'
);return false;">Semi Goverment Institutions</a></li>
          <li><a href="#" onclick="javascript:void window.open('static/self_finance_college.php','1389728149356',
'width=1480,height=1020,toolbar=0,menubar=0,location=0,status=1,scrollbars=1,resizable=0,left=0,top=0'
);return false;">Self-Financed Institutions</a></li>
        </ul>
      </li>
      <li><a href="#" onclick="javascript:void window.open('counselling_schedule.php','1389728149356',
'width=1480,height=1020,toolbar=0,menubar=0,location=0,status=1,scrollbars=1,resizable=0,left=0,top=0'
);return false;">Counselling Schedules</a></li>
      <li class="last"><a href="gallery.php">Demo Counselling</a></li>
    </ul>
    <div  class="clear"></div>
  </div>
</div>
<!-- ####################################################################################################### -->







<!----------------------------------slide area---------------------------------->








<!-- ####################################################################################################### -->
<div class="wrapper row4">
  <div id="container" class="clear">
    <!-- ####################################################################################################### -->
    <div id="homepage" class="clear">
      <div class="fl_left">
        <h2 class="title">Quick Links</h2>
        <div id="hpage_quicklinks">
          <ul class="clear">
            <li><a href="#" onclick="javascript:void window.open('static/counselling_process.php','1389728149356',
'width=1480,height=1020,toolbar=0,menubar=0,location=0,status=1,scrollbars=1,resizable=0,left=0,top=0'
);return false;">Counselling Process</a></li>
            <li><a href="#" onclick="javascript:void window.open('static/eligibility_criteria.php','1389728149356',
'width=1480,height=1020,toolbar=0,menubar=0,location=0,status=1,scrollbars=1,resizable=0,left=0,top=0'
);return false;">Eligibility Criteria</a></li>
            <li><a href="#" onclick="javascript:void window.open('static/fees_payment.php','1389728149356',
'width=1480,height=1020,toolbar=0,menubar=0,location=0,status=1,scrollbars=1,resizable=0,left=0,top=0'
);return false;">Fees &amp; Payments</a></li>
            <li><a href="#" onclick="javascript:void window.open('static/document_required.php','1389728149356',
'width=1480,height=1020,toolbar=0,menubar=0,location=0,status=1,scrollbars=1,resizable=0,left=0,top=0'
);return false;">Document Information</a></li>
            <li><a href="#" onclick="javascript:void window.open('static/allotment_process.php','1389728149356',
'width=1480,height=1020,toolbar=0,menubar=0,location=0,status=1,scrollbars=1,resizable=0,left=0,top=0'
);return false;">Allotment Process</a></li>
            <li><a href="#" onclick="javascript:void window.open('static/faq.php','1389728149356',
'width=1480,height=1020,toolbar=0,menubar=0,location=0,status=1,scrollbars=1,resizable=0,left=0,top=0'
);return false;">Frequently Asked Questions</a></li>
          </ul>
        </div>
        <h2 class="title">Latest News</h2>
        <div id="hpage_gallery">
          <ul class="clear">
		  <marquee id="mark" scrollamount="5" direction="up">
                     <?php
		  include "connect.inc.php";
		  //include "dbcon.php";
		  $sql_news="SELECT * FROM notice order by id DESC";
		  $result=mysql_query($sql_news);
		  while($row=mysql_fetch_array($result))
		  {
		  echo "<p><a href='$row[6]'>$row[1]<img src='images/new.gif'></a></p>";
		  }

		  ?>
		   </marquee>
          </ul>
        </div>
       <div class="myline">
       </div>
      </div>
      <!-- ############### -->
     
      <div class="fl_right">
        <h2 class="title">Candidate Registration</h2>
        <?php 
 if($error=="invalidcode")
  {
	echo "<div id='msg' align='center' style='color:#C00; font-size:18px'>! Sorry Wrong Code !</div>";  
  }
  if($error=="validate")
  {
	echo "<div id='msg' align='center' style='color:#0E64C0; font-size:18px'>! Sucessfully Activated ! Please Wait or <a href='index.php'>Login</a></div>";  
	header( "refresh:3;url=index.php" );
  }
  ?>
		<form action="#" method="POST">
        <div id="outerregisteration" align="center">
        <p>An E-mail is sent to your email id with an activation link and activation code. Use any one of it.</p>
          <h3 class="registerationh2"><label for="username"> Activation Code:</label></h3><br />
			 <input type="text" class="textbox" id="code" name="code" align="right" required/><br/>
             <label id = "label_code"></label>
      
        </div> 
        <div id=""></div>
         <input type="submit" class="registerbutton"  id="reg_step3" name="reg_step3" value="Validate"/>
		 </form>
         <?php
		 if(isset($_POST["reg_step3"]))
		 {
			 $code=$_POST["code"];
			 if($code==$acode)
			 {
				 require "connect.inc.php";
				 $activation_query = "update candidate_reg_log_check set chk_flg='1' where email='$email'";
				 mysql_query($activation_query);
				 header("location:trouble_signin_retreive_acc.php?error=validate");
			 }
			 else
			 {
				  header("location:trouble_signin_retreive_acc.php?error=invalidcode");
			 }
		 }
		 ?>
      </div>
    </div>
    <!-- ####################################################################################################### -->
    
    <div id ="extream_right">
    <ul >
            
            
            <li class="last" style="list-style: none;">
              <h2 class="title">Important Dates with Timing</h2>
              <div class="box">
                <marquee id="mark" scrollamount="2" direction="up">
                     <?php
		  include "connect.inc.php";
		 
		  $sql_event_time="SELECT * FROM counselling_date";
		  $result=mysql_query($sql_event_time);
		  while($row=mysql_fetch_row($result))
		  {
		  echo "<h3 style='font-size:14px'>  ".$row[1]." ".$row[2]." </h3>"."<br>";
		  }

		  ?>
		   </marquee>
              </div>
              
            </li>
            <li style="list-style: none;">
             <div class="myline">
				</div>
            </li>
          </ul>
      <!-- ####################################################################################################### -->
    </div>
   
	<div id="hpage_specials" class="clear">
          
        </div>
      <!-- ####################################################################################################### -->
      
  </div>
</div>
<!-- ####################################################################################################### -->
<div class="wrapper row5">
  <div id="footer" class="clear">
    <!-- ####################################################################################################### -->
      <div class="foot_contact">
      <h2>e-Counselling System</h2>
      <address>
      Demo Website Under Major Project<br />
     On Basis of JECA RANK<br />
      Kolkata, West Bengal.<br />
      </address>
      <ul>
        <li><strong>Tel:</strong> 90909090909090</li>
        
        <li class="last"><strong>Email:</strong> <a href="#">info@ecounselling.tk</a></li>
      </ul>
    </div>
    <div class="footbox">
      <h2>Administration</h2>
       <ul>
        <li><a href="http://admin.ecounselling.tk" target="new">Login</a></li>
        <li><a href="#">Freedom of Information</a></li>
        <li><a href="#">Website Privacy</a></li>
      </ul>
    </div>
    <div class="footbox">
      <h2>Institute Area</h2>
      <ul>
        <li><a href="http://ecounselling.tk/collegearea" target="new">Universities and Colleges</a></li>
        <li><a href="http://ecounselling.tk/collegearea" target="new">Institute Login</a></li>
        <li><a href="#">Counselling Activities</a></li>
        <li class="last"><a href="http://admin.ecounselling.tk" target="new">Counsil Area</a></li>
      </ul>
    </div>
    <!-- ####################################################################################################### -->
  </div>
</div>
<!-- ####################################################################################################### -->
<div class="wrapper">
  <div id="copyright" class="clear">
    <p class="fl_left">Copyright &copy; 2014 - All Rights Reserved - <a href="#">E-Counselling</a></p>
    <p class="fl_right">Design and Devoloped By<a href="#" title="Free Website Templates">&nbsp; &nbsp;Arnab Nilotpol Subhrajyoti and Suman</a></p>
  </div>
</div>
<!-- liteAccordion is Homepage Only -->
<script type="text/javascript" src="scripts/liteaccordion-v2.2/js/liteaccordion.jquery.min.js"></script>
<script type="text/javascript">
$("#featured_slide").liteAccordion({
    theme: "os-tpl",
	
    containerWidth: 960, // fixed (px)
    containerHeight: 360, // fixed (px) - overall height of the slider
    headerWidth: 48, // fixed (px) - slide spine title

    firstSlide: 1, // displays slide (n) on page load
	activateOn: "click", // click or mouseover
    autoPlay: false, // automatically cycle through slides
    pauseOnHover: true, // pause slides on hover
    rounded: false, // square or rounded corners
    enumerateSlides: true, // put numbers on slides

    slideSpeed: 800, // slide animation speed
    cycleSpeed: 6000, // time between slide cycles
});
</script>
</body>
</html>