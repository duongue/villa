<?php
// Performing SQL query
//$query = 'SELECT * FROM Reservations LEFT JOIN Customers on Reservations.Customer_ID = 
//Customers.ID';
//$result = mysql_query($query) or die('Query failed: ' . mysql_error());

unset($R_ID);
unset($arrivalDate);
unset($arrivalTime);
unset($departDate);
unset($departTime);
unset($fullName);
unset($rentPerDay);
unset($paymentDate);
unset($homePhone);
unset($mobile);
unset($email);
unset($carPayment);
unset($totalRent);
unset($totalPayment);
unset($numDay);
unset($year);

if(isset($_GET['CID']))
  $C_ID = $_GET['CID'];
else
  $C_ID = "0";

getReservationDetail($R_ID, $C_ID, $arrivalDate, $arrivalTime, $departDate, $departTime, $fullName, $renPerDay,
	$paymentDate, $email, $homePhone, $mobile, $carPayment);
//getReservationDetail($R_ID, $arrivalDate, $arrivalTime, $departDate, $departTime, $fullName, $numPer,
//	$homePhone, $mobile, $email, &$homeAddress);

// Printing results in HTML
if($C_ID == 0){
	echo "<h2>All Reservations</h2>";
	echo "<table border='1' align='center'>\n";	
	echo "<th>Full Name</th>";
}	
else{
	echo "<h2>".$fullName[0]."</h2>";
	echo "<table border='1' align='center'>\n";
}
echo "<th>Arrival Date</th>";
echo "<th>Arrival Time</th>";
echo "<th>Depart Date</th>";
echo "<th>Depart Time</th>";
echo "<th>No. of days</th>";
echo "<th>Rent per day</th>";
echo "<th>Total rent</th>";
echo "<th>Car payment</th>";
echo "<th>Total payment</th>";
echo "<th>Email / Mobile / Tel.</th>";
echo "<th>Payment date</th>";
echo "<th>Payment status</th>";
echo "<th>Delete</th>";
echo "<th>Edit</th>";

// List payment in detail
for($count = 0; $count < sizeof($fullName); $count+=1)
{
  $numDay = (((strtotime($departDate[$count])-strtotime($arrivalDate[$count]))/86400)+1);
  $totalRent = $renPerDay[$count]*$numDay;
  $totalPayment = $totalRent + $carPayment[$count];
  echo "<tr>";
  if($C_ID == 0)
  	echo "<td align='center'>".$fullName[$count]."</td>";
  	//$today = date('h-i-s, j-m-y, it is w Day')
  	//gmdate("m.d.Y. g:i A", $timestamp);
  echo "<td align='center'>".date('d-m-Y',strtotime($arrivalDate[$count]))."</td>";
  echo "<td align='center'>".$arrivalTime[$count]."</td>";
  echo "<td align='center'>".date('d-m-Y',strtotime($departDate[$count]))."</td>";
  echo "<td align='center'>".$departTime[$count]."</td>";
  echo "<td align='center'>".$numDay."</td>";
  echo "<td align='center'>$".$renPerDay[$count]."</td>";
  echo "<td align='center'>$".$totalRent."</td>";
  echo "<td align='center'>$".$carPayment[$count]."</td>";
  echo "<td align='center'>$".$totalPayment."</td>";
  echo "<td align='center'>".$email[$count]." / ".$mobile[$count]." / ".$homePhone[$count]."</td>";
  if(is_null($paymentDate[$count]))
  	echo "<td align='center'></td>";
  else 
  	echo "<td align='center'>".date('d-m-Y',strtotime($paymentDate[$count]))."</td>";
  echo "<td align='center' ";
  if($paymentDate[$count] == '')
  	echo "style='color:red'>NOT YET PAID</td>";
  else
  	echo "style='color:green'>PAID</td>";
  echo "<td align='center'><a href='deleteReservation.php?RID=".$R_ID[$count]."&CID=".$C_ID."'>Delete</a>";
  echo "<td align='center'><a href='editReservationForm.php?RID=".$R_ID[$count]."&CID=".$C_ID."'>Edit</a>";
  echo "</tr>";
}
echo "</table>\n";

function getReservationDetail(&$R_ID, $C_ID, &$arrivalDate, &$arrivalTime, &$departDate, &$departTime, &$fullName, &$rentPerDay,
	&$paymentDate, &$email, &$homePhone, &$mobile, &$carPayment){
  // Performing SQL query
  if($C_ID == 0)
     $query = "SELECT R_ID, ArrivalDate, ArrivalTime, DepartureDate, DepartureTime, FullName, RentPerDay, 
  	Email, PaymentDate, HomePhone, Mobile, CarPayment
        FROM Reservations left join Customers on Reservations.Customer_ID = Customers.ID
        ORDER BY ArrivalDate";
  else
     $query = "SELECT R_ID, ArrivalDate, ArrivalTime, DepartureDate, DepartureTime, FullName, RentPerDay, 
  	Email, PaymentDate, HomePhone, Mobile, CarPayment
        FROM Reservations left join Customers on Reservations.Customer_ID = Customers.ID
        WHERE Reservations.Customer_ID = ".$C_ID." order by ArrivalDate";
  $result = mysql_query($query) or die('Query failed: ' . mysql_error());
  $count = 0;
  while ($line = mysql_fetch_array($result, MYSQL_BOTH)){
      $R_ID[$count] = $line["R_ID"];
      $arrivalDate[$count] = $line["ArrivalDate"];
      $arrivalTime[$count] = $line["ArrivalTime"];
      $departDate[$count] = $line["DepartureDate"];
      $departTime[$count] = $line["DepartureTime"];
      $rentPerDay[$count] = $line["RentPerDay"];
      $paymentDate[$count] = $line["PaymentDate"];
      $email[$count] = $line["Email"];
      $homePhone[$count] = $line["HomePhone"];
      $mobile[$count] = $line["Mobile"];
      $fullName[$count] = $line["FullName"];
      $carPayment[$count] = $line["CarPayment"];
      $count++;
  }
// Free resultset
mysql_free_result($result);
}
?>