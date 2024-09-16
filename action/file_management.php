<?php

function file_management($type, $name, $error4url, $extError){
    $namaFile = $_FILES[$name]['name'];
    $error = $_FILES[$name]['error'];
    $tmpName = $_FILES[$name]['tmp_name'];

    $mimeType = ['jpg', 'jpeg', 'png'];
    $extensi = explode('.', $namaFile);
    $extensi = strtolower(end($extensi));

    if($error == 4){
        echo '<script>alert("Pilih gambar terlebih dahulu")
            location.href = "'.$error4url.'";
        </script>';
        return;
    }elseif(!in_array($extensi, $mimeType)){
        echo '<script>alert("Pilih gambar dengan extensi jpg, jpeg, atau png!")
        location.href = "'.$extError.'";
        </script>';
        return;
    }else{
        $teksDenganMinus = str_replace(' ', '-', $extensi[0]);
        $namaBaru = time() . uniqid() . "-" . $teksDenganMinus . '.' . $extensi; 

        move_uploaded_file($tmpName, $type . $namaBaru);
        return $namaBaru;
    }
}