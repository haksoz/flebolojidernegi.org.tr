<!DOCTYPE html>
<html lang="tr-TR">
<?php $page = 'kitaplik'; ?>

<head>
    <title>Kitaplık | Fleboloji Derneği</title>    
    <?php include('head.php') ?>
</head>

<body class="home page-template-default page page-id-10 tribe-no-js ana-sayfa wpb-js-composer js-comp-ver-5.0.1 vc_responsive td-animation-stack-type0 td-full-layout" itemscope="itemscope" itemtype="http://schema.org/WebPage">
    <?php include('header-mobile.php') ?>
    <div id="td-outer-wrap">
        <?php include('header.php') ?>
        <div class="td-main-content-wrap">
            <div class="td-container ">
                <div class="td-crumb-container">
                    <div class="entry-crumbs" itemscope itemtype="http://schema.org/BreadcrumbList"><span
                            class="td-bred-first"><a href="/index.php">Ana Sayfa</a></span> <i
                            class="td-icon-right td-bread-sep td-bred-no-url-last"></i> <span
                            class="td-bred-no-url-last">Kitaplık</span></div>
                </div>
                <div class="td-pb-row">
                    <div class="td-pb-span8 td-main-content" role="main">
                        <div class="td-ss-main-content">
                            <div class="td-page-header">
                                <h1 class="entry-title td-page-title">
                                    <span>Kitaplık</span>
                                </h1>
                            </div>
                            <div class="td-page-content">
                                <h2 class="port"><a href="/kilavuzlar.php">
                                        Kılavuzlar</a><br />
                                </h2>
                            </div>
                        </div>
                    </div>
                    <div class="td-pb-span4 td-main-sidebar" role="complementary">
                        <?php include('yan-menu-duyurular.php') ?>
                    </div>
                </div> <!-- /.td-pb-row -->
            </div> <!-- /.td-container -->
        </div> <!-- /.td-main-content-wrap -->

        <?php include('footer.php') ?>
        
    </div><!--close td-outer-wrap-->

    <?php include('script.php') ?>
    
</body>

</html>