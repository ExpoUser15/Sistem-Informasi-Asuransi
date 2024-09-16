<?php include("struktur/head.php") ?>
<?php include("layout/navbar.php") ?>
<section id="main">
    <div class="container">
        <div class="row">
            <?php include("layout/sidebar.php") ?>
            <div class="col-md-9">
                <!-- WEBSITE OVERVIEW  -->
                <form class="panel panel-default" action="action/kontakAction.php" method="POST">
                    <div class="panel-heading main-color-bg">
                        <h3 class="panel-title">Kontak Prudential Sorong</h3>
                        <h3 class="panel-title">Hubungi Kami</h3>
                    </div>
                    <div class="panel-body">
                        <div class="d-flex gap-10">
                            <div class="well dash-box" style="max-width: 900px; overflow: hidden;">
                                <img src="gambar/Holborn-640x480.jpg" alt=""
                                    style="object-fit: cover; width: 100%;">
                            </div>
                            <div>
                                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Numquam id dignissimos
                                    neque ab hic asperiores, excepturi perferendis velit quo voluptates et illum
                                    inventore cupiditate culpa. Quod iusto commodi iure quis?</p>
                            </div>
                        </div>
                        <div class="d-flex gap-10">
                            <div class="well dash-box" style="max-width: 900px; overflow: hidden;">
                                <img src="gambar/Holborn-640x480.jpg" alt=""
                                    style="object-fit: cover; width: 100%;">
                            </div>
                            <div>
                                <p>Lorem ipsum dolor, sit amet consectetur adipisicing
                                    elit. Numquam id dignissimos neque ab hic asperiores, excepturi perferendis
                                    velit quo voluptates et illum inventore cupiditate culpa. Quod iusto commodi
                                    iure quis?</p>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<?php include("layout/footer.php") ?>
<?php include("struktur/foot.php") ?>