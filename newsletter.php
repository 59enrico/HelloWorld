<?php

$mysqli = mysqli_connect("localhost","root","root","enrico_newsletter", 3306) or die("Keine Verbindung möglich."); 

function my_mail($emails, $betreff, $text, $header) {
	echo "<p><u>E-Mail von:</u> <b>$header</b><br />
		<u>Betreff:</u> <b>$betreff</b><br />
		<u>Text:</u> <b>$text</b><br />
		<br />
		versandt an:<br />
		<b>" . implode(', <br />', $emails) . "</b>.";
}

$absender_email = 'noreply@local.dev';

$name = $_POST["name"];
$email = $_POST["email"];
$betreff = $_POST["betreff"];
$text = $_POST["nachricht"];

	$query_string = "SELECT * FROM newsletter_recipients";
	$result = $mysqli->query($query_string);
	$recipients = array();
	while($row = mysqli_fetch_assoc($result)) {
		//echo "<p>Die E-Mail wird an folgende E-Mail-Adresse/n gesendet: " . $row['email'] . "</p>";	
		$recipients[] = $row['email'];
	}
	my_mail($recipients, $betreff, $text, "$name, $email.");
?>