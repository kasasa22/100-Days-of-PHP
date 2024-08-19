<?php

$dbconn="mysql:host=localhost;dbname=php";
$dbusername="root";
$dbpassworrd="";

try {
    $conn = new PDO($dbconn, $dbusername, $dbpassworrd);//connecting to the database
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}