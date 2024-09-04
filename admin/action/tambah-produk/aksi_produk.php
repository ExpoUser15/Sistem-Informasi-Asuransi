<?php
include('../../../config/db.php');
include("../../function/file_management.php");
include("../../function/delete_file.php");
$aksi = $_GET['aksi'];

if($aksi === 'tambah'){
    if(isset($_POST['submit'])){
        $nama = $_POST['nama'];
        $ket = $_POST['ket'];
        $file = file_management('produk', 'gambar');

        mysqli_query($conn, "INSERT INTO tb_produk VALUES ('', '$nama', '$ket', '$file')");

        if(mysqli_affected_rows($conn) > 0){
            echo '<script>alert("Produk berhasil ditambahkan");
                location.href = "../../produk.php";
            </script>';
        }else{
            echo '<script>alert("Gagal menambahkan");
                location.href = "produk.php";
            </script>';
        }
    }
}

if($aksi === 'hapus'){
    $id = $_GET['id'];

    if(delete_file('../../temp/produk/'. $_GET['file'])){
        mysqli_query($conn, "DELETE FROM tb_produk WHERE id_produk = '$id'");
    
        if(mysqli_affected_rows($conn)){
            echo '<script>alert("Produk berhasil dihapus");
                    location.href = "../../produk.php";
                </script>';
        }else{
            echo '<script>alert("Gagal menghapus!");
                    location.href = "../../produk.php";
                </script>';
        }
    }else{
        echo '<script>alert("Gagal menghapus!");
                location.href = "../../produk.php";
            </script>';
    }
}
