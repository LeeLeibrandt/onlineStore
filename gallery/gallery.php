<?php
	include_once('../header.php');
?>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="main.css">
</head>
<body>
    <div class="site-wrap" id="section-home">
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
                        <li><a href="gallery.php">Gallery</a></li>
                        <li><a href="../contact/contact.php">Contact</a></li>
                        <li><a href="../system/login.php">SignIn</a></li>
                        <li><a href="../system/logout.php">Logout</a></li>
                    </ul>
                </div>
            </nav>

            <header class="site-header" data-aos="fade-up">
                <div class="row">
                    <div class="col-5 col-md-3"></div>
                    <div class="col-2 col-md-6 text-center site-logo-wrap">
                        <a href="../index.php" class="site-logo">N</a>
                    </div>
                    <div class="col-5 col-md-3 text-right menu-burger-wrap">
                        <a href="#" class="site-nav-toggle js-site-nav-toggle"><i></i></a>
                    </div>
                </div>
            </header>
			<!-- The four columns -->
			<div class="grid">
				<div class="column">
					<img src="pictures/04.jpg" alt="supreme" style="width:100%" onclick="myFunction(this);">
					<img src="pictures/01.jpg" alt="happy" style="width:100%; margin-top:2rem;" onclick="myFunction(this);">
				</div>
				<div class="column">
					<img src="pictures/12.jpg" alt="supreme" style="width:100%" onclick="myFunction(this);">
					<img src="pictures/01.jpg" alt="happy" style="width:100%; margin-top:2rem;" onclick="myFunction(this);">
				</div>
				<div class="column">
					<img src="pictures/00.jpg" alt="supreme" style="width:100%" onclick="myFunction(this);">
					<img src="pictures/01.jpg" alt="happy" style="width:100%; margin-top:2rem;" onclick="myFunction(this);">
				</div>
				<div class="column">
					<img src="pictures/01.jpg" alt="happy" style="width:100%" onclick="myFunction(this);">
					<img src="pictures/12.jpg" alt="happy" style="width:100%; margin-top:2rem;" onclick="myFunction(this);">
				</div>
			</div>

			<div class="container">
			<span onclick="this.parentElement.style.display='none'" class="closebtn">&times;</span>
			<img id="expandedImg" style="width:100%">
			<div id="imgtext"></div>
	</div>

</body>
<script src="main.js"></script>
<?php
	include_once('../footer.php');
?>