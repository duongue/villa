<?php include("password_protect.php"); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!--
Design by http://www.bluewebtemplates.com
Released for free under a Creative Commons Attribution 3.0 License
-->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>VILLA LILLEBØ</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link href="style.css" rel="stylesheet" type="text/css" />

</head>
<body>
<div class="main">

  <div class="header">
    <div class="header_resize">
      <div class="logo"><h1><a href="index.php">VILLA LILLEBØ</a></h1></div>
      <div class="menu_nav">
        <ul>
          <li><a href="index.php">Home</a></li>
          <li><a href="detail.php">Detail</a></li>
          <li><a href="reservation.php">Reservation</a></li>
          <li><a href="guestpass.php">Guest Password</a></li>
          <li><a href="index.php?logout=1">Logout</a></li>
        </ul>
      </div>
      <div class="clr"></div>
    </div>
  </div>

  <div class="content">
    <div class="content_resize" align="center">
      <img src="images/img1.jpg" width="927" height="240" alt="image" class="ctop" />
      	Welcome <?php echo $_POST["name"]; ?>.<br />
	The reservation has been registered and you will be contacted to confirm the reservation. 
	<?php 
	include("insertRes.php");
	//include("resetPassword.php");
	//include("sendEmail.php");
	?>
    </div>
  </div>

  <div class="fbg">
    <div class="fbg_resize">
      <div class="col c1">
        <h2>About</h2>
        <img src="images/white.jpg" width="66" height="66" alt="pix" />
        <p>Description of Huset in Spania goes here.</p>
      </div>
      <div class="clr"></div>
    </div>
  </div>
  <div class="footer">
    <div class="footer_resize">
      <p class="lf">&copy; Copyright MyWebSite. Designed by Blue <a href="http://www.bluewebtemplates.com">Website Templates</a></p>
      <div class="clr"></div>
    </div>
  </div>
</div>
</body>
</html>
