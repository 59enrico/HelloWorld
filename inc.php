<?php
function printSiteList($username, $seitennummer=false) {
	if (!$seitennummer) {
		echo "Du heißt $username<br />";
	} else {
		echo "Du heißt auch auf Seite $seitennummer immer noch: $username<br />";	
	}
	echo "<a href=\"seite1.php\">Seite 1</a><br />";
	echo "<a href=\"seite2.php\">Seite 2</a><br />";
	echo "<a href=\"seite3.php\">Seite 3</a><br />";
	echo "<a href=\"logout.php\">Logout</a>";
}