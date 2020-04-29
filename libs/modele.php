<?php
include_once("maLibSQL.pdo.php");
include_once "config.php";
// définit les fonctions SQLSelect, SQLUpdate...

// Utilisateurs ///////////////////////////////////////////////////////////////

function register($log, $pass, $pseudo, $color) {
  global $dbh;
  $dbh->prepare("INSERT INTO USERS(login, password, pseudo, color) VALUES (:log, :pass, :pseudo, :color)");
  $dbh->bindParam(':log', $log);
  $dbh->bindParam(':pass', $pass);
  $dbh->bindParam(':pseudo', $pseudo);
  $dbh->bindParam(':color', $color);
  return SQLInsert($dbh);
}

function getUser($id) {
  $sql = "SELECT id, pseudo, color, isAdmin FROM USERS WHERE id=$id";
  return parcoursRs(SQLSelect($sql));
}

function pseudoExist($pseudo) {
  $sql = "SELECT pseudo FROM USERS where pseudo='$pseudo'";
  return SQLGetChamp($sql);
}

function delCateg($id) {
  $sql = "DELETE FROM CATEGORIES WHERE id = $id";
  return SQLDelete($sql);
}

?>
