<?php
require 'config.php';

$username = $_POST['username'];
$password = $_POST['password'];

$mysqli = mysqli_connect("localhost","root","root","enrico_login", 3306) or die("Verbindung zur Datenbank fehlgeschlagen!");
//$mysqli = new PDO("mysql:host=localhost;dbname=enrico_login", "root", "root") or die("Verbindung fehlgeschlagen");

$hashed_password = sha1($salt . $password);

$query_string = "SELECT username, password FROM login_users WHERE username = '$username' AND password = '$hashed_password' LIMIT 1;";
$result = $mysqli->query($query_string);
$row = mysqli_fetch_assoc($result);
/*
while($row = $result->fetch(PDO::FETCH_ASSOC)){
	print_r($row)
}
*/
if (empty($row)) {
	echo "<p>Benutzername oder Passwort falsch.<br /><a href=\"LogIn_Seite.html\">Zur LogIn Seite.</a></p>";
	exit;
} else {
	session_start();
	$_SESSION['username'] = $username;
	echo "Hallo $username<br />";
	echo "<a href=\"seite1.php\">Seite 1</a><br />";
	echo "<a href=\"seite2.php\">Seite 2</a><br />";
	echo "<a href=\"seite3.php\">Seite 3</a><br />";
	echo "<a href=\"logout.php\">Logout</a>";
}
?>