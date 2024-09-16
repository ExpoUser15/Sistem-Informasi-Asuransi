<?php include("config/db.php"); ?>
<div id="main-wrapper">
  <?php include('struktur/pengunjung/layout/header.php'); ?>

  <div class="content-wrapper" style="padding-top: 60px;">

    <section class="spacer bg-light">
      <div class="container">
        <div class="row justify-content-md-center">
          <div class="col-md-8">
            <h1 class="text-dark mt-5" style="font-weight: 600; text-align: center;">Produk <span
                class="fw-bold text-danger">Prudential</span> Sorong</h1>
          </div>
        </div>
        <div class="row justify-content-md-center pt-5" style="gap: 20px;">
          <?php
          $query = mysqli_query($conn, "SELECT * FROM tb_produk");
          while ($row = mysqli_fetch_assoc($query)):
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

    <section class="spacer bg-light section">
      <div class="container">
        <h1 class="h1" style="text-align: center;">
          Cara Pembayaran Premi Asuransi Konvensional
        </h1>
        <h3>Mobile Banking</h3>
        <details>
          <summary>BRI</summary>
          <ol>
            <li>Login ke Mobile Banking BRI</li>
            <li>Pilih menu: “Pembayaran”</li>
            <li>Pilih menu Asuransi: “PRUDENTIAL”</li>
            <li>
              Pilih tipe pembayaran:
              <ul>
                <li>Premi Lanjutan/SPAJ</li>
                <li>Top-up premi</li>
                <li>Cetak Ulang Polis</li>
                <li>Perubahan Polis</li>
                <li>Cetak Kartu</li>
              </ul>
            </li>
            <li>Input Nomor Polis/SPAJ</li>
            <li>Input Jumlah Pembayaran</li>
            <li>Klik “OK”</li>
            <li>Masukkan PIN Anda</li>
            <li>Klik “Send”</li>
            <li>Konfirmasi pembayaran selesai dan sukses</li>
            <li>Selesai</li>
          </ol>
        </details>
        <details>
          <summary>Mandiri</summary>
          <ol>
            <li>Login ke Mobile Banking Bank Mandiri</li>
            <li>Pilih menu: “Bayar”</li>
            <li>Pilih menu: “Asuransi”</li>
            <li>Pilih: “PRUDENTIAL - 23000”</li>
            <li>Input Nomor Polis/SPAJ</li>
            <li>Input Jumlah Pembayaran</li>
            <li>Klik “Lanjutkan”</li>
            <li>
              Pilih “Jenis Pembayaran”:
              <ul>
                <li>PREM LANJUT/SPAJ</li>
                <li>TOP UP</li>
                <li>B. CTK POLIS</li>
                <li>B. PRB POLIS</li>
                <li>B. CTK KARTU</li>
              </ul>
            </li>
            <li>Konfirmasi Pembayaran</li>
            <li>Jika data pembayaran sudah benar, maka proses dilanjutkan dengan input PIN Mobile Banking</li>
            <li>Klik “OK”</li>
            <li>Konfirmasi pembayaran sudah selesai dan berhasil diproses</li>
            <li>Selesai</li>
          </ol>
        </details>
        <details>
          <summary>BCA</summary>
          <ol>
            <li>Login ke m-BCA</li>
            <li>Pilih menu: m-payment</li>
            <li>Pilih menu: Asuransi</li>
            <li>Pilih Nama Perusahaan: “PRUDENTIAL”</li>
            <li>
              Input: Kode Bayar (sesuai jenis pembayaran yang diinginkan) + Nomor Polis/SPAJ
              <ul>
                <li>7251: Premi Lanjutan/SPAJ</li>
                <li>7252: Top-up Premi</li>
                <li>7253: Biaya Cetak Ulang Polis</li>
                <li>7254: Biaya Perubahan Polis</li>
                <li>7255: Biaya Cetak Kartu</li>
              </ul>
            </li>
            <li>Klik “Kirim/Send”</li>
            <li>Input Jumlah Pembayaran</li>
            <li>Konfirmasi Pembayaran: Jika data sudah sesuai pilih “OK”</li>
            <li>Masukkan PIN anda</li>
            <li>Konfirmasi PIN Anda: Jika sudah sesuai pilih “OK”</li>
            <li>Konfirmasi pembayaran selesai dan sukses</li>
            <li>Selesai</li>
          </ol>
        </details>
        <details>
          <summary>Bank Mega</summary>
          <ol>
            <li>Login ke aplikasi Mega Mobile</li>
            <li>Daftar produk: Pilih “Asuransi”</li>
            <li>Daftar Biller: Pilih “Prudential”</li>
            <li>
              Pilih Jenis Pembayaran Premi yang diinginkan:
              <ul>
                <li>Bayar Premi Lanjutan/SPAJ</li>
                <li>Top up Premi</li>
                <li>Biaya cetak ulang polis</li>
                <li>Biaya Perubahan Polis</li>
                <li>Biaya Cetak Kartu</li>
              </ul>
            </li>
            <li>Masukkan Nomor SPAJ atau Nomor Polis tanpa perlu masukkan kode bayar</li>
            <li>Jika membayar Premi Pertama: “Masukkan No. SPAJ Anda</li>
            <li>Jika membayar Premi Lanjutan/Top-up/Biaya-biaya: “Masukkan Nomor Polis Anda”</li>
            <li>Jumlah Pembayaran: Masukkan “Jumlah Premi” yang akan dibayar</li>
            <li>
              Di halaman konfirmasi pembayaran, pastikan detail pembayaran sudah sesuai, seperti: Nom
        </details>
        <div>
          <h3 style="margin-top: 40px; padding-bottom: 10px; border-bottom: 1px solid #000;">Teller bank / loket</h3>
        </div>
        <div>
          <div>
            <p style="padding-bottom: 10px; border-bottom: 1px solid #000;">Loket PT POS</p>
          </div>
          <div>
            <p style="padding-bottom: 10px; border-bottom: 1px solid #000;">Teller BRI</p>
          </div>
          <div>
            <p style="padding-bottom: 10px; border-bottom: 1px solid #000;">Loket PT Pegadaian</p>
          </div>
        </div>
      </div>
    </section>
  </div>
  <!-- ============================================================== -->
  <!-- End page wrapperHeader part -->
  <!-- ============================================================== -->
  <?php include('struktur/pengunjung/layout/footer.php'); ?>
</div>