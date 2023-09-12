<?php
//  Exo Formulaire 
// login.php 
// Methode POST
// Action ---> bonjour.php
// input text ---> prenom
// bonjour.php ---> bonjour ----> bonjour $ prenom

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="bonjour.php" method="post">
        <label for="fname">Prénom</label>
    <input type="text" name="prenom">
<input type="submit" value="Valider">
    </form>
</body>
</html>