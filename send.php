<?php

$mailheader = "From:" $_POST['name'] "<" $_POST['email'] ">\r\n";

$reciepment = "servicesnowy@gmail.com";

mail($receipment, $_POST['subject'], $_POST['message']) or die("Error!");

echo"
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
			<meta name="viewport" content="width=device-width, initial-scale=1.0">
			<title>Snowy - Snow Shoveling</title>
			<link rel="stylesheet" href="style-contact.css">
			<link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@400;500;700&display=swap" rel="stylesheet">
			
		</head>
		<body>
			<div class="thanks-div">
				<h1 class="thanks-h"> Thank you!</h1>
				<p class="thanks-p"> Thank you for contacting us. We will respond as soon as we can!</p>
			</div>
		</body>
	</html>



";


?>
