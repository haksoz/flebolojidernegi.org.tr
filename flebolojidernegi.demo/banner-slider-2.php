<div class="banner-slider">
            <!-- slider main slides -->
            <div class="ninja-slider" id="ninja-slider">
                <div class="slider-inner">
                    <ul>
                    <?php
                        $slider_cek = $bag -> query("select * from slider where sess='0' AND deleted='0' order by sira");
                            $i= 0;
                            while($slider_dizi = mysqli_fetch_array($slider_cek))
                                {
                                    $i=$i+1;
                    ?> 
                        <li>
                            <a class="ns-img" href="admin/images/slider/<?=$slider_dizi['gorsel']?>"></a>
                            <div class="caption-holder">
                                <div class="container p-relative">
                                    <div class="caption">
                                        <h2><a href="post-detail.html"><?=$slider_dizi['baslik']?></a></h2>
                                        
                                        <p><?=$slider_dizi['metin']?></p>
                                    </div>
                                </div>
                            </div><!-- caption -->
                        </li>
                    <?php
                        }
                    ?>

                    </ul>
                </div>
            </div><!-- slider main slides -->
            <!-- Banner Thumnail -->
            
        </div>