<?php include("baglan.php"); ?>

<!DOCTYPE html>
<html class="no-js" lang="en">
<?php $page = 'index'; ?>

<?php include("head.php"); ?>

<body>
    <?php include("preloader.php"); ?>
    <div class="wrap push">
        <!-- Header -->
        <div class="header-wrap">
        <!-- Header -->
            <?php include("header.php"); ?>

        </div><!-- Header -->
        <!-- Banner slider -->

        <?php include("banner-slider-2.php"); ?>

        <!-- News Headline Container -->
        <?php include("news-ticker.php"); ?>

        <!-- Main Content -->
        <?php include("main.php"); ?>

        <!-- Footer Starts -->
        <?php include("footer.php"); ?>

    </div><!-- Wrapper -->
    <!-- Slide Menu -->
    <?php include("res-menu.php"); ?>

    <?php include("register-login-model.php"); ?>
    
    <!-- overlay -->
    <div class="md-overlay"></div><!-- overlay -->

    <?php include("script.php"); ?>
</body>
</html>