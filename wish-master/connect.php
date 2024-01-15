<?php
$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'tbl_store';
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error){
    die("Connection failed: " . $conn->connect_error);
}
mysqli_query($conn,'set names utf8');
// Ket noi CSDL
?>