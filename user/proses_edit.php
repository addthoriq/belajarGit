<?php
include '../koneksi.php';
$id     = $_POST['id'];
$name   = $_POST['name'];
$email  = $_POST['email'];
$pass   = $_POST['password'];

$data   = "SELECT * FROM users WHERE id = '$id'";
$result = mysqli_query($konek, $data);
$row    = mysqli_fetch_row($result);
$passu  = $row[3]; //Password dari table User

if (empty($pass)) {
    $pass     = $passu;
}else {
    $pass     = $_POST['password'];
}

$sql     = "UPDATE users
            SET name = '$name',
            email = '$email',
            password = '$pass'
            WHERE id = '$id'
            ";
mysqli_query($konek, $sql);
header('location: index.php');
