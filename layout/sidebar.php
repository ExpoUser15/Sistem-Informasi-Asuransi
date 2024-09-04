<?php
    $page = @$_GET['page'];
?>

<div class="col-md-3">
    <div class="list-group">
        <a href="daftar.php" class="list-group-item <?php echo empty($page) ? 'active main-color-bg' : '' ?>">
            <span class="glyphicon glyphicon-user" aria-hidden="true"></span> Daftar
        </a>
        <a href="status.php?page=status" class="list-group-item <?php echo $page === "status" ? 'active main-color-bg' : '' ?>"><span class="glyphicon glyphicon-list-alt"
                aria-hidden="true"></span> Cek Status </a>
        <a style="color: red;" href="action/logoutuser.php" class="list-group-item"><span 
                aria-hidden="true"></span> Logout </a>
    </div>
</div>