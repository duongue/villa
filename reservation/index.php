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
	
	<!-- include the Tools --> 
	<script src="jquery/jquery.tools.min.js"></script>
	
<style>	
/* mouseover state */
#download_now:hover {
	background-position:0 -44px ;		
}
 
/* clicked state */
#download_now:focus {
	background-position:0 -88px;
}
 
/* tooltip styling */
.tooltip {
	display:none;
	background:url(images/11_black-background.jpg);
	/* for IE */
  	filter:alpha(opacity=50);
  	/* CSS3 standard */
  	opacity:0.5;
	height:320px;
	padding:40px 30px 10px 30px;
	width:300px;
	font-size:11px;
	color:#fff;
}
 
/* a .label element inside tooltip */
.tooltip .label {
	color:yellow;
	width:35px;
}
 
.tooltip a {
	color:#ad4;
	font-size:11px;
	font-weight:bold;
}
</style> 

 
</head>
<body>
<div class="main">

  <div class="header">
    <div class="header_resize">
      <div class="logo"><h1><a href="index.php">VILLA LILLEBØ</a></h1></div>
      <div class="menu_nav">
        <ul>
          <li class="active"><a href="index.php">Home</a></li>
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
    <div class="content_resize">
      <img src="images/img1.jpg" width="927" height="240" alt="image" class="ctop" />
      <h2><span>Reservation Overview -
      	<select id="year" onchange="refreshYear()">
      		<option value="2011">2011</option>
      		<option value="2012">2012</option>
      		<option value="2013">2013</option>	
      		<option value="2014">2014</option>
      		<option selected="selected" value="2015">2015</option>
      		<option value="2016">2016</option>
      		<option value="2017">2017</option>
      		<option value="2018">2018</option>	
      		<option value="2019">2019</option>
      		<option value="2020">2020</option>
      	</select>
      </span>
      </h2>
      <div id="loading"><b>Loading...</b></div>
      <div id="calendar"></div>
      	<!-- Ajax stuff  -->
   	<script>
    		function refreshYear()
		{
			{
				var xmlhttp;
				if (window.XMLHttpRequest)
 				{// code for IE7+, Firefox, Chrome, Opera, Safari
  					xmlhttp=new XMLHttpRequest();
  					$("#loading").show();
  					$("#calendar").hide();
  				}
				else
  				{// code for IE6, IE5
  					xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  					$("#loading").show();
  					$("#calendar").hide();
  				}
				xmlhttp.onreadystatechange=function()
  				{
  					if (xmlhttp.readyState==4 && xmlhttp.status==200)
    					{  					
    						$("#calendar").html(xmlhttp.responseText);
    						$("#loading").hide();
    						$("#calendar").show();    						
    					}
  				}
  				xmlhttp.open("POST","getReservation.php",true);
				xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
				xmlhttp.send("year="+($('#year').val()));
				//xmlhttp.send();
			}
		}
    	</script>
    	<!-- End Ajax stuff  -->	
	<!-- Preload the calendar for the current year -->
	<script>		
		$(document).ready(function () {
			refreshYear();
		});
	</script>
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