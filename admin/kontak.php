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
                                    <?php 
                                        include('../config/db.php');

                                        $no = 1;
                                        $query = mysqli_query($conn, "SELECT * FROM tb_kontak");
                                        while($row = mysqli_fetch_assoc($query)):
                                    ?>
                                    <tr>
                                        <td><?php echo $no++; ?></td>
                                        <td><?php echo $row['nama']; ?></td>
                                        <td><?php echo $row['email']; ?></td>
                                        <td><?php echo $row['no_hp']; ?></td>
                                        <td><?php echo $row['pesan']; ?></td>
                                        <td>
                                            <div class="d-flex gap-2">
                                                <a onclick="return confirm('Apakah anda yakin ingin menghapus?')" href="?kontak=hapus&id=<?php echo $row['id_kontak']; ?>" class="btn btn-danger text-white">Hapus</a>
                                            </div>
                                        </td>
                                    </tr>
                                    <?php endwhile; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php 
    $get = @$_GET['kontak'];
    $id = @$_GET['id'];

    if($get === 'hapus'){
        mysqli_query($conn, "DELETE FROM tb_kontak WHERE id_kontak = '$id'");

        if(mysqli_affected_rows($conn)){
            echo '<script>alert("Pesan berhasil dihapus!");
                location.href = "kontak.php";
            </script>';
        }else{
            echo '<script>alert("Pesan gagal dihapus!");
                location.href = "kontak.php";
            </script>';
        }
    }
?>
<?php include('struktur/footer.php') ?>