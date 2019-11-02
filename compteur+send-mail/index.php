<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link rel="shortcut icon" href="php.ico" type="image/x-icon">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <title>Last-Event</title>
</head>
<body>

<h2>Last-Event revient en force</h2>

<?php
    $nombre = 11;
    
     if(isset($_POST['moins'])){
       $nombre--;
       echo "<h4>"."Merci de votre participation"."</h4>"."</br>";
    }
?>
<?php
    if($nombre <=15){
        echo"il ne restent pas beaucoup de tikets"."</br>";
    }
    if($nombre ==10){
        echo"Attention tikets limiter"."</br>";
    }
?></br></br>

<?php
    echo $nombre;
?>

<form method="POST" action="index.php">
    <label for="moins">Vous avez droit à un tikets gratuis</label>
    </br><input type="submit" name="moins" value="Tiket" />
</form>

<?php
    if($nombre ==10){

        $email="Evinym@outlook.fr";
        $name= "Mr Castanet";
        $firstname= "Jonathan";
        $phone= "01010101010101";
        $message= "Le stock de tickets est bientôt épuiser, vous devez le recharger !";
                
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
            print("En attente de rechargement");
            mail($destinataire, $sujet, $message, $headers);
        }
        else{
            print("Le rechargement sera relancer ultérieurement");
        }
    }
?>
</body>
</html>
