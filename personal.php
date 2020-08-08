<?php 
    session_start();
    include_once("function/helper.php");
    $page = isset($_GET['page']) ? $_GET['page'] : false;

    $user_id = isset($_SESSION['user_id']) ? $_SESSION['user_id'] : false;

    if (!$user_id){
        header('Refresh: 0.001; URL=http://localhost/newATM/index.php');
    }else {
        $nama = $_SESSION['nama'];
        $level = $_SESSION['level']; 
        $saldo = $_SESSION['saldo']; 
        $email = $_SESSION['email']; 
        $rek = $_SESSION['rek'];
    }

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <title>Awaza | One Page Parallax</title>

    <!-- Favicon -->
    <link rel="icon" href="images/favicon.png">
    <!-- Bootstrap CSS File -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="css/themify-icons.css">
    <!-- Animate CSS File -->
    <link rel="stylesheet" href="css/animate.min.css">
    <!-- Cube Portfolio CSS File -->
    <link rel="stylesheet" href="css/cubeportfolio.min.css">
    <!-- Fancy Box CSS File -->
    <link rel="stylesheet" href="css/jquery.fancybox.min.css">
    <!-- Revolution Slider CSS Files -->
    <link rel="stylesheet" href="css/navigation.css">
    <link rel="stylesheet" href="css/settings.css">
    <!-- Addon Particles CSS Files -->
    <link rel="stylesheet" href="css/revolution.addon.particles.css">
    <!-- Swiper CSS File -->
    <link rel="stylesheet" href="css/swiper.min.css">
    <!-- Owl Carousel CSS Files -->
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <!-- Slick CSS Files -->
    <link rel="stylesheet" href="css/slick.css">
    <link rel="stylesheet" href="css/slick-theme.css">
    <!-- Style CSS File -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Custom Style CSS File -->
    <link rel="stylesheet" href="css/custom.css">

</head>
<body data-spy="scroll" data-target=".navbar" data-offset="90">

