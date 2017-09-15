<?php
require 'config.php';

$mysqli = mysqli_connect("localhost","root","root","enrico_login", 3306) or die("Verbindung zur Datenbank fehlgeschlagen!");
//$mysqli = new PDO("mysql:host=localhost;dbname=enrico_login", "root", "root") or die("Verbindung fehlgeschlagen");

$username = $_POST["username"];
$password = $_POST["password"];
	
if ($password == "" OR $username == "") {
  echo "Eingabefehler. Bitte alle Felder korrekt ausfüllen. <a href=\"register.html\">Zurück</a>";
  exit;
}
	$password_hash = sha1($salt.$password);
	
	$query_string = "SELECT id FROM login_users WHERE username = '$username'";
	$result = $mysqli->query($query_string);
	$menge = $result->num_rows;
	
	//$query = $db->prepare("INSERT INTO users (first_name, last_name, email) VALUES (:fname, :lname, :email)");

	if($menge == 0) { 
	    $eintrag = "INSERT INTO login_users (username, password) VALUES ('$username', '$password_hash')";
	    $eintragen = $mysqli->query($eintrag); 

	    if($eintragen == true) 
	        { echo "Dein Username <b>$username</b> und dein Password wurden eingetragen.";
			echo "Zur <a href=\"Login_Seite.html\">Login Seite</a>";
	    } 
	    else {
		        printf("Error: %s\n", $mysqli->error);
			print "<br />";
			echo "Es trat ein Fehler beim Speichern deines Usernames und/oder deines Passwords auf. <a href=\"register.html\">Zurück</a>"; } 
    	}

	else 
	    { 
	    echo "Dein Username ist schon vorhanden. <a href=\"Register.html\">Zurück</a>"; 
	}	
?>