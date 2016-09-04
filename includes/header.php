<!DOCTYPE HTML>
<!--[if IE 7 ]>
<html lang="en-gb" class="isie ie7 oldie no-js"> <![endif]-->
<!--[if IE 8 ]>
<html lang="en-gb" class="isie ie8 oldie no-js"> <![endif]-->
<!--[if IE 9 ]>
<html lang="en-gb" class="isie ie9 no-js"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html lang="en-gb" class="no-js"> <!--<![endif]-->

<head>
    <meta http-equiv="content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>Իմ բալիկը</title>
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon"/>
    <link href="<?= base_url(); ?>css/style.css" rel="stylesheet" type="text/css">
    <link href="<?= base_url(); ?>css/shortcodes.css" rel="stylesheet" type="text/css">
    <link href="<?= base_url(); ?>css/responsive.css" rel="stylesheet" type="text/css">
    <link href="<?= base_url(); ?>css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link rel='stylesheet' id='layerslider-css' href="<?= base_url(); ?>css/layerslider.css" type='text/css' media='all'/>
    <!--prettyPhoto-->
    <link href="<?= base_url(); ?>css/prettyPhoto.css" rel="stylesheet" type="text/css" media="all"/>
    <!--[if IE 7]>
    <link href="css/font-awesome-ie7.css" rel="stylesheet" type="text/css">
    <![endif]-->
    <!--[if lt IE 9]>

    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <!--Fonts-->
    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic' rel='stylesheet'
          type='text/css'>
    <link
        href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800'
        rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Bubblegum+Sans' rel='stylesheet' type='text/css'>
    <!--jquery-->
    <script src="<?= base_url(); ?>js/modernizr-2.6.2.min.js"></script>
</head>
<body class="main">
<!--wrapper starts-->
<div class="wrapper">
    <!--header starts-->
    <header>
        <div class="container">
            <div class="logo">
                <a href="<?= base_url(); ?>" title="Իմ բալիկը"><img src="<?= base_url(); ?>images/logo.png"
                                                                    alt="Իմ բալիկը logo" title="Իմ բալիկը"></a>
            </div>
            <div class="contact-details">
                <?php if ($this->session->userdata('user_id')): ?>

                    <div class="fb_user"><p class="fb_name"><?= $this->session->userdata('name'); ?></p>

                        <p class="fb_img"><img src="<?= $this->session->userdata('image'); ?>"></p></div>
                    <a class="logout" href="<?= base_url(); ?>competitions/logout">Դուրս գալ</a>
                <?php endif; ?>
                <p class="mail">
                    <a href="#">imbaliky@gmail.com</a>
                    <span class="fa fa-envelope"></span>
                </p>

                <p class="phone-no">
                    <i>+374 (011) 54-44-09 </i>
                    <span class="fa fa-phone"></span>
                </p>
            </div>
        </div>
        <!--menu-container starts-->
        <div id="menu-container">
            <div class="container">
                <!--nav starts-->
                <nav id="main-menu">
                    <div class="dt-menu-toggle" id="dt-menu-toggle">Menu<span class="dt-menu-toggle-icon"></span></div>
                    <ul id="menu-main-menu" class="menu">
                        <li class="menu-item-simple-parent menu-item-depth-0 red"><a href="<?= base_url(); ?>">Գլխավոր </a></li>
                        <li class="mustard"><a href="<?= base_url(); ?>about"> Մեր մասին </a></li>
                        <li class="menu-item-simple-parent menu-item-depth-0 lavender"><a href="<?= base_url(); ?>news" title="">Նորություններ</a></li>
                        <li class="menu-item-simple-parent menu-item-depth-0 blue"><a href="<?= base_url(); ?>photo" title="">Լուսանկարներ</a></li>
                        <li class="pink"><a href="<?= base_url(); ?>competitions" title="">Մրցույթներ</a></li>
                        <li class="pink"><a href="<?= base_url(); ?>services" title="">Ծառայություններ</a> </li>
                        <li class="pink"><a href="<?= base_url(); ?>contact" title="">Հետադարձ կապ</a></li>



                    </ul>
                </nav>
                <!--nav ends-->

                <ul class="dt-sc-social-icons">
                    <li><a target="_blank" href="https://www.facebook.com/ImBalik" title="Facebook"
                           class="dt-sc-tooltip-top facebook"><span class="fa fa-facebook"></span></a></li>
                    <li><a href="https://www.youtube.com/channel/UC2kNo5qGbeF85Tr6Zu02WiQ" title="Youtube" class="dt-sc-tooltip-top youtube"><span
                                class="fa fa-youtube"></span></a></li>
                    <li><a href="https://twitter.com/imbaliky" title="Twitter" class="dt-sc-tooltip-top twitter"><span
                                class="fa fa-twitter"></span></a></li>

                    <li><a href="https://instagram.com/imbaliky/" title="Instagram" class="dt-sc-tooltip-top instagram"><span
                                class="fa fa-instagram"></span></a></li>
                </ul>
            </div>
        </div>
        <!--menu-container ends-->
    </header>