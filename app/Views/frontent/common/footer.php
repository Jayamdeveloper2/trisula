<footer class="sec-padding footer-bg ">
    <div class="container-fluid px-5">
        <div class="row justify-content-between">
            <!-- Footer Column 1: About Us -->
            <div class="col-md-6 col-lg-4 footer-column">
                <div class="about-us-widget">
                    <a href="" title="Industrial" rel="home" class="mb-0">
                        <div class="logo-wrapper mb-2">
                            <div class="logo-section">
                                <div class="logo-img mb-0">
                                    <img src="<?= FASSESTS_PATH?>/assets/images/logo-bg-remove .png" alt="">
                                </div>
                                <!-- <div class="logo-text">
                                        <span>TRISULA <br>ENGINEERING AND TRADING PRIVATE LIMITED</span>
                                    </div> -->
                                    
                                <div class="logo-text">
                                    <span class="brand-name2 text-light">Trisula Engineering
                                    & Trading<br>Private Limited</span>
                                    <!-- <span class="company-name2 text-light">Engineering and Trading Private
                                        Limited</span> -->
                                </div>
                            </div>
                        </div>
                    </a>
                    <p class="fottxt">
                        Headquartered in Chennai, India, Trisula Engineering operates globally across Indonesia, Thailand, Nicaragua, Kenya, Fiji, and Ethiopia.
                    </p>
                    <!--<a href="about.php">-->
                    <!--    Read More <i class="fas fa-angle-double-right"></i>-->
                    <!--</a>-->
                    <ul class="nav">
                        <li><a target="_blank" href="#" title="Linkedin"><i class="fab fa-linkedin-in"></i></a></li>
                        <li><a target="_blank" href="#" title="Youtube"><i class="fab fa-youtube"></i></a></li>
                    </ul>
                </div>
            </div>

            <!-- Footer Column 3: Quick Links -->
            <div class="col-md-6 col-lg-2 footer-column">
                <div class="widget-links">
                    <h4 class="widget_title">Quick Links</h4>
                    <div class="widget-contact-list">
                        <ul id="menu-footer-3" class="footer-quicklinks">
                            <li><a href="about">About Us</a></li>
                            <li><a href="services">Services</a></li>
                              <li><a href="our-business-growth">Projects</a></li>
                            <li><a href="gallery">Gallery</a></li>
                            <li><a href="career">Careers</a></li>
                            <li><a href="contact">Contact Us</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- Footer Column 2: Our Solutions -->

            <div class="col-md-6 col-lg-3 footer-column">
                <div class="widget-links">
                    <h4 class="widget_title">Our Services</h4>
                    <div class="widget-contact-list">
                        <ul class="footer-services">
                            <li><a href="services">Complete Automation</a></li>
                            <li><a href="services">Instrumentation</a></li>
                            <li><a href="services">Engineering Services</a></li>
                            <li><a href="services">Mechanical Engineering</a></li>
                            <li><a href="services">Project Management</a></li>
                            <li><a href="services">Documentation</a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Footer Column 4: Get In Touch -->
            <div class="col-md-6 col-lg-3 footer-column">
                <div class="widget-contact">
                    <h4 class="widget_title">Get In Touch</h4>
                    <div class="widget-contact-list">
                        <ul>
                            <li>
                                <i class="fas fa-map-marker-alt"></i>
                                <div class="fleft location_address">
                                    129 – 140, Level 5,<br>Prestige Palladium Bayan,<br>
                                    Greams Road,<br>Chennai - 600 006, India.

                                </div>
                            </li>
                            <li>
                                <i class="fas fa-phone"></i>
                                <div class="fleft contact_no">
                                    <a href="tel:9500274498">+91 95002 74498</a>
                                </div>
                            </li>
                            <li>
                                <i class="far fa-envelope"></i>
                                <div class="fleft contact_mail">
                                    <a href="mailto:info@trisulaindia.com">info@trisulaindia.com</a>
                                </div>
                            </li>
                            <li>
                                <i class="far fa-clock"></i>
                                <div class="fleft service_time">
                                   <a href="mailto:info@trisulaindia.com"> www.trisulaindia.com</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer Bottom Section -->
    <div class="footer-t-bottom">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="fo-txt">
                        © 2025 Trisula Engineering and Trading Private Limited. All Rights Reserved.
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="fo-txt text-md-end">
                        <p class="designby">Developed by
                            <a href="https://jayamwebsolutions.com/recent-projects.php"> Jayam Web Solutions</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css">
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

<script src="<?php echo FRONT_CSS_PATH; ?>/js/main.js"></script>

<script>
    // client logo carousel
    $(document).ready(function() {
        $('.client-logo-carousel').slick({
            dots: false,
            infinite: true,
            speed: 500,
            slidesToShow: 4,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 3000,
            responsive: [{
                    breakpoint: 1200,
                    settings: {
                        slidesToShow: 4,
                        slidesToScroll: 1
                    }
                },
                {
                    breakpoint: 992,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 1
                    }
                },
                {
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 1
                    }
                },
                {
                    breakpoint: 576,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                }
            ]
        });
    });

$(document).ready(function() {
    $('.testimoniall-carousel').slick({
        dots: false,
        infinite: true,
        speed: 500,
        slidesToShow: 3, // ✅ Show 3 cards on large screens
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 4000,
        prevArrow: $('.carousel-prev'),
        nextArrow: $('.carousel-next'),
        responsive: [
            {
                breakpoint: 992, // Tablets
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1
                }
            },
            {
                breakpoint: 576, // Mobiles
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
        ]
    });
});

</script>

</body>

</html>