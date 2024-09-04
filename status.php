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
                        <div class="panel-body">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Nama</th>
                                        <th>Produk</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                        $id = $_SESSION['id'];
                                        $query = mysqli_query($conn, "SELECT * FROM tb_daftar WHERE id_user = '$id'");
                                        while($row = mysqli_fetch_assoc($query)):
                                    ?>
                                        <tr>
                                            <td><?php echo $row['nama']; ?></td>
                                            <td><?php echo $row['jenis_produk']; ?></td>
                                            <td><?php echo $row['status']; ?></td>
                                        </tr>
                                    <?php endwhile; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php include("layout/footer.php") ?>
<?php include("struktur/foot.php") ?>