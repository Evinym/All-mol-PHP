<?php

$email="Evinym@outlook.fr";
$name= "Mr Castanet";
$firstname= "Jonathan";
$phone= "01010101010101";
$message= "Le stock de ticket, vas ateindre un seuil critique penser a le recharger !";


$destinataire = "Evinym@outlook.fr";
$sujet = "Booking - Customer : ".$name." ".$firstname;
$message = "My Booking :\n\n
Name : $name\n
First Name : $firstname\n
Email : $email\n 
Tel : $phone\n

Comment : \n $message";
$headers = "From: web@example.com" . "\r\n" .
"Reply-To: web@example.com" . "\r\n" .
"X-Mailer: PHP/" . phpversion();

if(mail($destinataire, $sujet, $message, $headers)){
   //echo $Name;
    //echo $destinataire;
    print("Ok");
    mail($destinataire, $sujet, $message, $headers);
}
else{
    print("NO");
}

?>