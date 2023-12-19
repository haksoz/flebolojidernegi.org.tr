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
        <section class="banner-parallax overlay-dark" data-image-src="images/inner-banner2.jpg" data-parallax="scroll"> 
            <div class="inner-banner">
                <h3>Veri Arşivi</h3>
            </div>
        </section>
        <main class="wrapper">
            <div class="theme-padding">
                <div class="container">
                    <!-- Main Content Row -->
                    <div class="row">
                        <div class="col-md-3 col-sm-4">
                            <aside class="side-bar">
                            <h2 class="secondry-heading">Veri Arşivi</h2>
                            <span class="share-icon btn-social-icon navbarikon" data-target="#navbarNav" data-toggle="collapse" style="top: -40px; z-index: 1; margin-right: 10px;"><i class="fa fa-bars"></i></span>
                            <div class="widget collapse navbar-collapse" id="navbarNav">
                                <ul class="categories-widget">
                                    <?php
                                        $duyuru_cek = $bag -> query("select * from veriarsivi where sess='0' AND deleted='0' order by sira");
                                        $i= 0;
                                        while($duyuru_dizi = mysqli_fetch_array($duyuru_cek))
                                        {
                                            $i=$i+1;
                                    ?> 
                                        <li>
                                            <a href="veriarsivi.php?id=<?=$duyuru_dizi['id']?>">
                                                <em><?=$duyuru_dizi['kisa_baslik']?></em>
                                            </a>
                                        </li>
                                    <?php
                                        }
                                    ?>
                                </ul>
                            </div>
                            </aside>
                        </div><!-- Sidebar -->
                        <div class="col-md-9 col-sm-8">
                            <?php
                                $duyuru_id = $_GET['id'];
                                $duyuru_bul=mysqli_fetch_array($bag -> query("select * from veriarsivi where id='$duyuru_id'"));
                            ?>
                            <div class="content">
                                <div class="primary-heading">
                                    <h2><?=$duyuru_bul['baslik']?></h2>
                                </div>

                                <!-- blog detail -->
                                <div class="post-widget light-shadow white-bg">

                                    <!-- blog artical -->
                                    <article class="post">
                                        <div class="post-thumb p-30"> 
                                            <img src="admin\images\veriarsivi\<?=$duyuru_bul['resim']?>" alt="">
                                        </div>

                                        <div class="post-content p-30">

                                            <div class="post-desc">
                                                <?=$duyuru_bul['icerik']?>
                                            </div>
                                        </div>
                                    </article>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>

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