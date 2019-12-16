<?php
include '../koneksi.php';
$name     = $_POST['name'];
$email    = $_POST['email'];
$pass     = md5($_POST['password']);

$sql     = "INSERT INTO users (name, email, password) VALUES ('$name', '$email', '$pass')";

mysqli_query($konek, $sql);
header('location: index.php');
