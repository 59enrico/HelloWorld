<?php

$Auswahl = array("q", "w", "e", "r", "t", "z", "u", "i", "o", "p", "a", "s", "d", "f", "g", "h", "j", "k", "l", "y", "x", "c", "v", "b", "n", "m", "Q", "W", "E", "R", "T", "Z", "U", "I", "O", "P", "A", "S", "D", "F", "G", "H", "J", "K", "L", "Y", "X", "C", "V", "B", "N", "M", ".", ":", ";", "!", "§", "$", "%", "&", "/", "(", ")", "=", "?", "*", "+", "#", 1, 2, 3, 4, 5, 6, 7, 8, 9, 0);

$P1 = rand(0,count($Auswahl)-1);
$P2 = rand(0,count($Auswahl)-1);
$P3 = rand(0,count($Auswahl)-1);
$P4 = rand(0,count($Auswahl)-1);
$P5 = rand(0,count($Auswahl)-1);
$P6 = rand(0,count($Auswahl)-1);
$P7 = rand(0,count($Auswahl)-1);
$P8 = rand(0,count($Auswahl)-1);
$P9 = rand(0,count($Auswahl)-1);
$P10 = rand(0,count($Auswahl)-1);
$P11 = rand(0,count($Auswahl)-1);
$P12 = rand(0,count($Auswahl)-1);
$P13 = rand(0,count($Auswahl)-1);
$P14 = rand(0,count($Auswahl)-1);
$P15 = rand(0,count($Auswahl)-1);
$P16 = rand(0,count($Auswahl)-1);

print "Dein 16-Zeichen langes Passwort lautet:<br /><b>" . $Auswahl[$P1] . $Auswahl[$P2] . $Auswahl[$P3] . $Auswahl[$P4] . $Auswahl[$P5] . $Auswahl[$P6] . $Auswahl[$P7] . $Auswahl[$P8] . $Auswahl[$P9] . $Auswahl[$P10] . $Auswahl[$P11] . $Auswahl[$P12] . $Auswahl[$P13] . $Auswahl[$P14] . $Auswahl[$P15] . $Auswahl[$P16] . "</b>";

?>