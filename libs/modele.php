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

function getUser($id) {
  $query = "SELECT * FROM users WHERE id_user=:id;";
  $sth = $dbh->prepare($query);
  $sth->bindParam(':id', $id);
  return SQLSelect($sth);
}

function usernameExist() {
  $query = "SELECT name FROM users where name='$name';";
  return parcoursRs(SQLSelect($query));
}

function validUser() {
  $query = "SELECT id FROM users WHERE username='$username' AND password='$pass';";
  return parcoursRs(SQLSelect($query));
}

function updateUser() {
  $query = "UPDATE users SET firstname='$firstname', name='$name', birthday='$date_birth', mail='$mail', password='$pass', username='$username'
WHERE id_users = '$user';";
  return parcoursRs(SQLSelect($query));
}

function getUsersByRole($id) {
  $query = "SELECT * ,R.label_role FROM users as U INNER JOIN role as R ON U.id_role = R.id_role GROUP BY R.label_role;";
  return parcoursRs(SQLSelect($query));
}

function getUsersByCatAge($id) {
  $query = "SELECT * ,C.label_categroy FROM users as U INNER JOIN category_age as ON U.id_category = C.id_category GROUP BY C.label_category;";
  return parcoursRs(SQLSelect($query));
}

function getUsersByRun($id) {
  $query = "SELECT * ,R.label_run FROM users as U INNER JOIN participate_run as P ON U.id_users = P.id_users INNER JOIN run as R ON P.id_run = R.id_run GROUP BY C.label_category;";
  return parcoursRs(SQLSelect($query));
}

function getUsersByClub($id) {
  $query = "SELECT * ,C.label_club FROM users as U INNER JOIN clubs_users as CU ON U.id_user = CU.id_user INNER JOIN clubs as C ON CU.id_club = C.id_club GROUP BY C.label_club;";
  return parcoursRs(SQLSelect($query));
}

function addClub(){
  $query = "INSERT INTO clubs (id_club,label_club,avatar,name,phone,address,mail) VALUES (?,?,?,?,?,?,?);";
  return parcoursRs(SQLSelect($query));
}

function getClub($id){
  $query = "SELECT * FROM clubs WHERE id_club=$id;";
  return parcoursRs(SQLSelect($query));
}

function nameExist(){
  $query = "SELECT label_club FROM club where label_club='$label_club';"
return parcoursRs(SQLSelect($query));
}

function getClubByUser($id){
  $query = "SELECT *,U.firstname,U.name FROM clubs as CL INNER JOIN club_users as CU ON CL.id_club = CU.id_club INNER JOIN users as U ON CU.id_user = U.id_user GROUP BY U.firstname,U.name;";
  return parcoursRs(SQLSelect($query));
}

function updateClub(){
  $query = "UPDATE clubs SET label_club='$nameClub', avatar='$avatar', name='$name', phone='$phone', address='$address', mail='$mail' WHERE id_club = ?;";
  return parcoursRs(SQLSelect($query));
}

function addRun($label,$date,$distance,$unit,$city,$field,$type,$category){
  $query="INSERT INTO run (label_run,date_run,distance_run,unit,city,id_field,id_type_run,id_category) VALUES ('$label','$date','$distance','$unit','$city',$'field',$'type',$'category');"
return SQLInsert($query);
}

function delRun($id){
  $query="DELETE FROM run WHERE id_run='$id';"
return SQLDelete($query);
}

function getRuns(){
  $query="SELECT * FROM run;"
return parcoursRs(SQLSelect($query));
}

function getRun($id){
  $query="SELECT * FROM run WHERE id_run='$id';"
return parcoursRs(SQLSelect($query));
}

function getRunsByCategoryAge($id){
  $query="SELECT r.*, cat.label_category FROM run as r INNER JOIN category_age as cat ON r.id_category = cat.id_category WHERE cat.id_category = '$id';"
return parcoursRs(SQLSelect($query));
}

