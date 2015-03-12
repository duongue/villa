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
<!-- JQuery -->
	<meta charset="utf-8"> 
	<title>jQuery UI Datepicker - Default functionality</title> 	
	<link rel="stylesheet" href="js/jquery-ui-1.8.14.custom.css"> 
        <script type="text/javascript" src="js/jquery-1.5.1.min.js"></script>
	<script type="text/javascript" src="js/jquery-ui-1.8.14.custom.min.js"></script>
	<script type="text/javascript" src="js/jquery-ui-timepicker-addon.js"></script>
	
	<style type="text/css"> 
		/* css for timepicker */
		.ui-timepicker-div .ui-widget-header{ margin-bottom: 8px; }
		.ui-timepicker-div dl{ text-align: left; }
		.ui-timepicker-div dl dt{ height: 25px; }
		.ui-timepicker-div dl dd{ margin: -25px 0 10px 65px; }
		.ui-timepicker-div td { font-size: 90%; }
	</style> 
	
	<script  type="text/javascript"> 
	$(function() {
		$( "#datepicker" ).datetimepicker({
			minDate: new Date(),
			stepMinute: 15
		});	
		$( "#datepicker2" ).datetimepicker({
			minDate: new Date(),
			stepMinute: 15
		});
		$( "#loading" ).hide();
	});
	</script> 
<!-- JQuery ends -->

<!-- Validation stuff -->
 	<script type="text/javascript" src="lib/jquery.validate.js"></script>
	<style type="text/css">
		label { width: 10em; float: left; }
		label.error { float: none; color: red; padding-left: .5em; vertical-align: top; }
		p { clear: both; }
		.submit { margin-left: 12em; }
	</style>
  	<script>
  	$(function(){
    		$("#resForm").validate();
  	});
	</script>

<!-- End validation ->>

<!-- Photo slideshow stuff -->
<link rel="stylesheet" href="lib/slideShow/style.css" /> 
<script type="text/javascript" src="lib/slideShow/compressed.js"></script> 
<!-- Photo slideshow stuff -->

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
          <li class="active"><a href="reservation.php">Reservation</a></li>
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
      
      <!-- Photo slideshow -->
