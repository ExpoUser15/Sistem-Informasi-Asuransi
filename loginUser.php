<?php
session_start();
    include "config/db.php";
    $kj = @$_SESSION['username'];
    $wqw = mysqli_query($conn,  "SELECT * FROM tb_users WHERE username = '$kj'");
    if(isset($_SESSION['username']) && mysqli_num_rows($wqw) == 1){
        echo "<script>location.href = 'daftar.php';</script>";
    }
?>

<div id="main-wrapper">
    <?php include('struktur/pengunjung/layout/header.php'); ?>

    <div class="content-wrapper" style="padding-top: 120px;">

        <section class="spacer bg-light" id="profil">
            <div class="">
                <div class="row justify-content-md-center">
                    <form class="register bg-white p-4" style="border-radius: 5px; box-shadow: 2px 2px 2px rgba(0, 0, 0, 0.20);" method="POST" action="action/authuser.php">
                        <h3>Login</h3>
                        <span class="input-span">
                            <label for="username" class="label">Username</label>
                            <input type="text" name="username" id="username" /></span>
                        <span class="input-span">
                            <label for="password" class="label">Password</label>
                            <input type="password" name="password" id="password" /></span>
                        <span class="input-span">
                        <input class="submit" type="submit" value="Login" name="submit"/>
                        <span class="span">Belum punya akun? <a href="?page=register">Register</a></span>
                    </form>
                </div>
            </div>
        </section>
    </div>
    <?php include('struktur/pengunjung/layout/footer.php'); ?>
</div>