<?php
session_start();
include('../config/db.php');
if (isset($_POST['submit'])) {
    $username = htmlspecialchars(mysqli_real_escape_string($conn, $_POST['username']));
    $password = $_POST['password'];
    $password2 = $_POST['password2'];
    $nama = htmlspecialchars(mysqli_real_escape_string($conn, $_POST['nama']));
    $email = htmlspecialchars(mysqli_real_escape_string($conn, $_POST['email']));

    if ($password !== $password2) {
        echo "<script>
                    alert('Konfirmasi password Salah!');
                    location.href = '../index.php?page=register';
                </script>";
    } else {
        $query = mysqli_query($conn, "SELECT username FROM tb_users WHERE username = '$username'");
        if (mysqli_num_rows($query)) {
            echo "<script>
                    alert('Username sudah ada!');
                    location.href = '../index.php?page=register';
                </script>";
        }else{
            $password2 = htmlspecialchars(mysqli_real_escape_string($conn, $_POST['password2']));
            $hashedPassword = password_hash($password2, PASSWORD_DEFAULT);
    
            $val = mysqli_query($conn, "INSERT INTO tb_users VALUES('', '$nama', '$email', '$username', '$hashedPassword')");
            if (mysqli_affected_rows($conn) > 0) {
                echo "<script>
                            alert('Anda berhasil registrasi. Silahkan login!');
                            location.href = '../index.php?page=login';
                        </script>";
            } else {
                echo "<script>
                            alert('Registrasi gagal!');
                            location.href = '../index.php?page=registrasi';
                        </script>";
            }
        }
    }
}
