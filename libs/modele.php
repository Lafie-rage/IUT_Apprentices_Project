<?php
include_once("maLibSQL.pdo.php");
include_once "config.php";
// définit les fonctions SQLSelect, SQLUpdate...

// Utilisateurs ///////////////////////////////////////////////////////////////

function register($firstname, $name, $birthday, $mail, $password, $username, $id_role, $id_category) {
  global $dbh;
  $sth = $dbh->prepare("INSERT INTO `users`(firstname, name, birthday, mail, password, username, id_role, id_category) VALUES (:firstname, :name, :birthday, :mail, :password, :username, :id_role, :id_category)");
  $sth->bindParam(':firstname', $firstname);
  $sth->bindParam(':name', $name);
  $sth->bindParam(':birthday', $birthday);
  $sth->bindParam(':mail', $mail);
  $sth->bindParam(':password', $password);
  $sth->bindParam(':username', $username);
  $sth->bindParam(':id_role', $id_role);
  $sth->bindParam(':id_category', $id_category);
  return SQLInsert($sth);
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
