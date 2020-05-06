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
  global $dbh;
  $query = "SELECT * FROM users WHERE id = :id";
  $sth = $dbh->prepare($query);
  $sth->bindParam(':id', $id);
  return parcoursRs(SQLSelect($sth));
}

function getUsers() {

}

function usernameExist() {
  global $dbh;
  $query = "SELECT COUNT(*) FROM users WHERE name = :name";
  $sth = $dbh->prepare($query);
  $sth->bindParam(':name', $name);
  return parcoursRs(SQLSelect($sth));
}

function validUser() {
  global $dbh;
  $query = "SELECT * FROM users WHERE username = :username AND password = :password";
  $sth = $dbh->prepare($query);
  $sth->bindParam(':username', $username);
  $sth->bindParam(':password', $password);
  $sth = SQLInsert($sth);
  return $sth->rowcount() > 0 ? true : false;
}

function updateUser() {
  global $dbh;
  $query = "UPDATE users SET firstname=:firstname, name=:name, birthday=:birthday, mail=:mail, password=:password, username=:username";
  $sth = $dbh->prepare($query);
  $sth->bindParam(':firstname', $firstname);
  $sth->bindParam(':name', $name);
  $sth->bindParam(':birthday', $birthday);
  $sth->bindParam(':mail', $mail);
  $sth->bindParam(':password', $password);
  $sth->bindParam(':username', $username);
  $sth = SQLInsert($sth);
  return SQLInsert($sth);
}

function getUsersByRole($id) {
  global $dbh;
  $query = "SELECT * FROM users as U INNER JOIN role as R ON U.id_role = R.id_role GROUP BY R.label_role WHERE U.id_role = :id";
  $sth = $dbh->prepare($query);
  $sth->bindParam(':id', $id);
  return parcoursRs(SQLSelect($sth));
}

function getUsersByCatAge($id) {
  global $dbh;
  $query = "SELECT * FROM users as U INNER JOIN category_age as C ON U.id_category = C.id_category GROUP BY C.label_category WHERE U.id_category = :cat";
  $sth = $dbh->prepare($query);
  $sth->bindParam(':cat', $cat);
  return parcoursRs(SQLSelect($sth));
}

function getUsersByRun($id) {
  global $dbh;
  $query = "SELECT * FROM users as U INNER JOIN participate_run as P ON U.id_users = P.id_users INNER JOIN run as R ON P.id_run = R.id_run GROUP BY C.label_category WHERE R.id_run = :id";
  $sth = $dbh->prepare($query);
  $sth->bindParam(':run', $id);
  return parcoursRs(SQLSelect($sth));
}

function getUsersByClub($id) {
  global $dbh;
  $query = "SELECT * FROM users as U INNER JOIN clubs_users as CU ON U.id_user = CU.id_user INNER JOIN clubs as C ON CU.id_club = C.id_club GROUP BY C.label_club WHERE C.id_club = :id";
  $sth = $dbh->prepare($query);
  $sth->bindParam(':id', $id);
  return parcoursRs(SQLSelect($sth));
}

// Club //////////////////////////////////////////////////////////////////////

function addClub($label_club,$avatar,$name,$phone,$address,$mail){
  global $dbh;
  $query = "INSERT INTO clubs(label_club,avatar,name,phone,address,mail) VALUES (:label_club,:avatar,:name,:phone,:address,:mail)";
  $sth = $dbh->prepare($query);
  $sth->bindParam(':label_club', $label_club);
  $sth->bindParam(':avatar', $avatar);
  $sth->bindParam(':name', $name);
  $sth->bindParam(':phone', $phone);
  $sth->bindParam(':address', $address);
  $sth->bindParam(':mail', $mail);
  return SQLInsert($sth);
}

function getClub($id){
  global $dbh;
  $query = "SELECT * FROM clubs WHERE id_club=:id";
  $sth = $dbh->prepare($query);
  $sth->bindParam(':id', $id);
  return parcoursRs(SQLSelect($sth));
}

function nameExist($label_club){
  global $dbh;
  $query = "SELECT label_club FROM clubs WHERE label_club=':label_club'";
  $sth = $dbh->prepare($query);
  $sth->bindParam(':label_club', $label_club);
  return SQLGetChamp($sth);
}


function getClubByUser($id){
  global $dbh;
  $query = "SELECT *,U.firstname,U.name FROM clubs as CLINNER JOIN club_users as CU ON CL.id_club = CU.id_club INNER JOIN users as U ON CU.id_user = U.id_userGROUP BY U.firstname,U.name";
  $sth = $dbh->prepare($query);
  return parcoursRs(SQLSelect($sth));
}

