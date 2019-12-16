<?php
include '../koneksi.php';
$id      = $_GET['id'];
$sql     = "DELETE FROM users WHERE id = '$id'";
mysqli_query($konek, $sql);
header('location: index.php');
