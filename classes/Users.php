<?php

class Users {
    var $conn;
    var $userName;
    var $userPassword;
    var $userEmail;
    var $userType;
    function newUser($conn, $userType, $userName, $userPassword, $userEmail) {
        $userPassword = hash('sha512', $userPassword, false);
        $query = $conn->prepare("INSERT INTO users(name_users, type_users, password_users, email_user) VALUES (:name, :type, :password, :mail)");
        $query->bindValue(":name", $userName);
        $query->bindValue(":type", $userType);
        $query->bindValue(":password", $userPassword);
        $query->bindValue(":mail", $userEmail);
        $return = $query->execute();
        return $return;
    }
    function getUserID($conn, $userName){

    }
    function userLogin($conn, $userName, $userPassword){
        $userPassword = hash('sha512', $userPassword, false);
        $query = $conn->prepare("SELECT * FROM users WHERE name_users = :n AND password_users = :p");
        $query->bindValue(':n', $userName);
        $query->bindValue(':p', $userPassword);
        $query->execute();
        $result = $query->fetch();
        return $result;
    }
    /*function userGetAll($conn){
        $query = $conn->prepare("SELECT * FROM users");
        //$query->bindValue(':t', 'a');
        $query->execute();
        $result = $query->fetchAll();
        return $result;
    }*/
}