<?php
//get data from form  
$name = $_POST['name'];
$email= $_POST['email'];

$to = "intimacy.foundation.srilanka@gmail.com";
$subject = "Mail From intimacy foundation";
$txt ="Name = ". $name . "\r\n  Email = " . $email ;

if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect

?>
