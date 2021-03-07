<?php
$servername="localhost:8888";
$username="team7";
$password="UA34QVqk";
$dbname ="default_team7";
// creating connection 
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) 
    die("Connection failed: ".$conn->connect_error);
?>