function updateClub(){
  global $dbh;
  $query = "UPDATE clubs SET label_club='$nameClub', avatar='$avatar', name='$name', phone='$phone', address='$address', mail='$mail'WHERE id_club = ?";
  $sth = $dbh->prepare($query);
  return SQLUpdate($sth);
}


// Run //////////////////////////////////////////////////////////////////////

function addRun($label,$date,$distance,$unit,$city,$field,$type,$category){

  global $dbh;
  $query="INSERT INTO run (label_run,date_run,distance_run,unit,city,id_field,id_type_run,id_category) VALUES (:label, :date, :distance, :unit, :city, :field, :type, :category )";
  $sth = $dbh->prepare($query);
  $sth->bindParam(':label', $label);
  $sth->bindParam(':date', $date);
  $sth->bindParam(':distance', $distance);
  $sth->bindParam(':unit', $unit;
  $sth->bindParam(':city', $city);
  $sth->bindParam(':field', $field);
  $sth->bindParam(':type', $type);
  $sth->bindParam(':category', $category);
  return SQLInsert($sth);

}

function delRun($id){
  global $dbh;
  $query="DELETE FROM run WHERE id_run=:id";
  $sth = $dbh->prepare($query);
  $sth->bindParam(':id', $id);
  return SQLDelete($sth);
}

function getRuns(){
  global $dbh;
  $query="SELECT * FROM run";
  $sth = $dbh->prepare($query);
  return parcoursRs(SQLSelect($sth));
}

function getRun($id){
  global $dbh;
  $query="SELECT * FROM run WHERE id_run=:id";
  $sth = $dbh->prepare($query);
  $sth->bindParam(':id', $id);
  return parcoursRs(SQLSelect($sth));
}

function getRunsByCategoryAge($id){
  global $dbh;
  $query="SELECT r.*, cat.label_category FROM run as r INNER JOIN category_age as cat ON r.id_category = cat.id_category WHERE cat.id_category = :id";
  $sth = $dbh->prepare($query);
  $sth->bindParam(':id', $id);
  return parcoursRs(SQLSelect($sth));
}

function getRunsByUser($id){
  global $dbh;
  $query="SELECT r.*, u.name FROM run as r INNER JOIN participate_run as part ON r.id_run = part.id_run INNER JOIN users as u ON  part.id_user=u.id_user  WHERE u.id_user = :id";
  $sth = $dbh->prepare($query);
  $sth->bindParam(':id', $id);
  return parcoursRs(SQLSelect($sth));
}

function getRunsByClub($id){
  global $dbh;
  $query="SELECT r.*, c.label_club FROM run as r INNER JOIN participate_run as part ON r.id_run = part.id_run INNER JOIN users as u ON  part.id_user=u.id_user INNER JOIN clubs_users as c_u ON u.id_user=c_u.id_user INNER JOIN clubs as c ON c_u.id_club=c.id_club WHERE c.id_club = :id";
  $sth = $dbh->prepare($query);
  $sth->bindParam(':id', $id);
  return parcoursRs(SQLSelect($sth));
}

function getRunsByType_run($id){
  global $dbh;
  $query="SELECT r.*, t_r.label_type_run FROM run as r INNER JOIN type_run as t_r ON r.id_type_run = t_r.id_type_run WHERE t_r.id_type_run = :id";
  $sth = $dbh->prepare($query);
  $sth->bindParam(':id', $id);
  return parcoursRs(SQLSelect($sth));
}

function getRunsByType_field($id){
  global $dbh;
  $query="SELECT r.*, t_f.label_field FROM run as r INNER JOIN type_field as t_f ON r.id_field = t_f.id_field WHERE t_f.id_field = :id";
  $sth = $dbh->prepare($query);
  $sth->bindParam(':id', $id);
  return parcoursRs(SQLSelect($sth));
}

function updateRun($id,$label,$date,$distance,$unit,$city){
  global $dbh;
  $query="UPDATE run SET label_run=:label, date_run=:date, distance_run=:distance, unit = :unit, city= :city WHERE id_run=:id ;"
    $sth = $dbh->prepare($query);
    $sth->bindParam(':label', $label);
    $sth->bindParam(':date', $date);
    $sth->bindParam(':distance', $distance);
    $sth->bindParam(':unit', $unit);
    $sth->bindParam(':city', $city);
    $sth->bindParam(':id', $id);
    return SQLUpdate($sth);
    }

// CategoryAge //////////////////////////////////////////////////////////////////////


function getCategoryAge($id_category){
  global $dbh;
  $query = "SELECT * FROM category_age WHERE id_category = :id_category";
  $sth = $dbh->prepare($query);
  $sth->bindParam(':id_category', $id_category);
  return parcoursRs(SQLSelect($sth));
}

function getAllCatAge() {
  global $dbh;
  $query = "SELECT * FROM category_age";
  $sth = $dbh->prepare($query);
  return parcoursRs(SQLSelect($sth));
}

function getCategoryAgeByUser(){
  global $dbh;
  $query = "SELECT * FROM users as U
    INNER JOIN category_age as CAT
    ON U.id_category = CAT.id_category
    GROUP BY U.firstname AND U.name ;";
  $sth = $dbh->prepare($query);
  return parcoursRs(SQLSelect($sth));
}

function getCategoryAgeByRun(){
  global $dbh;
  $query = "SELECT * FROM run AS R
    INNER JOIN category_age as CAT
    ON R.id_category = CAT.id_category
    GROUP BY R.label_run";
  $sth = $dbh->prepare($query);
  return parcoursRs(SQLSelect($sth));
}

// ParticipateRun //////////////////////////////////////////////////////////////////////

function addParticipateRun($date,$time,$rank,$user,$run){
  global $dbh;
  $query = "INSERT INTO participate_run(date_participation,time,rank,id_user,id_run) VALUES (:date, :time, :rank, :user, :run);";
  $sth = $dbh->prepare($query);
  $sth->bindParam(':date', $date);
  $sth->bindParam(':time', $time);
  $sth->bindParam(':rank', $rank);
  $sth->bindParam(':user', $user);
  $sth->bindParam(':run', $run);
  return SQLInsert($sth);
}

function delParticipateRun(){
  global $dbh;
  $query = "DELETE FROM participate_run where id_participate = :id_participate";
  $sth = $dbh->prepare($query);
  $sth->bindParam(':id_partcipate', $id_partcipate);
  return SQLDelete($sth);
}

function updateParticipateRun() {

}

function getParticipateRun() {

}

function getParticipatesRunByRun($id_participate){
  global $dbh;
  $query = "SELECT * FROM participate_run WHERE id_participate = :id_participate";
  $sth = $dbh->prepare($query);
  $sth->bindParam(':id_participate', $id_partcipate);
  return parcoursRs(SQLSelect($sth));
}

function getParticipatesRunByUser($id_user){
  global $dbh;
  $query = "SELECT * FROM participate_run WHERE id_user = :id_user";
  $sth = $dbh->prepare($query);
  $sth->bindParam(':id_user', $id_user);
  return parcoursRs(SQLSelect($sth));
}

// IncludeCharge //////////////////////////////////////////////////////////////////////

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
  return parcoursRs(SQLSelect($sql));
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
///////////// TYPE COST
function addTypeCost($id_type_cost, $label_type_cost) {
  global $dbh;
  $query = "INSERT INTO type_cost(label_type_cost) VALUES (:label_type_cost)";
  $sth = $dbh->prepare($query);
  $sth->bindParam(':label_type_cost', $label_type_cost);
  return SQLInsert($sth);
}

function delTypeCost() {
  global $dbh;
  $query = "DELETE FROM type_cost WHERE id_type_cost = $id";
  $sth = $dbh->prepare($query);
  $sth->bindParam(':id_type_cost', $id_type_cost);
  return SQLDelete($sth);
}

function getTypeCost($id) {
  global $dbh;
  $query = "SELECT id_type_cost, label_type_cost FROM type_cost WHERE id_type_cost = $id";
  $sth = $dbh->prepare($query);
  $sth->bindParam(':id_type_cost', $id_type_cost);
  $sth->bindParam(':label_type_cost', $label_type_cost);
  return parcoursRs(SQLSelect($sth));
}

function getAllTypeCosts() {
  global $dbh;
  $query = "SELECT id_type_cost, label_type_cost FROM type_cost";
  $sth = $dbh->prepare($query);
  $sth->bindParam(':id_type_cost', $id_type_cost);
  $sth->bindParam(':label_type_cost', $label_type_cost);
  return parcoursRs(SQLSelect($sth));
}

function addTypeField($label)){
  global $dbh;
  $query="INSERT INTO type_field (label_field) VALUES (:label)";
  $sth = $dbh->prepare($query);
  $sth->bindParam(':label', $label);
  return SQLInsert($sth);
}

