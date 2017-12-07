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
        <h1	>Bedankt!</h1>
        Beste <?php	echo $_POST["Name"]; ?> , <br>
        Er is een mail verstuurd naar dit adres: <br>
        <?php echo $_POST["Email"]; ?> <br> <br>
        Verwacht binnenkort een mailtje met de bevestiging.
    </div>
</div>
</body>
</html>