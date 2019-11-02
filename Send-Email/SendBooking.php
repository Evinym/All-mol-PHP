<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="shortcut icon" href="php.ico" type="image/x-icon">
	<title>Resultat</title>
</head>
<body>
	<center>
	<?php
		if(isset($_POST) 
			&& isset($_POST['name']) 
			&& isset($_POST['firstname']) 
			&& isset($_POST['email']) 
			&& isset($_POST['phone']) 

			&& isset($_POST['message']))
		{		
			extract($_POST);
			if(!empty($name)
				&& !empty($firstname) 
				&& !empty($email) 
				&& !empty($phone) 
 
				&& !empty($message))
		{ 	
	require("mail.php");

		} // fin if Empty
	
		else { echo "Param Vide !";}
	} 
	else{echo "Param Indefini !";

	}
	
	// fin If Get
?>
</center>
</body>
</html>