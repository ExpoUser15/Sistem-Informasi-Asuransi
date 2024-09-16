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
                        <h3 class="box-title">Daftar Pembayaran</h3>
                        <div class="table-responsive">
                            <table class="table text-nowrap">
                                <thead>
                                    <tr>
                                        <th class="border-top-0">#</th>
                                        <th class="border-top-0">Nama</th>
                                        <th class="border-top-0">Produk</th>
                                        <th class="border-top-0">Pembayaran</th>
                                        <th class="border-top-0">Status</th>
                                        <th class="border-top-0">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                        include('../config/db.php');

                                        $no = 1;
                                        $query = mysqli_query($conn, "SELECT tb_pembayaran.*, tb_daftar.nama AS n, tb_produk.nama AS np FROM tb_pembayaran JOIN tb_users ON tb_users.id_user = tb_pembayaran.id_user JOIN tb_daftar ON tb_daftar.id_user = tb_pembayaran.id_user JOIN tb_produk ON tb_produk.id_produk = tb_pembayaran.id_produk WHERE tb_daftar.jenis_produk = tb_pembayaran.id_produk");
                                        while($row = mysqli_fetch_assoc($query)):
                                    ?>
                                    <tr>
                                        <td><?php echo $no++; ?></td>
                                        <td><?php echo $row['n']; ?></td>
                                        <td><?php echo $row['np']; ?></td>
                                        <td><a class="lihat" style="cursor: pointer;" data-img="../temp/gambar/<?php echo $row['bukti_pembayaran']; ?>">Lihat</a></td>
                                        <td><?php echo $row['status']; ?></td>
                                        <td>
                                            <div class="d-flex gap-2">
                                                <a onclick="return confirm('Apakah anda yakin?')" href="?pay=berhasil&id=<?php echo $row['id_pembayaran']; ?>&aksi=Berhasil" class="btn btn-success text-white">Berhasil</a>
                                                <a onclick="return confirm('Apakah anda yakin?')" href="?pay=berhasil&id=<?php echo $row['id_pembayaran']; ?>&aksi=Gagal" class="btn btn-danger text-white">Gagal</a>
                                                <a onclick="return confirm('Apakah anda yakin ingin menghapus?')" href="?pay=hapus&id=<?php echo $row['id_pembayaran']; ?>" class="btn btn-danger text-white">Hapus</a>
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
    $get = @$_GET['pay'];
    $id = @$_GET['id'];

    if($get === 'hapus'){
        mysqli_query($conn, "DELETE FROM tb_pembayaran WHERE id_pembayaran = '$id'");

        if(mysqli_affected_rows($conn)){
            echo '<script>alert("Hapus bukti pembayaran berhasil")
                            location.href = "pembayaran.php";
                        </script>';
        }else{
            echo '<script>alert("Hapus bukti pembayaran berhasil")
            location.href = "pembayaran.php";
        </script>';
        }
    }

    if($get === 'berhasil'){
        $aksi = $_GET['aksi'];
        mysqli_query($conn, "UPDATE tb_pembayaran SET status = '$aksi' WHERE id_pembayaran = '$id'");

        if(mysqli_affected_rows($conn)){
            echo '<script>alert("Verifikasi pembayaran berhasil")
                            location.href = "pembayaran.php";
                        </script>';
        }else{
            echo '<script>alert("Verifikasi pembayaran gagal")
            location.href = "pembayaran.php";
        </script>';
        }
    }
?>

<dialog class="dialog" style="width: 70%; border: 1px solid #ccc; outline: none; border-radius: 10px; box-shadow: 1px 1px 3px black;">
    <p class="x" style="cursor: pointer; width: fit-content; font-size: 1.3rem;">X</p>
    <img src="" alt="" class="dialogImg" style="width: 100%; height: 100%;">
</dialog>

<script>
    const lihat = document.querySelectorAll('.lihat');
    const dialogImg = document.querySelector('.dialogImg');
    const dialog = document.querySelector('.dialog');

    lihat.forEach(item => {
        item.addEventListener('click', (e) => {
            const img = e.target.dataset.img;

            dialogImg.src = img;
            dialog.showModal();
        });
    });

    document.querySelector('.x').addEventListener('click', (e) => {
        dialog.close();
    });
</script>
<?php include('struktur/footer.php') ?>