<?php

// <!-- Exercice 1 :
// - Générez un tableau de longueur 50 en injectant des valeurs aléatoires comprises entre -100 et 100
// - Une fois les données injectées, affichez la taille du tableau -->
$arraySize = 50;
            $array = [];

            for ($i = 0; $i < $arraySize; $i++) {
                $array[] = rand(-100, 100);
            }

            // var_dump($array);

            echo "<p>La taille du tableau créé est :  " . count($array) . '</p>';


// <!-- Exercice 2 :
// - Créer une fonction qui affiche la valeur la plus grande du tableau (from scratch puis en utilisant une fonction interne à PHP). -->

function getMaxValue(array $tab):int
            {
                $maxValue = null;

                foreach ($tab as $val) {
                    if ($maxValue === null || $val > $maxValue) {
                        $maxValue = $val;
                    }
                }

                return $maxValue;
            }
            
            echo "<p>La valeur maximale du tableau est : " . getMaxValue($array) . '</p>';

            echo '<p>En utilisant la fonction native de PHP, on obtient la valeur maximale d\'un tableau en utilisant la fonction "max()" : ' . max($array) . '</p>';

// <!-- Exercice 3 :
// - Créer une fonction qui affiche la moyenne du tableau. -->

function getArrayAverage(array $tab):float
{
    return array_sum($tab) / count($tab);
}

echo "<p>La valeur moyenne du tableau est : " . getArrayAverage($array) . '</p>';


// <!-- Exercice 4 :
// - Créer une fonction qui affiche la valeur la plus petite du tableau (from scratch et en utilisant une fonction interne à PHP). -->

function getMinValue(array $tab):int
            {
                $minValue = null;

                foreach ($tab as $val) {
                    if ($minValue === null || $val < $minValue) {
                        $minValue = $val;
                    }
                }

                return $minValue;
            }
            
            echo "<p>La valeur minimale du tableau est : " . getMinValue($array) . '</p>';

            echo '<p>En utilisant la fonction native de PHP, on obtient la valeur minimale d\'un tableau en utilisant la fonction "min()" : ' . min($array) . '</p>';


//             Exercice 1 :
// - A l’aide de la fonction « range » créez un tableau contenant tous les nombres de 0 à 1000.
// - Parcourez le tableau et extrayez tous les nombres premiers dans un autre tableau (un nombre premier n’est divisible que par 1 et par lui-même).
// - Affichez les nombres premiers ainsi obtenus dans une liste HTML (<ul><li>). 

function isPremier(int $nb):bool
            {
                if ($nb < 2) {
                    return false;
                }

                for ($i = 2; $i < $nb; $i++) {
                    if ($nb % $i === 0) {
                        return false;
                    }
                }

                return true;
            }

            $array = range(0,100);
            $nbPremiers = [];

            foreach($array as $nb) {
                if (isPremier($nb)) {
                    $nbPremiers[] = $nb;
                }
            }

            echo "<p>La taille du tableau des nombres premiers est :  " . count($nbPremiers) . '</p>';

            echo "<ul>";
            foreach ($nbPremiers as $nbPremier) {
                echo "<li>$nbPremier</li>";
            }
            echo "</ul>";
        ?>

        <h2>Exercice 1.1</h2>
        <?php
            $nbPremiersV2 = range(0,100);
            $arrayLength = count($nbPremiersV2);

            for ($i = 0; $i < $arrayLength; $i++) {
                if (!isPremier($nbPremiersV2[$i])) {
                    unset($nbPremiersV2[$i]);
                }
            }

            // Reindexion du tableau 

            $nbPremiersV2 = array_values($nbPremiersV2);

            echo "<p>La taille du tableau des nombres premiers est :  " . count($nbPremiersV2) . '</p>';

            echo "<ul>";
            foreach ($nbPremiersV2 as $nbPremier) {
                echo "<li>$nbPremier</li>";
            }
            echo "</ul>";

?>