<?php
session_start();
include('../config/db.php');
if(isset($_POST['submit'])){
    $username = htmlspecialchars(mysqli_real_escape_string($conn, $_POST['username']));
    $password = htmlspecialchars(mysqli_real_escape_string($conn, $_POST['password']));
    $val = mysqli_query($conn, "SELECT * FROM tb_users WHERE username = '$username'");
    if(mysqli_num_rows($val) == 1){
        $dt = mysqli_fetch_assoc($val);
        $_SESSION['username'] = $dt['username'];
        $_SESSION['id'] = $dt['id_user'];
        if(password_verify($password, $dt['password'])){
            echo "<script>
                    alert('Selamat Datang ". $dt['username'] ."');
                    location.href = '../daftar.php';
                </script>";
        }else{
            echo "<script>
                    alert('Username atau Password salah!');
                    location.href = '../login.php';
                </script>";
        }
    }else{
        echo "<script>
                alert('Username atau Password salah!');
                location.href = '../login.php';
            </script>";
    }
}