<?php include("baglan.php"); ?>

<!DOCTYPE html>
<html class="no-js" lang="en">
<?php $page = 'index'; ?>

<?php include("head.php"); ?>
<body>
    <?php include("preloader.php"); ?>
    <div class="wrap push">
        <div class="header-wrap">
        <!-- Header -->
            <?php include("header.php"); ?>

        </div><!-- Header -->

        <?php include("banner-slider.php"); ?>

        <?php include("news-bar.php"); ?>

        <?php include("main.php"); ?>

        <?php include("footer.php"); ?>

    </div><!-- Wrapper -->
    <!-- Slide Menu -->

    <?php include("res-menu.php"); ?>

    <?php include("register-login-model.php"); ?>

    <!-- overlay -->
    <div class="md-overlay"></div><!-- overlay -->
<!--
    <div class="switcher"></div>
-->

    <?php include("script.php"); ?>
    
</body>
</html>