<?php
session_start();
session_destroy();
echo "Logout erfolgreich<br />";
echo "Zur <a href=\"LogIn_Seite.html\">LogIn Seite</a>";
?>