<?php      /*
 	<ul id="slideshow"> 
 		<li> 
			<h3>Gate</h3> 
			<span>lib/slideShow/photos/tn_B2 Villa Gate.jpg</span> 
			<p></p>
			<a href="housePhoto/B2 Villa Gate.jpg"><img src="lib/slideShow/thumbnails/tn_B2 Villa Gate.jpg" alt="Gate" /></a> 
		</li> 
		<li> 
			<h3>Garage</h3> 
			<span>lib/slideShow/photos/tn_garage.jpg</span> 
			<p></p>
			<a href="housePhoto/garage.jpg"><img src="lib/slideShow/thumbnails/tn_garage.jpg" alt="Garage" /> </a>
		</li> 
		<li> 
			<h3>Garden</h3> 
			<span>lib/slideShow/photos/tn_garden 1.JPG</span> 
			<p></p>
			<a href="housePhoto/garden 1.JPG"><img src="lib/slideShow/thumbnails/tn_garden 1.JPG" alt="Garden" /></a> 
		</li> 
		<li> 
			<h3>Garden</h3> 
			<span>lib/slideShow/photos/tn_garden 2.JPG</span> 
			<p></p>
			<a href="housePhoto/garden 2.JPG"><img src="lib/slideShow/thumbnails/tn_garden 2.JPG" alt="Garden" /></a> 
		</li> 
		<li> 
			<h3>Garden</h3> 
			<span>lib/slideShow/photos/tn_garden 3.JPG</span> 
			<p></p>
			<a href="housePhoto/garden 3.JPG"><img src="lib/slideShow/thumbnails/tn_garden 3.JPG" alt="Garden" /></a> 
		</li> 
		<li> 
			<h3>Garden</h3> 
			<span>lib/slideShow/photos/tn_garden 4.JPG</span> 
			<p></p>
			<a href="housePhoto/garden 4.JPG"><img src="lib/slideShow/thumbnails/tn_garden 4.JPG" alt="Garden" /></a> 
		</li> 
		<li> 
			<h3>Garden</h3> 
			<span>lib/slideShow/photos/tn_garden 5.JPG</span> 
			<p></p>
			<a href="housePhoto/garden 5.JPG"><img src="lib/slideShow/thumbnails/tn_garden 5.JPG" alt="Garden" /></a> 
		</li> 
		<li> 
			<h3>Garden</h3> 
			<span>lib/slideShow/photos/tn_garden 6.JPG</span> 
			<p></p>
			<a href="housePhoto/garden 6.JPG"><img src="lib/slideShow/thumbnails/tn_garden 6.JPG" alt="Garden" /></a> 
		</li> 
		<li> 
			<h3>Garden</h3> 
			<span>lib/slideShow/photos/tn_garden 7.JPG</span> 
			<p></p>
			<a href="housePhoto/garden 7.JPG"><img src="lib/slideShow/thumbnails/tn_garden 7.JPG" alt="Garden" /></a> 
		</li> 
		<li> 
			<h3>Garden</h3> 
			<span>lib/slideShow/photos/tn_garden 8.JPG</span> 
			<p></p>
			<a href="housePhoto/garden 8.JPG"><img src="lib/slideShow/thumbnails/tn_garden 8.JPG" alt="Garden" /></a> 
		</li> 
		<li> 
			<h3>Garden</h3> 
			<span>lib/slideShow/photos/tn_garden 9.JPG</span> 
			<p></p>
			<a href="housePhoto/garden 9.JPG"><img src="lib/slideShow/thumbnails/tn_garden 9.JPG" alt="Garden" /></a> 
		</li> 
		<li> 
			<h3>Garden</h3> 
			<span>lib/slideShow/photos/tn_garden 10.JPG</span> 
			<p></p>
			<a href="housePhoto/garden 10.JPG"><img src="lib/slideShow/thumbnails/tn_garden 10.JPG" alt="Garden" /></a> 
		</li> 
		<li> 
			<h3>Garden</h3> 
			<span>lib/slideShow/photos/tn_garden 11.JPG</span> 
			<p></p>
			<a href="housePhoto/garden 11.JPG"><img src="lib/slideShow/thumbnails/tn_garden 11.JPG" alt="Garden" /></a> 
		</li> 
		<li> 
			<h3>Garden</h3> 
			<span>lib/slideShow/photos/tn_garden 12.JPG</span> 
			<p></p>
			<a href="housePhoto/garden 13.JPG"><img src="lib/slideShow/thumbnails/tn_garden 12.JPG" alt="Garden" /></a> 
		</li> 
		<li> 
			<h3>Garden</h3> 
			<span>lib/slideShow/photos/tn_garden 13.JPG</span>
			<p></p> 
			<a href="housePhoto/garden 13.JPG"><img src="lib/slideShow/thumbnails/tn_garden 13.JPG" alt="Garden" /></a> 
		</li> 
		<li> 
			<h3>Garden</h3> 
			<span>lib/slideShow/photos/tn_garden 14.JPG</span> 
			<p></p>
			<a href="housePhoto/garden 14.JPG"><img src="lib/slideShow/thumbnails/tn_garden 14.JPG" alt="Garden" /></a> 
		</li> 
		<li> 
			<h3>Inside Out</h3> 
			<span>lib/slideShow/photos/tn_inside out.JPG</span> 
			<p></p>
			<a href="housePhoto/inside out.JPG"><img src="lib/slideShow/thumbnails/tn_inside out.JPG" alt="Inside Out" /></a> 
		</li> 
		<li> 
			<h3>Main Entrance</h3> 
			<span>lib/slideShow/photos/tn_main entrance.jpg</span> 
			<p></p>
			<a href="housePhoto/main entrance.jpg"><img src="lib/slideShow/thumbnails/tn_main entrance.jpg" alt="Main Entrance" /> </a>
		</li> 
		<li> 
			<h3>Side Entrance</h3> 
			<span>lib/slideShow/photos/tn_side entrance.jpg</span> 
			<p></p>
			<a href="housePhoto/side entrance.jpg"><img src="lib/slideShow/thumbnails/tn_side entrance.jpg" alt="Side Entrance" /></a> 
		</li> 
		<li> 
			<h3>Living Room</h3> 
			<span>lib/slideShow/photos/tn_sitting room.JPG</span> 
			<p></p>
			<a href="housePhoto/sitting room.JPG"><img src="lib/slideShow/thumbnails/tn_sitting room.JPG" alt="Living Room" /></a> 
		</li> 
		<li> 
			<h3>Surrounding</h3> 
			<span>lib/slideShow/photos/tn_surrounding 1.jpg</span> 
			<p></p>
			<a href="housePhoto/surrounding 1.jpg"><img src="lib/slideShow/thumbnails/tn_surrounding 1.jpg" alt="Surrounding" /></a> 
		</li> 
		<li> 
			<h3>Surrounding</h3> 
			<span>lib/slideShow/photos/tn_surrounding 2.JPG</span> 
			<p></p>
			<a href="housePhoto/surrounding 2.JPG"><img src="lib/slideShow/thumbnails/tn_surrounding 2.JPG" alt="Surrounding" /></a> 
		</li> 
		<li> 
			<h3>Swimming Pool</h3> 
			<span>lib/slideShow/photos/tn_swimming pool 1.jpg</span> 
			<p></p>
			<a href="housePhoto/swimming pool 1.jpg"><img src="lib/slideShow/thumbnails/tn_swimming pool 1.jpg" alt="Swimming Pool" /></a> 
		</li> 
		<li> 
			<h3>Swimming Pool</h3> 
			<span>lib/slideShow/photos/tn_swimming pool 2.JPG</span> 
			<p></p>
			<a href="housePhoto/swimming pool 2.JPG"><img src="lib/slideShow/thumbnails/tn_swimming pool 2.JPG" alt="Swimming Pool" /></a> 
		</li> 
		<li> 
			<h3>Veranda</h3> 
			<span>lib/slideShow/photos/tn_veranda 1.JPG</span> 
			<p></p>
			<a href="housePhoto/veranda 1.JPG"><img src="lib/slideShow/thumbnails/tn_veranda 1.JPG" alt="Veranda" /></a> 
		</li> 
		<li> 
			<h3>Veranda</h3> 
			<span>lib/slideShow/photos/tn_veranda 2.JPG</span> 
			<p></p>
			<a href="housePhoto/veranda 2.JPG"><img src="lib/slideShow/thumbnails/tn_veranda 2.JPG" alt="Veranda" /></a> 
		</li> 
		<li> 
			<h3>Veranda</h3> 
			<span>lib/slideShow/photos/tn_veranda 3.JPG</span> 
			<p></p>
			<a href="housePhoto/veranda 3.JPG"><img src="lib/slideShow/thumbnails/tn_veranda 3.JPG" alt="Veranda" /></a> 
		</li> 
	</ul> 
	*/
