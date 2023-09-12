<!DOCTYPE html>
<html lang="fr">
<head>
  
  <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="POST" action="./addArticle.php">
        <p>
            <label for="nom_article">Nom de l'article :</label>
            <input type="text" name="nom_article" size="50" required >
            <label for="prix_article">Prix de l'article :</label>
            <input type="text" name="prix_article" required >
            <input type="submit" name="submit" value="Ajouter">
        </p>
    </form>
</body>
</html>