<?php
session_start();
include('../config/db.php');
if(isset($_POST['submit'])){
    $username = htmlspecialchars(mysqli_real_escape_string($conn, $_POST['username']));
    $password = htmlspecialchars(mysqli_real_escape_string($conn, $_POST['password']));
    $val = mysqli_query($conn, "SELECT * FROM tb_admin WHERE username = '$username' AND password = '$password'");
    if(mysqli_num_rows($val) == 1){
        $dt = mysqli_fetch_assoc($val);
        $_SESSION['username'] = $dt['username'];
        echo "<script>
                alert('Selamat Datang');
                location.href = '../admin/dashboard.php';
            </script>";
    }else{
        echo "<script>
                alert('Username atau Password salah!');
                location.href = '../login.php';
            </script>";
    }
}
