<?php
include_once("maLibSQL.pdo.php");
// définit les fonctions SQLSelect, SQLUpdate...
include_once "config.php";
// Définit les paramètres de la DB et l'ouvre

// Users //////////////////////////////////////////////////////////////////////

function register($firstname, $name, $birthday, $mail, $password, $username, $id_role, $id_category) {
  global $dbh;
  $query = "INSERT INTO `users`(firstname, name, birthday, mail, password, username, id_role, id_category) VALUES (:firstname, :name, :birthday, :mail, :password, :username, :id_role, :id_category)";
  $sth = $dbh->prepare($query);
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

function getUsers() {

}

function getUser() {

}

function usernameExists() {

}

function validUser() {

}

function updateUser() {

}

function getUsersByRole() {

}

function getUsersByCatAge() {

}

function getUsersByRun() {

}

function getUsersByClub() {

}

function addClub() {

}

function getClub() {

}

function nameExists() {

}

function getClubByUser() {

}

function updateClub() {

}

function addRun() {

}

function delRun() {

}

function getRuns() {

}

function getRun() {

}

function getRunsByCatAge() {

}

function getRunsByUser() {

}

function getRunsByClub() {

}

function getRunsByType_run() {

}

function getRunsByType_field() {

}

function updateRun() {

}

function getCatAge() {

}

function getAllCatAge() {

}

function getCatAgeByUser() {

}

function getCatAgeByRun() {

}

function addParticipateRun() {

}

function delParticipateRun() {

}

function updateParticipateRun() {

}

function getParticipateRun() {

}

function getParticipatesRunByRun() {

}

function getParticipatesRunsByUser() {

}

function addIncludeCharge() {

}

function delIncludeCharge() {

}

function updateIncludeCharge() {

}

function getIncludeCharges() {

}

function getIncludeCharge() {

}

function getIncludeChargeByRun() {

}

function getIncludeChargeByTypeCost() {

}

function addTypeCost() {

}

function delTypeCost() {

}

function getTypeCost() {

}

function getAllTypeCosts() {

}

function addTypeField() {

}

function delTypeField() {

}

function getTypeField() {

}

function getAllTypesField() {

}

function getTypeFieldByRun() {

}

function addTypeRun() {

}

function delTypeRun() {

}

function updateTypeRun() {

}

function getTypeRun() {

}

function getAllTypesRun() {

}

function getTypeRunByRun() {

}

function addRegistered_run() {

}

function delRegistered_run() {

}

function getRegistered_run() {

}

function getAllRegistered_runs() {

}

function getRegistered_runByRun() {

}

function getRegistered_runByUser() {

}



 // Exemple de fonctions... (Ancien fonctionnement, regardez la fonction register pour voir la nouvelle synthaxe...)
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
