<?php
// Check for empty fields
if(empty($_POST['name'])        ||
   empty($_POST['email'])       ||
   //empty($_POST['wymiary'])       ||
   //empty($_POST['rodzaj']) ||
   //empty($_POST['waga']) ||
   //empty($_POST['odbiorca']) ||
   //empty($_POST['ubezpieczenie']) ||
   //empty($_POST['pobranie']) ||
   empty($_POST['phone']) ||
   empty($_POST['message']) ||
   !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
   {
    echo "No arguments Provided!";
    return false;
   }
    
$name = $_POST['name'];
$email_address = $_POST['email'];
//$wymiary = $_POST['wymiary'];
//$rodzaj = $_POST['rodzaj'];
//$waga = $_POST['waga'];
//$odbiorca = $_POST['odbiorca'];
//$ubezpieczenie = $_POST['ubezpieczenie'];
//$pobranie = $_POST['pobranie'];
$phone = $_POST['phone'];
$message = $_POST['message'];
    
// Create the email and send the message
$to = 'info@bobblue.pl'; 
$email_subject = "Formularz kontaktowy BOBBLUE.PL";
$email_body = "Wiadomość przesłana przez formularz ze strony bobblue.pl.\n\n"."Oto szczegóły:\n\nImię: $name \n\nEmail: $email_address\n\nTelefon: $phone \n\nWiadomość:\n$message";
$headers = "From: info@bobblue.pl\n"; 
$headers .= "Reply-To: $email_address"; 
mail($to,$email_subject,$email_body,$headers);
return true;            
?>