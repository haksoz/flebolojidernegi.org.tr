<!DOCTYPE html>
<html lang="tr-TR">
<?php $page = 'fleboloji-dernegi'; ?>

<head>
    <title>Yönetim Kurulu | Fleboloji Derneği</title>    
    <?php include('head.php') ?>
</head>

<body class="home page-template-default page page-id-10 tribe-no-js ana-sayfa wpb-js-composer js-comp-ver-5.0.1 vc_responsive td-animation-stack-type0 td-full-layout" itemscope="itemscope" itemtype="http://schema.org/WebPage">
    <?php include('header-mobile.php') ?>
    <div id="td-outer-wrap">
        <?php include('header.php') ?>
        <div class="td-main-content-wrap td-main-page-wrap">
            <div class="td-container tdc-content-wrap">
                <div class="vc_row wpb_row td-pb-row">
                    <div class="wpb_column vc_column_container td-pb-span12">
                        <div class="vc_column-inner ">
                            <div class="wpb_wrapper">
                                <div class="wpb_text_column wpb_content_element ">
                                    <div class="wpb_wrapper">
                                        <style>
                                            .kurul-grid-container {
                                                display: grid;
                                                grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
                                                gap: 30px;
                                                margin: 0px 0;
                                            }
                                            
                                            .kurul-grid-container.single-centered {
                                                display: flex;
                                                justify-content: center;
                                            }
                                            
                                            .kurul-grid-container.single-centered .kurul-card {
                                                max-width: 300px;
                                            }
                                            
                                            .kurul-card {
                                                text-align: center;
                                                background: #f9f9f9;
                                                padding: 20px;
                                                border-radius: 8px;
                                                transition: transform 0.3s ease, box-shadow 0.3s ease;
                                            }
                                            
                                            .kurul-card:hover {
                                                transform: translateY(-5px);
                                                box-shadow: 0 5px 20px rgba(0,0,0,0.1);
                                            }
                                            
                                            .kurul-card .kurul-position {
                                                font-size: 12px;
                                                color: #666;
                                                margin-bottom: 10px;
                                                text-transform: uppercase;
                                                font-weight: 600;
                                            }
                                            
                                            .kurul-card .kurul-image {
                                                width: 100%;
                                                height: auto;
                                                border-radius: 5px;
                                                margin-bottom: 15px;
                                                max-height: 300px;
                                                object-fit: cover;
                                                object-position: top center;
                                                display: block;
                                                margin: 0 auto;
                                            }
                                            
                                            .kurul-card .kurul-name {
                                                font-size: 16px;
                                                font-weight: bold;
                                                color: #333;
                                                margin: 10px 0 0 0 !important;
                                            }
                                            
                                            .kurul-section-title {
                                                font-size: 20px;
                                                font-weight: bold;
                                                color: #2c3e50;
                                                margin: 40px 0 20px 0;
                                                padding-bottom: 10px;
                                                border-bottom: 3px solid #3498db;
                                            }
                                            
                                            @media (max-width: 768px) {
                                                .kurul-grid-container {
                                                    grid-template-columns: repeat(auto-fit, minmax(150px, 1fr));
                                                    gap: 20px;
                                                }
                                            }
                                            .page-template-default .wpb_text_column :last-child{
                                                margin-bottom: 0 !important;
                                            }
                                        </style>
                                        
                                        <p class="kurul-section-title"><strong>YÖNETİM KURULU</strong></p>
                                        
                                        <div class="kurul-grid-container single-centered">
                                            <div class="kurul-card">
                                                <div class="kurul-position">Yönetim Kurulu Başkanı</div>
                                                <img class="kurul-image" src="/doc/kurullar/suat-doganci.jpg" alt="Suat DOĞANCI" />
                                                <h3 class="kurul-name">Suat DOĞANCI</h3>
                                            </div>
                                        </div>
                                        
                                        <div class="kurul-grid-container">
                                            <div class="kurul-card">
                                                <div class="kurul-position">Başkan Yardımcısı</div>
                                                <img class="kurul-image" src="/doc/kurullar/ali-aycan-kavala-2.jpg" alt="Ali Aycan KAVALA" />
                                                <h3 class="kurul-name">Ali Aycan KAVALA</h3>
                                            </div>
                                            
                                            <div class="kurul-card">
                                                <div class="kurul-position">Genel Sekreter</div>
                                                <img class="kurul-image" src="/doc/kurullar/umut-serhat-sanri.jpg" alt="Umut Serhat SANRI" />
                                                <h3 class="kurul-name">Umut Serhat SANRI</h3>
                                            </div>
                                            
                                            <div class="kurul-card">
                                                <div class="kurul-position">Sayman</div>
                                                <img class="kurul-image" src="/doc/kurullar/murat-ugur.jpg" alt="Murat UĞUR" />
                                                <h3 class="kurul-name">Murat UĞUR</h3>
                                            </div>
                                        </div>
                                        
                                        <div class="kurul-section-title">YÖNETİM KURULU ÜYELERİ</div>
                                        <div class="kurul-grid-container">
                                            <div class="kurul-card">
                                                <img class="kurul-image" src="/doc/kurullar/bay-297x300.jpg" alt="Serkan KETENCİLER" />
                                                <h3 class="kurul-name">Serkan KETENCİLER</h3>
                                            </div>
                                            
                                            <div class="kurul-card">
                                                <img class="kurul-image" src="/doc/kurullar/erdinc-eroglu.jpg" alt="Erdinç EROĞLU" />
                                                <h3 class="kurul-name">Erdinç EROĞLU</h3>
                                            </div>
                                            
                                            <div class="kurul-card">
                                                <img class="kurul-image" src="/doc/kurullar/emir-canturk.jpg" alt="Emir CANTÜRK" />
                                                <h3 class="kurul-name">Emir CANTÜRK</h3>
                                            </div>
                                        </div>
                                        
                                        <div class="kurul-section-title">DENETLEME KURULU ÜYELERİ</div>
                                        <div class="kurul-grid-container">
                                            <div class="kurul-card">
                                                <img class="kurul-image" src="/doc/kurullar/bay-297x300.jpg" alt="Hakkı Tankut AKAY" />
                                                <h3 class="kurul-name">Hakkı Tankut AKAY</h3>
                                            </div>
                                            
                                            <div class="kurul-card">
                                                <img class="kurul-image" src="/doc/kurullar/bay-297x300.jpg" alt="Mustafa ŞIRLAK" />
                                                <h3 class="kurul-name">Mustafa ŞIRLAK</h3>
                                            </div>
                                            
                                            <div class="kurul-card">
                                                <img class="kurul-image" src="/doc/kurullar/bay-297x300.jpg" alt="Emre ÖZKER" />
                                                <h3 class="kurul-name">Emre ÖZKER</h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="vc_row wpb_row td-pb-row">
                    <div class="wpb_column vc_column_container td-pb-span12">
                        <div class="vc_column-inner ">
                            <div class="wpb_wrapper">
                                <div class="vc_separator wpb_content_element vc_separator_align_center vc_sep_width_100 vc_sep_border_width_7 vc_sep_pos_align_center vc_separator_no_text vc_sep_color_grey">
                                    <span class="vc_sep_holder vc_sep_holder_l"><span class="vc_sep_line"></span></span><span class="vc_sep_holder vc_sep_holder_r"><span class="vc_sep_line"></span></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="td-container">
                <div class="td-pb-row">
                    <div class="td-pb-span12">
                    </div>
                </div>
            </div>
        </div> <!-- /.td-main-content-wrap -->

        <?php include('footer.php') ?>
        
    </div><!--close td-outer-wrap-->

    <?php include('script.php') ?>
    
</body>

</html>