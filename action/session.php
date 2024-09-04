<?php 
session_start();
include "config/db.php";
$kj = @$_SESSION['username'];

if (!isset($kj)) {
    echo "<script>location.href = 'index.php?page=login';</script>";
} 

$wqw = mysqli_query($conn,  "SELECT * FROM tb_users WHERE username = '$kj'");

if (mysqli_num_rows($wqw) != 1) {
    echo "<script>location.href = 'index.php?page=login';</script>";
}