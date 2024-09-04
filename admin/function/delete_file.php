<?php 

function delete_file($file){
    if (file_exists($file)) {
        if (unlink($file)) {
            return true;
        } else {
            return false;
        }
    } else {
        return false;
    }
}