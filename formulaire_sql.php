<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!-- Créer une page php qui va contenir un formulaire html avec comme méthode POST (balise form)
	•	A l’intérieur du formulaire rajouter les champs suivants :
		i.	Un champ input avec comme attribut html name = «nom_article »
		ii.	Un champ input avec comme attribut html name = «contenu_article »
		iii.	Un champ input de type submit avec comme attribut html value = «Ajouter»  -->

<form action="#" method="post">
    <input type="text" name="nom_article">
    <input type="text" name="contenu_article">
    <input type="submit" value="ajouter">
</form>
</body>
</html>

<!-- Ajouter le code php suivant:
	•	Créer 2 variables $name, $content
	•	-Importer le contenu des 2 super globales $_POST[‘nom_article’], $_POST[‘contenu_article’] et tester les avec la méthode isset() dans les variables créés précédemment ($name et $content),
	•	Ajouter le code de connexion à la base de données en vous inspirant des exemples vus dans ce chapitre,
	•	Ajouter une requête simple qui va insérer le contenu des 2 champs dans un nouvel enregistrement (requête SQL insert), -->

    <?php
if(isset($_POST['nom_article']) && isset ($_POST['contenu_article'])){
    $name = $_POST['nom_article'];
    $content = $_POST['nom_article'];
}
echo "mon prenom est : $prenom";
?>

<?php

$db = new PDO('mysql:host=docker-lamp-mysql;dbname=article','root', 'p@ssw0rd',
array(PDO::ATTR_ERRMODE => PDO ::ERRMODE_EXCEPTION));
$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

var_dump($db);
?>

<?php
$conn = mysqli_connect($name, $content);
if (!$conn) {
      die("Échec de la connexion : " . mysqli_connect_error());
}
 
echo "Connexion réussie";
 
$sql = "INSERT INTO article (nom_article, contenu_article) VALUES ('article1', 'blabla')";
if (mysqli_query($conn, $sql)) {
      echo "Nouveau enregistrement créé avec succès";
} else {
      echo "Erreur : " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
?>