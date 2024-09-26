<?php

echo "Jeu du pendu : retrouvez le mot mystère !\n" ;
$mot_a_trouver = "PROGRAMMATION" ;
$mot_a_completer = "_____________" ;
$essais_restants = 12 ;
while($mot_a_trouver != $mot_a_completer){
    echo "Mot à compléter : {$mot_a_completer}\n" ;
    echo "Nombre d'essais restants : {$essais_restants}\n" ;
    $lettre = readline("Indiquez votre lettre en majuscule, et validez avec la touche Entrée : ") ;
    $lettre_absente = true ;
    for(????????){
        if($mot_a_trouver[$i]==$lettre){
            ???????????
			???????????
        }
    }
    if($lettre_absente){
        $essais_restants -= ???? ;
    }
}
if($essais_restants>0){
    echo "Bravo ! Vous avez trouvé le mot mystère : {$mot_a_trouver}\n" ;
}
else{
    echo "Pendu ! Le mot mystère était {$mot_a_trouver}\n" ;
}