<?php
    include_once('../header.php');
?>
<style>
    .occon{
        font-size:6rem;
    }
    .occon a{
        color:black;
    }
</style>
                <nav class="site-menu" id="ftco-navbar-spy">
                    <div class="site-menu-inner" id="ftco-navbar">
                        <ul class="list-unstyled">
                            <li><a href="../profile/profile.php"><i id="ico" class="fa fa-user fa-10x" aria-hidden="true"></i>
                                <span style='color:lightskyblue;'>
                                    <?php if($_SESSION['username']){echo $_SESSION['username'];} ?>
                                </span>
                            </a></li>
                            <li><a href="../index.php">Home</a></li>
                            <li><a href="about.php">About Us</a></li>
                            <li><a href="../shopCart/shop.php">Shop</a></li>
                            <li><a href="../gallery/gallery.php">Gallery</a></li>
                            <li><a href="../contact/contact.php">Contact</a></li>
                            <li><a href="../system/login.php">SignIn</a></li>
                            <li><a href="../system/logout.php">Logout</a></li>
                        </ul>
                    </div>
                </nav>
            
                <header class="site-header">
                    <div class="row align-items-center">
                        <div class="col-5 col-md-3"></div>
                        <div class="col-2 col-md-6 text-center site-logo-wrap">
                            <a href="../index.php" class="site-logo">N</a>
                        </div>
                        <div class="col-5 col-md-3 text-right menu-burger-wrap">
                            <a href="#" class="site-nav-toggle js-site-nav-toggle"><i></i></a>
                        </div>
                    </div>
                </header> 
            
                <div class="main-wrap " id="section-home">
                <div class="section bg-white" data-aos="fade-up">
                <div class="container">
                    
                    <div class="about-head" id="section-home">
                        <div class="col-md-12 section-heading text-center">
                            <h2 class="heading mb-5">About Us</h2>
                            <p>NATES store is a collective of individuals dedicated to raising the consciousness of humanity through art and fashion.</p>
                            <div class="section bg-white pt-2 pb-2 text-center" data-aos="fade">
                                <p><img src="images/shop.jpg" alt="Image" class="img-fluid"></p>
                            </div> 
                        </div>
                                
                        <div class="col-md-12 section-heading text-center">
                            <h2 class="heading mb-5">Meet the owner's</h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 pr-md-5 text-center mb-5" data-aos="fade-up">
                            <div class="ftco-38">
                                <div class="ftco-38-img">
                                    <div class="ftco-38-header">
                                        <img src="images/person_2.jpg" alt="Image">
                                        <h3 class="ftco-38-heading">NATE</h3>
                                        <p class="ftco-38-subheading">CEO</p>
                                    </div>
                                    <div class="ftco-38-body">
                                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Harum ullam sapiente hic cupiditate repellat eius vel voluptate autem. Incidunt sint est animi, aut consequatur pariatur ipsum libero perspiciatis nihil sunt!</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 pl-md-5 text-center mb-5" data-aos="fade-up">
                            <div class="ftco-38">
                                <div class="ftco-38-img">
                                    <div class="ftco-38-header">
                                        <img src="images/person4.png" alt="Image">
                                        <h3 class="ftco-38-heading">KATE</h3>
                                        <p class="ftco-38-subheading">Co-founder</p>
                                    </div>
                                    <div class="ftco-38-body">
                                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Harum ullam sapiente hic cupiditate repellat eius vel voluptate autem. Incidunt sint est animi, aut consequatur pariatur ipsum libero perspiciatis nihil sunt!</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12 section-heading text-center" data-aos="fade-up"   >
                            <h2 class="heading mb-5" class="middle-head">DEVELOPER</h2>
                        </div>
                        <div class="col-md-6 pr-md-5 text-center mb-5" data-aos="fade-up">
                            <div class="ftco-38">
                                <div class="ftco-38-img">
                                    <div class="ftco-38-header">
                                        <img src="images/person_2.jpg" alt="Image">
                                        <h3 class="ftco-38-heading">Lee Leibrandt</h3>
                                        <p class="ftco-38-subheading">Full Stack Developer</p>
                                    </div>
                                    <div class="ftco-38-body">
                                        <p>Here are the links to my projects. <br> Be sure to check it out!</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 pl-md-5 text-center mb-5" data-aos="fade-up">
                            <div class="ftco-38">
                                <div class="ftco-38-img">
                                    <div class="ftco-38-header">
                                        <div class="occon">
                                            <a href="https://github.com/LeeLeibrandt"><span class="fa fa-github"></span></a>
                                        </div>
                                        <h3 class="ftco-38-heading">Work Projects</h3>
                                        <br>
                                        <a href="https://leeleibrandt.github.io/recipe-project/">
                                            <p class="ftco-38-subheading" class="link">Recipe Project</p>
                                        </a>
                                        <a href="https://marvelquiz.herokuapp.com/">
                                            <p class="ftco-38-subheading" class="link">Quiz Project</p>
                                        </a>
                                        <a href="https://bookinghotelapp.herokuapp.com/">
                                            <p class="ftco-38-subheading" class="link">Hotel Booking</p>
                                        </a>
                                        <a href="https://github.com/LeeLeibrandt/todo-application">
                                            <p class="ftco-38-subheading" class="link">Todo Application</p>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

<?php
    include_once('../footer.php');
