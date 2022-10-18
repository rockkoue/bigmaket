<!DOCTYPE html>
<html lang="en">

    
<head>

        <meta charset="utf-8">
        <title><?= NOM_SITE ?></title>

        <meta name="description" content="<?= NOM_SITE ?>">
        <meta name="keywords" content="god,curch,temple,christian,congregation,pray,faith,pastor,responsive,html5,flat,foundation,jquery,slider">
        <meta name="author" content="Pistaciatheme">

        <!-- Mobile Meta -->
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <!-- Plugins styles -->
        <link rel="stylesheet" href="assets/css/plugins.css">

        <!-- Revolution slider -->
        <link rel="stylesheet" type="text/css" href="revolution/css/settings.css">
        <link rel="stylesheet" type="text/css" href="revolution/css/layers.css">
        <link rel="stylesheet" type="text/css" href="revolution/css/navigation.css">

        <!-- Template styles -->
        <link rel="stylesheet" href="assets/css/backgrounds.css">
        <link rel="stylesheet" href="assets/css/style-red.css">

        <!-- Favicons -->
        <link rel="shortcut icon" href="<?= SHORT_LOGO ?>" />
        
        <?= path::add_base(); ?>
</head>
<style>
    .hidden{
        display:none;
    }
    #navigation .contain-to-grid {
        border-top: solid 5px #FCC102;
    }
    #topBarSmallMenu {
        background: #053E6E;
    }
    #topBarSmallMenu ul li a {
        color: #fff;
    }
    #topBarSmallMenu ul li a i {
        color: #fff;
    }
    @media only screen and (min-width: 860px){
        #topBarMenu ul li > a:before {
            background: #fcc101;
        }
    }
    .services-boxes {
        background: #053e6e;
    }
    .services-boxes ul.services-blocks li .inner .heading p {
        color: #fff;
    }
    .services-boxes ul.services-blocks li .inner .heading h6 {
        color: #fcc101;
    }
    .services-boxes ul.services-blocks li .inner .circle i:before {
        color: #fcc101;
    }
    .services-boxes ul.services-blocks li .inner .heading a.button {
        color: #fcc101;
    }

    button, .button {
        border-color: #053e6e;
        background-color: #053e6e;
    }
    #donateSection .inner .row h2 span {
        color: #fcc101;
    }
    .ws-title:after {
        background: #fcc101;
    }
    .owl-dots .owl-dot.active span, .owl-dots .owl-dot:hover span {
        background: #053e6e;
    }
    .quote-wrapper .quote-content .quote-decor:before {
        border-top: 40px solid #053e6e;
    }
    figure.effect-jumbo figcaption .button {
        padding: 5px;
    }
    .btn-link {
        color: #fcc101;
    }
    .quote-wrapper .people .button {
        background: #053e6e;
        color:#fff;
    }
    #footerSection .content:before {
        background: #001c38;
    }
    #footerSection .content .inner .contact-box ul.socials li a i:before {
        color: #053e6e;
    }
    #footerSection .copyright {
        background: #053e6e;
    }
    #topBarMenu ul li a {
        font-size: 0.9rem;
    }
    .dark-line-section .inner {
        margin-top: 130px;
    }
    .medium-3.latest-news{
        background: #f6f6f6;
        min-height: 355px;
    }
