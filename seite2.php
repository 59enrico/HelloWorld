<?php
require 'inc.php';
session_start();
 
if(!isset($_SESSION['username'])) {
   die("Bitte erst einloggen<br /><a href=\"LogIn_Seite.html\">LogIn</a>");
}

$username = $_SESSION['username'];
printSiteList($username, 2);
?>