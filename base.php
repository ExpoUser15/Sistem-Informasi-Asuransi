<?php include("config/db.php"); ?>
    <div id="main-wrapper">
        <?php include('struktur/pengunjung/layout/header.php'); ?>
        <div class="content-wrapper" style="padding-top: 130px;">
            <section class="spacer bg-light p-0" id="home">
                <img src="gambar/Homepage-Banner-PRUWell-Health-Desktop-1366x560.jpg" style="width: 100%;" alt="">
            </section>
            <section class="spacer bg-light" style="padding-top: 150px;">
                <div class="row d-flex" style="gap: 100px;">
                    <img src="gambar/554989907-666x444.jpg" alt="">
                    <div class="mt-5" style="width: 400px; font-weight: bolder;">
                        <h1 style="text-wrap: wrap; font-weight: bolder;">Promo Hingga 300 ribu OVO Points</h1>
                        <h1 style="text-wrap: wrap;">Setiap Pembelian Polis Baru</h1>
                        <p style="font-weight: 500;">Dapatkan 200.000 + 100.000 OVO Points dengan membeli Polis baru
                            minimum Rp200.000 dari Prudential Indonesia. Syarat dan Ketentuan berlaku.</p>
                    </div>
                </div>
            </section>

            <?php 
                $query = mysqli_query($conn, "SELECT * FROM tb_profil");
                $no = 1;
                while($row = mysqli_fetch_assoc($query)):
                    $no = 0;
                    if($no % 2 == 1):
            ?>

                        <section class="spacer bg-light" id="profil">
                            <div class="container">
                                <div class="row justify-content-md-center pt-5">
                                    <div class="col-md-7">
                                        <img src="admin/temp/profil/<?php echo $row['gambar']; ?>" style="width: 100%; border: 1px solid #ccc; box-shadow: 2px 2px 5px 0px rgba(0,0,0,0.45); border-radius: 5px;">
                                    </div>
                                    <div class="col-md-5" style="padding-left: 20px;">
                                        <h1 class="text-dark mt-5" style="font-weight: 600;"><?php echo $row['judul']; ?></h1>
                                        <p class="mt-4">
                                            <?php echo $row['keterangan']; ?>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </section>
            <?php else: ?>
                        <section class="spacer bg-light" id="profil">
                            <div class="container">
                                <div class="row justify-content-md-center pt-5">
                                    <div class="col-md-5">
                                        <h1 class="text-dark mt-5" style="font-weight: 600;"><?php echo $row['judul']; ?></h1>
                                        <p class="mt-4">
                                            <?php echo $row['keterangan']; ?>
                                        </p>
                                    </div>
                                    <div class="col-md-7">
                                        <img src="admin/temp/profil/<?php echo $row['gambar']; ?>" alt="Kantor Prudential Sorong" style="width: 100%; border: 1px solid #ccc; box-shadow: 2px 2px 5px 0px rgba(0,0,0,0.45); border-radius: 5px;">
                                    </div>
                                </div>
                            </div>
                        </section>
            <?php 
                endif;
                $no++;
            endwhile;

            $query = mysqli_query($conn, "SELECT * FROM tb_organisasi");
            while($row = mysqli_fetch_assoc($query)):
                if($no % 2 == 1):
            ?>
                <section class="spacer bg-light" id="profil">
                            <div class="container">
                                <div class="row justify-content-md-center pt-5">
                                    <div class="col-md-7">
                                        <img src="admin/temp/struktur/<?php echo $row['gambar']; ?>" style="width: 100%; border: 1px solid #ccc; box-shadow: 2px 2px 5px 0px rgba(0,0,0,0.45); border-radius: 5px;">
                                    </div>
                                    <div class="col-md-5" style="padding-left: 20px;">
                                        <h1 class="text-dark mt-5" style="font-weight: 600;"><?php echo $row['nama']; ?></h1>
                                        <p class="mt-4">
                                            <?php echo $row['keterangan']; ?>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </section>
                <?php else: ?>
                    <section class="spacer bg-light" id="profil">
                            <div class="container">
                                <div class="row justify-content-md-center pt-5">
                                    <div class="col-md-5">
                                        <h1 class="text-dark mt-5" style="font-weight: 600;"><?php echo $row['nama']; ?></h1>
                                        <p class="mt-4">
                                            <?php echo $row['keterangan']; ?>
                                        </p>
                                    </div>
                                    <div class="col-md-7">
                                        <img src="admin/temp/struktur/<?php echo $row['gambar']; ?>" alt="Kantor Prudential Sorong" style="width: 100%; border: 1px solid #ccc; box-shadow: 2px 2px 5px 0px rgba(0,0,0,0.45); border-radius: 5px;">
                                    </div>
                                </div>
                            </div>
                        </section>
                        <?php 
                endif;
                $no++;
            endwhile; ?>

            <section class="spacer bg-light">
                <div class="container">
                    <div class="row justify-content-md-center pt-5">
                        <div class="col-md-10">
                            <h1 class="text-dark mt-5" style="font-weight: 600;">Tentang <span
                                    class="fw-bold text-danger">Prudential </span>Indonesia</h1>
                            <p class="mt-4">PT Prudential Life Assurance (Prudential Indonesia) didirikan pada 1995 dan
                                merupakan
                                bagian dari Prudential plc, yang menyediakan asuransi jiwa dan kesehatan serta manajemen
                                aset, dengan berfokus di Asia dan Afrika. Dengan menggabungkan pengalaman internasional
                                Prudential di bidang asuransi jiwa dengan pengetahuan tata cara bisnis lokal, Prudential
                                Indonesia memiliki komitmen untuk mengembangkan bisnisnya di Indonesia.
                            </p>
                            <p>Prudential Indonesia juga berkomitmen untuk menjadi mitra dan pelindung terpercaya bagi
                                generasi saat ini dan generasi mendatang, dengan menyediakan solusi keuangan dan
                                kesehatan yang sederhana dan mudah diakses.
                            </p>
                            <p>Prudential Indonesia memiliki kantor pusat di Jakarta dengan 6 kantor pemasaran di
                                Bandung, Semarang, Surabaya, Denpasar, Medan, dan Batam serta lebih dari 300 Kantor
                                Pemasaran Mandiri (KPM) di seluruh Indonesia dan didukung oleh lebih dari 100.000 tenaga
                                pemasar berlisensi.</p>
                            <p>Prudential Indonesia berizin dan diawasi oleh Otoritas Jasa Keuangan (OJK).</p>
                        </div>
                    </div>
                </div>
            </section>
            <section class="spacer bg-light" id="kontak">
                <div class="container">
                    <h1 class="text-dark mt-5" style="font-weight: 600; text-align: center;">Kontak</h1>
                    <div class="row justify-content-md-center pt-5">
                        <div class="col-md-4">
                            <form class="form">
                                <div class="title">Butuh bantuan?<br><span>silahkan hubungi kami melalui form dibawah
                                        ini</span></div>
                                <input type="text" placeholder="Nama" name="nama" class="input">
                                <input type="email" placeholder="Email" name="email" class="input">
                                <input type="text" placeholder="No. Handphone" name="no__hp" class="input">
                                <textarea name="" id="" cols="30" rows="10" class="input"
                                    placeholder="Pesan"></textarea>
                                <div class="login-with">
                                    <div class="button-log"></div>
                                    <div class="button-log">
                                        <svg class="icon" height="56.6934px" id="Layer_1"
                                            style="enable-background:new 0 0 56.6934 56.6934;" version="1.1"
                                            viewBox="0 0 56.6934 56.6934" width="56.6934px" xml:space="preserve"
                                            xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink">
                                            <path
                                                d="M51.981,24.4812c-7.7173-0.0038-15.4346-0.0019-23.1518-0.001c0.001,3.2009-0.0038,6.4018,0.0019,9.6017  c4.4693-0.001,8.9386-0.0019,13.407,0c-0.5179,3.0673-2.3408,5.8723-4.9258,7.5991c-1.625,1.0926-3.492,1.8018-5.4168,2.139  c-1.9372,0.3306-3.9389,0.3729-5.8713-0.0183c-1.9651-0.3921-3.8409-1.2108-5.4773-2.3649  c-2.6166-1.8383-4.6135-4.5279-5.6388-7.5549c-1.0484-3.0788-1.0561-6.5046,0.0048-9.5805  c0.7361-2.1679,1.9613-4.1705,3.5708-5.8002c1.9853-2.0324,4.5664-3.4853,7.3473-4.0811c2.3812-0.5083,4.8921-0.4113,7.2234,0.294  c1.9815,0.6016,3.8082,1.6874,5.3044,3.1163c1.5125-1.5039,3.0173-3.0164,4.527-4.5231c0.7918-0.811,1.624-1.5865,2.3908-2.4196  c-2.2928-2.1218-4.9805-3.8274-7.9172-4.9056C32.0723,4.0363,26.1097,3.995,20.7871,5.8372  C14.7889,7.8907,9.6815,12.3763,6.8497,18.0459c-0.9859,1.9536-1.7057,4.0388-2.1381,6.1836  C3.6238,29.5732,4.382,35.2707,6.8468,40.1378c1.6019,3.1768,3.8985,6.001,6.6843,8.215c2.6282,2.0958,5.6916,3.6439,8.9396,4.5078  c4.0984,1.0993,8.461,1.0743,12.5864,0.1355c3.7284-0.8581,7.256-2.6397,10.0725-5.24c2.977-2.7358,5.1006-6.3403,6.2249-10.2138  C52.5807,33.3171,52.7498,28.8064,51.981,24.4812z">
                                            </path>
                                        </svg>
                                    </div>
                                    <div class="button-log">
                                        <svg xmlns:xlink="http://www.w3.org/1999/xlink"
                                            xmlns="http://www.w3.org/2000/svg" xml:space="preserve" width="56.693px"
                                            viewBox="0 0 56.693 56.693" version="1.1" id="Layer_1" height="56.693px"
                                            class="icon">
                                            <path
                                                d="M40.43,21.739h-7.645v-5.014c0-1.883,1.248-2.322,2.127-2.322c0.877,0,5.395,0,5.395,0V6.125l-7.43-0.029  c-8.248,0-10.125,6.174-10.125,10.125v5.518h-4.77v8.53h4.77c0,10.947,0,24.137,0,24.137h10.033c0,0,0-13.32,0-24.137h6.77  L40.43,21.739z">
                                            </path>
                                        </svg>
                                    </div>
                                </div>
                                <button class="button-confirm">Kirim</button>
                            </form>
                        </div>
                        <div class="col-md-8">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.3369102325755!2d131.29350567413493!3d-0.890067699101312!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2d5955255e00b6bb%3A0x35aebd051bd4fd52!2sPRUDENTIAL%20Sorong%20(FP%20One%20Agency)!5e0!3m2!1sid!2sid!4v1725301422250!5m2!1sid!2sid"
                                style="border:0; width: 100%; height: 100%;" allowfullscreen="" loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <?php include('struktur/pengunjung/layout/footer.php'); ?>
    </div>
<script>
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();

            document.querySelector(this.getAttribute('href')).scrollIntoView({
                behavior: 'smooth'
            });
        });
    });

</script>