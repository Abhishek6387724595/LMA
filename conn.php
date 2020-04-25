<?php
error_reporting(E_ALL ^ E_DEPRECATED);
// $conn=mysqli_connect("localhost","root","","lma");
$dbHost     = 'localhost';
$dbUsername = 'root';
$dbPassword = '';
$dbName     = 'la';

// Create database connection
// $db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);
// mysql_connect("localhost","root","","lma");
// mysql_select_db("lma");
$connect = mysqli_connect($dbHost, $dbUsername, $dbPassword, $dbName);
if(!$connect){
    die('connection failed: ' . mysqli_connect_error());
}

// $servername = 'localhost';
// $username = 'root';
// $password = '';
// $db = 'lma';
// $connect = mysqli_connect($servername, $username, $password, $db);
// if(!$connect){
//     die("Connection failed: " . mysqli_connect_error());
// }
?>