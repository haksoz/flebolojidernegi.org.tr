    <main class="wrapper">
        <?php
            $karsilama_dizi=mysqli_fetch_array($bag -> query("select * from karsilama where id = '1'"));

        ?>
        <?php
            if($karsilama_dizi['sess']=='0')
            {
        ?>
        <div class="theme-padding-10-20">
            <div class="container">
                <div class="">
                    <!-- Heading -->
                    <div class="primary-heading">
                        <h2><?=$karsilama_dizi['baslik']?></h2>
                    </div><!-- Heading -->
                    <!-- blog artical -->
                    <article class="post light-shadow white-bg">
                        <!-- post detail -->
                        <div class="post-info p-30">
                            <!-- post description -->
                            <div class="post-desc">
                                <?=$karsilama_dizi['metin']?>
                                <blockquote class="qoute">
                                    <p><?=$karsilama_dizi['alt_metin']?></p>
                                    <div class="current-post-type">
                                        <i class="fa fa-quote-left"></i>
                                    </div>
                                </blockquote>
                            </div><!-- post description -->
                        </div><!-- post detail -->
                    </article><!-- blog artical -->
                </div>
            </div>
        </div>
        <?php
            }
            else
            {}
        ?>
        <div class="theme-padding-10">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="post-widget mb-60">
                            <!-- Heading -->
                            <div class="primary-heading">
                                <h2>Duyurular</h2>
                            </div>
                            <div class="white-bg p-30 light-shadow slider-post" id="sliderPost">
                                <div id="post-slider-1">
                                    <div class="post style-1">
                                        <a href="#">
                                            <div class="post-thumb">
                                                <img alt="" src="images/uploads/img-09.jpg"> 
                                                <span class="post-badge">İncele</span>
                                            </div>
                                        </a>
                                        <div class="post-content">
                                            <h4><a href="#">Seçimli olağan genel kurul düzenlendi.</a></h4>
                                            <p>Derneğimizin seçimli olağan genel kurul toplantısı 11 Ocak 2020 tarihinde...</p>
                                        </div>
                                    </div>
                                    <div class="post style-1">
                                        <a href="#">
                                            <div class="post-thumb">
                                                <img alt="" src="images/uploads/img-10.jpg"> 
                                                <span class="post-badge">İncele</span>
                                            </div>
                                        </a>
                                        <div class="post-content">
                                            <h4><a href="#">Ankara KTEPH için buluşuyor</a></h4>
                                            <p>9-10 Haziran 2018</p>
                                        </div>
                                    </div>
                                    <div class="post style-1">
                                        <a href="#">
                                            <div class="post-thumb">
                                                <img alt="" src="images/uploads/img-11.jpg"> <span class="post-badge">İncele</span>
                                            </div>
                                        </a>
                                        <div class="post-content">
                                            <h4><a href="#">UIP Dünya Kongresi 2021'de İstanbul’da</a></h4>
                                            <p>...</p>
                                        </div>
                                    </div>
                                    <div class="post style-1">
                                        <a href="#">
                                            <div class="post-thumb">
                                                <img alt="" src="images/uploads/img-12.jpg"> <span class="post-badge">İncele</span>
                                            </div>
                                        </a>
                                        <div class="post-content">
                                            <h4><a href="#">Seçimli Genel Kurul Toplantısı</a></h4>
                                            <p>20.01.2018 Cumartesi</p>
                                        </div>
                                    </div>
                                    <div class="post style-1">
                                        <a href="#">
                                            <div class="post-thumb">
                                                <img alt="" src="images/uploads/img-09.jpg"> 
                                                <span class="post-badge">İncele</span>
                                            </div>
                                        </a>
                                        <div class="post-content">
                                            <h4><a href="#">Seçimli olağan genel kurul düzenlendi.</a></h4>
                                            <p>Derneğimizin seçimli olağan genel kurul toplantısı 11 Ocak 2020 tarihinde...</p>
                                        </div>
                                    </div>
                                    <div class="post style-1">
                                        <a href="#">
                                            <div class="post-thumb">
                                                <img alt="" src="images/uploads/img-10.jpg"> 
                                                <span class="post-badge">İncele</span>
                                            </div>
                                        </a>
                                        <div class="post-content">
                                            <h4><a href="#">Ankara KTEPH için buluşuyor</a></h4>
                                            <p>9-10 Haziran 2018</p>
                                        </div>
                                    </div>
                                    <div class="post style-1">
                                        <a href="#">
                                            <div class="post-thumb">
                                                <img alt="" src="images/uploads/img-11.jpg"> <span class="post-badge">İncele</span>
                                            </div>
                                        </a>
                                        <div class="post-content">
                                            <h4><a href="#">UIP Dünya Kongresi 2021'de İstanbul’da</a></h4>
                                            <p>...</p>
                                        </div>
                                    </div>
                                    <div class="post style-1">
                                        <a href="#">
                                            <div class="post-thumb">
                                                <img alt="" src="images/uploads/img-12.jpg"> <span class="post-badge">İncele</span>
                                            </div>
                                        </a>
                                        <div class="post-content">
                                            <h4><a href="#">Seçimli Genel Kurul Toplantısı</a></h4>
                                            <p>20.01.2018 Cumartesi</p>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- post slider -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </main>