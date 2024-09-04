<?php

function file_management($type, $name){
    $namaFile = $_FILES[$name]['name'];
    $error = $_FILES[$name]['error'];
    $tmpName = $_FILES[$name]['tmp_name'];

    $mimeType = ['jpg', 'jpeg', 'png'];
    $extensi = explode('.', $namaFile);
    $extensi = strtolower(end($extensi));

    if($error == 4){
        echo '<script>alert("Pilih gambar terlebih dahulu")
            location.href = "../profil.php?action=tambah-profil";
        </script>';
        return;
    }elseif(!in_array($extensi, $mimeType)){
        echo '<script>alert("Pilih gambar dengan extensi jpg, jpeg, atau png!")
        location.href = "profil.php?action=tambah-profil";
        </script>';
        return;
    }else{
        $teksDenganMinus = str_replace(' ', '-', $extensi[0]);
        $namaBaru = time() . uniqid() . "-" . $teksDenganMinus . '.' . $extensi; 

        move_uploaded_file($tmpName, '../../temp/'.$type.'/' . $namaBaru);
        return $namaBaru;
    }
}