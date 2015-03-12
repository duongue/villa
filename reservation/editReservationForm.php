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


$query = "SELECT ArrivalDate, ArrivalTime, DepartureDate, DepartureTime, PerNum, RentPerDay, PaymentDate, CarPayment
	 FROM Reservations WHERE R_ID=".($_GET['RID']);
$result = mysql_query($query) or die('Query failed: ' . mysql_error());
  while ($line = mysql_fetch_array($result, MYSQL_BOTH)){
      $arrivalDate = $line["ArrivalDate"];
      $arrivalTime = $line["ArrivalTime"];
      $departDate = $line["DepartureDate"];
      $departTime = $line["DepartureTime"];
      $perNum = $line["PerNum"];
      $rentPerDay = $line["RentPerDay"];
      $paymentDate = $line["PaymentDate"];
      $carPayment = $line["CarPayment"];
  }

$arrivalDate = date('d-m-Y',strtotime($arrivalDate));
$departDate = date('d-m-Y',strtotime($departDate));
if(!is_null($paymentDate))
	$paymentDate = date('d-m-Y',strtotime($paymentDate));
?>
<div>
 <form method="post" action="editReservation.php">
      <fieldset>
    	<p>
    		Date of arrival: 
    		<input type="text" VALUE="<?php echo $arrivalDate?>" name="arrivalDate"/>
    	</p>
    	<p>
    		Time of arrival: 
    		<input type="text" VALUE="<?php echo $arrivalTime?>" name="arrivalTime"/>
    	</p>
    	<p>
    		Date of departure: 
    		<input type="text" VALUE="<?php echo $departDate?>" name="departDate"/>
    	</p>    
    	<p>
    		Time of departure: 
    		<input type="text" VALUE="<?php echo $departTime?>" name="departTime"/>
    	</p>  	
    	<p>
    		Rent Per Day:
     		<input type="text" VALUE="<?php echo $rentPerDay?>" name="rentPerDay" />
   	</p>
   	<p>
    		Car Payment:
     		<input type="text" VALUE="<?php echo $carPayment?>" name="carPayment" />
   	</p>
    	<p>
    		Payment Date: 
    		<input type="text" VALUE="<?php echo $paymentDate?>" name="paymentDate"/>
    	</p>    
    	<input type="hidden" name="RID" value="<?php echo $_GET['RID']?>">
    	<input type="hidden" name="CID" value="<?php echo $_GET['CID']?>">
    	<p><button id="submitButton" type="submit" value="Submit">Submit</button></p>
</div>
<?php      
include "closeDB.php";
?>