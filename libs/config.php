<?php

// MACHINE LINUX
$BDD_host="db;port=3306";
$BDD_user="root";
$BDD_password="root";
$BDD_base="";

try {
  $dbh = new PDO("mysql:host=$BDD_host;dbname=$BDD_base", $BDD_user, $BDD_password);
} catch (PDOException $e) {
  die("<font color=\"red\">Erreur de connexion : " . $e->getMessage() . "</font>");
}

$dbh->exec("SET CHARACTER SET utf8");

?>
