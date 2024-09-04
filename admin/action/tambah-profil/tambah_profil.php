<?php
include('../config/db.php');
$aksi = @$_GET['action'];

switch ($aksi) {
    default:
?>
        <div class="row">
            <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                <div class="white-box">
                    <h3 class="box-title">Profil</h3>
                    <div class="row p-3" style="max-height: 500px; overflow: auto;">
                        <?php
                        $query = mysqli_query($conn, "SELECT * FROM tb_profil");
                        while ($row = mysqli_fetch_assoc($query)):
                        ?>
                            <div class="col-md-5">
                                <img src="temp/profil/<?php echo $row['gambar'] ?>" class="border border-opacity-10" style="width: 100%;" alt="Profil">
                            </div>
                            <div class="col-md-7">
                                <h3><?php echo $row['judul'] ?></h3>
                                <?php echo $row['keterangan'] ?>
                            </div>
                            <div class="d-flex justify-content-end gap-2">
                                <a href="action/tambah-profil/aksi_profil.php?aksi=hapus&id=<?php echo $row['id_profil']; ?>&file=<?php echo $row['gambar']; ?>" class="btn btn-danger text-white">Hapus</a>
                            </div>
                        <?php endwhile; ?>
                    </div>
                    <div class="mt-4">
                        <a href="?action=tambah-profil" class="btn btn-success text-white">Tambah</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                <div class="white-box">
                    <h3 class="box-title">Struktur Organisasi</h3>
                    <div class="row p-3" style="max-height: 500px; overflow: auto;">
                        <?php
                        $query2 = mysqli_query($conn, "SELECT * FROM tb_organisasi");
                        while ($row = mysqli_fetch_assoc($query2)):
                        ?>
                            <div class="col-md-5">
                                <img src="temp/struktur/<?php echo $row['gambar'] ?>" class="border border-opacity-10" style="width: 100%;" alt="Profil">
                            </div>
                            <div class="col-md-7">
                                <h3><?php echo $row['nama'] ?></h3>
                                <?php echo $row['keterangan'] ?>
                            </div>
                            <div class="d-flex justify-content-end gap-2">
                                <a href="action/tambah-profil/aksi_profil.php?aksi=hapus/struktur-organisasi&id=<?php echo $row['id_organisasi']; ?>&file=<?php echo $row['gambar']; ?>" class="btn btn-danger text-white">Hapus</a>
                            </div>
                        <?php endwhile; ?>
                    </div>
                    <div class="mt-4">
                        <a href="?action=tambah-struktur" class="btn btn-success text-white">Tambah</a>
                    </div>
                </div>
            </div>
        </div>


    <?php
        break;
    case "tambah-profil":
    ?>
        <div class="row">
            <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                <div class="white-box">
                    <h3 class="box-title mb-4">Tambah Profil</h3>
                    <form class="row" method="POST" action="action/tambah-profil/aksi_profil.php?aksi=tambah" enctype="multipart/form-data">
                        <div class="col-md-6" style="display: flex; flex-direction: column;">
                            <label for="judul">Judul</label>
                            <input id="judul" class="input" placeholder="text" name="judul">
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
                            <a href="profil.php" class="btn btn-danger text-white">Batal</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>

<?php break;
case "tambah-struktur":
?>

<div class="row">
            <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                <div class="white-box">
                    <h3 class="box-title mb-4">Tambah Struktur Organisasi</h3>
                    <form class="row" method="POST" action="action/tambah-profil/aksi_profil.php?aksi=tambah/struktur-organisasi" enctype="multipart/form-data">
                        <div class="col-md-6" style="display: flex; flex-direction: column;">
                            <label for="judul">Nama</label>
                            <input id="judul" class="input" placeholder="text" name="nama">
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
                            <a href="profil.php" class="btn btn-danger text-white">Batal</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
<?php break;
} ?>