<?php include("struktur/pengunjung/head.php"); ?>

    <?php 
        $page = @$_GET['page'];
        if(empty($page)){
            include('base.php');
        } 
        if($page === "galeri"){
            include('galeri.php');
        } 
        if($page === "produk"){
            include('produk.php');
        } 
        if($page === "register"){
            include('register.php');
        } 
        if($page === "login"){
            include('loginUser.php');
        } 
    ?>

<?php include("struktur/pengunjung/foot.php"); ?>