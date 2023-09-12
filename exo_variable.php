<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    // $nbr1 =5;
    // echo '&nbsp';
    // echo $nbr1;   
    // echo '&nbsp';
    // echo gettype($nbr1);
    // $prenom = "Leyla";
    // echo '&nbsp';
    // echo $prenom;
    // echo '&nbsp';
    // $varbool = false;
    // echo gettype($varbool);
    // echo '&nbsp';
    // <!-- <?php -->
    /*Exercice 1 :
    -Créer 2 variables $a et $b qui ont pour valeur 12 et 10, 
    -Stocker le résultat de l’addition de $a et $b dans une variable $total, 
    -Afficher le résultat (utilisez la fonction echo)*/
    $a = 12;
    $b = 10;
    $total = $a + $b;
    echo $total;
    echo '&nbsp';
    /*Exercice 2 :
-Créer 3 variables $a, $b et $c qui ont pour valeur $a =5, $b =3 et $c = $a+$b,
-Afficher la valeur de chaque variable (utilisez la fonction echo).,
-passer la valeur de $a à 2,
-Afficher la valeur de $a,
-passer la valeur de $c à $b - $a,
-Afficher la valeur de chaque variable (utilisez la fonction echo).*/
$a = 5;
$b = 3;
$c = $a+$b;
echo $a;
echo '&nbsp';
echo $b;
echo '&nbsp';
echo $c;
echo '&nbsp';
$a = 2;
echo $a;
echo '&nbsp';
$c = $b - $a;
echo $a;
echo '&nbsp';
echo $b;
echo '&nbsp';
echo $c;

/*Exercice 3 :
-Créer 2 variables $a et $b qui ont pour valeur 15 et 23,
-Afficher la valeur de chaque variable (utilisez la fonction echo)., 
-Intervertissez les valeurs de $a et $b,
-Afficher la valeur de $a et $b (utilisez la fonction echo).*/
$a = 15;
$b = 23;
echo '&nbsp';
echo $a;
echo '&nbsp';
echo $b;
$temp = $a;
$a = $b;
$b = $temp;
echo '&nbsp';
echo $a;
echo '&nbsp';
echo $b;

/*Exercice 4 :
-Ecrire un programme qui prend le prix HT d’un article (de type float), le nombre d’articles (de type integer) et le taux de TVA (de type float), et qui fournit le prix total TTC (de type float) correspondant. 
-Afficher le prix HT, le nbr d’articles et le taux de TVA (utilisez la fonction echo),
-Afficher le résultat (utilisez la fonction echo).*/
$prixHT = 1.5;
$nbArticle = 3;
$tauxTva = 20/100+1;
$prixTotal = $prixHT * 3 *$tauxTva;
echo '&nbsp';
echo $prixHT;
echo '&nbsp';
echo $nbArticle;
echo '&nbsp';
echo $tauxTva;
echo '&nbsp';
echo number_format($prixTotal, 2);

/*Exercice 1 :
-Créer une variable $a qui a pour valeur « bonjour »,
-Afficher le nom de la variable et sa valeur.*/
echo '&nbsp';
$a = "Bonjour";
echo $a;
/*
Exercice 2 :
-Créer 1 variable $a qui a pour valeur « bon »,
-Créer 1 variable $b qui a pour valeur « jour »,
-Créer 1 variable $c qui a pour valeur 10,
-Concaténer $a, $b et $c + 1,
-Afficher le résultat de la concaténation. */
echo '&nbsp';
$a = "Bon";
$b = "jour";
$c = 10;
echo '&nbsp';
$resultat = $a .$b .$c+1;
echo '&nbsp';
echo $resultat;

/*
Exercice 3 :
-Créer une variable $a qui a pour valeur bonjour,
-Afficher un paragraphe (balise html) et à l’intérieur la phrase suivante :
l’adrar
-Ajouter la variable $a avant la phase dans le paragraphe,
-Cela doit donner :
 <p>bonjour l’adrar</p>*/

$a = "Bonjour";
echo "<p>$a L'Adrar</p>";

/*Exercice 1 :
-Créer une fonction qui soustrait à $a la variable $b (2 paramètres en entrée),
-la fonction doit retourner le résultat (return).*/
function soustrait (int $a, int $b):int{
    $result = $a - $b;
    return $result;
}
$resultat = soustrait(25,12);
echo $resultat;

/*Exercice 2 :  
-Créer une fonction qui prend en entrée un nombre à virgule (float),
- la fonction doit retourner l’arrondi (return) du nombre en entrée (utiliser une fonction interne au langage). */
function number (float $a):float{
return round($a);
}
echo '&nbsp';
echo number(123.36589);

