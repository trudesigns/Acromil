<?php


if (isset($_POST['submit'])){

$name = $_POST['name'];
$subject = $POST['subject'];
$mailFrom = $POST['mail'];
$message = $POST['message'];

$mailTo = "trishbellardine@yahoo.com";
$headers = "From: Acromil Website" .$mailForm;
$txt = "You have received an e-mail from ".$name.".\n\n".$message;




mail($mailTo, $subject, $txt, $headers);
header("Location: index.php?mailsend");
}


