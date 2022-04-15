<!-- Join Us Form Submission Form  -->
<?php
//get data from form  
$name =     $_POST['name'];
$email=     $_POST['email'];
$phone=     $_POST['phone'];
$whatsapp=  $_POST['whatsapp'];
$skill=     $_POST['skill'];
$drivelink= $_POST['drivelink'];
$reffer=    $_POST['reffer'];
$intrest=   $_POST['intrest'];

// Email text
$to = "hello@knitpocket.com";
$subject = "New From Submission on Knit Pocket ";

$txt =" Name : ". $name . "\r\n Email : " . $email . "\r\n Contact No : " . $phone ."\r\n Whatsapp No : " . $whatsapp . "\r\n Can you describe your skill sets and the kind of freelance projects you would like to be a part of ? = " . $skill .  "\r\n Can you please share a drive link/ website to showcase your past work or portfolio = " . $drivelink .  "\r\n Referral Incentive : " . $reffer .  "\r\n Would you be interested in learning more ? : " . $intrest;


$headers = "From: noreply@skonlinebook.com" . "\r\n" .
"CC: somebodyelse@example.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:joinus.html");
?>