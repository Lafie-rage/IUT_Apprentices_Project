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

function addTypeRun($nom, $distance){
  $sql= "INSERT INTO type_run (label_type_run, distance_type_run) VALUES ( '$nom', '$distance'); "
}

function delTypeRun($id){
  $sql= "DELETE from type_run where id_type_run=$id;"
  return SQLDelete($sql);
}

function updateTypeRun($id, $nom, $distance){
  $sql= "UPDATE type_run SET label_type_run = '$nom', distance_type_run='$distance' where id_type_run = '$id' ;"
  return SQLUpdate($sql);
}

function getTypeRun($id){
$sql= "SELECT * from type_run where id_type_run='$id';"
}

function getTypesRun($id){
$sql= "SELECT * from type_run;"
}

function getTypeRunByRun($id){
$sql= "SELECT * from type_run as t inner join run as r on t.id_type_run=r.id_run where r.id_run='$id';"
return parcoursRs(SQLSelect($sql));
}

function getRegisterRun_by_user($id){
$sql= "SELECT * from register_run where id_user='$id';"
}

function getRegisterRun_by_run($id){
$sql= "SELECT * from register_run where id_run='$id';"
}

function getRegistersRun($id){
$sql= "SELECT * from register_run;"
}

function delRegisterRun_by_user($id){
$sql= "DELETE from register_run where id_user=$id;"
return SQLDelete($sql);
}

function delRegisterRun_by_run($id){
$sql= "DELETE from register_run where id_run=$id;"
return SQLDelete($sql);
}

function getRegisterRunByRun($id){
$sql= "SELECT * from register_run as re inner join run as r on re.id_run=r.id_run where re.id_run='$id';"
return parcoursRs(SQLSelect($sql));
}

function getRegisterRunByUser($id){
$sql= "SELECT * from register_run as re inner join users as s on re.id_user=r.id_user where re.id_user='$id';"
return parcoursRs(SQLSelect($sql));
}

function addRegister_Run(){
$sql= "INSERT INTO register_run VALUES ($id_user, $id_run, NOW()); "
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