/*Exercice 3 :
-Créer une fonction qui prend en entrée 3 valeurs et retourne somme des 3 valeurs.*/
function addition (int $a, int $b, int $c):int{
    $result = $a + $b + $c;
    return $result;
}
$result = addition(1,2,3);
echo '&nbsp';
echo $result;

/*Exercice 4 :
-Créer une fonction qui prend en entrée 3 valeurs et retourne la valeur moyenne des 3 valeurs (saisies en paramètre).*/
function calculMoyenne (int|float $a, int|float $b, int|float $c):int|float{
    $result = ($a + $b + $c )/3;
    return round ($result, 2);
}
$result= calculMoyenne(10,15,18.5);
echo '&nbsp';
echo $result;

/*Exercice 1 :
- Créer une fonction qui teste si un nombre est positif ou négatif*/
function posNeg($a){
    if($a > 0){
        return 'a est positif';
    } else {
        return 'a est negatif';
    }
}
$result = posNeg(-15);
echo '&nbsp';
echo $result;

/*Exercice 2 :
- Créer une fonction qui prend en entrée 3 valeurs et retourne le nombre le plus grand*/
function bigNumber($a, $b, $c){
    if($a>$b && $a>$c){
        return $a;
    } else if ($b>$a && $b>$c) {
        return $b;
    }else{
        return $c;
    }
}
$resultat = bigNumber(-15, 180, 120);
echo '&nbsp';
echo $resultat;

/*Exercice 3 :
- Créer une fonction qui prend en entrée 3 valeurs et retourne le nombre le plus petit*/
function smallNumber($a, $b, $c){
    if($a<$b && $a<$c){
        return $a;
    } else if ($b<$a && $b<$c) {
        return $b;
    }else{
        return $c;
    }
}
$resultat = smallNumber(-133, -10, 3);
echo '&nbsp';
echo $resultat;

/*Exercice 4 :
- Créer une fonction calculePrixFinal qui prend en entrée un paramètre $prix de type float et retournera le prix final. 
- Si le prix est > à 2000€, la ristourne sera de 20%
- Si le prix est > à 1000€, la ristourne sera de 10%
- Sinon, la ristourne sera de 0*/
function calculePrixFinal(float $prix):float{
    if($prix > 2000){
        return $prix - ($prix * 0.20);
    }elseif ($prix > 1000) {
        return $prix - ($prix * 0.10);
    }else{
        return $prix;
    }
}
$resultat = calculePrixFinal(1100);
echo '&nbsp';
echo $resultat;

/*Exercice 5 :
- Créer une fonction qui prend en entrée 1 année (entier) et qui affiche « l’année x est une année bissextile » si l’année est bissextile ou « l’année x n’est pas une année bissextile » si ce n’est pas une année bissextile
- Pour rappel une année bissextile est définie de la façon suivante (https://fr.wikipedia.org/wiki/Ann%C3%A9e_bissextile)  : 
	- Les années sont en général bissextiles si elles sont multiples de quatre
	- elles ne sont pas bissextiles si elles sont multiples de cent à l'exception des années multiples de quatre cents qui le sont.*/

    //Solution numéro 1
    function year(int $year):int|string{
        if($year%4 === 0){
            return "c'est une année bissextile <br>";
        }else{
            return "ce n'est pas une année bissextile <br>";
        }
        }
        $resultat = year(1933);
        echo '&nbsp';
        echo $resultat;
        
        //Solution numéro 2
        function year2(int $year2):int|string{
            if($year2 <= 1582){
                return "ça n'existait paaaaaaaaas <br>";
            }
        elseif($year2%4 === 0 && $year2%100 != 0 || $year2%400 === 0){
            return "c'est une année bissextile <br>";
        }else{
            return "ce n'est pas une année bissextile <br>";
        }
        }
        $resultat = year2(1504);
        echo '&nbsp';
        echo $resultat;

       /* Exercice 1 :
        - Générez un tableau de longueur 50 en injectant des valeurs aléatoires comprises entre -100 et 100
        - Une fois les données injectées, affichez la taille du tableau
        
        Exercice 2 :
        - Créer une fonction qui affiche la valeur la plus grande du tableau (from scratch puis en utilisant une fonction interne à PHP).
        
        Exercice 3 :
        - Créer une fonction qui affiche la moyenne du tableau.
        
        Exercice 4 :
        - Créer une fonction qui affiche la valeur la plus petite du tableau (from scratch et en utilisant une fonction interne à PHP).*/
        





    ?>
</body>
</html>