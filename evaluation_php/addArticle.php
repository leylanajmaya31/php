<!-- Créer une page addArticle.php qui va effectuer les actions suivantes :
1 se connecter à la BDD,
2 Vérifier si les 2 inputs : nom_article et prix_article sont remplis,
3 Créer une fonction addArticle qui va effectuer une requête sql (préparé) pour ajouter en BDD un 
nouvel article.
4 Si les 2 inputs sont remplis, appeler la fonction addArticle,
5 Afficher un message dans la page index.php : pour indiquer que l’article est bien ajouté en BDD.
6 Afficher un message d’erreur dans la page index.php si les 2 inputs ne sont pas remplis.
NB : pour faire une redirection vous pouvez utiliser la méthode header :
< ?php 
 header(‘location: ./index.php’) ; 
 ?> 
4 durée de l’évaluation :
Vous avez 1h00 pour réaliser les 2 pages index.php (formulaire) et addArticle.php (requête SQL) -->



<!-- 
    Correction :

    J'ai ajouté des commentaires dans les blocs de code correspondant, mais je vais faire quelques commentaires globaux.
    Ce fichier étant ce qu'on peut considérer comme un "controleur" php, au final on n'a pas besoin des balises HTML car on ne fait pas d'affichage.
    On fait simplement des traitements. 

    Il manque simplement 2 choses : l'utilisation d'une fonction. Pour ça, une fois que ton code fonctionne tu le bouges dans une fonction.
    Le but d'une fonction étant qu'elle soit le plus indépendante du reste, et qu'elle fasse uniquement ce dont elle a besoin.
    Ici, ça aurait été genre :
    function addArticle(PDO $conn, string $nomArticle, float $prixArticle) {
        try{
            $addArticle = $conn->prepare('INSERT INTO article(nom_article, prix_article)VALUES(:nom_article, :prix_article)');
            ...
            $addArticle->execute();
        }catch(PDOException $e) {...}
    }

    Et la redirection : on créé une requête de type get en ajoutant un param (?paramname=paramvalue)
    header('location=index.php?info=Ton+message+d+info'); 
-->


<?php
$servername = "docker-lamp-mysql";
$username = "root";
$password = "p@ssw0rd";
$dbname = "evaluation";
$conn = null;
try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage() . "\r\n";
}
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $name = '';
    $price = '';
    $errors = [];


    /*
     Là on airmerait bien avoir un else qui ajoute une entrée dans le tableau d'erreurs, comme ça, 
     ça evite d'essayer de faire une manip plus loin avec une variable que PHP ne connait pas

     De plus, attention, techniquement, tout le code de la suite du fichier pourrait être compris dans ce if, d'autant plus si on n'a pas ajouté de ligne au tableau d'erreur
     Ici, vu qu'on est sur un fichier de type controlleur, sur lequel on n'est pas censé taper autrement que par le form ça ne pose pas de problème
     Mais si j'accède directement  à ce fichier dans l'URL, il y a des erreurs car il ne connait pas des variables. 
     
     Donc t'as 2 solutions : ou bien 
    if (isset($_POST['nom_article']) && isset($_POST['prix_article'])) {
        //Tout le reste du code concernant le traitement du formulaire de type post concerné, donc ici tout le reste   
    }

    ou alors
    if (isset($_POST['nom_article']) && isset($_POST['prix_article'])) {
        //tu testes tes variables (donc !empty et is_numeric par exemple)
    } else {
        // Ajout d'une ligne dans le tableau d'erreur
        $errors[] = "Ce fichier ne peut être accédé que sur un submit formulaire";
    }
    et ensuite 
    if (empty($errors)) {
        //Tout le reste du code concernant le traitement du formulaire de type post concerné, donc ici tout le reste   
    }
    */
    if (isset($_POST['nom_article']) && isset($_POST['prix_article'])) {
        $name = $_POST['nom_article'];
        $price = $_POST['prix_article'];
    } 


    if (empty($_POST['nom_article'])) {
        $errors[] = 'Le nom de l\'article ne peut être vide (info dev : contrainte SQL).';
    }

    // Gui : Ici,tu aurais pu ajouter une condition qui teste que $_POST['prix_article'] est bien de type numérique
    // if (!is_numeric($_POST['prix_article'])) {
    //     $errors[] = 'Le prix de l\'article doit être de type numérique.';
    // }

    
    if (empty($errors)) {
        // Avec ce fonctionnement, le but ici est de faire les traitements suivants uniquement si tu n'as pas eu d'erreur (donc si ton tableau est vide)
        // Pour ça, il faut que tu déplaces l'accolade fermante de ton bloc if après ton echo '<p>...</p>';

        /*
        if (empty($errors)) {
            try {
            $addArticle = $conn->prepare('INSERT INTO article(nom_article, prix_article)VALUES(:nom_article, :prix_article)');
            ...
            ...
            }catch(PDOException $e){}
            echo '<p>' . $name . " " . $price . '</p>';
        }
        
        */
    }

    try {
        $addArticle = $conn->prepare('INSERT INTO article(nom_article, prix_article)VALUES(:nom_article, :prix_article)');
        $addArticle->bindParam('nom_article', $name, PDO::PARAM_STR);
        $addArticle->bindParam('prix_article', $price, PDO::PARAM_STR);
        $addArticle->execute();

    } catch (PDOException $e) {
        echo $e->getMessage();

    }
    echo '<p>' . $name . " " . $price . '</p>';


    ?>
</body>

</html>