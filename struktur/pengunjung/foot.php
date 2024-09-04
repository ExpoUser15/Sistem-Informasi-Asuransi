</body>
<!-- ============================================================== -->
<!-- All Jquery -->
<!-- ============================================================== -->
<script
    src="https://wrappixel.com/demos/free-admin-templates/all-lite-landing-pages/assets/plugins/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap tether Core JavaScript -->
<script src="bootstrap/dist/js/bootstrap.bundle.min.js"></script>

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

</html>