<?php
include_once("maLibSQL.pdo.php");
// définit les fonctions SQLSelect, SQLUpdate...
include_once "config.php";
// Définit les paramètres de la DB et l'ouvre

// TypeRun //////////////////////////////////////////////////////////////////////

function addTypeRun($label_type_run, $distance_type_run){
  global $dbh;
  $query= "INSERT INTO type_run (label_type_run, distance_type_run) VALUES ( ':label_type_run', ':distance_type_run') ";
  $sth = $dbh->prepare($query);
  $sth->bindParam(':label_type_run', $label_type_run);
  $sth->bindParam(':distance_type_run', $distance_type_run);
  return SQLInsert($sth);
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

function getTypeRunByRun($id){
  global $dbh;
  $query= "SELECT * from type_run as t inner join run as r on t.id_type_run=r.id_run where r.id_run=':id'";
  $sth = $dbh->prepare($query);
  $sth->bindParam(':id', $id);
  return parcoursRs(SQLSelect($sth));
}

// RegisterRun //////////////////////////////////////////////////////////////////////
function addRegister_Run(){
  global $dbh;
  $query= "INSERT INTO register_run VALUES (':id_user', ':id_run', NOW()) ";
  $sth = $dbh->prepare($query);
  $sth->bindParam(':id', $id);
  $sth->bindParam(':id_run', $id_run);
  return parcoursRs(SQLSelect($sth));
}
function getRegisterRun_by_user($id){
  global $dbh;
  $query= "SELECT * from register_run where id_user=':id'";
  $sth = $dbh->prepare($query);
  $sth->bindParam(':id', $id);
  return parcoursRs(SQLSelect($sth));
}

function getRegisterRun_by_run($id){
  global $dbh;
  $query= "SELECT * from register_run where id_run=':id'";
  $sth = $dbh->prepare($query);
  $sth->bindParam(':id', $id);
  return parcoursRs(SQLSelect($sth));
}

function getRegistersRun(){
  global $dbh;
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


?>
