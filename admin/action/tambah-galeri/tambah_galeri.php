<?php
include('../config/db.php');
$aksi = @$_GET['action'];

switch ($aksi) {
    default:
?>
        <div class="row">
            <div class="col-sm-12">
                <div class="white-box">
                    <h3 class="box-title">Daftar</h3>
                    <?php
                    $query = mysqli_query($conn, "SELECT * FROM tb_daftar");
                    $no = 1;

                    while ($row = mysqli_fetch_assoc($query)):
                        if ($no % 2 == 1):
                    ?>
                            <div class="row mt-5">
                                <div class="col-md-5">
                                    <img src="temp/galeri/<?php echo $row['gambar'] ?>" class="border border-opacity-10" style="width: 100%;" alt="Galeri">
                                </div>
                                <div class="col-md-7">
                                    <h3><?php echo $row['judul'] ?></h3>
                                    <?php echo $row['keterangan'] ?>
                                </div>
                                <div class="d-flex justify-content-end gap-2">
                                    <a onclick="return confirm('Apakah anda yakin ingin menghapus?')" href="action/tambah-galeri/aksi_galeri.php?aksi=hapus&id=<?php echo $row['id_galeri'] ?>&file=<?php echo $row['gambar'] ?>" class="btn btn-danger text-white">Hapus</a>
                                </div>
                            </div>
                        <?php else: ?>
                            <div class="row mt-5">
                                <div class="col-md-7">
                                    <h3><?php echo $row['judul'] ?></h3>
                                    <?php echo $row['keterangan'] ?>
                                </div>
                                <div class="col-md-5">
                                    <img src="temp/galeri/<?php echo $row['gambar'] ?>" class="border border-opacity-10" style="width: 100%;" alt="Galeri">
                                </div>
                                <div class="d-flex justify-content-start gap-2">
                                    <a onclick="return confirm('Apakah anda yakin ingin menghapus?')" href="action/tambah-galeri/aksi_galeri.php?aksi=hapus&id=<?php echo $row['id_galeri'] ?>&file=<?php echo $row['gambar'] ?>" class="btn btn-danger text-white">Hapus</a>
                                </div>
                            </div>
                        <?php endif; ?>
                    <?php $no++; endwhile; ?>
                    <div class="mt-4">
                        <a href="?action=tambah" class="btn btn-primary text-white">Tambah</a>
                    </div>
                </div>
            </div>
        </div>
    <?php
        break;
    case "tambah":
    ?>
        <div class="row">
            <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                <div class="white-box">
                    <h3 class="box-title mb-4">Tambah Galeri</h3>
                    <form class="row" method="POST" action="action/tambah-galeri/aksi_galeri.php?aksi=tambah" enctype="multipart/form-data">
                        <div class="col-md-6" style="display: flex; flex-direction: column;">
                            <label for="nama">Judul</label>
                            <input id="nama" class="input" placeholder="text" name="nama">
                        </div>
                        <div class="col-md-6" style="display: flex; flex-direction: column;">
                            <label for="ket">Keterangan</label>
                            <textarea id="ket" class="input" placeholder="text" name="ket"></textarea>
                        </div>
                        <div class="col-md-6 mt-4" style="display: flex; flex-direction: column;">
                            <label for="gambar">Gambar</label>
                            <input type="file" id="gambar" class="input" placeholder="text" name="gambar">
                        </div>
                        <div class="d-flex justify-content-end gap-2 mt-4">
                            <button type="submit" class="btn btn-success text-white" name="submit">Simpan</button>
                            <a href="galeri.php" class="btn btn-danger text-white">Batal</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
<?php break;
} ?>