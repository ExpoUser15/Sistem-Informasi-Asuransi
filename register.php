<div id="main-wrapper">
    <?php include('struktur/pengunjung/layout/header.php'); ?>

    <div class="content-wrapper" style="padding-top: 120px;">

        <section class="spacer bg-light" id="profil">
            <div class="">
                <div class="row justify-content-md-center">
                    <form class="register bg-white p-4" style="border-radius: 5px; box-shadow: 2px 2px 2px rgba(0, 0, 0, 0.20);" method="POST" action="action/register.php">
                        <h3>Registrasi</h3>
                        <span class="input-span">
                            <label for="nama" class="label">Nama Lengkap</label>
                            <input type="text" name="nama" id="nama" /></span>
                        <span class="input-span">
                            <label for="email" class="label">Email</label>
                            <input type="email" name="email" id="email" /></span>
                        <span class="input-span">
                            <label for="username" class="label">Username</label>
                            <input type="text" name="username" id="username" /></span>
                        <span class="input-span">
                            <label for="password" class="label">Password</label>
                            <input type="password" name="password" id="password" /></span>
                        <span class="input-span">
                            <label for="password2" class="label">Konfirmasi Password</label>
                            <input type="password" name="password2" id="password2" /></span>
                        <input class="submit" type="submit" value="Registrasi" name="submit"/>
                        <span class="span">Sudah punya akun? <a href="?page=login">Login</a></span>
                    </form>
                </div>
            </div>
        </section>
    </div>
    <?php include('struktur/pengunjung/layout/footer.php'); ?>
</div>