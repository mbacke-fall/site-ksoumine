<?php

$nom=$_POST['nom'];
$email=$_POST['email'];
$service=$_POST['service'];
$description=$_POST['description'];
$fichier=$_POST['fichier'];
$corps=$nom."\r\n".$email."\r\n".$service."\r\n".$description."\r\n".$fichier;
$Mess='Demande de devis envoyée';

if(isset($_POST["email"]))
{
  $to      = 'info@mail.com';
  $subject = 'Demande de devis';
  $message = $corps;
  $headers = 'From: info@mail.com' . "\r\n";

  mail($to, $subject, $message, $headers);
  header("Location: index.php?Mess=" . urlencode($Mess));

}
else{
  header('Location: index.php');
}

?>