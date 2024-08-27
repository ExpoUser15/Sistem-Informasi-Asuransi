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
                            <form>
                                <div class="d-flex gap-10" style="justify-content: space-between;">
                                    <label for="nama">Nama</label>
                                    <input type="text" style="width: 75%;">
                                </div>
                                <div class="d-flex gap-10" style="justify-content: space-between; margin-top: 20px;">
                                    <label for="nama">NIK</label>
                                    <input type="text" style="width: 75%;">
                                </div>
                                <div class="d-flex gap-10" style="justify-content: space-between; margin-top: 20px;">
                                    <label for="nama">Jenis Kelamin</label>
                                    <select style="width: 75%;">
                                        <option value="Laki-laki">Laki-laki</option>
                                        <option value="Perempuan">Perempuan</option>
                                    </select>
                                </div>
                                <div class="d-flex gap-10" style="justify-content: space-between; margin-top: 20px;">
                                    <label for="nama">Tempat Tanggal Lahir</label>
                                    <input type="text" style="width: 75%;">
                                </div>
                                <div class="d-flex gap-10" style="justify-content: space-between; margin-top: 20px;">
                                    <label for="nama">Jenis Produk</label>
                                    <select style="width: 75%;">
                                        <option></option>
                                    </select>
                                </div>
                                <div class="d-flex gap-10" style="justify-content: space-between; margin-top: 20px;">
                                    <label for="nama">Alamat</label>
                                    <input type="text" style="width: 75%;">
                                </div>
                                <div class="d-flex gap-10" style="justify-content: space-between; margin-top: 20px;">
                                    <label for="nama">No. Handphone</label>
                                    <input type="text" style="width: 75%;">
                                </div>
                                <div class="d-flex gap-10" style="justify-content: space-between; margin-top: 20px;">
                                    <label for="nama">Email</label>
                                    <input type="text" style="width: 75%;">
                                </div>
                                <div class="d-flex" style="justify-content: end;">
                                    <button type="submit" class="btn btn-default daftarBtn" style="margin-top: 20px; width: 20%;">Daftar</button>
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