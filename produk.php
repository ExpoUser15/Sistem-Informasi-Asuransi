<?php include("config/db.php"); ?>
<div id="main-wrapper">
  <?php include('struktur/pengunjung/layout/header.php'); ?>

  <div class="content-wrapper" style="padding-top: 60px;">

    <section class="spacer bg-light" id="profil">
      <div class="">
        <div class="row justify-content-md-center">
          <div class="col-md-8">
            <h1 class="text-dark mt-5" style="font-weight: 600; text-align: center;">Produk <span
                class="fw-bold text-danger">Prudential</span> Sorong</h1>
          </div>
        </div>
        <div class="row justify-content-md-center pt-5" style="gap: 20px;">
          <?php 
            $query = mysqli_query($conn, "SELECT * FROM tb_produk");
            while($row = mysqli_fetch_assoc($query)):
          ?>
          <a href="?page=login" class="col-md-3 bg-white p-0" style="border-radius:6px; box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.45); overflow: hidden;">
            <img src="admin/temp/produk/<?php echo $row['gambar']; ?>" alt="<?php echo $row['nama']; ?>" style="width: 100%;">
            <div class="mt-2" style="padding: 15px 40px;">
              <h3 style="font-weight: 500; color: black;"><?php echo $row['nama']; ?></h3>
              <p class="mt-2" style="font-size: 0.9rem; font-weight: 400; line-height: 1.4rem;  color: black;"><?php echo $row['keterangan']; ?></p>
            </div>
          </a>
          <?php endwhile; ?>
        </div>
      </div>
    </section>
  </div>
  <!-- ============================================================== -->
  <!-- End page wrapperHeader part -->
  <!-- ============================================================== -->
  <?php include('struktur/pengunjung/layout/footer.php'); ?>
</div>