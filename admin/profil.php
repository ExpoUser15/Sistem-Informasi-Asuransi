<?php 
include("action/session.php");
include('struktur/head.php') ?>
<div class="preloader">
    <div class="lds-ripple">
        <div class="lds-pos"></div>
        <div class="lds-pos"></div>
    </div>
</div>
<div id="main-wrapper" data-layout="vertical" data-navbarbg="skin5" data-sidebartype="full"
    data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">

    <?php include('layout/sidebar.php') ?>

    <div class="page-wrapper">
        <?php include('layout/navbar.php') ?>
        <div class="container-fluid">
            <?php include('action/tambah-profil/tambah_profil.php'); ?>
        </div>
        <?php include('layout/footer.php') ?>
    </div>
</div>
<?php include('struktur/footer.php') ?>