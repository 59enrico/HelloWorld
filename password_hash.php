<?php
$pw = $_POST["pw"];

if ($pw == "") {
  echo "Eingabefehler. Bitte alle Felder korrekt ausfüllen.";
  exit;
}

$pw_hash = sha1($pw);

print $pw_hash
?>