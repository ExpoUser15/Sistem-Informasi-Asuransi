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
                <li class="<?php echo empty($page) ? 'active' : '' ?>"><a href="daftar.php">Daftar</a></li>
                <li class="<?php echo $page === "status" ? 'active' : '' ?>"><a href="status.php?page=status">Cek Status</a></li>
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</nav>