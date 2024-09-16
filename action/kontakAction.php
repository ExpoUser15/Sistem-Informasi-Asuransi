<?php 
include('../config/db.php');

if(isset($_POST['submit'])){
    $name = htmlspecialchars(mysqli_real_escape_string($conn, $_POST['nama']));
    $email = htmlspecialchars(mysqli_real_escape_string($conn, $_POST['email']));
    $no_hp = htmlspecialchars(mysqli_real_escape_string($conn, $_POST['no_hp']));
    $pesan = htmlspecialchars(mysqli_real_escape_string($conn, $_POST['pesan']));

    mysqli_query($conn, "INSERT INTO tb_kontak VALUES ('', '$name', '$email', '$no_hp', '$pesan')");

    if(mysqli_affected_rows($conn)){
        echo "<script>
                alert('Pesan anda berhasil disimpan!');
                location.href = '../index.php';
            </script>";
    }else{
        echo "<script>
                alert('Pesan anda gagal disimpan!');
                location.href = '../index.php';
            </script>";
    }
}

?>