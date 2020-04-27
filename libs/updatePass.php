<?php
  require_once 'config.php';
  require_once 'maLibSQL.pdo.php';
  require_once 'maLibUtils.php';

  $sql = "SELECT login, password FROM USERS";

  $users = parcoursRs(SQLSelect($sql));

  foreach ($users as $user) {
    $hashedPass = hash('sha256', $user["password"]);
    echo $user["login"] . " et " . $hashedPass . '<br/>';
    $sql = "UPDATE USERS SET `password` = '$hashedPass' WHERE login='" . $user['login'] ."'";
    SQLUpdate($sql);
  }

  $sql = "SELECT login, password FROM USERS";

  $users = parcoursRs(SQLSelect($sql));

  tprint($users);

 ?>
