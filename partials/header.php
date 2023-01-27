<?php
    require_once 'manager/prepared/prepared.php';

// For all teams - Teams page
$teams = EXECUTE_QUERY(SELECT_ALL("teams", "team_id"));

// For all partners - Index page
$partners = EXECUTE_QUERY(SELECT_ALL("partners", "partner_id"));

    // For Price - Header
    $res = EXECUTE_QUERY(SELECT_WHERE("price", "price_id", 1));
    foreach ($res as $price) {
    $current_price = $price['current'];
    } 
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Nadice Oil & Gas Limited</title>
    <!-- Stylesheets -->
    <!-- bootstrap v3.3.6 css -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <!-- font-awesome css -->
    <link href="css/font-awesome.css" rel="stylesheet">
    <!-- flaticon css -->
    <link href="css/flaticon.css" rel="stylesheet">
    <!-- factoryplus-icons css -->
    <link href="css/factoryplus-icons.css" rel="stylesheet">
    <!-- animate css -->
    <link href="css/animate.css" rel="stylesheet">
    <!-- owl.carousel css -->
    <link href="css/owl.css" rel="stylesheet">
    <!-- fancybox css -->
    <link href="css/jquery.fancybox.css" rel="stylesheet">
    <link href="css/hover.css" rel="stylesheet">
    <link href="css/frontend.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <!-- switcher css -->
    <link href="css/switcher.css" rel="stylesheet">
    <link rel='stylesheet' id='factoryhub-color-switcher-css' href='css/switcher/default.css' />
    <!-- revolution slider css -->
    <link rel="stylesheet" type="text/css" href="css/revolution/settings.css">
    <link rel="stylesheet" type="text/css" href="css/revolution/layers.css">
    <link rel="stylesheet" type="text/css" href="css/revolution/navigation.css">

    <!--Favicon-->
    <link rel="shortcut icon" href="images/logo.png" type="image/x-icon">
    <link rel="icon" href="images/logo.png" type="image/x-icon">
    <!-- Responsive -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="We are the leading Diesel (AGO) supplier, ranging from various Diesel products, industrial equipments, to electrical energy generating plant supplies, regardless of your industry. We cater to a wide range of industries which include but not limited to Financial sectors, Banking, Real Estate, Government, Lifestyle, Media, Construction, Communication, Manufacturing, Education, Residence, Restaurants, Entertainment, etc.">
    <meta name="keywords" content="Nadice Oil and Gas Limited, Nadice, Diesel, Diesel Supply, Oil and Gas, Oil, Gas, Enugu, Enugu state, nadice, request for oil, book oil, supply oil">
    <link href="css/responsive.css" rel="stylesheet">
    <!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
    <!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
</head>

<body class="home   header-sticky  header-v4 hide-topbar-mobile">
    <div id="page" class="hfeed site">

        <!-- Preloader-->
        <div class="preloader"></div>

        <!-- topbar -->
        <?php require_once 'partials/topbar.php';?>
        <!-- topbar end -->


        <!-- masthead -->
        <div id="mf-header-minimized" class="mf-header-minimized mf-header-v3"></div>
        <header id="masthead" class="site-header clearfix">
            <div class="header-main">
                <div class="container">
                    <div class="row menu-row">
                        <div class="site-logo col-md-9 col-sm-9 col-xs-9">
                            <a href="./index" class="logo">
                                <img src="images/logo.png" width="100" alt="Nadice" class="logo">
                            </a>
                            <p class="site-title"><a href="#" rel="home">Nadice Oil and Gas Limited</a></p>
                            <h2 class="site-description">The Leading Bulk Diesel Supplier in Enugu</h2>
                        </div>
                        <div class="site-menu hidden-md hidden-sm hidden-xs">
                            <nav id="site-navigation" class="main-nav primary-nav nav">
                                <ul class="menu">
                                    <li class="nav_item"><a href="./index">Home</a></li>
                                    <li class="nav_item"><a href="./services">Services</a></li>
                                    <li class="nav_item"><a href="./about">About Us</a></li>
                                    <li class="nav_item"><a href="./why-choose-us">Why Choose Us</a></li>
                                    <li class="nav_item"><a href="contact">Contact</a></li>
                                    
                                    <!-- <li class="has-children nav_item"><a href="" class="dropdown-toggle">Market Sectors</a>
                                        <ul class="sub-menu">
                                            <li><a href="market-sectors.html">All Market Sector</a></li>
                                            <li><a href="aero-space-services.html">Aero Space Services</a></li>
                                        </ul>
                                    </li> -->
                                    <!-- <li class="extra-menu-item menu-item-search last-child">
                                        <a href="#" class="toggle-search"><i class="fa fa-search" aria-hidden="true"></i></a>
                                        <form class="search-form">
                                            <input class="search-field" placeholder="Search..." value="" name="s" type="search">
                                            <input class="search-submit" value="Search" type="submit">
                                        </form>
                                    </li> -->

                                </ul>
                            </nav>
                            <div class="mf-header-item-button"><a href="./index#request" class="mf-btn">Get Request</a></div>
                        </div>
                        <div class="navbar-toggle col-md-3 col-sm-3 col-xs-3">
                            <span id="mf-navbar-toggle" class="navbar-icon"><span class="navbars-line"></span></span>
                        </div>
                    </div>
                </div>
            </div>
        </header>