function getRunsByUser($id){
  $query="SELECT r.*, u.name FROM run as r INNER JOIN participate_run as part ON r.id_run = part.id_run INNER JOIN users as u ON part.id_user=u.id_user WHERE u.id_user = '$id';"
return parcoursRs(SQLSelect($query));
}

function getRunsByClub($id){
  $query="SELECT r.*, c.label_club FROM run as r INNER JOIN participate_run as part ON r.id_run = part.id_run INNER JOIN users as u ON part.id_user=u.id_user INNER JOIN clubs_users as c_u ON u.id_user=c_u.id_user INNER JOIN clubs as c ON c_u.id_club=c.id_club WHERE c.id_club = '$id';"
return parcoursRs(SQLSelect($query));
}

function getRunsByType_run($id){
  $query="SELECT r.*, t_r.label_type_run FROM run as r INNER JOIN type_run as t_r ON r.id_type_run = t_r.id_type_run WHERE t_r.id_type_run = '$id';"
return parcoursRs(SQLSelect($query));
}

function getRunsByType_field($id){
  $query="SELECT r.*, t_f.label_field FROM run as r INNER JOIN type_field as t_f ON r.id_field = t_f.id_field WHERE t_f.id_field =' $id';"
return parcoursRs(SQLSelect($query));
}

function updateRun($id,$label,$date,$distance,$unit,$city){
  $query="UPDATE run SET label_run='$label', date_run='$date', distance_run='$distance', unit = '$unit', city='$city' WHERE id_run='$id';"
return SQLUpdate($query);
}

function getCategoryAge(){
  $query = "SELECT * FROM category_age WHERE id_category = '$id_category';";
  return parcoursRs(SQLSelect($query));
}

function getAllCatAge() {
  $query = "SELECT * FROM category_age;";
  return parcoursRs(SQLSelect($query));
}

function getCategoryAgeByUser(){
  $query = "SELECT * , U.firstname, U.name FROM users as U INNER JOIN category_age as CAT ON U.id_category = CAT.id_category GROUP BY U.firstname AND U.name ;";
  return parcoursRs(SQLSelect($query));
}

function getCategoryAgeByRun(){
  $query = "SELECT *,R.label_run FROM run AS R INNER JOIN category_age as CAT ON R.id_category = CAT.id_category GROUP BY R.label_run;";
  return parcoursRs(SQLSelect($query));
}

function addParticipateRun($date,$time,$rank,$user,$run){
  $query="INSERT INTO participate_run(date_participation,time,rank;id_user,id_run) VALUES ('$date','$time','$rank','$user','$run');"
return SQLInsert($query);
}

function delParticipateRun(){
  $query = "DELETE from participate_run where id_participate =$id;"
return SQLDelete($query);
}

function updateParticipateRun() {

}

function getParticipateRun() {

}

function getParticipatesRunByRun($id_run){
  $query = "SELECT FROM participate_run WHERE id_run = $id_run";
  return SQLSelect($query);
}

function getParticipatesRunByUser($id_user){
  $query = "SELECT FROM participate_run WHERE id_user = $id_user";
  return SQLSelect($query);
}

function addIncludeCharge($cost, $comment){
  $query = "INSERT INTO include_charge(id_participate,id_charge, cost,comment) VALUES ($id_participate, $id_charge, '$cost', '$comment')";
  return SQLInsert($query);
}

function delIncludeCharge($id_charge){
  $query = "DELETE FROM include_charge WHERE id_charge = $id_charge";
  return SQLDelete($query);
}

function updateIncludeCharge($cost, $comment, $id_charge){
  $query = "UPDATE include_charge SET cost = '$cost', comment = '$comment' WHERE id_charge = $id_charge";
  return SQLUpdate($query);
}

function getIncludeCharge($id_charge){
  $query = "SELECT * FROM include_charge WHERE id_charge = $id_charge";
  return SQLSelect($query);
}

function getIncludeCharges(){
  $query = "SELECT * FROM include_charge";
  return SQLSelect($query);
}

