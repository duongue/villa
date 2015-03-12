<?php 

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
//$email = $varEmail;
//$email .= ', arne@libra.no, lien4consulting@gmail.com';
$email = 'arne@libra.no, lien4consulting@gmail.com';

$subject = 'Acknowledgement Email';
$message = 'Dear '.$varName.',
	
This email is to notify that your reservation has been received. Note that this is not a confirmation email. 
You will be contacted again shortly to confirm the reservation. 
Your arrival date and time: '.date('d-m-Y',strtotime($varArrDate)).' '.$varArrTime.'
Your departure date and time: '.date('d-m-Y',strtotime($varDepDate)).' '.$varDepTime;
	
$headers = 'From: lien4consulting@gmail.com' . "\r\n".
	'Reply-to: lien4consulting@gmail.com' . "\r\n".
	'X-Mailer: PHP/' . phpversion();
mail($email, $subject, $message, $headers);
?>
