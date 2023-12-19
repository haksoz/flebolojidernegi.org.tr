

            <div class="top-bar">
                <div class="container">
                    <div class="row">
                        <!-- Top Left Nav -->
                        <div class="col-sm-6 col-xs-6">
                            <ul class="top-left">
                                <li><i class="fa fa-phone"></i>+90 212 403 96 50</li>
                                <li><i class="fa fa-envelope-o"></i>bilgi@flebolojidernegi.org.tr</li>
                            </ul>
                        </div><!-- Top Left Nav -->

                        <div class="col-sm-6 col-xs-6 r-full-width">
                            <ul class="social-style-2 " style="float: right;">
                                <li class="fb">
                                    <a class="fa fa-facebook" href="#" target="_blank" style="border: 1px solid #f3f3f3;"></a>
                                </li>
                                <li class="tw">
                                    <a class="fa fa-twitter" href="#" target="_blank" style="border: 1px solid #f3f3f3;"></a>
                                </li>

                            </ul>
                        </div>


                    </div>
                </div>
            </div><!-- Top Bar -->
            <header class="header">
                <div class="container">
                    <div class="nav-holder">

                        <div class="logo-holder">
                            <a class="inner-logo" href="index.php"></a>
                        </div>

                        <div class="cr-navigation">
                            <nav class="cr-nav">
                                <ul>
                                    <li>
                                        <a href="index.php">Anasayfa</a>
                                        <ul>
                                            <!--
                                            <li>
                                                <a href="index-4.php">Anasayfa Slider 1 Akış Yok</a>
                                            </li>
                                            
                                            <li>
                                                <a href="index-5.php">Anasayfa Slider 1 Akış 1</a>
                                            </li>

                                            <li>
                                                <a href="index-1.php">Anasayfa Slider 2 Akış 1</a>
                                            </li>
                                            <li>
                                                <a href="index-3.php">Anasayfa Akış 2</a>
                                            </li>
                                            
                                            <li>
                                                <a href="index-2.php">Anasayfa Slider 2 Akış 2</a>
                                            </li>
                                        -->
                                        </ul>
                                    </li>
                                    <li>
                                        <?php 
                                            $menu_2 = $bag -> query("select * from hakkimizda where sess='0' AND deleted='0' order By sira LIMIT 1");
                                            $menu_2_dizi = mysqli_fetch_array($menu_2);
                                        ?>
                                        <a href="hakkimizda.php?id=<?=$menu_2_dizi['id']?>">Hakkımızda</a>
                                    </li>
                                   
                                    <li>
                                        <?php 
                                            $menu_3 = $bag -> query("select * from duyurular where sess='0' AND deleted='0' order By sira LIMIT 1");
                                            $menu_3_dizi = mysqli_fetch_array($menu_3);
                                        ?>
                                        <a href="duyurular.php?id=<?=$menu_3_dizi['id']?>">Duyurular</a>
                                    </li>
                                    <li>
                                        <?php 
                                            $menu_4 = $bag -> query("select * from onam_formlari where sess='0' AND deleted='0' order By sira LIMIT 1");
                                            $menu_4_dizi = mysqli_fetch_array($menu_4);
                                        ?>
                                        <a href="onam_formlari.php?id=<?=$menu_4_dizi['id']?>">Onam Formları</a>
                                    </li>
                                    <li>
                                        <?php 
                                            $menu_5 = $bag -> query("select * from veriarsivi where sess='0' AND deleted='0' order By sira LIMIT 1");
                                            $menu_5_dizi = mysqli_fetch_array($menu_5);
                                        ?>
                                        <a href="veriarsivi.php?id=<?=$menu_5_dizi['id']?>">Veri Arşivi</a>
                                    </li>
                                    <li>
                                        <a href="#">İletişim</a>
                                    </li>
                                </ul>
                            </nav><!-- Navbar -->
                            <ul class="cr-add-nav">
                                <!--
                                <li>
                                    <a class="icon-search md-trigger" data-modal="search-popup" href="#"></a>
                                </li>
                            -->
                                <li>
                                    <a class="menu-link" href="#menu"><i class="fa fa-bars fa-2x"></i></a>
                                </li>
                            </ul>
                        </div><!-- Navigation -->
                    </div>
                </div>
            </header>

        