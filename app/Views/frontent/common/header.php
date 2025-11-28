<?php
$current_page = basename($_SERVER['PHP_SELF']);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1, user-scalable=no">

    <title><?= $meta['meta_title'] ?? '' ?></title>
        <meta name="title" content="<?= $meta['meta_title'] ?? '' ?>">
        <meta name="description" content="<?= $meta['meta_desc'] ?? '' ?>">
        <meta name="keywords" content="<?= $meta['meta_key'] ?? '' ?>">

    <meta property="og:type" content="website">
    <meta property="og:url" content="https://www.trisulaengineering.com/">
    <meta property="og:title" content="Trisula Engineering and Trading Pvt. Ltd. | Industrial Engineering Experts">
    <meta property="og:description"
        content="Experts in sugar factory automation, cogeneration, electrical & instrumentation engineering, turnkey contracts, and process equipment supply.">
    <meta property="og:image" content="https://www.trisulaengineering.com/assets/img/og-image.jpg">

    <!-- Twitter -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:url" content="https://www.trisulaengineering.com/">
    <meta name="twitter:title" content="Trisula Engineering and Trading Pvt. Ltd. | Industrial Engineering Experts">
    <meta name="twitter:description"
        content="Providing automation, turnkey contracts, and consultancy services for sugar, cogeneration, cement, paper, and process industries.">
    <meta name="twitter:image" content="https://www.trisulaengineering.com/assets/img/og-image.jpg">

    <link rel="shortcut icon" href="<?= FASSESTS_PATH ?>/assets/images/logo.png" type="image/x-icon">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css">




    <!-- font link  -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">

    <!-- Bootstrap 5 requires JS bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <!-- logo client  -->
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link rel="stylesheet" type="text/css"
        href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" />


    <link href="https://db.onlinewebfonts.com/c/7b67035b3b8dab514ecf09763597a947?family=Signatra+DEMO" rel="stylesheet">

    <link rel="stylesheet" href="<?php echo FRONT_CSS_PATH; ?>/css/style.css">

</head>

<body>
    <?php
    $router = service('router');
    $routeName = $router->getMatchedRouteOptions()['as'] ?? 'no name';

    $db = \Config\Database::connect();
    $menu_data = $db->table('web_menu ws')
        ->select('ws.is_active,ws.web_title')
        ->where([
            'ws.is_deleted' => 0,
        ])
        ->orderBy('ws.web_menu_id', 'ASC')
        ->get()->getResultArray();


    ?>
    <!-- Top Information Bar -->
    <div class="top-bar">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <!-- <span>Welcome to Trisula Engineering And Trading Private Limited</span> -->
                </div>
                <div class="col-md-6 d-flex justify-content-end gap-4">
                    <!-- <span>GST No: 33AAGCT6782R1ZG</span>
                    <span>IEC No: AAGCT6782R</span> -->
                </div>

            </div>
        </div>
    </div>

    <!-- Main Header -->
    <div class="main-header">
        <div class="container">
            <div class="row align-items-center">
                <!-- Logo Section -->
                <div class="col-lg-5 col-md-12 mb-lg-0">
                    <div class="logo-section1 align-items-center">
                        <div class="logo-img">
                            <img src="<?= FASSESTS_PATH ?>/assets/images/logo.png" alt="">
                        </div>
                        <!-- <div class="logo-text">
                            <span>TRISULA <br>ENGINEERING AND TRADING PRIVATE LIMITED</span>
                        </div> -->
                        <div class="logo-text">
                            <span class="brand-name">Trisula Engineering</span>
                            <!-- <span class="company-name">Private Limited</span> -->
                        </div>
                    </div>
                </div>

                <!-- Contact Information -->
                <div class="col-lg-7 col-md-8 mb-lg-0">
                    <div class="header-contact-info">
                        <div class="contact-item">
                            <div class="contact-icon">
                                <i class="fas fa-envelope"></i>
                            </div>
                            <div class="contact-text">
                                <!-- <h6>Email Address</h6> -->
                                <a href="mailto:info@trisulaindia.com">
                                    <p>info@trisulaindia.com</p>
                                </a>

                            </div>
                        </div>
                        <div class="contact-item">
                            <div class="contact-icon">
                                <i class="fas fa-phone"></i>
                            </div>
                            <div class="contact-text">
                                <!-- <h6>Phone Number</h6> -->
                                <a href="tel:+15551234567">

                                    <p>+91 9500274498</p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>


    <nav class="navbar navbar-expand-lg navbar-section">
        <div class="container">
            <!-- Toggler Button -->
            <button class="navbar-toggler" type="button" onclick="document.getElementById('navbarNav').classList.add('show')">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Slide-in Menu -->
            <div class="navbar-collapse collapse" id="navbarNav">
                <!-- Close button -->
                <button class="btn-close d-lg-none ms-auto me-3 mt-3" type="button" aria-label="Close"
                    onclick="document.getElementById('navbarNav').classList.remove('show')"></button>

                <ul class="navbar-nav text-center">
                <?php if ($menu_data[0]['is_active'] ?? false) { ?>
                    <li class="nav-item">
                        <a href="<?= base_url('') ?>" class="nav-link <?= ($routeName == 'home') ? 'active' : '' ?>">Home</a>
                    </li>
                <?php } if ($menu_data[1]['is_active'] ?? false) { ?>
                    <li class="nav-item">
                    <a href="<?= base_url("about") ?>" class="nav-link <?= ($routeName == "about") ? 'active' : '' ?>">About</a>
                    </li>
                    <?php } if ($menu_data[2]['is_active'] ?? false) { ?>
                    <li class="nav-item">
                    <a href="<?= base_url("services") ?>" class="nav-link <?= ($routeName == "services") ? 'active' : '' ?>">Services</a>
                    </li>
                    <?php } if ($menu_data[3]['is_active'] ?? false) { ?>
                    <li class="nav-item">
                    <a href="<?= base_url("our-business-growth") ?>" class="nav-link <?= ($routeName == "our-business-growth") ? 'active' : '' ?>">Projects</a>
                    </li>
                    <?php } if ($menu_data[4]['is_active'] ?? false) { ?>
                    <li class="nav-item">
                    <a href="<?= base_url("gallery") ?>" class ="nav-link <?= ($routeName == "gallery") ? 'active' : '' ?>">Gallery</a>
                    </li>
                    <?php } if ($menu_data[5]['is_active'] ?? false) { ?>
                    <li class="nav-item">
                    <a href="<?= base_url("career") ?>" class="nav-link <?= ($routeName == "career") ? 'active' : '' ?>">Careers</a>
                    </li>
                    <?php } ?>
                    <!-- <li class="nav-item">
                        <a class="nav-link <?php if ($current_page == 'contact') echo 'active'; ?>" href="contact.php">Contact Us</a>
                    </li> -->
                </ul>
            </div>

            <!-- Quote Button -->
            <div class="col-lg-3 col-md-4 text-end">
                <a href="contact" class="quote-btn">Contact Us</a>
            </div>
        </div>
    </nav>