<?php 
include "reservation/openDB.php";
$query = "UPDATE guestpassword 
	SET GuestPass = '' WHERE GuestID = 1";
mysql_query($query);
include "reservation/closeDB.php";
?>
