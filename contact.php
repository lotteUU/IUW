<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Contact</title>
</head>

<body>

Hallo 
<?php
	//bepaal de naam
	
	echo $_POST["Name"]; ?> , <br>
Er is een mail verstuurd naar dit adres: <br>
<?php
	//bepaal het emailadres
	echo $_POST["Email"]; ?> <br>
			
Verwacht binnenkort een mailtje met de bevestiging.

</body>
</html>