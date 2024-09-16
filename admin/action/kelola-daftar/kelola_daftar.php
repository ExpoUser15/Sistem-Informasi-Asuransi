<?php
include('../config/db.php');
$aksi = @$_GET['action'];

switch ($aksi) {
    default:
?>
        <div class="row">
                <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                    <div class="white-box">
                        <h3 class="box-title">Pendaftaran</h3>
                        <div class="table-responsive" style="height: 500px; overflow-y: auto;">
                            <table class="table text-nowrap">
                                <thead>
                                    <tr>
                                        <th class="border-top-0">#</th>
                                        <th class="border-top-0">ID</th>
                                        <th class="border-top-0">Nama</th>
                                        <th class="border-top-0">Email</th>
                                        <th class="border-top-0">Telepon</th>
                                        <th class="border-top-0">Status</th>
                                        <th class="border-top-0">Detail</th>
                                        <th class="border-top-0">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                        include('../config/db.php');

                                        $no = 1;
                                        $query = mysqli_query($conn, "SELECT * FROM tb_daftar");
                                        while($row = mysqli_fetch_assoc($query)):
                                    ?>
                                    <tr>
                                        <td><?php echo $no++; ?></td>
                                        <td><?php echo $row['id_daftar']; ?></td>
                                        <td><?php echo $row['nama']; ?></td>
                                        <td><?php echo $row['email']; ?></td>
                                        <td><?php echo $row['no_hp']; ?></td>
                                        <td><?php echo $row['status']; ?></td>
                                        <td><a href="?action=detail&user=<?php echo $row['id_daftar']; ?>">Detail</a></td>
                                        <td>
                                            <div class="d-flex gap-2">
                                                <?php if($row['status'] === 'Proses'): ?>
                                                    <a onclick="return confirm('Apakah anda yakin ingin menyetujui?');" href="?action=setuju&id=<?php echo $row['id_daftar']; ?>" class="btn btn-success text-white">Setujui</a>
                                                <?php else: ?>
                                                    <a onclick="return confirm('Apakah anda yakin ingin membatalkan?');" href="?action=batal&id=<?php echo $row['id_daftar']; ?>" class="btn btn-danger text-white">Batal</a>
                                                <?php endif; ?>
                                                <a onclick="return confirm('Apakah anda yakin ingin menghapus?');" href="?action=hapus&id=<?php echo $row['id_daftar']; ?>" class="btn btn-danger text-white">Hapus</a>
                                            </div>
                                        </td>
                                    </tr>
                                    <?php endwhile; ?>
                                </tbody>
                            </table>
                            <div>
                                <h3 class="box-title">Metode Pembayaran</h3>
                                <div class="container">
                                    <?php 
                                        $res = mysqli_query($conn, "SELECT * FROM tb_metode_pembayaran");
                                        $row2 = mysqli_fetch_assoc($res);
                                    ?>
                                    <form action="?action=metode&id=<?php echo empty($row2['id_']) ? '' : $row2['id_']; ?>" method="POST" class="row">
                                        <div class="col-md-6" style="display: flex; flex-direction: column;">
                                            <label for="mobile">Mobile Banking</label>
                                            <input id="mobile" class="input" placeholder="text" name="mobile" value="<?php echo @$row2['mobile_banking']; ?>">
                                        </div>
                                        <div class="col-md-6" style="display: flex; flex-direction: column;">
                                            <label for="pos">Kode Pos</label>
                                            <input id="pos" class="input" placeholder="text" name="pos" value="<?php echo @$row2['kode_pos']; ?>">
                                        </div>
                                        <div class="d-flex justify-content-end gap-2 mt-4">
                                            <button type="submit" name="simpan" class="btn btn-primary text-white">Simpan</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    <?php
        break;
    case "detail":
    ?>
        <div class="row">
            <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                <div class="white-box">
                    <?php 
                        $id = $_GET['user'];
                        $query2 = mysqli_query($conn, "SELECT tb_daftar.*, tb_produk.nama AS n FROM tb_daftar JOIN tb_produk ON tb_produk.id_produk = tb_daftar.jenis_kelamin WHERE id_daftar = '$id'");
                        $row = mysqli_fetch_assoc($query2);
                    ?>
                    <h3 class="box-title mb-4">Detail Pendaftar</h3>
                    <form class="row" method="POST" action="action/tambah-galeri/aksi_galeri.php?aksi=tambah" enctype="multipart/form-data">
                        <div class="col-md-6" style="display: flex; flex-direction: column;">
                            <label for="nama">Nama</label>
                            <input id="nama" class="input" placeholder="text" name="nama" readonly value="<?php echo $row['nama']; ?>">
                        </div>
                        <div class="col-md-6" style="display: flex; flex-direction: column;">
                            <label for="ket">NIK</label>
                            <input id="nama" class="input" placeholder="text" name="nama" readonly value="<?php echo $row['NIK']; ?>">
                        </div>
                        <div class="col-md-6 mt-4" style="display: flex; flex-direction: column;">
                            <label for="gambar">Jenis Kelamin</label>
                            <input id="nama" class="input" placeholder="text" name="nama" readonly value="<?php echo $row['jenis_kelamin']; ?>">
                        </div>
                        <div class="col-md-6 mt-4" style="display: flex; flex-direction: column;">
                            <label for="gambar">Jenis Produk</label>
                            <input id="nama" class="input" placeholder="text" name="nama" readonly value="<?php echo $row['n']; ?>">
                        </div>
                        <div class="col-md-6 mt-4" style="display: flex; flex-direction: column;">
                            <label for="gambar">Alamat</label>
                            <input id="nama" class="input" placeholder="text" name="nama" readonly value="<?php echo $row['alamat']; ?>">
                        </div>
                        <div class="col-md-6 mt-4" style="display: flex; flex-direction: column;">
                            <label for="gambar">Telepon</label>
                            <input id="nama" class="input" placeholder="text" name="nama" readonly value="<?php echo $row['no_hp']; ?>">
                        </div>
                        <div class="col-md-6 mt-4" style="display: flex; flex-direction: column;">
                            <label for="gambar">Email</label>
                            <input id="nama" class="input" placeholder="text" name="nama" readonly value="<?php echo $row['email']; ?>">
                        </div>
                        <div class="col-md-6 mt-4" style="display: flex; flex-direction: column;">
                            <label for="gambar">Status</label>
                            <input id="nama" class="input" placeholder="text" name="nama" readonly value="<?php echo $row['status']; ?>">
                        </div>
                        <div class="d-flex justify-content-end gap-2 mt-4">
                            <a href="daftar.php" class="btn btn-danger text-white">Kembali</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
<?php break;
    case "hapus":
        $id = $_GET['id'];

        mysqli_query($conn, "DELETE FROM tb_daftar WHERE id_daftar = '$id'");
        if(mysqli_affected_rows($conn)){
            echo '<script>alert("Berhasil menghapus data");
                location.href = "daftar.php";
            </script>';
        }else{
            echo '<script>alert("Gagal menghapus data");
                location.href = "daftar.php";
            </script>';
        }
    break;
    case 'metode':
        $id = @$_GET['id'];
        if(isset($_POST['simpan'])){
            $mobile = $_POST['mobile'];
            $pos = $_POST['pos'];

            if(!empty($id)){
                mysqli_query($conn, "UPDATE tb_metode_pembayaran SET mobile_banking = '$mobile', kode_pos = '$pos'");
            }else{
                mysqli_query($conn, "INSERT INTO tb_metode_pembayaran VALUES ('', '$mobile', '$pos')");
            }

            if(mysqli_affected_rows($conn)){
                echo '<script>alert("Metode pembayaran berhasil disimpan!");
                    location.href = "daftar.php";
                </script>';
            }else{
                echo '<script>alert("Metode pembayaran gagal disimpan!");
                    location.href = "daftar.php";
                </script>';
            }
        }
    break;
    case 'setuju':
        $id = @$_GET['id'];
        
        mysqli_query($conn, "UPDATE tb_daftar SET status = 'Selesai' WHERE id_daftar = '$id'");

        if(mysqli_affected_rows($conn)){
            echo '<script>alert("Pendaftaran berhasil disetujui!");
                location.href = "daftar.php";
            </script>';
        }else{
            echo '<script>alert("Pendaftaran gagal disetujui!");
                location.href = "daftar.php";
            </script>';
        }
    break;
    case 'batal':
        $id = @$_GET['id'];
        
        mysqli_query($conn, "UPDATE tb_daftar SET status = 'Proses' WHERE id_daftar = '$id'");

        if(mysqli_affected_rows($conn)){
            echo '<script>alert("Pendaftaran berhasil dibatalkan!");
                location.href = "daftar.php";
            </script>';
        }else{
            echo '<script>alert("Pendaftaran gagal dibatalkan!");
                location.href = "daftar.php";
            </script>';
        }
    break;
} ?>