<!doctype html>
<html>
<head>
	
	<link href="bootstrap.css" rel=stylesheet>
	
<meta charset="utf-8">
<title>De Tweede Ronde for IUW</title>
</head>

<body>
<div class="container">
	<nav class="  navbar-expand navbar-light bg-light">
		<ul class="nav navbar-light">
  <li class="nav-link">
    <a class="navbar-brand" href="index.html">Home</a>
  </li>
  <li class="nav-link">
    <a class="navbar-brand" href="#">Video</a>
  </li>
  <li class="nav-link">
    <a class="navbar-brand" href="#">random pagina 2</a>
  </li>
  <li class="nav-link">
    <a class="navbar-brand" href="contact.html">Contact</a>
  </li>
</ul>
	</nav>		

	</br>
	
	<div class="jumbotron">
	
		<?php
		//zorg ervoor dat hij mag schrijven
		chmod("/home/students/5911230/www/", 0777);
		//pak de gegevens van de form
		$persoon = $_POST["Name"];
		$mail = $_POST["Email"];
		//maak een bestand aan met de naam
		$myfile = fopen("$persoon.txt", "w");
		//schrijf de tekst
		$txt = 'Naam: '.$persoon.', Email: '.$mail;
		fwrite($myfile, $txt);
		//sluit de file
		fclose($myfile);
		?>
		
		<h1	>Bedankt!</h1>
		Beste <?php	echo $_POST["Name"]; ?> , <br>
		Er is een mail verstuurd naar dit adres: <br>
		<?php echo $_POST["Email"]; ?> <br> <br>	
		Verwacht binnenkort een mailtje met de bevestiging.
		
		<?php
		//bericht
		$persoon = $_POST["Name"];
		$to = $_POST["Email"];
		$msg = 'Beste '.$persoon.',Bedankt voor het aanmelden. U kunt nu van onze service gebruik maken';
		$headers = "From: DeTweedeRonde@inkumail.nl";
		mail($to, "Bedankt", $msg, $headers);
		?>
		
	</div>
	</div>
</body>
</html>