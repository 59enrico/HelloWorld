<?php
	
$mysqli = mysqli_connect("localhost","root","root", "enrico_newsletter", 3306) or die("Verbindung zur Datenbank fehlgeschlagen");	
	
$name = $_POST["name"];
$email = $_POST["email"];	
	
if($email == "" OR $name == "") {
	echo "Eingabefehler. Bitte alle Felder korrekt ausfüllen. <a href=\"eintragen.html\">Zurück</a>";
	exit;
	}
	
	$result = $mysqli->query("SELECT id FROM newsletter_recipients WHERE email LIKE '$email'");
	
	$menge = $result->num_rows; 

	if($menge == 0) 
	    { 
	    $eintrag = "INSERT INTO newsletter_recipients (name, email) VALUES ('$name', '$email')";
	    $eintragen = $mysqli->query($eintrag); 

	    if($eintragen == true) 
	        { echo "Deine E-Mail-Adresse <b>$email</b> wurde eingetragen."; } 
	    else 
	        {
		        printf("Error: %s\n", $mysqli->error);
			print "<br />";
			echo "Es trat ein Fehler beim Speichern deiner eMail-Adresse auf. <a href=\"eintragen.html\">Zur&uuml;ck</a>"; } 
    		}

	else 
	    { 
	    echo "Deine eMail-Adresse ist schon vorhanden. <a href=\"eintragen.html\">Zurück</a>"; 
	    }
?>