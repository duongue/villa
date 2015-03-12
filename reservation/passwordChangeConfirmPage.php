<?php 
include "openDB.php";

$query = "UPDATE guestpassword 
	SET GuestPass = '".($_POST['guestPass'])."' WHERE GuestID = 1";
mysql_query($query);
//echo $query."<br/>";
echo "The guest password has been set to '".($_POST['guestPass'])."'<br/>";
echo "Click <a href='index.php'>here</a> to return.";
      
include "closeDB.php";
?>