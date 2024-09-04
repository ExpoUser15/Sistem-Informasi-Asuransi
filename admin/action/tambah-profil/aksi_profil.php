<?php
include('../../../config/db.php');
include("../../function/file_management.php");
include("../../function/delete_file.php");
$aksi = $_GET['aksi'];

if($aksi === 'tambah'){
    if(isset($_POST['submit'])){
        $judul = $_POST['judul'];
        $ket = $_POST['ket'];
        $file = file_management('profil', 'gambar');

        mysqli_query($conn, "INSERT INTO tb_profil VALUES ('', '$judul', '$ket', '$file')");

        if(mysqli_affected_rows($conn) > 0){
            echo '<script>alert("Profil berhasil ditambahkan");
                location.href = "../../profil.php";
            </script>';
        }else{
            echo '<script>alert("Gagal menambahkan");
                location.href = "profil.php";
            </script>';
        }
    }
}

if($aksi === 'hapus'){
    $id = $_GET['id'];

    if(delete_file('../../temp/profil/'. $_GET['file'])){
        mysqli_query($conn, "DELETE FROM tb_profil WHERE id_profil = '$id'");
    
        if(mysqli_affected_rows($conn)){
            echo '<script>alert("Profil berhasil dihapus");
                    location.href = "../../profil.php";
                </script>';
        }else{
            echo '<script>alert("Gagal menghapus!");
                    location.href = "../../profil.php";
                </script>';
        }
    }else{
        echo '<script>alert("Gagal menghapus!");
                location.href = "../../profil.php";
            </script>';
    }
}

if($aksi === 'hapus/struktur-organisasi'){
    $id = $_GET['id'];

    if(delete_file('../../temp/struktur/'. $_GET['file'])){
        mysqli_query($conn, "DELETE FROM tb_organisasi WHERE id_organisasi = '$id'");
    
        if(mysqli_affected_rows($conn)){
            echo '<script>alert("Struktur organisasi berhasil dihapus");
                    location.href = "../../profil.php";
                </script>';
        }else{
            echo '<script>alert("Gagal menghapus!");
                    location.href = "../../profil.php";
                </script>';
        }
    }else{
        echo '<script>alert("Gagal menghapus!");
                    location.href = "../../profil.php";
                </script>';
    }
}

if($aksi === 'tambah/struktur-organisasi'){
    if(isset($_POST['submit'])){
        $nama = $_POST['nama'];
        $ket = $_POST['ket'];
        $file = file_management('struktur', 'gambar');

        mysqli_query($conn, "INSERT INTO tb_organisasi VALUES ('', '$nama', '$ket', '$file')");

        if(mysqli_affected_rows($conn) > 0){
            echo '<script>alert("Struktur organisasi berhasil ditambahkan");
                location.href = "../../profil.php";
            </script>';
        }else{
            echo '<script>alert("Gagal menambahkan");
                location.href = "profil.php";
            </script>';
        }
    }  
}