<?php 
// Nama         : Adzkiya Qarina Salsabila
// NIM          : 24060122140138
// Tanggal      : 17 - 09 - 2024
// Deskripsi    : Untuk koneksi ke database

// TODO 1: Buatlah koneksi dengan database
$db_host = 'localhost';
$db_database = 'bookorama';
$db_username = 'root';
$db_password = '';

$db = new mysqli($db_host, $db_username, $db_password, $db_database);
if($db->connect_errno){
    die('Could not connect to database: <br />'. $db->connect_error);
}

// TODO 2: Buatlah function test_input
function test_input($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>