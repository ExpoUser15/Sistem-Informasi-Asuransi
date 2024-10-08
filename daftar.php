<?php include("config/db.php"); ?>
<?php
include("action/session.php");
?>
<?php include("struktur/head.php") ?>
<?php include("layout/navbar.php") ?>
    <section id="main">
        <div class="container">
            <div class="row">
                <?php include("layout/sidebar.php") ?>
                <div class="col-md-9">
                    <!-- WEBSITE OVERVIEW  -->
                    <div class="panel panel-default">
                        <div class="panel-heading main-color-bg">
                            <h3 class="panel-title">Daftarkan Diri Anda Disini</h3>
                        </div>
                        <div class="panel-body">
                            <form action="action/daftarAction.php" method="POST" enctype="multipart/form-data">
                                <div class="d-flex gap-10" style="justify-content: space-between;">
                                    <label for="nama">Nama</label>
                                    <input type="text" style="width: 75%;" name="nama">
                                </div>
                                <div class="d-flex gap-10" style="justify-content: space-between; margin-top: 20px;">
                                    <label for="nik">NIK</label>
                                    <input type="text" style="width: 75%;" name="nik">
                                </div>
                                <div class="d-flex gap-10" style="justify-content: space-between; margin-top: 20px;">
                                    <label for="jk">Jenis Kelamin</label>
                                    <select style="width: 75%;" name="jk">
                                        <option value="Laki-laki">Laki-laki</option>
                                        <option value="Perempuan">Perempuan</option>
                                    </select>
                                </div>
                                <div class="d-flex gap-10" style="justify-content: space-between; margin-top: 20px;">
                                    <label for="date">Tempat Tanggal Lahir</label>
                                    <input type="date" style="width: 75%;" name="date">
                                </div>
                                <div class="d-flex gap-10" style="justify-content: space-between; margin-top: 20px;">
                                    <label for="jp">Jenis Produk</label>
                                    <select style="width: 75%;" name="jp">
                                        <?php 
                                            $query = mysqli_query($conn, "SELECT nama, id_produk FROM tb_produk");
                                            while($row = mysqli_fetch_assoc($query)):
                                        ?>
                                        <option value="<?php echo $row['id_produk'] ?>"><?php echo $row['nama'] ?></option>
                                        <?php endwhile; ?>
                                    </select>
                                </div>
                                <div class="d-flex gap-10" style="justify-content: space-between; margin-top: 20px;">
                                    <label for="alamat">Alamat</label>
                                    <input type="text" style="width: 75%;" name="alamat">
                                </div>
                                <div class="d-flex gap-10" style="justify-content: space-between; margin-top: 20px;">
                                    <label for="hp">No. Handphone</label>
                                    <input type="text" style="width: 75%;" name="hp">
                                </div>
                                <div class="d-flex gap-10" style="justify-content: space-between; margin-top: 20px;">
                                    <label for="email">Email</label>
                                    <input type="text" style="width: 75%;" name="email">
                                </div>
                                <div class="d-flex gap-10" style="justify-content: space-between; margin-top: 20px;">
                                    <label for="email">TTD</label>
                                    <input type="file" style="width: 75%;" name="ttd">
                                </div>
                                <div class="d-flex gap-10" style="justify-content: space-between; margin-top: 20px;">
                                    <label for="email">KTP</label>
                                    <input type="file" style="width: 75%;" name="ktp">
                                </div>
                                <div class="d-flex" style="justify-content: end;">
                                    <button type="submit" class="btn btn-default daftarBtn" style="margin-top: 20px; width: 20%;" name="daftar">Daftar</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php include("layout/footer.php") ?>
<?php include("struktur/foot.php") ?>