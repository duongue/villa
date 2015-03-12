<?php 
include "openDB.php";

unset($arrivalDate);
unset($arrivalTime);
unset($departDate);
unset($departTime);
unset($perNum);
unset($rentPerDay);
unset($paymentDate);
unset($carPayment);

$arrivalDate = date('Y-m-d',strtotime($_POST["arrivalDate"]));
$arrivalTime = $_POST["arrivalTime"];
$departDate = date('Y-m-d',strtotime($_POST["departDate"]));
$departTime = $_POST["departTime"];
$rentPerDay = $_POST["rentPerDay"];
$paymentDate = $_POST["paymentDate"];
if(!is_null($paymentDate))
	$paymentDate = date('Y-m-d',strtotime($paymentDate));
$carPayment = $_POST["carPayment"];

if($paymentDate == "" or $paymentDate == "0000-00-00")
	// Setting paymentDate to null
	$query = "UPDATE Reservations 
		SET ArrivalDate = '$arrivalDate', ArrivalTime = '$arrivalTime', DepartureDate = '$departDate', 
		DepartureTime = '$departTime', RentPerDay = '$rentPerDay', PaymentDate = NULL, CarPayment = '$carPayment'
		WHERE R_ID=".($_POST['RID']);
else
	$query = "UPDATE Reservations 
		SET ArrivalDate = '$arrivalDate', ArrivalTime = '$arrivalTime', DepartureDate = '$departDate', 
		DepartureTime = '$departTime', RentPerDay = '$rentPerDay', PaymentDate = '$paymentDate', CarPayment = '$carPayment'
		WHERE R_ID=".($_POST['RID']);
		
mysql_query($query);

echo "The reservation has been updated.<br/>";
echo "Click <a href='detail.php'>here</a> to return.";
include "closeDB.php";
?>