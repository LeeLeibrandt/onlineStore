<?php

    session_start();
    include_once('includes/db.php');
    include_once('includes/header.php');
?>
    <body class="bg-light">
        <body data-spy="scroll" data-target="#ftco-navbar-spy" data-offset="0">
            <div class="site-wrap">
                <nav class="site-menu" id="ftco-navbar-spy">
                    <div class="site-menu-inner" id="ftco-navbar">
                        <ul class="list-unstyled">
                            <li><a href="includes/profile/profile.php"><i id="ico" class="fa fa-user fa-10x" aria-hidden="true"></i>
                            <span style='color:lightskyblue;'>
                                <?php if($_SESSION['username']){echo $_SESSION['username'];} ?>
                            </span></a></li>
                            <li><a href="#section-home">Home</a></li>
                            <li><a href="about/about.php">About Us</a></li>
                            <li><a href="shopCart/shop.php">Shop</a></li>
                            <li><a href="gallery/gallery.php">Gallery</a></li>
                            <li><a href="contact/contact.php">Contact</a></li>
                            <li><a href="system/login.php">SignIn</a></li>
                            <li><a href="system/logout.php">Logout</a></li>
                        </ul>
                    </div>
                </nav>
            
                <header class="site-header">
                    <div class="row align-items-center">
                        <div class="col-5 col-md-3"></div>
                        <div class="col-2 col-md-6 text-center site-logo-wrap">
                            <a href="index.php" class="site-logo">N</a>
                        </div>
                        <div class="col-5 col-md-3 text-right menu-burger-wrap">
                            <a href="#" class="site-nav-toggle js-site-nav-toggle"><i></i></a>
                        </div>
                    </div>
                </header> 
                
                <div class="main-wrap " id="section-home">
            
                    <div id="heading" class="cover_1 overlay bg-light">
                        <div class="img_bg" style="background-image: url(images/fashion.png);">
                            <div class="container">
                                <div class="row align-items-center justify-content-center text-center">
                                    <div class="col-md-10" data-aos="fade-up" id="heading">
                                        <h2 class="heading mb-5" id="header">Welcome to NATES<span style="color:black;">store</span></h2>
                                        <p><a href="system/login.php" class="btn btn-outline-white px-5 py-3">SIGN IN</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> 

                    <div class="section services-section" data-aos="fade-up" style="padding-bottom:0;">
                        <div class="container">
                            <center><strong><h2 class="heading mb-3">NATES SERVICES</h2></strong></center>
                            <div class="row">
                                <div class="col-m mb-5d-6 col-lg-4" data-aos="fade-up">
                                    <div class="media feature-icon d-block text-center">
                                        <div class="media-body">
                                            <div class="icon card-move">
                                                <i id="icon" class="fa fa-users fa-10x" aria-hidden="true"></i>
                                            </div>
                                            <h3>Quality brands</h3>
                                            <p>We are proud to be associated with the best quality brands and giving our coustomers only the best.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4 mb-5" data-aos="fade-up" data-aos-delay="100">
                                    <div class="media feature-icon d-block text-center">
                                        <div class="media-body">
                                            <div class="icon card-move">
                                                <i id="icon" class="fa fa-paypal fa-10x" aria-hidden="true"></i>
                                            </div>
                                            <h3>Affordable</h3>
                                            <p>We offer a plethora of brands to our customers at affordable prices. Available for all.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4 mb-5" data-aos="fade-up" data-aos-delay="300">
                                    <div class="media feature-icon d-block text-center">
                                        <div class="media-body">
                                            <div class="icon card-move">
                                                <i id="icon" class="fa fa-shopping-bag fa-10x" aria-hidden="true"></i>
                                            </div>
                                            <h3>Hype Beast</h3>
                                            <p>Plethora of hype beast assessories clothing, shoes and more.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="curved">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                            <path fill="#f3f4f5" fill-opacity="1" d="M0,160L80,165.3C160,171,320,181,480,160C640,139,800,85,960,80C1120,75,1280,117,1360,138.7L1440,160L1440,0L1360,0C1280,0,1120,0,960,0C800,0,640,0,480,0C320,0,160,0,80,0L0,0Z"></path>
                        </svg>
                        <div class="area">
                            <h2 class="middle-head" align="center" data-aos="fade-up">
                                WHAT TO EXPECT
                            </h2>
                            <section class="info1" data-aos="fade-up">
                                <p class="middle-text">Some Text goes here, some text goes here, some text goes here, some text goes here.</p>
                                <div class="icon">
                                    <i id="icon" class="fa fa-truck" aria-hidden="true"></i>
                                </div>
                            </section>
                        
                            <section class="info1" data-aos="fade-up">
                                <div class="icon">
                                    <i id="icon" class="fa fa-cart-plus" aria-hidden="true"></i>
                                </div>
                                <p class="middle-text">Some Text goes here, some text goes here, some text goes here, some text goes here.</p>
                            </section>
                        </div>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 319">
                            <path fill="#f3f4f5" fill-opacity="1" d="M0,160L80,165.3C160,171,320,181,480,160C640,139,800,85,960,80C1120,75,1280,117,1360,138.7L1440,160L1440,320L1360,320C1280,320,1120,320,960,320C800,320,640,320,480,320C320,320,160,320,80,320L0,320Z"></path>
                        </svg>
                    </div>

                    <div class="section text-center" style="padding-top:0;">
                        <h4>Upcoming Collection</h4>
                        <div class="cards">
                            <div class="card feature-icon">
                                <img src="shopCart/product/28.jpg" alt="item">
                            </div>
                            <div class="card feature-icon">
                                <img src="shopCart/product/29.jpg" alt="item">
                            </div>
                            <div class="card feature-icon">
                                <img src="shopCart/product/30.jpg" alt="item">
                            </div>
                        </div>
                    </div>

                    <main class="main">
                        <figure class="figure7"  data-aos="fade-up">
                            <div class="container">
                                <a href="shopCart/shop.php">
                                    <img class="figure-img" src="images/01.jpg" alt="shop" style="height:400px; margin-bottom:0;">
                                    <div class="overlay">
                                        <div class="text"><strong>STORE</strong></div>
                                    </div>
                                </a>
                            </div>
                        </figure>

                        <figure class="figure7"  data-aos="fade-up">
                            <div class="container">
                                <a href="gallery/gallery.html">
                                    <img class="figure-img" src="images/12.jpg" alt="gallery" style="height:400px; margin-bottom:0;">
                                    <div class="overlay">
                                        <div class="text"><strong>GALLERY</strong></div>
                                    </div>
                                </a>
                            </div>
                        </figure>

                        <figure class="figure7"  data-aos="fade-up">
                            <div class="container">
                                <a href="about/about.php">
                                <img class="figure-img" src="images/11.jpg" alt="about" style="height:400px; margin-bottom:0;">
                                    <div class="overlay">
                                        <div class="text"><strong>ABOUT</strong></div>
                                    </div>
                                </a>
                            </div>   
                        </figure>

                        <figure class="figure7"  data-aos="fade-up">
                            <div class="container">
                                <a href="contact/contact.php">
                                <img class="figure-img" src="images/13.jpg" alt="contact" style="height:400px; margin-bottom:0;">
                                    <div class="overlay">
                                        <div class="text"><strong>CONTACT</strong></div>
                                    </div>
                                </a>
                            </div>
                        </figure>
                    </main>    
<?php
    include_once('includes/footer.php');
?>