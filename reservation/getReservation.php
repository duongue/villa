<?php

include 'openDB.php';

// Get the month array
$month[1] = "January";
$month[2] = "February";
$month[3] = "March";
$month[4] = "April";
$month[5] = "May";
$month[6] = "June";
$month[7] = "July";
$month[8] = "August";
$month[9] = "September";
$month[10] = "October";
$month[11] = "November";
$month[12] = "December";
// Set the color
$color = 'FFFFFF';

// Get the year
unset($year);
$year = $_POST["year"];
if($year == ''){
	$year = getdate();
	$year = $year["year"];
}
// Printing results in HTML
echo "<table border='1' style='table-layout:fixed; width:100%;'>\n";

// Days
echo "<tr>";
echo "<th width=100px></th>";
for($counter = 1; $counter <=31; $counter +=1){
	echo "<th width=3% align='center'>";
	echo $counter;
	echo "</th>";
}
echo "</tr>";

// Months
for($counter = 1; $counter <=12; $counter +=1){
  echo "<tr><td align='center'><b>";
  echo $month[$counter];
  echo "</b></td>";
  
  // In each month, list all reservations
  //echo "<td>";
  unset($R_ID);
  unset($arrivDay);
  unset($arrivMonth);
  unset($arrivTime);
  unset($departDay);
  unset($departMonth);
  unset($arrivTime);
  unset($name);
  unset($homePhone);
  unset($mobile);
  unset($email);
  unset($homeAddress);
  unset($perNum);
  unset($C_ID);
  
  getReservation($year, $counter, $R_ID, $arrivDay, $arrivMonth, $arrivTime, $departDay, $departMonth, $departTime, $name, $homePhone, $mobile, $email, $homeAddress, $perNum, $C_ID);
  $pivotDate = 1;
  $columnSpan = 0;
  
  // If there is no event in the month
  if(sizeof($R_ID) == 0)
    for($pivotDate; $pivotDate <= 31; $pivotDate +=1)
    	echo "<td>&nbsp;</td>";
  else
    {
    for($count = 0; $count < sizeof($R_ID); $count+=1){
      // Event that spans 2 months
      // Event that starts on a differnt month
      if($arrivMonth[$count] != $counter)
      {
        $columnSpan = $departDay[$count] - $pivotDate + 1;
        echo "<td bgcolor=#".$color." style='overflow:hidden; color:white; white-space:nowrap; overflow hidden;' align='center' colspan='".$columnSpan."'>";
        //echo $name[$count];
        echo "<a id='".$R_ID[$count]."A' href='detail.php?CID=".$C_ID[$count]."'>".$name[$count]."</a>" ;
        //echo "</td>";
        
        // Tooltip display
	echo '<div class="tooltip">';
	echo "   <p>Name: ".$name[$count]."</p>";
	echo "   <p>Arrival: ".$arrivDay[$count]."/".$arrivMonth[$count]." ".$arrivTime[$count]."</p>";
 	echo "   <p>Departure: ".$departDay[$count]."/".$departMonth[$count]." ".$departTime[$count]."</p>";
 	echo "   <p>Home Phone: ".$homePhone[$count]."</p>";
 	echo "   <p>Mobile Phone: ".$mobile[$count]."</p>";
 	echo "   <p>Email: ".$email[$count]."</p>";
 	echo "   <p>Home Address: ".$homeAddress[$count]."</p>";
 	echo "   <p>Number of Persons: ".$perNum[$count]."</p>";
	echo "</div>";

	echo "<script>";
	// What is $(document).ready ? See: http://flowplayer.org/tools/documentation/basics.html#document_ready
	echo "$(document).ready(function() {";
 
	echo '$("#'.$R_ID[$count].'A").tooltip({ effect: \'slide\'});';
	echo "});";
	echo "</script> ";
	// tooltip display
	
	echo "</td>";
        $pivotDate = $departDay[$count]+1;
      } 
      // Event that ends on a different month
      elseif($departMonth[$count] != $counter)
      {
        for($pivotDate; $pivotDate < $arrivDay[$count]; $pivotDate+=1)
          echo "<td>&nbsp; </td>";
          $columnSpan = 31 - $arrivDay[$count] + 1;
          $color += rand(1, 900000);
          echo "<td bgcolor=#".$color." style='overflow:hidden; color:white; white-space:nowrap; overflow hidden;' align='center' colspan='".$columnSpan."'>";
          //echo $name[$count];
         echo "<a id='".$R_ID[$count]."' href='detail.php?CID=".$C_ID[$count]."'>".$name[$count]."</a>" ;
        //echo "</td>";
        
        // Tooltip display
	echo '<div class="tooltip">';
	echo "   <p>Name: ".$name[$count]."</p>";
	echo "   <p>Arrival: ".$arrivDay[$count]."/".$arrivMonth[$count]." ".$arrivTime[$count]."</p>";
 	echo "   <p>Departure: ".$departDay[$count]."/".$departMonth[$count]." ".$departTime[$count]."</p>";
 	echo "   <p>Home Phone: ".$homePhone[$count]."</p>";
 	echo "   <p>Mobile Phone: ".$mobile[$count]."</p>";
 	echo "   <p>Email: ".$email[$count]."</p>";
 	echo "   <p>Home Address: ".$homeAddress[$count]."</p>";
 	echo "   <p>Number of Persons: ".$perNum[$count]."</p>";
	echo "</div>";

	echo "<script>";
	// What is $(document).ready ? See: http://flowplayer.org/tools/documentation/basics.html#document_ready
	echo "$(document).ready(function() {";
 
	echo '$("#'.$R_ID[$count].'").tooltip({ effect: \'slide\'});';
	echo "});";
	echo "</script> ";
	// tooltip display
	
	echo "</td>";
        //echo "</td>";
          $pivotDate = 32;
      }
      // Event that spans within 1 month
      else
      {
        for($pivotDate; $pivotDate < $arrivDay[$count]; $pivotDate+=1)
        {
          echo "<td>&nbsp;</td>";
        }
        $columnSpan = $departDay[$count] - $arrivDay[$count] + 1;
        $color += rand(1, 900000);
        echo "<td bgcolor=#".$color." style='overflow:hidden; color:white; white-space:nowrap; overflow hidden;' align='center' colspan='".$columnSpan."'>";
        //echo $name[$count];
        //echo "</td>";
        echo "<a id='".$R_ID[$count]."' href='detail.php?CID=".$C_ID[$count]."'>".$name[$count]."</a>" ;
        //echo "</td>";
        
        // Tooltip display
	echo '<div class="tooltip">';
	echo "   <p>Name: ".$name[$count]."</p>";
	echo "   <p>Arrival: ".$arrivDay[$count]."/".$arrivMonth[$count]." ".$arrivTime[$count]."</p>";
 	echo "   <p>Departure: ".$departDay[$count]."/".$departMonth[$count]." ".$departTime[$count]."</p>";
 	echo "   <p>Home Phone: ".$homePhone[$count]."</p>";
 	echo "   <p>Mobile Phone: ".$mobile[$count]."</p>";
 	echo "   <p>Email: ".$email[$count]."</p>";
 	echo "   <p>Home Address: ".$homeAddress[$count]."</p>";
 	echo "   <p>Number of Persons: ".$perNum[$count]."</p>";
	echo "</div>";

	echo "<script>";
	// What is $(document).ready ? See: http://flowplayer.org/tools/documentation/basics.html#document_ready
	echo "$(document).ready(function() {";
 
	echo '$("#'.$R_ID[$count].'").tooltip({ effect: \'slide\'});';
	echo "});";
	echo "</script> ";
	// tooltip display
	
	echo "</td>";
        $pivotDate = $departDay[$count]+1;
      }
    //echo $R_ID[$count], " ", $arrivDay[$count], " ", $arrivMonth[$count], " ", $departDay[$count], " ", $departMonth[$count], " ", $name[$count];
    }
    
    // Fill the rest of the month with empty cell
    for($pivotDate; $pivotDate < 32; $pivotDate+=1)
      echo "<td>&nbsp;</td>";
  }
  //echo "</td>";
  // End listing reservation
  echo "</tr>";
}

