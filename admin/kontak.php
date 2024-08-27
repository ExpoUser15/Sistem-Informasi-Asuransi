<?php include('struktur/head.php') ?>
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
                        <h3 class="box-title">Daftar Kontak</h3>
                        <div class="table-responsive">
                            <table class="table text-nowrap">
                                <thead>
                                    <tr>
                                        <th class="border-top-0">#</th>
                                        <th class="border-top-0">Nama</th>
                                        <th class="border-top-0">Email</th>
                                        <th class="border-top-0">Telepon</th>
                                        <th class="border-top-0">Pesan</th>
                                        <th class="border-top-0">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Deshmukh</td>
                                        <td>Prohaska</td>
                                        <td>0822130903109</td>
                                        <td>Hey</td>
                                        <td>
                                            <div class="d-flex gap-2">
                                                <a href="#" class="btn btn-success text-white">Edit</a>
                                                <a href="#" class="btn btn-danger text-white">Hapus</a>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include('struktur/footer.php') ?>