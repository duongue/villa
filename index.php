<?php include("password_protect.php"); ?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN"
 "http://www.w3.org/TR/html4/strict.dtd">
 <meta http-equiv="X-UA-Compatible" content="IE=9">
<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" />
<?php include("displayData.php"); ?>
<html>
<head>
	<title>VILLA LILLEB&Oslash;</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<link href="style.css" rel="stylesheet" type="text/css" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<style>

	</style>
</head>

<body>
<div id="outmost-container">
	<!--Language bar-->

		<div id='welcome'>
			<span id='logo'>VILLA LILLEB&Oslash;</span>
			<span id='lang'>
				<a href='#' onclick=changeLanguage("English")><img src="picture_library/England.png"></a> 
				<a href='#' onclick=changeLanguage("Norwegian")><img src="picture_library/Norway.png"></a>
			</span>
		</div>

	<!--End language bar-->

	<div id="nav">
		<?php
		echo file_get_contents('menuEnglish.html');
		?>
	</div>
	<div id="mainPic"><img src="house_photos/1.jpg" title="Overhead View" alt="Overhead View" /></div>
	<center><div id="container"></div><br></center>
	<center><div id="backToTop"><a href='#'>[BACK TO TOP]</a></div></center>
</div>
</body>
</html>