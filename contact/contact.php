<?php
//get data from form  
if(isset($_POST['submit'])) {
$name = $_POST['name'];
$phone= $_POST['phone'];
$email= $_POST['emailaddress'];
$case= $_POST['case'];
$message= $_POST['message'];

$to = "eb.underwood22@gmail.com";

$subject = "Mail From Penateam.com";
$txt ="Name = ". $name . 
"\r\n  Phone Number = " . $phone . 
"\r\n  Email = " . $email . 
"\r\n  Case Studies = " . $case . 
"\r\n  Message =" . $message;

$headers = "From: noreply@penateam.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:thankyou.html");
}
?>

