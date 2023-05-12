<!DOCTYPE html>
<head>


</head>

<body>

<form action="process.php" method="GET">
 <input type="text" name="name"><br>
 <input type="text" name="surname"><br>
 <input type="number" name="age"><br>
 <input type="text" name="adress" ><br>
  <input type="email" name="email"><br>
  <input type="submit" value="Verzenden">
</form>

    
</body>

</html>
<?php
$naam = $_GET["name"];
$surname = $_GET["surname"];
$email = $_GET["email"];
$adress = $_GET["adress"];
$age = $_GET["age"];

// de GET value is bedoeld voor het vragen van data van de server dat je zelf kan veranderen maar is niet 
// bedoeld om hoge aantal data of gevoelige data te ontvangen.

//de post value is bedoeld voor het sturen van dat naar de server en die dat valt niet te veranderen
// en dat is wel bedoeld voor een hoge aantal data en gevoelige data.