/* Comment out the pictures slide	<div id="wrapper"> 
		<div id="fullsize"> 
			<div id="imgprev" class="imgnav" title="Previous Image"></div> 
			<div id="imglink"></div> 
			<div id="imgnext" class="imgnav" title="Next Image"></div> 
			<div id="image"></div> 
			<div id="information"> 
				<h3></h3> 
				<p></p> 
			</div> 
		</div> 
		<div id="thumbnails"> 
			<div id="slideleft" title="Slide Left"></div> 
			<div id="slidearea"> 
				<div id="slider"></div> 
			</div> 
			<div id="slideright" title="Slide Right"></div> 
		</div> 
	</div> 

	<script type="text/javascript"> 
		$$('slideshow').style.display='none';
		$$('wrapper').style.display='block';
		var slideshow=new TINY.slideshow("slideshow");
		window.onload=function(){
			slideshow.auto=true;
			slideshow.speed=5;
			slideshow.link="linkhover";
			slideshow.info="information";
			slideshow.thumbs="slider";
			slideshow.left="slideleft";
			slideshow.right="slideright";
			slideshow.scrollSpeed=4;
			slideshow.spacing=5;
			slideshow.active="#fff";
			slideshow.init("slideshow","image","imgprev","imgnext","imglink");
		}
	</script>   
      <!-- End Photo slideshow -->
*/ ?>
      <!-- Reservation form -->
      <br /><br /><br /><br />
      <div style="text-align:center;width:600px; height:650px; border:1px solid black;">
      <h2><span>Reservation Form</span></h2>
      <form class="cmxform" id="resForm" method="post" action="confirmationPage.php">
      <fieldset>
   	<p>
    		Name:
     		<input type="text" name="name" class="required" />
   	</p>
   	<p>
   		Number of persons: 
   		<input type="text" name="numPer" class="required"/>
   	</p>
   	<p>
   		Home Phone (including Country Code): 
   		<input type="text" name="homePhone" class="required"/>
   	</p>
   	<p>
   		Mobile (including Country Code): 
   		<input type="text" name="mobile" class="required"/>
   	</p>
   	<p>
    		E-mail: 
    		<input type="text" name="email" class="required"/>
    	</p>
    	<p>
    		Home Address:<br/> 
    		<textarea name="homeAddress" rows="5" cols="30" class="required"></textarea>
    	</p>
    	<p>
    		Date, time of arrival: 
    		<input type="text" id="datepicker" class="required" name="arrivalDate" onchange="check()"/>
    	</p>
    	<p>
    		Date, time of departure: 
    		<input type="text" id="datepicker2" class="required" name="departDate" onchange="check()"/>
    	</p>    	
    	<span id="checkAvail"></span>
    	<p><img id="loading" src="images/ajax-loader.gif"></p>    	
    	<p><button id="submitButton" type="submit" value="Submit" disabled="disable">Submit</button></p>
    	
    	<!-- Ajax stuff  -->
    	<script>
    		function check()
		{
			if($('#datepicker').val() != '' &&  $('#datepicker2').val() != '')
			{
				var xmlhttp;
				if (window.XMLHttpRequest)
 				{// code for IE7+, Firefox, Chrome, Opera, Safari
  					xmlhttp=new XMLHttpRequest();
  					$("#checkAvail").hide(); 
    					$("#submitButton").attr("disabled", true);
  					$("#loading").show();
  				}
				else
  				{// code for IE6, IE5
  					xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  					$("#checkAvail").hide(); 
    					$("#submitButton").attr("disabled", true);
  					$("#loading").show();
  				}
				xmlhttp.onreadystatechange=function()
  				{
  					if (xmlhttp.readyState==4 && xmlhttp.status==200)
    					{  					
    						if(xmlhttp.responseText == "Yes"){
    							$("#checkAvail").css("color","green");
    							$("#checkAvail").text("The date is available for reservation.").show(); 
    							$("#submitButton").removeAttr("disabled");
    							$("#loading").hide();
    						}
    						else{
    							$("#checkAvail").css("color","red");
    							$("#checkAvail").text("The date is not available for reservation.").show();
    							$("#submitButton").attr("disabled", true);
    							$("#loading").hide();
    						}
    					}
  				}
  				var arrivalDate;
  				var departureDate;
  				arrivalDate = $('#datepicker').val().substring(6,10) + "-" + $('#datepicker').val().substring(0,2) + "-" + $('#datepicker').val().substring(3,5)
  				departureDate = $('#datepicker2').val().substring(6,10) + "-" + $('#datepicker2').val().substring(0,2) + "-" + $('#datepicker2').val().substring(3,5)
				xmlhttp.open("POST","checkAvail.php",true);
				xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
				xmlhttp.send("arrivalDate="+arrivalDate+"&departDate="+departureDate+"&arrivalTime="+$('#datepicker').val().substring(11,16)+"&departTime="+$('#datepicker2').val().substring(11,16));
			}
		}
    	</script>
    	<!-- End Ajax stuff  -->
    	
      </fieldset>
      </form>
      </div>
      <!-- End Reservation form -->
      
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