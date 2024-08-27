<?php
session_start();
    include "config/db.php";
    $kj = @$_SESSION['username'];
    $wqw = mysqli_query($conn,  "SELECT * FROM tb_admin WHERE username = '$kj'");
    if(isset($_SESSION['username']) && mysqli_num_rows($wqw) == 1){
        echo "<script>location.href = 'admin/dashboard.php';</script>";
    }
?>

<?php include("struktur/head.php") ?>
<section style="height: 100vh; display: flex; justify-content: center; align-items: center; padding: 0; margin: 0; overflow: hidden;">
  <div class="container">
    <img src="gambar/logo-indonesia.png" alt="" style="margin-bottom: 20px; position: absolute; left: 20px; top: 20px;">
    <div class="row">
      <div class="col-md-4 col-md-offset-4">
        <form id="login" action="action/auth.php" method="POST" class="well">
          <div class="form-group">
            <label>Username</label>
            <input type="text" name="username" class="form-control" placeholder="Enter Email">
          </div>
          <div class="form-group">
            <label>Password</label>
            <input type="password" name="password" class="form-control" placeholder="Password">
          </div>
          <button type="submit" name="submit" class="btn btn-default btn-block">Login</button>
        </form>
      </div>
    </div>
  </div>
</section>

<?php include("struktur/foot.php") ?>