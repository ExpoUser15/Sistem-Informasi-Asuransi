<?php 
    $params = @$_GET['page'];
?>

<header class="py-3 bg-white position-fixed" style="width: 100%; z-index: 9999;">
    <div class="container">
        <!-- Start Header -->
        <div class="header">
            <nav class="navbar navbar-expand-md navbar-light px-0">
                <a class="navbar-brand" href="#">
                    <img src="gambar/Prudential-Logo-horizontal.png" style="width: 150px;" alt="logo">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item pr-3">
                            <a href="index.php" class="btn btn-custom btn-outline-info btn-lg">Home</a>
                        </li>
                        <?php if($page !== 'galeri' && $page !== 'produk' && $page !== 'register' && $page !== 'login'): ?>
                            <li class="nav-item pr-3">
                                <a href="#profil" class="btn btn-custom btn-outline-info btn-lg">Profil</a>
                            </li>
                            <li class="nav-item pr-3">
                                <a href="#kontak" class="btn btn-custom btn-outline-info btn-lg">Kontak</a>
                            </li>
                        <?php endif ?>
                        <li class="nav-item pr-3">
                            <a href="?page=produk" class="btn btn-custom btn-info btn-lg">Produk</a>
                        </li>
                        <li class="nav-item pr-3">
                            <a href="?page=galeri" class="btn btn-custom btn-info btn-lg">Galeri</a>
                        </li>
                        <li class="nav-item pr-3">
                            <a href="?page=login" class="btn btn-custom btn-danger btn-lg">Login</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
        <!-- End Header -->
    </div>
</header>