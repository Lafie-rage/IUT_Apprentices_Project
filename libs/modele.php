<?php
include_once("maLibSQL.pdo.php");
include_once "config.php";
// définit les fonctions SQLSelect, SQLUpdate...

// Users //////////////////////////////////////////////////////////////////////

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

function getUsers() {

}

function getUser($id) {
  $sql = "SELECT * FROM users WHERE id_user=$id;";
  return parcoursRs(SQLSelect($sql));
}

function usernameExist() {
  $sql = "SELECT name FROM users where name='$name';";
  return parcoursRs(SQLSelect($sql));
}

function validUser() {
  $sql = "SELECT id FROM users WHERE username='$username' AND password='$pass';";
  return parcoursRs(SQLSelect($sql));
}

function updateUser() {
  $sql = "UPDATE users SET firstname='$firstname', name='$name', birthday='$date_birth', mail='$mail', password='$pass', username='$username'
WHERE id_users = '$user';";
  return parcoursRs(SQLSelect($sql));
}

function getUsersByRole($id) {
  $sql = "SELECT * ,R.label_role FROM users as U INNER JOIN role as R ON U.id_role = R.id_role GROUP BY R.label_role;";
  return parcoursRs(SQLSelect($sql));
}

function getUsersByCatAge($id) {
  $sql = "SELECT * ,C.label_categroy FROM users as U INNER JOIN category_age as ON U.id_category = C.id_category GROUP BY C.label_category;";
  return parcoursRs(SQLSelect($sql));
}

function getUsersByRun($id) {
  $sql = "SELECT * ,R.label_run FROM users as U INNER JOIN participate_run as P ON U.id_users = P.id_users INNER JOIN run as R ON P.id_run = R.id_run GROUP BY C.label_category;";
  return parcoursRs(SQLSelect($sql));
}

function getUsersByClub($id) {
  $sql = "SELECT * ,C.label_club FROM users as U INNER JOIN clubs_users as CU ON U.id_user = CU.id_user INNER JOIN clubs as C ON CU.id_club = C.id_club GROUP BY C.label_club;";
  return parcoursRs(SQLSelect($sql));
}

function addClub(){
  $sql = "INSERT INTO clubs (id_club,label_club,avatar,name,phone,address,mail) VALUES (?,?,?,?,?,?,?);";
  return parcoursRs(SQLSelect($sql));
}

function getClub($id){
  $sql = "SELECT * FROM clubs WHERE id_club=$id;";
  return parcoursRs(SQLSelect($sql));
}

function nameExist(){
  $sql = "SELECT label_club FROM club where label_club='$label_club';"
return parcoursRs(SQLSelect($sql));
}

function getClubByUser($id){
  $sql = "SELECT *,U.firstname,U.name FROM clubs as CL INNER JOIN club_users as CU ON CL.id_club = CU.id_club INNER JOIN users as U ON CU.id_user = U.id_user GROUP BY U.firstname,U.name;";
  return parcoursRs(SQLSelect($sql));
}

function updateClub(){
  $sql = "UPDATE clubs SET label_club='$nameClub', avatar='$avatar', name='$name', phone='$phone', address='$address', mail='$mail' WHERE id_club = ?;";
  return parcoursRs(SQLSelect($sql));
}

function addRun($label,$date,$distance,$unit,$city,$field,$type,$category){
  $sql="INSERT INTO run (label_run,date_run,distance_run,unit,city,id_field,id_type_run,id_category) VALUES ('$label','$date','$distance','$unit','$city',$'field',$'type',$'category');"
return SQLInsert($sql);
}

function delRun($id){
  $sql="DELETE FROM run WHERE id_run='$id';"
return SQLDelete($sql);
}

function getRuns(){
  $sql="SELECT * FROM run;"
return parcoursRs(SQLSelect($sql));
}

function getRun($id){
  $sql="SELECT * FROM run WHERE id_run='$id';"
return parcoursRs(SQLSelect($sql));
}

function getRunsByCategoryAge($id){
  $sql="SELECT r.*, cat.label_category FROM run as r INNER JOIN category_age as cat ON r.id_category = cat.id_category WHERE cat.id_category = '$id';"
return parcoursRs(SQLSelect($sql));
}

function getRunsByUser($id){
  $sql="SELECT r.*, u.name FROM run as r INNER JOIN participate_run as part ON r.id_run = part.id_run INNER JOIN users as u ON part.id_user=u.id_user WHERE u.id_user = '$id';"
return parcoursRs(SQLSelect($sql));
}

function getRunsByClub($id){
  $sql="SELECT r.*, c.label_club FROM run as r INNER JOIN participate_run as part ON r.id_run = part.id_run INNER JOIN users as u ON part.id_user=u.id_user INNER JOIN clubs_users as c_u ON u.id_user=c_u.id_user INNER JOIN clubs as c ON c_u.id_club=c.id_club WHERE c.id_club = '$id';"
return parcoursRs(SQLSelect($sql));
}

