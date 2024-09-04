<?php
session_start();
if (isset($_POST['daftar'])) {
    include('../config/db.php');

    $nama = htmlspecialchars(mysqli_real_escape_string($conn, $_POST['nama']));
    $alamat =  htmlspecialchars(mysqli_real_escape_string($conn, $_POST['alamat']));
    $nik =  htmlspecialchars(mysqli_real_escape_string($conn, $_POST['nik']));
    $hp =  htmlspecialchars(mysqli_real_escape_string($conn, $_POST['hp']));
    $jp =  htmlspecialchars(mysqli_real_escape_string($conn, $_POST['jp']));
    $email =  htmlspecialchars(mysqli_real_escape_string($conn, $_POST['email']));
    $jk =  htmlspecialchars(mysqli_real_escape_string($conn, $_POST['jk']));
    $date =  htmlspecialchars(mysqli_real_escape_string($conn, $_POST['date']));

    $date = date('Y-m-d', strtotime(str_replace('/', '-', $date)));

    $id = $_SESSION['id'];

    $sql = "INSERT INTO tb_daftar VALUES ('', '$nama', '$nik', '$jk', '$date', '$jp', '$alamat', '$hp', '$email', '$id')";
    mysqli_query($conn, $sql);

    if (mysqli_affected_rows($conn)) {
        echo '<script>alert("Permintaan anda akan diproses, silahkan cek status permintaan.")
            location.href = "../daftar.php?page=daftar";
        </script>';
    } else {
        echo '<script>alert("Data gagal dismpan.")
            location.href = "../daftar.php?page=daftar";
        </script>';
    }
}
