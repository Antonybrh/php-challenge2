<?php
$Codesecret1 = "0@sn9sirppa@#?ia'jgtvryko1";
$Codesecret2 = "q8e?wsellecif@#?sel@#?setuotpazdsy0*b9+mw@x1vj";
$Codesecret3 = "aopi?sgnirts@#?sedhtg+p9l!";
// variables des codes secrets!

$longueur = strlen($Codesecret1);
$nombre = floor($longueur/2);
$souchaine1 = substr($Codesecret1,5,$nombre);
$replace = str_replace('@#?', '  ',$souchaine1,);
$chainefinale = strrev($replace);
echo $chainefinale; //chaine finale 1
echo ' ';

$longueur2 = strlen($Codesecret2); //Longueur de la chaine !
$nombre2 = floor($longueur2/2);//Divisé par (2) pour chiffre clé !
$souchaine2 = substr($Codesecret2,5,$nombre2); //retourner le chiffre clé à partir du 6ème caractère !
$replace2 = str_replace('@#?', '  ',$souchaine2);//remplacer les caractère spéciaux par un espace !
$chainefinale2 = strrev($replace2);//inverser la chaine pour avoir le mot !
echo $chainefinale2;//chaine finale 2
echo ' ';

$longueur3 = strlen($Codesecret3);
$nombre3 = floor($longueur3/2);
$souchaine3 = substr($Codesecret3,5,$nombre3);
$replace3 = str_replace('@#?', '  ',$souchaine3);
$chainefinale3 = strrev($replace3);
echo $chainefinale3; //chaine finale !
echo ' ';



?>