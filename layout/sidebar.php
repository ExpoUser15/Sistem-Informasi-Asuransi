<?php
    $page = @$_GET['page'];
?>

<div class="col-md-3">
    <div class="list-group">
        <a href="index.php" class="list-group-item <?php echo empty($page) ? 'active main-color-bg' : '' ?>">
            <span class="glyphicon glyphicon-user" aria-hidden="true"></span> Profil
        </a>
        <a href="produk.php?page=produk" class="list-group-item <?php echo $page === "produk" ? 'active main-color-bg' : '' ?>"><span class="glyphicon glyphicon-list-alt"
                aria-hidden="true"></span> Jenis Produk </a>
        <a href="galeri.php?page=galeri" class="list-group-item <?php echo $page === "galeri" ? 'active main-color-bg' : '' ?>"><span
                class="glyphicon glyphicon-picture" aria-hidden="true"></span> Galeri </a>
        <a href="kontak.php?page=kontak" class="list-group-item <?php echo $page === "kontak" ? 'active main-color-bg' : '' ?>"><span class="glyphicon glyphicon-phone"
                aria-hidden="true"></span> Kontak </a>
        <a href="daftar.php?page=daftar" class="list-group-item <?php echo $page === "daftar" ? 'active main-color-bg' : '' ?>"><span class="glyphicon glyphicon-pencil"
                aria-hidden="true"></span> Daftar </a>
    </div>
</div>