function getRunsByType_run($id){
  $sql="SELECT r.*, t_r.label_type_run FROM run as r INNER JOIN type_run as t_r ON r.id_type_run = t_r.id_type_run WHERE t_r.id_type_run = '$id';"
return parcoursRs(SQLSelect($sql));
}

function getRunsByType_field($id){
  $sql="SELECT r.*, t_f.label_field FROM run as r INNER JOIN type_field as t_f ON r.id_field = t_f.id_field WHERE t_f.id_field =' $id';"
return parcoursRs(SQLSelect($sql));
}

function updateRun($id,$label,$date,$distance,$unit,$city){
  $sql="UPDATE run SET label_run='$label', date_run='$date', distance_run='$distance', unit = '$unit', city='$city' WHERE id_run='$id';"
return SQLUpdate($sql);
}

function getCategoryAge(){
  $sql = "SELECT * FROM category_age WHERE id_category = '$id_category';";
  return parcoursRs(SQLSelect($sql));
}

function getAllCatAge() {
  $sql = "SELECT * FROM category_age;";
  return parcoursRs(SQLSelect($sql));
}

function getCategoryAgeByUser(){
  $sql = "SELECT * , U.firstname, U.name FROM users as U INNER JOIN category_age as CAT ON U.id_category = CAT.id_category GROUP BY U.firstname AND U.name ;";
  return parcoursRs(SQLSelect($sql));
}

function getCategoryAgeByRun(){
  $sql = "SELECT *,R.label_run FROM run AS R INNER JOIN category_age as CAT ON R.id_category = CAT.id_category GROUP BY R.label_run;";
  return parcoursRs(SQLSelect($sql));
}

function addParticipateRun($date,$time,$rank,$user,$run){
  $sql="INSERT INTO participate_run(date_participation,time,rank;id_user,id_run) VALUES ('$date','$time','$rank','$user','$run');"
return SQLInsert($sql);
}

function delParticipateRun(){
  $sql = "DELETE from participate_run where id_participate =$id;"
return SQLDelete($sql);
}

function updateParticipateRun() {

}

function getParticipateRun() {

}

function getParticipatesRunByRun($id_run){
  $sql = "SELECT FROM participate_run WHERE id_run = $id_run";
  return SQLSelect($sql);
}

function getParticipatesRunByUser($id_user){
  $sql = "SELECT FROM participate_run WHERE id_user = $id_user";
  return SQLSelect($sql);
}

function addIncludeCharge($cost, $comment){
  $sql = "INSERT INTO include_charge(id_participate,id_charge, cost,comment) VALUES ($id_participate, $id_charge, '$cost', '$comment')";
  return SQLInsert($sql);
}

function delIncludeCharge($id_charge){
  $sql = "DELETE FROM include_charge WHERE id_charge = $id_charge";
  return SQLDelete($sql);
}

function updateIncludeCharge($cost, $comment, $id_charge){
  $sql = "UPDATE include_charge SET cost = '$cost', comment = '$comment' WHERE id_charge = $id_charge";
  return SQLUpdate($sql);
}

function getIncludeCharge($id_charge){
  $sql = "SELECT * FROM include_charge WHERE id_charge = $id_charge";
  return SQLSelect($sql);
}

function getIncludeCharges(){
  $sql = "SELECT * FROM include_charge";
  return SQLSelect($sql);
}

function getIncludeChargesByRun($id_run){
  $sql = "SELECT * FROM include_charge as i, participate_run as p WHERE p.id_run = $id_run AND i.participate = p.participate";
  return SQLSelect($sql);
}

function getIncludeChargesByTypeCost($id_type_cost){
  $sql = "SELECT * FROM include_charge as i WHERE i.id_participate = $id_type_cost ";
  return SQLSelect($sql);
}

function addTypeCost($id_type_cost, $label_type_cost) {
  $sql = "INSERT INTO type_cost(id_type_cost, label_type_cost) VALUES ('$id_type_cost', '$label_type_cost')";
  return SQLInsert($sql);
}

function delTypeCost() {
  $sql = "DELETE FROM type_cost WHERE id_type_cost = $id";
  return SQLDelete($sql);
}

function getTypeCost($id) {
  $sql = "SELECT id_type_cost, label_type_cost FROM TYPE_COST WHERE id_type_cost = $id";
  return parcoursRs(SQLSelect($sql));
}

function getAllTypeCosts() {
  $sql = "SELECT id_type_cost, label_type_cost FROM type_cost";
  return parcoursRs(SQLSelect($sql));
}

function addTypeField() {

}

function delTypeField() {

}

function getTypeField($id){
  $sql="SELECT * FROM type_field WHERE id_run='$id';"
return parcoursRs(SQLSelect($sql));
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
