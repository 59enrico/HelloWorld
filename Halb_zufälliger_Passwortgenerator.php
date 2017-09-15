<?php

$Alphabet = array("q", "w", "e", "r", "t", "z", "u", "i", "o", "p", "a", "s", "d", "f", "g", "h", "j", "k", "l", "y", "x", "c", "v", "b", "n", "m", "Q", "W", "E", "R", "T", "Z", "U", "I", "O", "P", "A", "S", "D", "F", "G", "H", "J", "K", "L", "Y", "X", "C", "V", "B", "N", "M");

$SonderZ = array(".", ":", ";", "!", "§", "$", "%", "&", "/", "(", ")", "=", "?", "*", "+", "#");

$r1 = rand(0,9);
$r2 = rand(0,9);
$r3 = rand(0,9);
$r4 = rand(0,9);
$r5 = rand(0,9);
$r6 = rand(0,9);
$r7 = rand(0,9);
$r8 = rand(0,9);
$r9 = rand(0,9);
$r10 = rand(0,9);

$ra1 = rand(0,count($Alphabet)-1);
$ra2 = rand(0,count($Alphabet)-1);
$ra3 = rand(0,count($Alphabet)-1);
$ra4 = rand(0,count($Alphabet)-1);
$ra5 = rand(0,count($Alphabet)-1);
$ra6 = rand(0,count($Alphabet)-1);
$ra7 = rand(0,count($Alphabet)-1);
$ra8 = rand(0,count($Alphabet)-1);
$ra9 = rand(0,count($Alphabet)-1);
$ra10 = rand(0,count($Alphabet)-1);

$rS1 = rand(0,count($SonderZ)-1);
$rS2 = rand(0,count($SonderZ)-1);
$rS3 = rand(0,count($SonderZ)-1);
$rS4 = rand(0,count($SonderZ)-1);
$rS5 = rand(0,count($SonderZ)-1);
$rS6 = rand(0,count($SonderZ)-1);
$rS7 = rand(0,count($SonderZ)-1);
$rS8 = rand(0,count($SonderZ)-1);
$rS9 = rand(0,count($SonderZ)-1);
$rS10 = rand(0,count($SonderZ)-1);


print "Ihr zufälliges Passwort: " . "$r1" . "$Alphabet[$ra1]" . "$SonderZ[$rS1]" . "$r2" . "$Alphabet[$ra2]" . "$SonderZ[$rS2]" . "$r3" . "$Alphabet[$ra3]" . "$SonderZ[$rS3]" . "$r4" . "$Alphabet[$ra4]" . "$SonderZ[$rS4]" . "$r5" . "$Alphabet[$ra5]" . "$SonderZ[$rS5]" . "$r6" . "$Alphabet[$ra6]" . "$SonderZ[$rS6]" . "$r7" . "$Alphabet[$ra7]" . "$SonderZ[$rS7]" . "$r8" . "$Alphabet[$ra8]" . "$SonderZ[$rS8]" . "$r9" . "$Alphabet[$ra9]" . "$SonderZ[$rS9]" . "$r10" . "$Alphabet[$ra10]" . "$SonderZ[$rS10]" . ".";

?>