</style>
<body id="pageTop" class="fixed-navbar">

    <!-- ***** Page loader ***** -->
    <!-- <section class="page-loader" id="pageLoader">
        <div class="spinner">
            <div class="bounce1"></div>
            <div class="bounce2"></div>
            <div class="bounce3"></div>
        </div>
    </section> -->



    <!-- ***** Canvas ***** -->
    <div class="off-canvas-wrap" data-offcanvas>

        <div class="inner-wrap">

            <!-- ***** Header ***** -->
            <header class="header" id="header">
                <div class="navigation" id="navigation">
                    <div class="contain-to-grid">
                        <div class="top-bar-small clearfix" id="topBarSmallMenu">
                            <div class="row">
                                <div class="medium-12 columns">
                                    <ul class="left">
                                        <li><a href="javascript::()"><i class="flaticon-telephone46"></i> <span class="hide-for-small"><?= CONTACT_1 ?></span></a></li>
                                        <li><a href="javascript::()"><i class="flaticon-mail59"></i> <span class="hide-for-small"><?= EMAIL ?></span></a></li>
                                    </ul>
                                    <ul class="right">
                                        <li><a href="page-login.html" class="right-off-canvas-toggle"><i class="flaticon-open3"></i> <span class="hide-for-small">Connexion</span></a></li>
                                        <li><a href="contacts" ><i class="flaticon-telephone46"></i> <span class="hide-for-small">Contacts</span></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div><!-- /.topBarSmallMenu -->
                        <nav class="top-bar" id="topBar" data-topbar role="navigation" data-options="custom_back_text: true;back_text: Retour;is_hover: true;mobile_show_parent_link: false; scrolltop : true">
                            <ul class="title-area">
                                <li class="name">
                                    <h1><a href="accueil"><img style="width: 140px;" alt="" src="<?= LOGO_1 ?>"></a></h1>
                                </li>
                                <li class="toggle-topbar menu-icon"><a href="javascript::()"><span>Menu</span></a></li>
                            </ul>
                            <section class="top-bar-section">
                                <div class="top-bar-menu clearfix" id="topBarMenu">
                                    <ul class="left">
                                        <li><a href="accueil">ACCUEIL</a></li>
                                        <li><a href="presentation">QUI SOMMES NOUS ?</a></li>
                                        <li class="has-dropdown">
                                            <a href="javascript::()">ÉVÉNEMENT</a>
                                            <ul class="dropdown">
                                                <li><a href="retraites">RETRAITES</a></li>
                                                <li><a href="seminaires">SÉMINAIRES</a></li>
                                                <li><a href="ecole">ÉCOLE</a></li>
                                                <li><a href="evenements">ÉVÉNEMENTS</a></li>
                                            </ul>
                                        </li>
                                        <li >
                                            <a href="evangile-production">EVANGILE PRODUCTION</a>
                                            <!-- <ul class="dropdown">
                                                <li><a href="enseignements">ENSEIGNEMENTS</a></li>
                                                <li><a href="javascript::()">ENSEIGNEMENT AUDIO</a></li>
                                                <li><a href="javascript::()">ENSEIGNEMENT VIDÉO</a></li>
                                            </ul> -->
                                        </li>
                                        <li><a href="javascript::()">AVODA</a></li>
                                        <li><a href="javascript::()">A.M.I</a></li>
                                        <li class="has-dropdown">
                                            <a href="javascript::()">DIVIN AMOUR TV </a>
                                            <ul class="dropdown">
                                                <li><a href="javascript::()">VOIR LE PROGRAMME</a></li>
                                                <li><a href="tv-direct">VOIR LE DIRECT</a></li>
                                            </ul>
                                        </li>
                                        <li class="has-dropdown">
                                            <a href="javascript::()">DONS - OFFRANDES </a>
                                            <ul class="dropdown">
                                                <li><a href="dons">OFFRANDES</a></li>
                                                <li><a href="super-gabaon">SUPER GABAON</a></li>
                                                <li class="has-dropdown">
                                                    <a href="javascript::()">GLOBAL GOSPEL PARTNERS</a>
                                                    <ul class="dropdown">
                                                        <li><a href="gospel-partners">GOSPEL PARTNERS</a></li>
                                                        <li><a href="divin-amour-tv">DIVIN AMOUR TV</a></li>
                                                        <li><a href="assouba">ASSOUBA</a></li>
                                                        <li><a href="milun">MILUN</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="st-joseph-d-arimathie">ST JOSEPH D´ARIMATHIE</a></li>
                                                <li><a href="je-soutiens-le-ministere-akobe">Je soutiens le ministère du Frère Clément AKOBE</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="contacts">CONTACTS</a></li>
                                    </ul>
                                </div><!-- /.topBarMenu -->
                            </section><!-- /.top-bar-section -->
                        </nav><!-- /nav -->
                    </div><!-- /.fixed -->
                </div><!-- /#navigation -->
            </header><!-- /#header -->