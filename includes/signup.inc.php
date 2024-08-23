<?php

if($_SERVER("REQUEST_METHOD") =="POST"){
    $username = $_POST["username"];
    $password = $_POST["password"];

    require_once '../OOP/classes/Dbh.php';
    require_once '../OOP/classes/Signup.php';

    $signup = new Signup($username, $password);
    $signup->signupUser();


}