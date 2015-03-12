<?php 
  include 'openDB.php';
  
  // Clear variables
  unset($varCID);
  unset($varName);
  unset($varNumPer);
  unset($varHomePhone);
  unset($varMobile);
  unset($varEmail);
  unset($varHomeAddress);
  unset($varArrDate);
  unset($varArrTime);
  unset($varDepDate);
  unset($varDepTime);
  
  // Set variables
  $varName = $_POST["name"];
  $varNumPer = $_POST["numPer"];
  $varHomePhone = $_POST["homePhone"];
  $varMobile = $_POST["mobile"];
  $varEmail = $_POST["email"];
  $varHomeAddress = $_POST["homeAddress"];
  $varArrDate = substr($_POST["arrivalDate"],6,4)."-".substr($_POST["arrivalDate"],0,2)."-".substr($_POST["arrivalDate"],3,2);
  $varArrTime = substr($_POST["arrivalDate"],11,16);
  $varDepDate = substr($_POST["departDate"],6,4)."-".substr($_POST["departDate"],0,2)."-".substr($_POST["departDate"],3,2);
  $varDepTime = substr($_POST["departDate"],11,16);    
  
  // Output variable
  //echo $varName."<br />";
  //echo $varNumPer."<br />";
  //echo $varHomePhone."<br />";
  //echo $varMobile."<br />";
  //echo $varEmail."<br />";
  //echo $varHomeAddress."<br />";
  //echo $varArrDate."<br />";
  //echo $varArrTime."<br />";
  //echo $varDepDate."<br />";
  //echo $varDepTime."<br />";
  
  
  $query = "SELECT ID FROM Customers
    where FullName = '$varName'";
  $result = mysql_query($query) or die('Query failed: ' . mysql_error());
  if(mysql_num_rows($result)>0) 
  { 
      $line = mysql_fetch_array($result, MYSQL_BOTH);
      $varCID = $line["ID"];
      mysql_free_result($result);
      updateCustomerInfo($varCID, $varHomePhone, $varMobile, $varEmail, $varHomeAddress); 
      insertReservation($varCID, $varArrDate, $varArrTime, $varDepDate, $varDepTime, $varNumPer);
  }
  else
  {
      insertCustomer($varName, $varHomePhone, $varMobile, $varEmail, $varHomeAddress, $varCID);
      insertReservation($varCID, $varArrDate, $varArrTime, $varDepDate, $varDepTime, $varNumPer);
  }
  
  function updateCustomerInfo($CID, $homePhone, $mobile, $email, $homeAddress){
  	$query = "UPDATE Customers
		SET HomePhone='$homePhone', Mobile='$mobile', Email='$email', HomeAddress='$homeAddress'
		WHERE ID='$CID'";
	mysql_query($query);
  }
  
  function insertCustomer($name, $homePhone, $mobile, $email, $homeAddress, &$CID){
  	$query = "INSERT INTO Customers (FullName, HomePhone, Mobile, Email, HomeAddress)
	VALUES ('$name', '$homePhone', '$mobile', '$email', '$homeAddress')";
	mysql_query($query);
	$CID = mysql_insert_id(); 
  }
  
  function insertReservation($CID, $arrDate, $arrTime, $depDate, $depTime, $numPer){
  	$query = "INSERT INTO Reservations (ArrivalDate, ArrivalTime, DepartureDate, DepartureTime, PerNum, Customer_ID)
	VALUES ('$arrDate', '$arrTime', '$depDate', '$depTime', '$numPer', '$CID')";
	mysql_query($query);
  }
  
  include 'closeDB.php';
?>
