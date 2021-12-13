<!DOCTYPE html>
<html lang="en">

<head>
    <title><?php echo cms_meta_title(get_system_option(array('option_name'=>'website_name')), "|"); ?></title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <?php echo cms_get_seo_meta_robot(); ?>

    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/main.css">

    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/animate.css">
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/owl.carousel.min.css">
    <!-- <link rel="stylesheet" href="css/aos.css"> -->

    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/magnific-popup.css">

    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/fonts/ionicons/css/ionicons.min.css">
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/fonts/fontawesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/fonts/flaticon/font/flaticon.css">

    <!-- Theme Style -->
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/style.css">
</head>

<body>

    <header id="header" class="container-fluid header index">
        <div class="row">
            <div class="bottom sps batlantis-8fbe32 container-fluid">
                <div class="container">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <a class="navbar-brand invisible" href="#">Food Catering</a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <i class="fa fa-bars" aria-hidden="true"></i>
                        </button>
                        <div class="collapse navbar-collapse float-right" id="navbarSupportedContent">
                            <ul class="ml-auto navbar-nav text-uppercase"> 
                                <?php cms_display_menu( array('name' => 'Main Menu') ); ?>
                                <li class="nav-item form">
                                    <form data-toggle="collapse" id="search-form"
                                        class="trans search form-inline collapse">
                                        <input class="field trans form-control" placeholder="" type="text">
                                    </form>
                                </li>
                                <li class="nav-item search-btn">
                                    <a class="nav-link" data-toggle="collapse" href="#search-form">
                                        <i class="fa fa-search" aria-hidden="true"></i>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#"><span></span></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#"><span></span></a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>