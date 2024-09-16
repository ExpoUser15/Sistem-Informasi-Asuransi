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
                            <h3 class="panel-title">Status Permintaan</h3>
                        </div>
                        <div class="panel-body" style="overflow-x: auto;">
                            <table class="table">
                                <?php 
                                    $val = false;
                                ?>
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>ID</th>
                                        <th>Produk</th>
                                        <th>Status</th>
                                        <th>Upload Bukti Pembayaran</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                        $id = $_SESSION['id'];
                                        $query = mysqli_query($conn, "SELECT * FROM tb_daftar JOIN tb_produk ON tb_produk.id_produk = tb_daftar.jenis_produk WHERE id_user = '$id'");
                                        
                                        $no = 1;
                                        while($row = mysqli_fetch_assoc($query)):
                                            $val = $row['status'] !== 'Proses' ? true : false;
                                    ?>
                                        <tr>
                                            <td style="margin-top: 5px;"><?php echo $no++ ?></td>
                                            <td style="margin-top: 5px;"><?php echo $row['id_daftar']; ?></td>
                                            <td style="margin-top: 5px;"><?php echo $row['nama']; ?></td>
                                            <td style="margin-top: 5px;"><?php echo $row['status']; ?></td>
                                            <?php 
                                                if($val):      
                                            ?>
                                                <td>
                                                    <form action="?action=upload&id=<?php echo $row['id_user'] ?>&idproduk=<?php echo $row['id_produk'] ?>" enctype="multipart/form-data" style="display: flex;" method="POST">
                                                        <input type="file" style="color: blue;" name="data" style="padding: 0;"/>
                                                        <input type="submit" name="upload" value="Upload"/>
                                                    </form>
                                                    <?php 
                                                        $idproduk = $row['id_produk'];
                                                        $res = mysqli_query($conn, "SELECT status FROM tb_pembayaran WHERE id_user = '$id' AND id_produk = '$idproduk'");
                                                        $result = mysqli_fetch_assoc($res);
                                                    ?>
                                                    <p style="font-style: italic;"><?php echo $result['status'] === 'Berhasil' ? 'Pembayaran berhasil, silahkan mengambil buku polis di kantor prudential.' : ($result['status'] === 'Proses' ? '' : 'Gagal Silahkan coba kembali !'); ?></p>
                                                </td>
                                            <?php else: ?>
                                                <td style="margin-top: 5px; padding-left: 40px;">---</td>
                                            <?php endif; ?>
                                        </tr>
                                    <?php endwhile; ?>
                                </tbody>
                            </table>
                            <div style="margin-top: 50px;">
                                <h4 style="font-weight: bold;">Metode Pembayaran</h4>
                                <?php 
                                    $pembayaran = mysqli_query($conn, "SELECT * FROM tb_metode_pembayaran");
                                    $pembayaran = mysqli_fetch_assoc($pembayaran);
                                ?>
                                <div>
                                    <p>Metode Pembayaran (Mobile Banking): <span style="font-weight: bold;"><?php echo $pembayaran['mobile_banking']; ?></span></p>
                                    <p>Metode Pembayaran (Kode Pos): <span style="font-weight: bold;"><?php echo $pembayaran['kode_pos']; ?></span></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php 
        include('action/file_management.php');
        $get = @$_GET['action'];
        $id = @$_GET['id'];
        $produk = @$_GET['idproduk'];

        if($get === 'upload'){
            if(isset($_POST['upload'])){
                $file = file_management('temp/gambar/', 'data', 'status.php?page=status', 'status.php?page=status');
    
                mysqli_query($conn, "INSERT INTO tb_pembayaran VALUES ('', '$file', 'Proses', '$id', '$produk')");
    
                if(mysqli_affected_rows($conn)){
                    echo '<script>alert("Upload bukti pembayaran berhasil")
                            location.href = "status.php?page=status";
                        </script>';
                }else{
                    echo '<script>alert("Upload bukti pembayaran gagal")
                            location.href = "status.php?page=status";
                        </script>';
                }
            }
        }
    ?>

    <?php include("layout/footer.php") ?>
<?php include("struktur/foot.php") ?>