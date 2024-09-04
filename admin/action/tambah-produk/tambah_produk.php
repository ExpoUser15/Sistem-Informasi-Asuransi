<?php
include('../config/db.php');
$aksi = @$_GET['action'];

switch ($aksi) {
    default:
?>
        <div class="row">
                <div class="col-sm-12">
                    <div class="white-box">
                        <h3 class="box-title">Daftar Produk</h3>
                        <div class="row d-flex justify-content-center gap-4">
                            <?php 
                                $query = mysqli_query($conn, "SELECT * FROM tb_produk");

                                while($row = mysqli_fetch_assoc($query)):
                            ?>
                                <div class="card col-md-4 border" style="width: 18rem;">
                                    <img src="temp/produk/<?php echo $row['gambar'] ?>" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title"><?php echo $row['nama'] ?></h5>
                                        <p class="card-text"><?php echo $row['keterangan'] ?></p>
                                        <a href="action/tambah-produk/aksi_produk.php?aksi=hapus&id=<?php echo $row['id_produk'] ?>&file=<?php echo $row['gambar'] ?>" class="btn btn-danger text-white">Hapus</a>
                                    </div>
                                </div>
                            <?php endwhile; ?>
                        </div>
                        <div>
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
                    <h3 class="box-title mb-4">Tambah Produk</h3>
                    <form class="row" method="POST" action="action/tambah-produk/aksi_produk.php?aksi=tambah" enctype="multipart/form-data">
                        <div class="col-md-6" style="display: flex; flex-direction: column;">
                            <label for="nama">Nama Produk</label>
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
                            <a href="produk.php" class="btn btn-danger text-white">Batal</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
<?php break;
} ?>