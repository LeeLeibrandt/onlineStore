<?php 

    //session_start();
    include_once('../includes/db.php'); 
    include_once('../header.php');

    if($_POST)
    {
        if(isset($_POST['submit']))
        {
            $name = $_POST['name'];
            $email = $_POST['email'];
            $phone = $_POST['phone'];
            $message = $_POST['message'];

            $sql = "INSERT INTO contact (name, email, phone, message) 
                VALUES ('$name', '$email', $phone ,'$message');";

            mysqli_query($con, $sql);
            header("Location: contact.php?success");
            echo "Message sent. Thank you for your response.";
        }
        else
        {
            echo "There was a error.";
        }

        if(isset($_POST['news']))
        {
            $newsletter = $_POST['newsletter'];
            $sql = "INSERT INTO newsletter (email) VALUES ('$newsletter');";

            mysqli_query($con, $newsletter);
            header('Location: contact.php?newsletter=sent');
        }
        else
        {
            //echo "Unsuccessful";
        }
    }    

?>
<style>
    #btn-sent{
        width:95%;
        background-color:white;
        border: 1px solid black;
        border-radius:5px;
        cursor:pointer;
    }
    #btn-sent:hover{
        background-color:black;
        color:white;
    }
</style>

    <body data-spy="scroll" data-target="#ftco-navbar-spy" data-offset="0">
        <div class="site-wrap">
            <nav class="site-menu" id="ftco-navbar-spy">
                <div class="site-menu-inner" id="ftco-navbar">
                    <ul class="list-unstyled">
                        <li><a href="../profile/profile.php"><i id="ico" class="fa fa-user fa-10x" aria-hidden="true"></i>
                            <span style='color:lightskyblue;'>
                                <?php if($_SESSION['username']){echo $_SESSION['username'];} ?>
                            </span>
                        </a></li>
                        <li><a href="../index.php">Home</a></li>
                        <li><a href="../about/about.php">About Us</a></li>
                        <li><a href="../shopCart/shop.php">Shop</a></li>
                        <li><a href="../gallery/gallery.php">Gallery</a></li>
                        <li><a href="contact.php">Contact</a></li>
                        <li><a href="../system/login.php">SignIn</a></li>
                        <li><a href="../system/logout.php">Logout</a></li>
                    </ul>
                </div>
            </nav>

            <header class="site-header" data-aos="fade-up">
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

            <div class="section" data-aos="fade-up" id="section-contact">
                <div class="container" id="section-home">
                    <div class="row section-heading justify-content-center mb-5" data-aos="fade-up">
                        <div class="col-md-8 text-center">
                            <h2 class="heading mb-3">Get In Touch</h2>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-md-10 p-5 form-wrap">
                            <form action="contact.php" method="POST">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d13213.93339921858!2d18.4692225!3d-34.1083736!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xf8638e51ac50a3ab!2sSurfers%20Corner!5e0!3m2!1sen!2sza!4v1589190305773!5m2!1sen!2sza" width="100%" height="350px"  frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0" id="location"></iframe>
                                <br><br>
                                <div class="row mb-4" data-aos="fade-up">
                                    <div class="form-group col-md-4">
                                        <label for="name" class="label">Name</label>
                                        <div class="form-field-icon-wrap">
                                            <span class="icon ion-android-person"></span>
                                            <input type="text" name="name" class="form-control" id="name" required>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="email" class="label">Email</label>
                                        <div class="form-field-icon-wrap">
                                            <span class="icon ion-email"></span>
                                            <input type="email" name="email" class="form-control" id="email" required>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="phone" class="label">Contact</label>
                                        <div class="form-field-icon-wrap">
                                            <span class="icon ion-android-call"></span>
                                            <input type="text" name="phone" class="form-control" id="phone" required>
                                        </div>
                                    </div>

                                    <div class="form-group col-md-12">
                                        <label for="message" class="label">Message</label>
                                        <textarea name="message" id="message" cols="30" rows="10" class="form-control"></textarea>
                                    </div>
                                </div>
                                <div class="row justify-content-center">
                                    <input type="submit" name="submit" id="btn-sent" value="Send">
                                </div>
                                <br>
                                <br>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>  
<?php
include_once('../footer.php');
