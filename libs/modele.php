<?php
include_once("maLibSQL.pdo.php");
// définit les fonctions SQLSelect, SQLUpdate...

// Utilisateurs ///////////////////////////////////////////////////////////////

function register($log, $pass, $pseudo, $color) {
  $sql = "INSERT INTO USERS(login, password, pseudo, color) VALUES ('$log', '$pass', '$pseudo', '$color')";
  return SQLInsert($sql);
}

function getUser($id) {
  $sql = "SELECT id, pseudo, color, isAdmin FROM USERS WHERE id=$id";
  return parcoursRs(SQLSelect($sql));
}

function pseudoExist($pseudo) {
  $sql = "SELECT pseudo FROM USERS where pseudo='$pseudo'";
  return SQLGetChamp($sql);
}

function loginExist($login) {
  $sql = "SELECT login FROM USERS where login='$login'";
  return SQLGetChamp($sql);
}

function validerUser($log, $pass) {
  $sql = "SELECT id FROM USERS WHERE login='$log' AND password='$pass'";
  return SQLGetChamp($sql);
}

function getCateg() {
  $sql = "SELECT * FROM CATEGORIES";
  return parcoursRs(SQLSelect($sql));
}

// Articles ///////////////////////////////////////////////////////////////////

function addCateg($titre) {
  $sql = "INSERT INTO CATEGORIES(titre) VALUES ('$titre')";
  return SQLInsert($sql);
}

function delCateg($id) {
  $sql = "DELETE FROM CATEGORIES WHERE id = $id";
  return SQLDelete($sql);
}

function getArticles() {
  $sql = "SELECT a.id, titre, pseudo, date_post, vues, color FROM ARTICLES as a, USERS as u WHERE isArchived = 0 AND user_id = u.id";
  return parcoursRs(SQLSelect($sql));
}

function getArticle($id) {
  $sql = "SELECT a.id, titre, user_id, pseudo, color, date_post, message, vues FROM ARTICLES as a, USERS as u WHERE isArchived = 0 AND user_id = u.id AND a.id = $id";
  return parcoursRs(SQLSelect($sql));
}

function getArtByCateg($categ) {
  $sql = "SELECT a.id, titre, pseudo, date_post, vues FROM ARTICLES as a, USERS as u, ART_CATEG WHERE isArchived = 0 AND user_id = u.id AND atr_id = a.id AND categ_id = $categ";
  return parcoursRs(SQLSelect($sql));
}

function updateArt($id, $message) {
  $sql = "UPDATE ARTICLES SET message = '$message' WHERE id = $id";
  return SQLUpdate($sql);
}

function addView($id) {
  $sql = "UPDATE ARTICLES SET vues = ((SELECT vues WHERE id = $id) + 1) WHERE id = $id";
  return SQLUpdate($sql);
}

function addAtr($titre, $message, $user, $date) {
  $sql = "INSERT INTO ARTICLES(titre, message, user_id, date_post) VALUES ('$titre', '$message', $user, '$date')";
  return SQLInsert($sql);
}

function delArt($id) {
  $sql = "DELETE FROM ARTICLES WHERE id = $id";
  return SQLDelete($sql);
}

?>
