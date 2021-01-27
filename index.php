<?php

/**
 * 1. Générez un nombre aléatoire compris entre 0 et 50, affichez le avec echo dans un nouveau <div>.
 */

// TODO Votre code ici.
$alea = rand(0,50);
echo "<div>$alea</div>";


/**
 * 2. Générez un nombre aléatoire compris entre 50 et getrandmax, affichez le résultat dans un nouveau <p>
 */

// TODO Votre code ici.
$alea = rand(50, getrandmax());
echo "<p>$alea</p>";

/**
 * 3. Générez un nombre aléatoire compris entre 0 et 50
 * ==> si le nombre est inférieur ou égal à 25, affichez : vous avez gagné ( dans un nouveau <p> )
 * ==> si ce n'est pas le cas, affichez : vous avez perdu ( dans un nouveau <p> )
 */

// TODO Votre code ici.
$alea = rand(0,50);
if($alea < 25){
    echo "<p>Vous avez gagné</p>";
}else{
    echo "<p>Vous avez perdu</p>";
}

/**
 * 4. Créez une fonction qui génère un nombre aléatoire compris entre $max et $min ( paramètres ).
 * ==> Si le nombre est compris entre $max et $max -100, regénérez un nouveau nombre avec un appel récursif.
 * ==> Si ce n'est pas le cas, retournez tout simplement le nombre généré.
 */

// TODO Votre code ici.
echo maxAndMin(-100, 300);
function maxAndMin(Int $max, Int $min){
    $alea = rand($min, $max);
    if($alea < $max - 100){
        maxAndMin($min, $max);
    }else{
        return $alea;
    }
}





