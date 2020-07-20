<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\models\Locations;
use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\helpers\Url;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
$locations = Locations::find()->all();

?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
    <title><?= Html::encode($this->title) ?></title>

    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-88780212-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-88780212-1');
    </script>
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
                new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
            j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
            'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-TZCF68Q');</script>
    <!-- End Google Tag Manager -->
    <!-- Global site tag (gtag.js) - Google Ads: 924440415 -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=AW-924440415"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'AW-924440415');
    </script>
    <meta charset=utf-8> <meta http-equiv=X-UA-Compatible content="IE=edge"> <meta name=viewport content="width=device-width, initial-scale=1">
    <meta name=description content = "Get Paid to Take Care of Your Loved Ones in New York (CDPAP Program ). Consumer Directed Personal Assistance Program.    Get In home Care  by your Relatives.. "/> <meta name=author content>

    <title>Health Aide Inc - A CDPAP Home Care Agency - In Home Health Care Services</title>
    <meta name="keywords" content= "cdpap program, CPHL, Centers Plan,
home care agency,
cdpap home care agency,
In Home Health Care Services,
home health care,
home care,
home care agency,
consumer directed personal assistance program,
cdpap home care"/>


    <!--- Start of GetEmails.com code --->
    <script async src="https://s3-us-west-2.amazonaws.com/files.getemails.com/account/NXGHKZW/source/getemails.js"></script>
    <!--- End of GetEmails.com code --->
    <!-- Facebook Pixel Code -->
    <script>
        !function(f,b,e,v,n,t,s)
        {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
            n.callMethod.apply(n,arguments):n.queue.push(arguments)};
            if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
            n.queue=[];t=b.createElement(e);t.async=!0;
            t.src=v;s=b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t,s)}(window, document,'script',
            'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '2369629409812093');
        fbq('track', 'PageView');
    </script>
    <noscript><img height="1" width="1" style="display:none"
                   src="https://www.facebook.com/tr?id=2369629409812093&ev=PageView&noscript=1"
        /></noscript>
    <!-- End Facebook Pixel Code -->

</head>
<body>
<?php $this->beginBody() ?>
<!--[if lte IE 9]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
<![endif]-->
<!-- header-start -->
<header>
    <div class="header-area ">
        <div class="header-top_area">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-md-6 ">
                        <div class="social_media_links">
                            <a href="https://www.linkedin.com/in/healthaide/">
                                <i class="fa fa-linkedin"></i>
                            </a>
                            <a href="https://www.facebook.com/healthaide/">
                                <i class="fa fa-facebook"></i>
                            </a>
                            <a href="https://www.instagram.com/_healthaide.org_/">
                                <i class="fa fa-instagram "></i>
                            </a>
                        </div>
                    </div>
                    <div class="col-xl-6 col-md-6">
                        <div class="short_contact_list">
                            <ul>
                                <li><a href="mailto:info@healthaide.org"> <i class="fa fa-envelope"></i> info@healthaide.org</a></li>
                                <li><a href="tel:3476206226"> <i class="fa fa-phone"></i>347-620-6226</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="sticky-header" class="main-header-area">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-3 col-lg-2">
                        <div class="logo">
                            <a href="<?=Url::to('/')?>">
                                <img style="width: 200px" src="/img/logo.png" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="col-xl-9 col-lg-10">
                        <div class="main-menu  d-none d-lg-block">
                            <nav>
                                <ul id="navigation">
                                    <li><a href="<?= Url::to('/')?>">Home</a></li>
                                    <li><a href="<?= Url::to('/blog')?>">Blog</a></li>
                                    <li><a href="<?= Url::to('/site/forms')?>">Forms</a></li>
                                    <li><a href="<?= Url::to('/site/faq')?>">FAQ</a></li>
                                    <li><a href="<?= Url::to('/site/mmplans')?>">MMPlans</a></li>
                                    <li><a href="#">Locations<i class="ti-angle-down"></i></a>
                                        <ul class="submenu">
                                            <?php foreach ($locations as $location){ ?>
                                            <li><a href="<?= Url::toRoute('/location/'.$location->url)?>"><?= $location->name?></a></li>
                                            <?php } ?>
                                        </ul>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="mobile_menu d-block d-lg-none"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- header-end -->

        <?= $content ?>

<!-- footer start -->
<footer class="footer">
    <div class="footer_top">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-md-6 col-lg-4">
                    <div class="footer_widget">
                        <div class="footer_logo">
                            <a href="#">
                                <img style="width: 200px;" src="/img/logo.png" alt="">
                            </a>
                        </div>
                        <p>
                            Health Aide Inc. is a New York based company servicing clients in New York State. We are a dynamic team of healthcare professionals who strive to provide the best customer service experience.
                        </p>
                        <div class="socail_links">
                            <ul>
                                <li>
                                    <a href="https://www.facebook.com/healthaide/">
                                        <i class="ti-facebook"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.linkedin.com/in/healthaide/">
                                        <i class="fa fa-linkedin"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.instagram.com/_healthaide.org_/">
                                        <i class="fa fa-instagram"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>

                    </div>
                </div>
                <div class="col-xl-2 offset-xl-1 col-md-6 col-lg-3">
                    <div class="footer_widget">
                        <h3 class="footer_title">
                            INFORMATION
                        </h3>
                        <ul>
                            <li><a href="<?= Url::to('/site/cdpap')?>">What is CDPAP</a></li>
                            <li><a href="<?= Url::to('/site/about-us')?>">About Us</a></li>
                            <li><a href="<?= Url::to('/site/privacy-policy')?>">Privacy Policy</a></li>
                            <li><a href="<?= Url::to('/site/non-discrimination-policy')?>">Non-Discrimination Policy</a></li>
                            <li><a href="https://auth.adspays.com/">Payroll Login</a></li>
                            <li><a href="<?= Url::to('/site/forms')?>">Forms</a></li>
                            <li><a href="<?= Url::to('/site/community-resources')?>">Community Resources</a></li>
                        </ul>

                    </div>
                </div>
                <div class="col-xl-4 col-md-6 col-lg-3">
                    <div class="footer_widget">
                        <h3 class="footer_title">
                            Our Vision
                        </h3>
                        <p>
                            We believe in the power of communication, the strength of strategy, and the capability of technology to transform healthcare and lives. Contact us today for a free healthcare consultation.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="copy-right_text">
        <div class="container">
            <div class="footer_border"></div>
            <div class="row">
                <div class="col-xl-12">
                    <p class="copy_right text-center">
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    </p>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- footer end  -->
<!-- link that opens popup -->

<script type=text/javascript>

</script>
<link href='widget.css' rel=stylesheet>
<script src = 'widget.js'type = text/javascript></script>

<script type=text/javascript > Calendly.initBadgeWidget({
        url: "https://calendly.com/healthaide",
        text: "Schedule Consultation",
        color: "#00a2ff",
        textColor: "#ffffff",
        branding: false
    });
</script>
<script src='js/jquery-3.3.1.min.js'></script>
<script src=js/bootstrap.min.js></script>
<script data-cfasync="false" src="form-submision-handler.js"></script>
<script>
    function openNav() {
    document.getElementById("mySidenav").style.width = "250px"
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0"
}

$(document).ready(function() {
    var stickyToggle = function(sticky, stickyWrapper, scrollElement) {
        var stickyHeight = sticky.outerHeight();
        var stickyTop = stickyWrapper.offset().top;
        if (scrollElement.scrollTop() >= stickyTop) {
            stickyWrapper.height(stickyHeight);
            sticky.addClass("is-sticky");
        } else {
            sticky.removeClass("is-sticky");
            stickyWrapper.height('auto');
        }
    };

    $('[data-toggle="sticky-onscroll"]').each(function() {
        var sticky = $(this);
        var stickyWrapper = $('<div>').addClass('sticky-wrapper');
        sticky.before(stickyWrapper);
        sticky.addClass('sticky');
        $(window).on('scroll.sticky-onscroll resize.sticky-onscroll', function() {
            stickyToggle(sticky, stickyWrapper, $(this));
        });
        stickyToggle(sticky, stickyWrapper, $(window));
    });
});

</script >
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