function getIncludeChargesByRun($id_run){
  $query = "SELECT * FROM include_charge as i, participate_run as p WHERE p.id_run = $id_run AND i.participate = p.participate";
  return SQLSelect($query);
}

function getIncludeChargesByTypeCost($id_type_cost){
  $query = "SELECT * FROM include_charge as i WHERE i.id_participate = $id_type_cost ";
  return SQLSelect($query);
}

function addTypeCost($id_type_cost, $label_type_cost) {
  $query = "INSERT INTO type_cost(id_type_cost, label_type_cost) VALUES ('$id_type_cost', '$label_type_cost')";
  return SQLInsert($query);
}

function delTypeCost() {
  $query = "DELETE FROM type_cost WHERE id_type_cost = $id";
  return SQLDelete($query);
}

function getTypeCost($id) {
  $query = "SELECT id_type_cost, label_type_cost FROM TYPE_COST WHERE id_type_cost = $id";
  return parcoursRs(SQLSelect($query));
}

function getAllTypeCosts() {
  $query = "SELECT id_type_cost, label_type_cost FROM type_cost";
  return parcoursRs(SQLSelect($query));
}

function addTypeField() {

}

function delTypeField() {

}

function getTypeField($id){
  $query="SELECT * FROM type_field WHERE id_run='$id';"
return parcoursRs(SQLSelect($query));
}

function getAllTypesField() {

}

function getTypeFieldByRun() {

}

function addTypeRun($nom, $distance){
  $query= "INSERT INTO type_run (label_type_run, distance_type_run) VALUES ( '$nom', '$distance'); "
}

function delTypeRun($id){
  $query= "DELETE from type_run where id_type_run=$id;"
  return SQLDelete($query);
}

function updateTypeRun($id, $nom, $distance){
  $query= "UPDATE type_run SET label_type_run = '$nom', distance_type_run='$distance' where id_type_run = '$id' ;"
  return SQLUpdate($query);
}

function getTypeRun($id){
$query= "SELECT * from type_run where id_type_run='$id';"
}

function getTypesRun($id){
$query= "SELECT * from type_run;"
}

function getTypeRunByRun($id){
$query= "SELECT * from type_run as t inner join run as r on t.id_type_run=r.id_run where r.id_run='$id';"
return parcoursRs(SQLSelect($query));
}

function getRegisterRun_by_user($id){
$query= "SELECT * from register_run where id_user='$id';"
}

function getRegisterRun_by_run($id){
$query= "SELECT * from register_run where id_run='$id';"
}

function getRegistersRun($id){
$query= "SELECT * from register_run;"
}

function delRegisterRun_by_user($id){
$query= "DELETE from register_run where id_user=$id;"
return SQLDelete($query);
}

function delRegisterRun_by_run($id){
$query= "DELETE from register_run where id_run=$id;"
return SQLDelete($query);
}

function getRegisterRunByRun($id){
$query= "SELECT * from register_run as re inner join run as r on re.id_run=r.id_run where re.id_run='$id';"
return parcoursRs(SQLSelect($query));
}

function getRegisterRunByUser($id){
$query= "SELECT * from register_run as re inner join users as s on re.id_user=r.id_user where re.id_user='$id';"
return parcoursRs(SQLSelect($query));
}

function addRegister_Run(){
$query= "INSERT INTO register_run VALUES ($id_user, $id_run, NOW()); "
}


 // Exemple de fonctions... (Ancien fonctionnement, regardez la fonction register pour voir la nouvelle synthaxe...)
function getUser($id) {
  $query = "SELECT id, pseudo, color, isAdmin FROM USERS WHERE id=$id";
  return parcoursRs(SQLSelect($query));
}

function pseudoExist($pseudo) {
  $query = "SELECT pseudo FROM USERS where pseudo='$pseudo'";
  return SQLGetChamp($query);
}

function delCateg($id) {
  $query = "DELETE FROM CATEGORIES WHERE id = $id";
  return SQLDelete($query);
}

?>
