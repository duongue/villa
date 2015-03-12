<?php 
  include 'openDB.php';
  
  unset($RID);
  unset($varArrDate);
  unset($varArrTime);
  unset($varDepDate);
  unset($varDepTime);
  
  $varArrDate = $_POST["arrivalDate"];
  $varArrTime = $_POST["arrivalTime"];
  $varDepDate = $_POST["departDate"];
  $varDepTime = $_POST["departTime"];  
  
  if(strtotime($_POST["arrivalDate"]) > strtotime($_POST["departDate"]))
  	echo "No";
  else
  {
  
	$query = "SELECT R_ID FROM Reservations
   	  where (ArrivalDate >= '$varArrDate' and ArrivalDate < '$varDepDate')
   	  or (DepartureDate > '$varArrDate' and DepartureDate <= '$varDepDate')
   	  or (ArrivalDate <= '$varArrDate' and DepartureDate >= '$varDepDate')
    	  or (DepartureDate = '$varArrDate' and DepartureTime >= '$varArrTime')
   	  or (ArrivalDate = '$varDepDate' and ArrivalTime <= '$varDepTime')";
  	  //echo "<br />".$query."<br />";
  	$result = mysql_query($query) or die('Query failed: ' . mysql_error());
  	while ($line = mysql_fetch_array($result, MYSQL_BOTH)){
  	    $RID[1] = $line["R_ID"];
 	}
  	if(sizeof($RID) == 0)
  	  echo "Yes";
  	else
   	  echo "No";
  }
  include 'closeDB.php';
?>
