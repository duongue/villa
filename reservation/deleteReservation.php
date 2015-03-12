<?php 
include "openDB.php";

$query = "DELETE FROM Reservations WHERE R_ID=".($_GET['RID']);
mysql_query($query);

echo "The reservation has been deleted.<br/>";
echo "Click <a href='detail.php?CID=".$_GET['CID']."'>here</a> to return.";
      
include "closeDB.php";
?>