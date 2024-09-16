<?php
include('../../../config/db.php');
include("../../function/file_management.php");
include("../../function/delete_file.php");
$aksi = $_GET['aksi'];

if($aksi === 'tambah'){
    if(isset($_POST['submit'])){
        $nama = $_POST['nama'];
        $ket = $_POST['ket'];
        $file = file_management('galeri', 'gambar');

        mysqli_query($conn, "INSERT INTO tb_galeri VALUES ('', '$nama', '$ket', '$file')");

        if(mysqli_affected_rows($conn) > 0){
            echo '<script>alert("Gambar berhasil ditambahkan");
                location.href = "../../galeri.php";
            </script>';
        }else{
            echo '<script>alert("Gagal menambahkan gambar");
                location.href = "../../galeri.php";
            </script>';
        }
    }
}

if($aksi === 'hapus'){
    $id = $_GET['id'];

    if(delete_file('../../temp/galeri/'. $_GET['file'])){
        mysqli_query($conn, "DELETE FROM tb_galeri WHERE id_galeri = '$id'");
    
        if(mysqli_affected_rows($conn)){
            echo '<script>alert("Galeri berhasil dihapus");
                    location.href = "../../galeri.php";
                </script>';
        }else{
            echo '<script>alert("Gagal menghapus!");
                    location.href = "../../galeri.php";
                </script>';
        }
    }else{
        echo '<script>alert("Gagal menghapus!");
                location.href = "../../galeri.php";
            </script>';
    }
}
