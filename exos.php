<?php

// <!-- Exo Conditions -->

// <!-- Exercice 1 :
// - Créer une fonction qui teste si un nombre est positif ou négatif -->

 function posNeg($a){
    if($a > 0){
        return 'a est positif';
    } else {
        return 'a est negatif';
    }
}
$result = posNeg(-15);
echo $result;


// <!-- Exercice 2 :
// - Créer une fonction qui prend en entrée 3 valeurs et retourne le nombre le plus grand -->

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
echo $resultat;



// <!-- Exercice 3 :
// - Créer une fonction qui prend en entrée 3 valeurs et retourne le nombre le plus petit -->

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
echo $resultat;


// <!-- Exercice 4 :
// - Créer une fonction calculePrixFinal qui prend en entrée un paramètre $prix de type float et retournera le prix final. 
// - Si le prix est > à 2000€, la ristourne sera de 20%
// - Si le prix est > à 1000€, la ristourne sera de 10%
// - Sinon, la ristourne sera de 0 -->

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
echo $resultat;



// php exo4 amélioré 
// function year(int $year):int|string{
//     if($year <= 1582){
//         return "ça n'existait paaaaaaaaas";
//     }
// elseif($year%4 === 0 && $year%100 != 0 || $year%400 === 0){
//     return "c'est une année bissextile";
// }else{
//     return "ce n'est pas une année bissextile";
// }
// }
// $resultat = year(1504);
// echo $resultat;

// <!-- Exercice 5 :
// - Créer une fonction qui prend en entrée 1 année (entier) et qui affiche « l’année x est une année bissextile » si l’année est bissextile ou « l’année x n’est pas une année bissextile » si ce n’est pas une année bissextile
// - Pour rappel une année bissextile est définie de la façon suivante (https://fr.wikipedia.org/wiki/Ann%C3%A9e_bissextile)  : 
// 	- Les années sont en général bissextiles si elles sont multiples de quatre
// 	- elles ne sont pas bissextiles si elles sont multiples de cent à l'exception des années multiples de quatre cents qui le sont. -->

    function year(int $year):int|string{
if($year%4 === 0){
    return "c'est une année bissextile";
}else{
    return "ce n'est pas une année bissextile";
}
}
$resultat = year(1933);
echo $resultat;

?>