<!-- Loader -->
<div class="loader" id="loader-fade">
    <div class="loader-container center-block">
        <div class="grid-row">
            <div class="col center-block">
                <ul class="loading reversed">
                    <li></li>
                    <li></li>
                    <li></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- Loader ends -->

    <!-- Header start -->
    <header>
        <nav class="navbar navbar-top-default navbar-expand-lg static-nav nav-style seven-links transparent-bg">
            <div class="container">
                <a class="logo" href="javascript:void(0)">
                    <img src="images/logo-white.png" alt="logo" title="Logo" class="logo-default">
                    <img src="images/logo-black.png" alt="logo" title="Logo" class="logo-scrolled">
                </a>
                <div class="collapse navbar-collapse d-none d-lg-block">
                    <ul class="nav navbar-nav ml-auto menu__list">
                        <li class="nav-item menu__item"> <a href="#home" class="scroll nav-link menu__link">home</a>
                        </li>
                        <li class="nav-item menu__item"> <a href="#about" class="scroll nav-link menu__link">about</a>
                        </li>
                        <li class="nav-item menu__item"> <a href="#team" class="scroll nav-link menu__link">team</a>
                        </li>
                        <li class="nav-item menu__item"> <a href="#work" class="scroll nav-link menu__link">work</a>
                        </li>
                        <li class="nav-item menu__item"> <a href="#pricing" class="scroll nav-link menu__link">pricing</a>
                        </li>
                        <li class="nav-item menu__item"> <a href="#blog" class="scroll nav-link menu__link">blog</a>
                        </li>
                        <li class="nav-item menu__item"> <a href="#contact" class="scroll nav-link menu__link">contact</a>
                        </li>
                    </ul>
                </div>
                <!-- side menu open button -->
                <button type="button" class="btn btn-dark">
                    <a href="#pricing" style="color:#ffffff !important">Logout</a>
                </button>
            </div>
        </nav>
    </header>
    <!-- Header end -->    

    <!-- Main Section start -->
    <section id="home" class="p-0 bg-img-4 bg-img-setting center-block">
        <h2 class="d-none">hidden</h2>
        <div class="fullscreen">
            <div class="container">
                <div class="row">
                  <div class="col-lg-12 text-left center-col">
                    <div class="text-white">
                        <h2 class="font-weight-600">Welcome, <?php echo $nama ?></h2>
                        <h3 id="personal"></h3>
                    </div>
                  </div>
                </div>
            </div>
            <div class="scrolldown">
                <a href="#about" class="scroll"></a>
            </div>
        </div>
    </section>
    <!-- Main Section end -->

    <!-- About start -->
    <section id="about" class="stats half-section p-0">
    <h2 class="d-none">heading</h2>
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-12 order-lg-2">
                <div class="skill-box">
                    <div class="main-title mb-5 text-md-left wow fadeIn" data-wow-delay="300ms">
                        <h5> Basic info about us </h5>
                        <h2 class="text-initial"> We provide high quality and cost effective services! </h2>
                        <p> Awaza is a design studio founded in London. Nowadays, we've grown and expanded our services, and have become a multinational firm, offering a variety of services and solutions Worldwide. </p>
                    </div>
                   <ul class="text-left">
                        <li class="custom-progress">
                        <h6 class="font-18 mb-0 text-capitalize">Mobile app designs <span class="float-right"><b class="font-weight-500 numscroller">95</b>%</span></h6>

                        <div class="progress">
                            <div class="progress-bar bg-yellow" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100">
                            </div>
                        </div>
                    </li>
                        <li class="custom-progress">
                        <h6 class="font-18 mb-0 text-capitalize">Design and branding<span class="float-right"><b class="font-weight-500 numscroller">88</b>%</span></h6>

                        <div class="progress">
                            <div class="progress-bar bg-yellow" role="progressbar" aria-valuenow="88" aria-valuemin="0" aria-valuemax="100">
                            </div>
                        </div>
                    </li>
                        <li class="custom-progress">
                        <h6 class="font-18 mb-0 text-capitalize">custom web solutions<span class="float-right"><b class="font-weight-500 numscroller">83</b>%</span></h6>

                        <div class="progress">
                            <div class="progress-bar bg-yellow" role="progressbar" aria-valuenow="83" aria-valuemin="0" aria-valuemax="100">
                            </div>
                        </div>
                    </li>
                        <li class="custom-progress">
                        <h6 class="font-18 mb-0">Risk management <span class="float-right"><b class="font-weight-500 numscroller">91</b>%</span></h6>

                        <div class="progress">
                            <div class="progress-bar bg-yellow" role="progressbar" aria-valuenow="91" aria-valuemin="0" aria-valuemax="100">
                            </div>
                        </div>
                    </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 p-0">
                <div class="hover-effect">
                    <img alt="about" src="images/about-img.jpg" class="about-img">
                </div>
            </div>
        </div>
    </div>
    </section>
    <!-- About ends -->

    <!-- Services start -->
    <section class="bg-light-gray">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="main-title wow fadeIn" data-wow-delay="300ms">
                        <h5> Heros of our company </h5>
                        <h2> our services </h2>
                        <p>Curabitur mollis bibendum luctus. Duis suscipit vitae dui sed suscipit. Vestibulum auctor nunc vitae diam eleifend, in maximus metus sollicitudin. Quisque vitae sodales lectus. Nam porttitor justo sed mi finibus, vel tristique risus faucibus.                    </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 mb-2rem wow fadeIn" data-wow-delay="0.3s">
                    <div class="feature-box1 hvr-bg-pink">
                        <i class="ti ti-bar-chart"></i>
                        <h4>trendy design</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc mauris arcu. Curabitur quis urna nulla. Suspendisse potenti. Duis suscipit ultrices maximus.</p>
                        <a href="javascript:void(0)"> LEARN MORE <i class="ti ti-angle-right"></i> </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-2rem wow fadeIn" data-wow-delay="0.5s">
                    <div class="feature-box1 hvr-bg-yellow">
                        <i class="ti ti-layers"></i>
                        <h4>unique layout</h4>
                        <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc mauris arcu. Curabitur quis urna nulla. Suspendisse potenti. Duis suscipit ultrices maximus.</p>
                        <a href="javascript:void(0)"> LEARN MORE <i class="ti ti-angle-right"></i> </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-2rem wow fadeIn" data-wow-delay="0.7s">
                    <div class="feature-box1 hvr-bg-black">
                        <i class="ti ti-desktop"></i>
                        <h4>web design</h4>
                        <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc mauris arcu. Curabitur quis urna nulla. Suspendisse potenti. Duis suscipit ultrices maximus. </p>
                        <a href="javascript:void(0)"> LEARN MORE <i class="ti ti-angle-right"></i> </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-xs-2rem wow fadeIn" data-wow-delay="0.9s">
                    <div class="feature-box1 hvr-bg-yellow">
                        <i class="ti ti-server"></i>
                        <h4>web hosting</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc mauris arcu. Curabitur quis urna nulla. Suspendisse potenti. Duis suscipit ultrices maximus.</p>
                        <a href="javascript:void(0)"> LEARN MORE <i class="ti ti-angle-right"></i> </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-xs-2rem wow fadeIn" data-wow-delay="1.1s">
                    <div class="feature-box1 hvr-bg-black">
                        <i class="ti ti-check"></i>
                        <h4>planning</h4>
                        <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc mauris arcu. Curabitur quis urna nulla. Suspendisse potenti. Duis suscipit ultrices maximus.</p>
                        <a href="javascript:void(0)"> LEARN MORE <i class="ti ti-angle-right"></i> </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeIn" data-wow-delay="1.3s">
                    <div class="feature-box1 hvr-bg-pink">
                        <i class="ti ti-gift"></i>
                        <h4>lifetime access</h4>
                        <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc mauris arcu. Curabitur quis urna nulla. Suspendisse potenti. Duis suscipit ultrices maximus.</p>
                        <a href="javascript:void(0)"> LEARN MORE <i class="ti ti-angle-right"></i> </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Services ends -->

    <!-- Team start -->
    <section id="team">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="main-title wow fadeIn" data-wow-delay="300ms">
                        <h5> Heros of our company </h5>
                        <h2> creative team </h2>
                        <p>Curabitur mollis bibendum luctus. Duis suscipit vitae dui sed suscipit. Vestibulum auctor nunc vitae diam eleifend, in maximus metus sollicitudin. Quisque vitae sodales lectus. Nam porttitor justo sed mi finibus, vel tristique risus faucibus.                    </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="owl-team owl-carousel wow fadeInUp">
                        <div class="item grey-shade text-center">
                            <div class="team-data-img wow fadeIn" data-wow-delay="350ms">
                                <div class="team-img">
                                    <img src="images/team1.jpg" alt="team" class="img-responsive" data-no-retina>
                                </div>
                                <div>
                                    <h4 class="color-black font-weight-normal mt-4 text-capitalize">david melan</h4>
                                    <p class="color-light-grey font-weight-light designation text-capitalize">
                                        Creative Lead
                                    </p>
                                    <span class="hr-line mt-3 mb-2"></span>
                                    <ul class="team-social">
                                        <li><a href="javascript:void(0)" class="facebook-bg-hvr"><i class="ti ti-facebook" aria-hidden="true"></i></a></li>
                                        <li><a href="javascript:void(0)" class="twitter-bg-hvr"><i class="ti ti-twitter-alt" aria-hidden="true"></i></a></li>
                                        <li><a href="javascript:void(0)" class="google-bg-hvr"><i class="ti ti-google" aria-hidden="true"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="item grey-shade text-center">
                            <div class="team-data-img wow fadeIn" data-wow-delay="350ms">
                                <div class="team-img">
                                    <img src="images/team2.jpg" alt="team" class="img-responsive" data-no-retina>
                                </div>
                                <div>
                                    <h4 class="color-black font-weight-normal mt-4 text-capitalize">maria jhonson</h4>
                                    <p class="color-light-grey font-weight-light designation text-capitalize">
                                        Lead Designer
                                    </p>
                                    <span class="hr-line mt-3 mb-2"></span>
                                    <ul class="team-social">
                                        <li class="d-inline-block"><a href="javascript:void(0)" class="facebook-bg-hvr"><i class="ti ti-facebook" aria-hidden="true"></i></a></li>
                                        <li class="d-inline-block"><a href="javascript:void(0)" class="twitter-bg-hvr"><i class="ti ti-twitter-alt" aria-hidden="true"></i></a></li>
                                        <li class="d-inline-block"><a href="javascript:void(0)" class="google-bg-hvr"><i class="ti ti-google" aria-hidden="true"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="item grey-shade text-center">
                            <div class="team-data-img wow fadeIn" data-wow-delay="350ms">
                                <div class="team-img">
                                    <img src="images/team3.jpg" alt="team" class="img-responsive" data-no-retina>
                                </div>
                                <div>
                                    <h4 class="color-black font-weight-normal mt-4 text-capitalize">alex walkin</h4>
                                    <p class="color-light-grey font-weight-light designation text-capitalize">
                                        marketing head
                                    </p>
                                    <span class="hr-line mt-3 mb-2"></span>
                                    <ul class="team-social">
                                        <li class="d-inline-block"><a href="javascript:void(0)" class="facebook-bg-hvr"><i class="ti ti-facebook" aria-hidden="true"></i></a></li>
                                        <li class="d-inline-block"><a href="javascript:void(0)" class="twitter-bg-hvr"><i class="ti ti-twitter-alt" aria-hidden="true"></i></a></li>
                                        <li class="d-inline-block"><a href="javascript:void(0)" class="google-bg-hvr"><i class="ti ti-google" aria-hidden="true"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="item grey-shade text-center">
                            <div class="team-data-img wow fadeIn" data-wow-delay="350ms">
                                <div class="team-img">
                                    <img src="images/team4.jpg" alt="team" class="img-responsive" data-no-retina>
                                </div>
                                <div>
                                    <h4 class="color-black font-weight-normal mt-4 text-capitalize">jessica jhonson</h4>
                                    <p class="color-light-grey font-weight-light designation text-capitalize">
                                        Lead Developer
                                    </p>
                                    <span class="hr-line mt-3 mb-2"></span>
                                    <ul class="team-social">
                                        <li class="d-inline-block"><a href="javascript:void(0)" class="facebook-bg-hvr"><i class="ti ti-facebook" aria-hidden="true"></i></a></li>
                                        <li class="d-inline-block"><a href="javascript:void(0)" class="twitter-bg-hvr"><i class="ti ti-twitter-alt" aria-hidden="true"></i></a></li>
                                        <li class="d-inline-block"><a href="javascript:void(0)" class="google-bg-hvr"><i class="ti ti-google" aria-hidden="true"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Team ends -->

    <!-- Work Starts -->
    <section id="work" class="bg-light-gray pb-0">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="main-title mb-2rem wow fadeIn" data-wow-delay="300ms">
                        <h5> Some of the best work </h5>
                        <h2> creative portfolio </h2>
                        <p>Curabitur mollis bibendum luctus. Duis suscipit vitae dui sed suscipit. Vestibulum auctor nunc vitae diam eleifend, in maximus metus sollicitudin. Quisque vitae sodales lectus. Nam porttitor justo sed mi finibus, vel tristique risus faucibus. </p>
                    </div>
                </div>
            </div>
            <div class="row d-block">

                <div id="js-filters-mosaic-flat" class="cbp-l-filters-alignCenter">
                    <div data-filter="*" class="cbp-filter-item-active cbp-filter-item cbp-filter-style">
                        All <div class="cbp-filter-counter"></div>
                    </div>
                    <div data-filter=".graphic-designs" class="cbp-filter-item cbp-filter-style">
                        Graphic Designs <div class="cbp-filter-counter"></div>
                    </div>
                    <div data-filter=".web-designs" class="cbp-filter-item cbp-filter-style">
                        Web Designs <div class="cbp-filter-counter"></div>
                    </div>
                    <div data-filter=".seo" class="cbp-filter-item cbp-filter-style">
                        SEO <div class="cbp-filter-counter"></div>
                    </div>
                    <div data-filter=".marketing" class="cbp-filter-item">
                        Marketing <div class="cbp-filter-counter"></div>
                    </div>
                </div>

                <div id="js-grid-mosaic-flat" class="cbp cbp-l-grid-mosaic-flat no-transition">
                    <div class="cbp-item web-designs marketing">
                        <a href="images/work1.jpg" class="cbp-caption cbp-lightbox" data-title="Bolt UI<br>by Tiberiu Neamu">
                            <div class="cbp-caption-defaultWrap">
                                <img src="images/work1.jpg" alt="work">
                            </div>
                            <div class="cbp-caption-activeWrap">
                                <div class="cbp-l-caption-alignCenter">
                                    <div class="cbp-l-caption-body">
                                        <p>Elegant | Images</p>
                                        <div class="cbp-l-caption-title">We are digital agency</div>
                                        <span class="work-icon">
                                                <i class="ti ti-arrow-right"></i>
                                            </span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="cbp-item graphic-designs seo">
                        <a href="images/work2.jpg" class="cbp-caption cbp-lightbox" data-title="World Clock<br>by Paul Flavius Nechita">
                            <div class="cbp-caption-defaultWrap">
                                <img src="images/work2.jpg" alt="work">
                            </div>
                            <div class="cbp-caption-activeWrap">
                                <div class="cbp-l-caption-alignCenter">
                                    <div class="cbp-l-caption-body">
                                        <p>Elegant | Images</p>
                                        <div class="cbp-l-caption-title">Creative art work</div>
                                        <span class="work-icon">
                                                <i class="ti ti-arrow-right"></i>
                                            </span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="cbp-item graphic-designs web-designs">
                        <a href="images/work3.jpg" class="cbp-caption cbp-lightbox" data-title="WhereTO App<br>by Tiberiu Neamu">
                            <div class="cbp-caption-defaultWrap">
                                <img src="images/work3.jpg" alt="work">
                            </div>
                            <div class="cbp-caption-activeWrap">
                                <div class="cbp-l-caption-alignCenter">
                                    <div class="cbp-l-caption-body">
                                        <p>Elegant | Images</p>
                                        <div class="cbp-l-caption-title">Modern portfolio</div>
                                        <span class="work-icon">
                                                <i class="ti ti-arrow-right"></i>
                                            </span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="cbp-item seo marketing">
                        <a href="images/work6.jpg" class="cbp-caption cbp-lightbox" data-title="Remind~Me Widget<br>by Tiberiu Neamu">
                            <div class="cbp-caption-defaultWrap">
                                <img src="images/work6.jpg" alt="work">
                            </div>
                            <div class="cbp-caption-activeWrap">
                                <div class="cbp-l-caption-alignCenter">
                                    <div class="cbp-l-caption-body">
                                        <p>Elegant | Images</p>
                                        <div class="cbp-l-caption-title">Digital art works</div>
                                        <span class="work-icon">
                                                <i class="ti ti-arrow-right"></i>
                                            </span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="cbp-item web-designs seo">
                        <a href="images/work4.jpg" class="cbp-caption cbp-lightbox" data-title="Seemple* Music<br>by Tiberiu Neamu">
                            <div class="cbp-caption-defaultWrap">
                                <img src="images/work4.jpg" alt="work">
                            </div>
                            <div class="cbp-caption-activeWrap">
                                <div class="cbp-l-caption-alignCenter">
                                    <div class="cbp-l-caption-body">
                                        <p>Elegant | Images</p>
                                        <div class="cbp-l-caption-title">Photography</div>
                                        <span class="work-icon">
                                                <i class="ti ti-arrow-right"></i>
                                            </span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="cbp-item web-designs marketing">
                        <a href="images/work5.jpg" class="cbp-caption cbp-lightbox" data-title="iDevices<br>by Tiberiu Neamu">
                            <div class="cbp-caption-defaultWrap">
                                <img src="images/work5.jpg" alt="work">
                            </div>
                            <div class="cbp-caption-activeWrap">
                                <div class="cbp-l-caption-alignCenter">
                                    <div class="cbp-l-caption-body">
                                        <p>Elegant | Images</p>
                                        <div class="cbp-l-caption-title">Modern workspace</div>
                                        <span class="work-icon">
                                                <i class="ti ti-arrow-right"></i>
                                            </span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- Work ends -->

    <!-- Video start -->
    <section class="bg-light-gray">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="main-title wow fadeIn" data-wow-delay="300ms">
                        <h5> Passion leads us here </h5>
                        <h2> Watch Our Journey </h2>
                        <p>Curabitur mollis bibendum luctus. Duis suscipit vitae dui sed suscipit. Vestibulum auctor nunc vitae diam eleifend, in maximus metus sollicitudin. Quisque vitae sodales lectus. Nam porttitor justo sed mi finibus, vel tristique risus faucibus.                    </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <!--app slider-->
                <div class="col-md-12 text-center wow fadeInUp">
                    <!--app Image-->
                    <div class="app-image">
                        <img src="images/iphone-img.png" alt="image">
                        <div class="video-app center-block">
                            <div class="image">
                                <img src="images/iphone-bg1.jpg" alt="">
                            </div>
                            <a data-fancybox="" href="https://www.youtube.com/watch?v=7e90gBu4pas" class="video-play-button-small position-absolute">
                                <i class="ti ti-control-play"></i>
                            </a>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Video ends -->

    <!-- Pricing start -->
    <section id="pricing">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="main-title wow fadeIn" data-wow-delay="300ms">
                        <h5> We have flexible pricing </h5>
                        <h2> Awaza's Packages</h2>
                        <p>Curabitur mollis bibendum luctus. Duis suscipit vitae dui sed suscipit. Vestibulum auctor nunc vitae diam eleifend, in maximus metus sollicitudin. Quisque vitae sodales lectus. Nam porttitor justo sed mi finibus, vel tristique risus faucibus.</p>
                    </div>
                </div>
            </div>
            <div class="row three-col-pricing">
                <div class="col-lg-4 col-md-6 col-sm-12 text-center md-mb-5 wow fadeInUp">
                    <div class="pricing-item-two">
                        <div class="price-upper-column">
                        <div class="price-box clearfix">
                            <div class="price_title">
                                <h4 class="text-capitalize">Standard</h4>
                            </div>
                            <div class="price">
                                <h2 class="position-relative"><span class="dollar font-14">$</span>22<span class="month"> Monthly</span></h2>
                            </div>
                            <div class="rating">
                                <i class="ti ti-star"></i>
                                <i class="ti ti-star"></i>
                                <i class="ti ti-star"></i>
                                <i class="ti ti-star"></i>
                                <i class="ti ti-star"></i>
                            </div>
                        </div>
                        </div>
                        <div class="price-down-column">
                        <div class="price-description">
                            <p>Full Access</p>
                            <p>Unlimited Bandwidth</p>
                            <p>Email Accounts</p>
                            <p>8 Free Forks Every Months</p>
                        </div>
                            <a href="javascript:void(0)" class="btn-setting btn-hvr-setting-main btn-transparent2 btn-hvr">choose plan
                                <span class="btn-hvr-setting btn-hvr-yellow">
						     <span class="btn-hvr-setting-inner">
							 <span class="btn-hvr-effect"></span>
                             <span class="btn-hvr-effect"></span>
                             <span class="btn-hvr-effect"></span>
                             <span class="btn-hvr-effect"></span>
                             </span>
                            </span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 text-center md-mb-5 wow fadeInUp">
                    <div class="pricing-item-two advance-plan">
                        <div class="price-upper-column">
                            <div class="price-box clearfix">
                                <div class="price_title">
                                    <h4 class="text-capitalize">Advance</h4>
                                </div>
                                <div class="price">
                                    <h2 class="position-relative"><span class="dollar font-14">$</span>55<span class="month"> Monthly</span></h2>
                                </div>
                                <div class="rating">
                                    <i class="ti ti-star"></i>
                                    <i class="ti ti-star"></i>
                                    <i class="ti ti-star"></i>
                                    <i class="ti ti-star"></i>
                                    <i class="ti ti-star"></i>
                                </div>
                            </div>
                        </div>
                        <div class="price-down-column">
                            <div class="price-description">
                                <p>Full Access</p>
                                <p>Unlimited Bandwidth</p>
                                <p>Email Accounts</p>
                                <p>8 Free Forks Every Months</p>
                            </div>
                            <a href="javascript:void(0)" class="btn-setting btn-hvr-setting-main btn-yellow">choose plan
                                <span class="btn-hvr-setting">
						     <span class="btn-hvr-setting-inner">
							 <span class="btn-hvr-effect"></span>
                             <span class="btn-hvr-effect"></span>
                             <span class="btn-hvr-effect"></span>
                             <span class="btn-hvr-effect"></span>
                             </span>
                            </span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 col-sm-12 text-center wow fadeInUp">
                    <div class="pricing-item-two">
                        <div class="price-upper-column">
                            <div class="price-box clearfix">
                                <div class="price_title">
                                    <h4 class="text-capitalize">Standard</h4>
                                </div>
                                <div class="price">
                                    <h2 class="position-relative"><span class="dollar font-14">$</span>22<span class="month"> Monthly</span></h2>
                                </div>
                                <div class="rating">
                                    <i class="ti ti-star"></i>
                                    <i class="ti ti-star"></i>
                                    <i class="ti ti-star"></i>
                                    <i class="ti ti-star"></i>
                                    <i class="ti ti-star"></i>
                                </div>
                            </div>
                        </div>
                        <div class="price-down-column">
                            <div class="price-description">
                                <p>Full Access</p>
                                <p>Unlimited Bandwidth</p>
                                <p>Email Accounts</p>
                                <p>8 Free Forks Every Months</p>
                            </div>
                            <a href="javascript:void(0)" class="btn-setting btn-hvr-setting-main btn-transparent2 btn-hvr">choose plan
                                <span class="btn-hvr-setting btn-hvr-yellow">
						     <span class="btn-hvr-setting-inner">
							 <span class="btn-hvr-effect"></span>
                             <span class="btn-hvr-effect"></span>
                             <span class="btn-hvr-effect"></span>
                             <span class="btn-hvr-effect"></span>
                             </span>
                            </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Pricing ends -->

    <!-- Client start -->
    <section id="client" class="parallax-setting parallaxie parallax3">
    <h2 class="d-none">heading</h2>
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12 offset-md-6 wow fadeInRight">
                <div class="owl-carousel owl-theme testimonial-two">
                    <div class="testimonial-item">
                        <p class="color-black testimonial-para mb-15px"> Curabitur mollis bibendum luctus. Duis suscipit vitae dui sed suscipit. Vestibulum auctor nunc vitae diam eleifend, in maximus metus sollicitudin. Quisque vitae sodales lectus. Nam porttitor justo sed mi finibus, vel tristique risus faucibus. </p>

                        <div class="testimonial-post">
                            <a href="javascript:void(0)" class="post"><img src="images/testimonial5.png" alt="image"></a>
                            <div class="text-content">
                                <h5 class="color-black text-capitalize">Janey Williams</h5>
                                <p class="color-pink"> Sales Executive </p>
                                <div class="rating">
                                    <i class="ti ti-star"></i>
                                    <i class="ti ti-star"></i>
                                    <i class="ti ti-star"></i>
                                    <i class="ti ti-star"></i>
                                    <i class="ti ti-star"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-item">
                        <p class="color-black testimonial-para mb-15px"> Curabitur mollis bibendum luctus. Duis suscipit vitae dui sed suscipit. Vestibulum auctor nunc vitae diam eleifend, in maximus metus sollicitudin. Quisque vitae sodales lectus. Nam porttitor justo sed mi finibus, vel tristique risus faucibus. </p>

                        <div class="testimonial-post">
                            <a href="javascript:void(0)" class="post"><img src="images/testimonial6.png" alt="image"></a>
                            <div class="text-content">
                                <h5 class="color-black text-capitalize">Glen Jarret</h5>
                                <p class="color-pink"> HR Manager </p>
                                <div class="rating">
                                    <i class="ti ti-star"></i>
                                    <i class="ti ti-star"></i>
                                    <i class="ti ti-star"></i>
                                    <i class="ti ti-star"></i>
                                    <i class="ti ti-star"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-item">
                        <p class="color-black testimonial-para mb-15px"> Curabitur mollis bibendum luctus. Duis suscipit vitae dui sed suscipit. Vestibulum auctor nunc vitae diam eleifend, in maximus metus sollicitudin. Quisque vitae sodales lectus. Nam porttitor justo sed mi finibus, vel tristique risus faucibus. </p>

                        <div class="testimonial-post">
                            <a href="javascript:void(0)" class="post"><img src="images/testimonial7.jpg" alt="image"></a>
                            <div class="text-content">
                                <h5 class="color-black text-capitalize">Kate Lawrence</h5>
                                <p class="color-pink"> Photographer </p>
                                <div class="rating">
                                    <i class="ti ti-star"></i>
                                    <i class="ti ti-star"></i>
                                    <i class="ti ti-star"></i>
                                    <i class="ti ti-star"></i>
                                    <i class="ti ti-star"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
    <!-- Client ends -->

    <!-- Partners starts -->
    <section class="partners-xs-padding">
    <h2 class="d-none">heading</h2>
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-12 mb-xs-3">
                <div class="news_desc">
                    <h2 class="color-black font-weight-500 text-capitalize mb-2rem mb-xxs-3">our partners</h2>
                    <p class="mb-35px">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc mauris arcu, lobortis id interdum vitae, interdum eget elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc mauris arcu, lobortis id interdum vitae, interdum eget elit.</p>
                    <a href="javascript:void(0)" class="btn-setting btn-hvr-setting-main btn-pink text-white btn-hvr">Become a client
                        <span class="btn-hvr-setting btn-hvr-yellow">
						     <span class="btn-hvr-setting-inner">
							 <span class="btn-hvr-effect"></span>
                             <span class="btn-hvr-effect"></span>
                             <span class="btn-hvr-effect"></span>
                             <span class="btn-hvr-effect"></span>
                             </span>
                            </span>
                    </a>
                </div>
            </div>
                <div class="col-md-6 col-sm-12">
                <div class="col-md-6 col-sm-6 float-left w-xs-50 wow fadeIn" data-wow-delay="300ms">
                    <div class="our-partners-content">
                        <img src="images/client-one.png" alt="Logo">
                    </div>
                </div>
                <div class="col-md-6 col-sm-6 float-left w-xs-50 wow fadeIn" data-wow-delay="350ms">
                    <div class="our-partners-content">
                        <img src="images/client-one.png" alt="Logo">
                    </div>
                </div>
                <div class="col-md-6 col-sm-6 float-left w-xs-50 wow fadeIn" data-wow-delay="400ms">
                    <div class="our-partners-content">
                        <img src="images/client-one.png" alt="Logo">
                    </div>
                </div>
                <div class="col-md-6 col-sm-6 float-left w-xs-50 wow fadeIn" data-wow-delay="450ms">
                    <div class="our-partners-content">
                        <img src="images/client-one.png" alt="Logo">
                    </div>
                </div>
                <div class="col-md-6 col-sm-6 float-left w-xs-50 wow fadeIn" data-wow-delay="500ms">
                    <div class="our-partners-content">
                        <img src="images/client-one.png" alt="Logo">
                    </div>
                </div>
                <div class="col-md-6 col-sm-6 float-left w-xs-50 wow fadeIn" data-wow-delay="550ms">
                    <div class="our-partners-content">
                        <img src="images/client-one.png" alt="Logo">
                    </div>
                </div>
            </div>
            </div>
        </div>
    </section>
    <!-- Partners ends -->

    <!-- Blog start -->
    <section id="blog" class="bg-light-gray">
    <h2 class="d-none">heading</h2>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="main-title wow fadeIn" data-wow-delay="300ms">
                    <h5>  Read our </h5>
                    <h2> latest blog </h2>
                    <p>Curabitur mollis bibendum luctus. Duis suscipit vitae dui sed suscipit. Vestibulum auctor nunc vitae diam eleifend, in maximus metus sollicitudin. Quisque vitae sodales lectus. Nam porttitor justo sed mi finibus, vel tristique risus faucibus.                    </p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-sm-12 mb-xs-5">
                <div class="news_item shadow blog-one">
                    <img src="images/blog-img8.jpg" alt="Latest News" class="img-fluid">
                    <div class="news_desc">
                        <h3 class="text-capitalize line-height-normal"><a href="javascript:void(0)" class="color-black">Splash your ideas with us</a></h3>
                        <ul class="meta-tags mt-20px mb-20px">
                            <li><a href="javascript:void(0)"><i class="ti ti-calendar"></i>Apr 14</a></li>
                            <li><a href="javascript:void(0)"> <i class="ti ti-user"></i> Bill </a></li>
                            <li><a href="javascript:void(0)"><i class="ti ti-comment"></i>5 </a></li>
                        </ul>
                        <p class="mb-35px">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text since the 1500s, when an unknown printer took a galley.</p>
                        <a href="blog.html" class="btn-setting btn-hvr-setting-main btn-pink text-white btn-hvr">Read more
                            <span class="btn-hvr-setting btn-hvr-yellow">
						     <span class="btn-hvr-setting-inner">
							 <span class="btn-hvr-effect"></span>
                             <span class="btn-hvr-effect"></span>
                             <span class="btn-hvr-effect"></span>
                             <span class="btn-hvr-effect"></span>
                             </span>
                            </span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-sm-12">
                <div class="news_item shadow blog-two">
                    <img src="images/blog-img9.jpg" alt="Latest News" class="img-fluid">
                    <div class="news_desc">
                        <h3 class="text-capitalize line-height-normal"><a href="javascript:void(0)" class="color-black">Creating better experience</a></h3>
                        <ul class="meta-tags mt-20px mb-20px">
                            <li><a href="javascript:void(0)"><i class="ti ti-calendar"></i>Feb 28</a></li>
                            <li><a href="javascript:void(0)"> <i class="ti ti-user"></i> Barry </a></li>
                            <li><a href="javascript:void(0)"><i class="ti ti-comment"></i>5 </a></li>
                        </ul>
                        <p class="mb-35px">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text since the 1500s, when an unknown printer took a galley.</p>
                        <a href="blog.html" class="btn-setting btn-hvr-setting-main btn-yellow text-white btn-hvr">Read more
                            <span class="btn-hvr-setting btn-hvr-pink">
						     <span class="btn-hvr-setting-inner">
							 <span class="btn-hvr-effect"></span>
                             <span class="btn-hvr-effect"></span>
                             <span class="btn-hvr-effect"></span>
                             <span class="btn-hvr-effect"></span>
                             </span>
                            </span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
    <!-- Blog ends -->

    <!-- Contact & Map starts -->
    <section id="contact" class="pt-0">
        <div class="container-fluid">
            <div class="row pb-half">
                <div class="col-lg-6 col-md-6 col-sm-12 p-0">
                    <div class="image split-blog-scale equalheight">
                        <img alt="stats" src="images/split-contact.jpg">
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-map2 p-0">
                    <div id="google-map" class="bg-light-gray map equalheight"></div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="main-title w-100">
                        <h5>  Contact info </h5>
                        <h2 class="color-black font-weight-500 mb-2rem"> Get in touch with us</h2>
                        <p> Curabitur mollis bibendum luctus. Duis suscipit vitae dui sed suscipit. Vestibulum auctor nunc vitae diam eleifend. </p>
                        <div class="contact-one-line text-center">
                            <div class="contact-info d-md-inline-flex">
                                <div class="icon-box pl-lg-3">
                                    <i class="ti ti-mobile color-pink"></i>
                                    <p class="color-grey"> +(34) 609 33 17 54</p>
                                </div>
                                <div class="icon-box pl-lg-3">
                                    <i class="ti ti-email color-pink"></i>
                                    <p> <a href="mailto:email@website.com" class="color-grey">email@website.com</a></p>
                                </div>
                                <div class="icon-box pl-lg-3">
                                    <i class="ti ti-location-pin color-pink"></i>
                                    <p class="color-grey"> 201 Oak Street Building 27 Manchester, USA</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 col-sm-12 contact-form-center wow fadeInUp" data-wow-delay="400ms">
                    <div class="company-contact-form">
                        <form class="contact-form-outer" onsubmit="return false;">
                            <div class="row">
                                <div class="col-md-6 col-sm-12">
                                    <div class="contact-form-textfield pb-4">
                                        <input type="text" placeholder="Name" class="form-control" required id="name" name="name">
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <div class="contact-form-textfield pb-4">
                                        <input type="email" placeholder="Email" class="form-control" required id="email" name="email">
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <div class="contact-form-textfield pb-4">
                                        <input type="tel" placeholder="Contact No" class="form-control" id="phone" name="phone">
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <div class="contact-form-textfield pb-4">
                                        <input type="text" placeholder="Subject" class="form-control" required id="subject" name="subject">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="contact-form-textfield pb-4">
                                        <textarea placeholder="Message" class="form-control message" id="message" name="message"></textarea>
                                    </div>
                                </div>
                                <div class="col-lg-12 pt-xs-25px text-center">
                                    <button type="submit" class="btn-setting btn-hvr-setting-main btn-yellow btn-hvr text-uppercase" id="submit_btn">SUBMIT REQUEST
                                        <span class="btn-hvr-setting btn-hvr-pink">
                                     <span class="btn-hvr-setting-inner">
                                     <span class="btn-hvr-effect"></span>
                                     <span class="btn-hvr-effect"></span>
                                     <span class="btn-hvr-effect"></span>
                                     <span class="btn-hvr-effect"></span>
                                     </span>
                                    </span>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact & Map ends -->

    <!-- Footer starts -->
    <footer class="p-half bg-black2">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 text-center">
                    <ul class="footer-icons mb-4">
                        <li><a href="javascript:void(0)" class="wow fadeInUp"><i class="ti ti-facebook"></i> </a> </li>
                        <li><a href="javascript:void(0)" class="wow fadeInDown"><i class="ti ti-twitter"></i> </a> </li>
                        <li><a href="javascript:void(0)" class="wow fadeInUp"><i class="ti ti-google"></i> </a> </li>
                        <li><a href="javascript:void(0)" class="wow fadeInDown"><i class="ti ti-linkedin"></i> </a> </li>
                        <li><a href="javascript:void(0)" class="wow fadeInUp"><i class="ti ti-instagram"></i> </a> </li>
                        <li><a href="javascript:void(0)" class="wow fadeInDown"><i class="ti ti-pinterest"></i> </a> </li>
                    </ul>
                    <p class="copyrights mt-2 mb-2">© 2019 Awaza. Made with love by <a href="javascript:void(0)">themesindustry</a></p>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer ends -->


