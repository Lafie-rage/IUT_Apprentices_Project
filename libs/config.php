<?php

// MACHINE LINUX
$BDD_host="51.210.10.236;port=3306";
//$BDD_host="localhost;port=3306";
$BDD_user="dev";
$BDD_password="z7A*p9JjB8^}";
//$BDD_user="root";
//$BDD_password="root";
$BDD_base="CAN-APP_Dev";

try {
  $dbh = new PDO("mysql:host=$BDD_host;dbname=$BDD_base", $BDD_user, $BDD_password);
} catch (PDOException $e) {
  die("<font color=\"red\">Erreur de connexion : " . $e->getMessage() . "</font>");
}

$dbh->exec("SET CHARACTER SET utf8");

?>