function delTypeField($id){
  global $dbh;
  $query="DELETE FROM type_field WHERE id_run=:id";
  $sth = $dbh->prepare($query);
  $sth->bindParam(':id', $id);
  return SQLDelete($sth);
}

function getTypeField($id){
  global $dbh;
  $query="SELECT * FROM type_field WHERE id_field=:id";
  $sth = $dbh->prepare($query);
  $sth->bindParam(':id', $id);
  return parcoursRs(SQLSelect($sth));
}

function getAllTypesField() {
  global $dbh;
  $query="SELECT * FROM type_field";
  $sth = $dbh->prepare($query);
  return parcoursRs(SQLSelect($sth));
}

function getTypeFieldByRun($id){
  global $dbh;
  $query="SELECT t_f.*, r.label_run FROM run as r INNER JOIN type_field as t_f ON r.id_field = t_f.id_field WHERE t_f.id_field =:id";
  $sth = $dbh->prepare($query);
  $sth->bindParam(':id', $id);
  return parcoursRs(SQLSelect($sth));
}

function addTypeRun($label_type_run, $distance_type_run){
  global $dbh;
  $query= "INSERT INTO type_run (label_type_run, distance_type_run) VALUES ( ':label_type_run', ':distance_type_run') ";
  $sth = $dbh->prepare($query);
  $sth->bindParam(':label_type_run', $label_type_run);
  $sth->bindParam(':distance_type_run', $distance_type_run);
  return SQLInsert($sth);
}

