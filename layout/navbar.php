<?php
    $page = @$_GET['page'];
?>
<nav class="navbar navbar-default">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
                    aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">
                    <img src="gambar/logo-indonesia.png" alt="">
                </a>
            </div>
            <div id="navbar" class="collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="<?php echo empty($page) ? 'active' : '' ?>"><a href="index.php">Profil</a></li>
                    <li class="<?php echo $page === "produk" ? 'active' : '' ?>"><a href="produk.php?page=produk">Jenis Produk</a></li>
                    <li class="<?php echo $page === "galeri" ? 'active' : '' ?>"><a href="galeri.php?page=galeri">Galeri</a></li>
                    <li class="<?php echo $page === "kontak" ? 'active' : '' ?>"><a href="kontak.php?page=kontak">Kontak</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li class="<?php echo $page === "daftar" ? 'active' : '' ?>"><a href="daftar.php?page=daftar">Daftar</a></li>
                </ul>
            </div><!--/.nav-collapse -->
        </div>
    </nav>