<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery-3.3.1.min.js"></script>
<!-- Bootstrap JS File -->
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>

<!-- Appear JS File -->
<script src="js/jquery.appear.js"></script>
<!-- Isotop gallery -->
<script src="js/isotope.pkgd.min.js"></script>
<!-- Cube Portfolio JS File -->
<script src="js/jquery.cubeportfolio.min.js"></script>
<!-- Equal Height JS File -->
<script src="js/jquery.matchHeight-min.js"></script>
<!--Parallax Background-->
<script src="js/parallaxie.min.js"></script>
<!-- Fancy Box JS File -->
<script src="js/jquery.fancybox.min.js"></script>
<!-- Slick JS File -->
<script src="js/slick.min.js"></script>
<!-- Swiper JS File -->
<script src="js/swiper.min.js"></script>
<!-- Morphtext JS File -->
<script src="js/morphext.min.js"></script>
<!-- Typewriter JS File -->
<script src="js/typewriter.js"></script>
<!-- Owl Carousel JS File -->
<script src="js/owl.carousel.js"></script>
<!-- Wow JS File -->
<script src="js/wow.js"></script>


<!-- Revolution Slider -->
<script src="js/revolution/jquery.themepunch.tools.min.js"></script>
<script src="js/revolution/jquery.themepunch.revolution.min.js"></script>
<script src="js/revolution/jquery.themepunch.revolution.contdown.min.js"></script>

<!-- Particles Addon -->
<script src="js/revolution/revolution.addon.particles.min.js"></script>
<!-- SLIDER REVOLUTION 5.0 EXTENSIONS  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->
<script src="js/revolution/extensions/revolution.extension.actions.min.js"></script>
<script src="js/revolution/extensions/revolution.extension.carousel.min.js"></script>
<script src="js/revolution/extensions/revolution.extension.kenburn.min.js"></script>
<script src="js/revolution/extensions/revolution.extension.layeranimation.min.js"></script>
<script src="js/revolution/extensions/revolution.extension.migration.min.js"></script>
<script src="js/revolution/extensions/revolution.extension.navigation.min.js"></script>
<script src="js/revolution/extensions/revolution.extension.parallax.min.js"></script>
<script src="js/revolution/extensions/revolution.extension.slideanims.min.js"></script>
<script src="js/revolution/extensions/revolution.extension.video.min.js"></script>

<!-- Google Map Api -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDJScy7qJ156DWM8kJVG-ZrK0R7Kize2Jg"></script>
<script src="js/maps.min.js"></script>

<!-- Custom JS File -->
<script src="js/functions.js"></script>
</body>
</html>