function delTypeRun($id_type_run){
  global $dbh;
  $query= "DELETE from type_run where id_type_run=':id_type_run'";
  $sth = $dbh->prepare($query);
  $sth->bindParam(':id_type_run', $id_type_run);
  return SQLDelete($sth);
}

function updateTypeRun($id_type_run, $label_type_run, $distance_type_run){
  global $dbh;
  $query= "UPDATE type_run SET label_type_run = ':label_type_run', distance_type_run=':distance_type_run' where id_type_run = ':id_type_run' ";
  $sth = $dbh->prepare($query);
  $sth->bindParam(':id_type_run', $id_type_run);
  $sth->bindParam(':label_type_run', $label_type_run);
  $sth->bindParam(':distance_type_run', $distance_type_run);
  return SQLUpdate($sth);
}

function getTypeRun($id_type_run){
  global $dbh;
  $query= "SELECT * from type_run where id_type_run=':id_type_run'";
  $sth = $dbh->prepare($query);
  $sth->bindParam(':id_type_run', $id_type_run);
  return parcoursRs(SQLSelect($sth));
}

function getTypesRun(){
  global $dbh;
  $query= "SELECT * from type_run";
  $sth = $dbh->prepare($query);
  return parcoursRs(SQLSelect($sth));
}

function getTypeRunByRun($id){
$sql= "SELECT * from type_run as t inner join run as r on t.id_type_run=r.id_run where r.id_run='$id'";
return parcoursRs(SQLSelect($sql));
}

function getRegisterRun_by_user($id){
  global $dbh;
  $query= "SELECT * from register_run where id_user=':id'";
  $sth = $dbh->prepare($query);
  $sth->bindParam(':id', $id);
  return parcoursRs(SQLSelect($sth));
}

function delRegisterRun_by_run($id){
  global $dbh;
  $query= "DELETE from register_run where id_run=':id'";
  $sth = $dbh->prepare($query);
  $sth->bindParam(':id', $id);
  return SQLDelete($sth);
}

function getRegistersRun(){
  global $dbh;
  $query= "SELECT * from register_run";
  $sth = $dbh->prepare($query);
  return parcoursRs(SQLSelect($sth));
}

function delRegisterRun_by_user($id){
  global $dbh;
  $query= "DELETE from register_run where id_user=':id'";
  $sth = $dbh->prepare($query);
  $sth->bindParam(':id', $id);
  return SQLDelete($sth);
}

function delRegisterRun_by_run($id){
$sql= "DELETE from register_run where id_run=$id";
return SQLDelete($sql);
}

function getRegisterRun_by_run($id){
  global $dbh;
  $query= "SELECT * from register_run where id_run=':id'";
  $sth = $dbh->prepare($query);
  $sth->bindParam(':id', $id);
  return parcoursRs(SQLSelect($sth));
}

function getRegisterRunByUser($id){
  global $dbh;
  $query= "SELECT * from register_run as re inner join users as s on re.id_user=r.id_user where re.id_user=':id'";
$sth = $dbh->prepare($query);
$sth->bindParam(':id', $id);
return parcoursRs(SQLSelect($sth));
}

function addRegister_Run(){
  global $dbh;
  $query= "INSERT INTO register_run VALUES (':id_user', ':id_run', NOW()) ";
  $sth = $dbh->prepare($query);
  $sth->bindParam(':id', $id);
  $sth->bindParam(':id_run', $id_run);
  return parcoursRs(SQLSelect($sth));
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
