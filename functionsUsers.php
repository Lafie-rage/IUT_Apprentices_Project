<?php

function addUser($id_users, $name, $firstname, $birthday, $mail, $password, $username, $id_role, $id_category)
{
    global $dbh;
    $query = "INSERT INTO users(firstname, name, birthday, mail, password, username, id_role, id_category) VALUES (:firstname, :name, :birthday, :mail, :password, :username, :id_role, :id_category)";
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

function getUser($id)
{
    global $dbh;
    $query = "SELECT * FROM users WHERE id = :id";
    $sth = $dbh->prepare($query);
    $sth->bindParam(':id', $id);
    return SQLInsert($sth);
}

function usernameExist($name)
{
    global $dbh;
    $query = "SELECT COUNT(*) FROM users WHERE name = :name";
    $sth = $dbh->prepare($query);
    $sth->bindParam(':name', $name);
    return SQLInsert($sth);
}

function validUser($username, $password)
{
    global $dbh;
    $query = "SELECT * FROM users WHERE username = :username AND password = :password";
    $sth = $dbh->prepare($query);
    $sth->bindParam(':username', $username);
    $sth->bindParam(':password', $password);
    $sth = SQLInsert($sth);
    return $sth->rowcount() > 0 ? true : false;
}

function updateUser($firstname, $name, $birthday, $mail, $password, $username)
{
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


function getUsersByRole($id)
{
    global $dbh;
    $query = "SELECT * FROM users as U INNER JOIN role as R ON U.id_role = R.id_role GROUP BY R.label_role WHERE U.id_role = :id";
    $sth = $dbh->prepare($query);
    $sth->bindParam(':id', $id);
    return SQLInsert($sth);
}


function getUsersByCatAge($cat)
{
    global $dbh;
    $query = "SELECT * FROM users as U INNER JOIN category_age as C ON U.id_category = C.id_category GROUP BY C.label_category WHERE U.id_category = :cat";
    $sth = $dbh->prepare($query);
    $sth->bindParam(':cat', $cat);
    return SQLInsert($sth);
}


function getUsersByRun($id)
{
    global $dbh;
    $query = "SELECT * FROM users as U INNER JOIN participate_run as P ON U.id_users = P.id_users INNER JOIN run as R ON P.id_run = R.id_run GROUP BY C.label_category WHERE R.id_run = :id";
    $sth = $dbh->prepare($query);
    $sth->bindParam(':run', $id);
    return SQLInsert($sth);
}

function getUsersByClub($id)
{
    global $dbh;
    $query = "SELECT * FROM users as U INNER JOIN clubs_users as CU ON U.id_user = CU.id_user INNER JOIN clubs as C ON CU.id_club = C.id_club GROUP BY C.label_club WHERE C.id_club = :id";
    $sth = $dbh->prepare($query);
    $sth->bindParam(':id', $id);
    return SQLInsert($sth);
}
