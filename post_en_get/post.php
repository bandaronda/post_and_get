<!DOCTYPE html>
<head>

</head>

<body>
    

<form method="POST" action="verwerking.php">

  <input type="text" name="name" placeholder="name" required> <br>

  <input type="text" name="surname" placeholder="surname" required> <br>

  <input type="email" name="email" placeholder="Email" required> <br>
  <input type="text" name="adress" placeholder="adress" required ><br>
  <input type="number" name="age" placeholder="age" required> <br>

  <input type="submit" value="Verstuur">

</form>
</body>

</html>

<?php

$naam = $_POST["name"];
$surnaam = $_POST["surname"];
$email = $_POST["email"];
$adress = $_POST["adress"];
$age = $_POST["age"];

// de GET value is bedoeld voor het vragen van data van de server dat je zelf kan veranderen maar is niet 
// bedoeld om hoge aantal data of gevoelige data te ontvangen.

//de post value is bedoeld voor het sturen van dat naar de server en die dat valt niet te veranderen
// en dat is wel bedoeld voor een hoge aantal data en gevoelige data.
