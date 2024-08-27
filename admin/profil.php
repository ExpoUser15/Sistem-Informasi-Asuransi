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
                <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                    <div class="white-box">
                        <h3 class="box-title">Profil</h3>
                        <div class="row">
                            <div class="col-md-5">
                                <img src="gambar/activity diagram warga.png" class="border border-opacity-10" style="width: 100%;" alt="Profil">
                            </div>
                            <div class="col-md-7">
                                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Commodi error ratione consequatur tempore excepturi eveniet iusto, quos saepe asperiores. Vero earum numquam ullam quisquam ea optio accusantium! Facilis, culpa delectus? Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias esse quae debitis iure voluptatibus fuga atque labore animi eos. Ullam, non. Repudiandae sint, harum officiis sed adipisci repellat accusamus alias?
                                Nesciunt dolorem aspernatur qui, vel harum, facilis fuga magnam eligendi aliquid debitis porro tenetur consequatur. Cum repellat itaque voluptates nobis quisquam, fuga, mollitia officiis ex voluptas vero illo quos nam!
                            </div>
                        </div>
                        <div class="d-flex justify-content-end gap-2">
                            <a href="#" class="btn btn-success text-white">Edit</a>
                            <a href="#" class="btn btn-danger text-white">Hapus</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                    <div class="white-box">
                        <h3 class="box-title">Struktur Organisasi</h3>
                        <div class="row">
                            <div class="col-md-5">
                                <img src="gambar/activity diagram warga.png" class="border border-opacity-10" style="width: 100%;" alt="Profil">
                            </div>
                            <div class="col-md-7">
                                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Commodi error ratione consequatur tempore excepturi eveniet iusto, quos saepe asperiores. Vero earum numquam ullam quisquam ea optio accusantium! Facilis, culpa delectus? Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias esse quae debitis iure voluptatibus fuga atque labore animi eos. Ullam, non. Repudiandae sint, harum officiis sed adipisci repellat accusamus alias?
                                Nesciunt dolorem aspernatur qui, vel harum, facilis fuga magnam eligendi aliquid debitis porro tenetur consequatur. Cum repellat itaque voluptates nobis quisquam, fuga, mollitia officiis ex voluptas vero illo quos nam!
                            </div>
                            <div class="d-flex justify-content-end gap-2">
                                <a href="#" class="btn btn-success text-white">Edit</a>
                                <a href="#" class="btn btn-danger text-white">Hapus</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php include('layout/footer.php') ?>
    </div>
</div>
<?php include('struktur/footer.php') ?>