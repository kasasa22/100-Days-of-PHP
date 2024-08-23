<?php

class Signup extends Dbh{
    private $username;
    private $password;

    private function __construct($username, $password){
        $this->username=$username;
        $this->password=$password;

    }

    private function insertUser(){
        $query = "INSERT INTO users ('username', 'password') VALUES(:username, :password)";
        $stmt = $this->connect()->prepare($query);
        $stmt->bindParam(":username",$this->username);
        $stmt->bindParam(":password",$this->password);
        $stmt->execute();

    }

    public function isEmptySubmit() {
        if (isset($this->username)&& isset($this->password)){
            return false;
        }else{
            return true;
        }

    }
    public function signupUser(){
        //Error handlers

        if($this->isEmptySubmit()){
            header('Location: '. $_SERVER['DOCUMENT_ROOT'] .'/index.php');
            die();
        }

        //if no errors signup user

        $this->insertUser();


    }
}