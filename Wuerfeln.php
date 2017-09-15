<?php

$wurf = 0;
$anzahlwurf = 0;
do {
	$wurf = rand(0,100);
	$anzahlwurf ++;
}while($wurf != 100);
	echo "Es hat: " . $anzahlwurf . " Würfe, gedauert um eine 6 zu würfeln";

?>