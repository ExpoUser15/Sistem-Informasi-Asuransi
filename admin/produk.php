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
            <div class="row">
                <div class="col-sm-12">
                    <div class="white-box">
                        <h3 class="box-title">Daftar Produk</h3>
                        <div class="row d-flex justify-content-center gap-4">
                            <div class="card col-md-4 border" style="width: 18rem;">
                                <img src="gambar/activity diagram warga.png" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Nama Produk</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                    <a href="#" class="btn btn-success text-white">Edit</a>
                                    <a href="#" class="btn btn-danger text-white">Hapus</a>
                                </div>
                            </div>
                            <div class="card col-md-4 border" style="width: 18rem;">
                                <img src="gambar/activity diagram warga.png" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Nama Produk</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                    <a href="#" class="btn btn-success text-white">Edit</a>
                                    <a href="#" class="btn btn-danger text-white">Hapus</a>
                                </div>
                            </div>
                            <div class="card col-md-4 border" style="width: 18rem;">
                                <img src="gambar/activity diagram warga.png" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Nama Produk</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                    <a href="#" class="btn btn-success text-white">Edit</a>
                                    <a href="#" class="btn btn-danger text-white">Hapus</a>
                                </div>
                            </div>
                        </div>
                        <div>
                            <a href="#" class="btn btn-primary text-white">Tambah</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include('struktur/footer.php') ?>