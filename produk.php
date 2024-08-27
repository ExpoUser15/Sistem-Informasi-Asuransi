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
                        <h3 class="panel-title">Galeri Prudential Sorong</h3>
                    </div>
                    <div class="panel-body row">
                        <div class="col-md-4">
                            <div class="well dash-box" style="max-width: 900px; overflow: hidden;">
                                <img src="gambar/Holborn-640x480.jpg" alt=""
                                    style="object-fit: cover; width: 100%;">
                            </div>
                            <div>
                                <h4 style="text-align: center;">Nama Produk</h4>
                                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Numquam id dignissimos
                                    neque ab hic asperiores, excepturi perferendis velit quo voluptates et illum
                                    inventore cupiditate culpa. Quod iusto commodi iure quis?</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="well dash-box" style="max-width: 900px; overflow: hidden;">
                                <img src="gambar/Holborn-640x480.jpg" alt=""
                                    style="object-fit: cover; width: 100%;">
                            </div>
                            <div>
                                <h4 style="text-align: center;">Nama Produk</h4>
                                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Numquam id dignissimos
                                    neque ab hic asperiores, excepturi perferendis velit quo voluptates et illum
                                    inventore cupiditate culpa. Quod iusto commodi iure quis?</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="well dash-box" style="max-width: 900px; overflow: hidden;">
                                <img src="gambar/Holborn-640x480.jpg" alt=""
                                    style="object-fit: cover; width: 100%;">
                            </div>
                            <div>
                                <h4 style="text-align: center;">Nama Produk</h4>
                                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Numquam id dignissimos
                                    neque ab hic asperiores, excepturi perferendis velit quo voluptates et illum
                                    inventore cupiditate culpa. Quod iusto commodi iure quis?</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<footer id="footer">
    <p>Copyright Prudential Sorong &copy; 2024</p>
</footer>

<!--  MODALS  -->

<!--  ADD PAGE  -->
<div class="modal fade" id="addPage" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form>
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Add Page</h4>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label>Page Title</label>
                        <input type="text" class="form-control" placeholder="Page Title">
                    </div>
                    <div class="form-group">
                        <label>Page Body</label>
                        <textarea name="editor1" class="form-control" placeholder="Page Body"></textarea>
                    </div>
                    <div class="checkbox">
                        <label>
                            <input type="checkbox"> Published
                        </label>
                    </div>
                    <div class="form-group">
                        <label>Meta Tags</label>
                        <input type="text" class="form-control" placeholder="Add Some Tags...">
                    </div>
                    <div class="form-group">
                        <label>Meta Description</label>
                        <input type="text" class="form-control" placeholder="Add Meta Description...">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    CKEDITOR.replace('editor1');
</script>




<!-- Bootstrap core JavaScript
    ================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>

</html>