function getReservation($year, $mon, &$RID, &$arrivalDay, &$arrivalMonth, &$arrivalTime, &$departDay, &$departMonth, &$departTime, &$fullName,
	&$homePhone, &$mobile, &$email, &$homeAddress, &$perNum, &$CID){
  // Performing SQL query
  $query = "SELECT R_ID, EXTRACT(DAY FROM ArrivalDate) AS ArrivalDay, EXTRACT(MONTH FROM ArrivalDate) as ArrivalMonth, 
    EXTRACT(DAY FROM DepartureDate) AS DepartureDay, EXTRACT(MONTH FROM DepartureDate) as DepartureMonth, FullName,
    HomePhone, Mobile, Email, HomeAddress, PerNum, ArrivalTime, DepartureTime, Customer_ID
    FROM Reservations left join Customers on Reservations.Customer_ID = Customers.ID 
    where (EXTRACT(month from ArrivalDate) = '$mon' and EXTRACT(year from ArrivalDate) = '$year')
    or (EXTRACT(month from DepartureDate) = '$mon' and EXTRACT(year from DepartureDate) = '$year') order by ArrivalDate";
  $result = mysql_query($query) or die('Query failed: ' . mysql_error());
  $count = 0;
  while ($line = mysql_fetch_array($result, MYSQL_BOTH)){
      $RID[$count] = $line["R_ID"];
      $arrivalDay[$count] = $line["ArrivalDay"];
      $arrivalMonth[$count] = $line["ArrivalMonth"];
      $arrivalTime[$count] = $line["ArrivalTime"];
      $departDay[$count] = $line["DepartureDay"];
      $departMonth[$count] = $line["DepartureMonth"];
      $departTime[$count] = $line["DepartureTime"];
      $fullName[$count] = $line["FullName"];
      $homePhone[$count] = $line["HomePhone"];
      $mobile[$count] = $line["Mobile"];
      $email[$count] = $line["Email"];
      $homeAddress[$count] = $line["HomeAddress"];
      $perNum[$count] = $line["PerNum"];
      $CID[$count] = $line["Customer_ID"];
      $count++;
  }
  
  // Free resultset
  mysql_free_result($result);
}

echo "</table>\n";

include 'closeDB.php';
?>
