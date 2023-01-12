<?php

//EXO 1
function true(){
    return true;
}

//EXO 2
function chaine($string){
    echo $string . "<br>";
}
chaine("chaine de caracteres");

//EXO 3
function deuxChaines($string1, $string2){
    echo $string1 . $string2 . "<br>";
}

deuxChaines("chaine 1"," et chaine 2");

//EXO 4
function deuxNombres($num1, $num2){
    if ($num1>$num2){
        echo "num 1 plus quand que num 2 <br>";
    }
    else if ($num1<$num2){
        echo "num 1 est plus petit que num 2 <br>";
    }
    else {
        echo "num 1 et num 2 sont égaux <br>";
    }
}

deuxNombres("4","12");
deuxNombres("12","2");
deuxNombres("6","6");

//EXO 5
function numString($num,$string){
    echo $num . $string . "<br>";
}
numString(3," bonjour");

//EXO 6
function bonjour($lastName,$firstName,$age){
    echo "Bonjour " . $lastName . $firstName . ", tu as " . $age . " ans<br>";
}
bonjour("Vanhoorne","Lilian",22);

//EXO 7
function ageGenre($genre,$age){
    if ($genre === "homme" && $age > 18){
        echo "Vous êtes un homme et vous êtes majeur<br>";
    }
    else if($genre === "homme" && $age < 18){
        echo "Vous êtes un homme et vous êtes mineur<br>";
    }
    else if ($genre === "femme" && $age > 18){
        echo "Vous êtes une femme et vous êtes majeure<br>";
    }
    else if($genre === "femme" && $age < 18){
        echo "Vous êtes une femme et vous êtes mineure<br>";
    }
    else{
        echo "Vous êtes non-binaire(ou autre) et vous avez " . $age . "ans, vous êtes donc majeur.e <br>";
    }
}
ageGenre("homme",22);
ageGenre("homme",13);
ageGenre("femme",22);
ageGenre("femme",13);
ageGenre("",21);

function add($nb1 = 1, $nb2 = 2, $nb3 = 3){
    echo "addition = " . $nb1 + $nb2 + $nb3;
}
add();