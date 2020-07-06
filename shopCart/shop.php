<?php
    include_once('config.php');
    include_once('header.php');
?>
<style>
    #section-home{
    margin-top: 9rem;
}

</style>
    <body class="bg">
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
                        <li><a href="shop.php">Shop</a></li>
                        <li><a href="../gallery/gallery.php">Gallery</a></li>
                        <li><a href="../contact/contact.php">Contact</a></li>
                        <li><a href="../system/login.php">SignIn</a></li>
                        <li><a href="../system/logout.php">Logout</a></li>
                    </ul>
                </div>
            </nav>

            <header class="site-header" data-aos="fade-up" style="padding:1em 30px;">
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
            
        <div id="app">
            <div class="cart"  id="section-home">
                <button id="cart" class="btn btn-outline-primary" data-toggle="modal" data-target="#cartModal">Cart ({{cartItems.length}})</button>
            </div>
            <div class="modal fade" id="cartModal" tabindex="-5">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">          
                                <span aria-hidden="true">&times;</span>
                            </button>
                            <h4 class="modal-title" id="myModalLabel"><!--X--></h4>
                        </div>
                        <div class="modal-body">
                            <shopping-cart inline-template :items="cartItems">
                                <div data-aos="fade-up">
                                    <table class="table table-cart">
                                        <tr v-for="(item, index) in items" data-aos="fade-up">
                                            <td>{{item.title}}</td>
                                            <td style="width:120px">QTY:
                                                <input v-model="item.qty" class="form-control input-qty" type="number">
                                            </td>
                                            <td class="text-right">R{{item.price}}</td>
                                            <td>
                                                <button @click="removeItem(index)">
                                                    <span class="glyphicon glyphicon-trash"></span>
                                                </button>
                                            </td>
                                        </tr>
                                        <tr v-show="items.length === 0">
                                            <td colspan="4" class="text-center">Cart is empty</td>
                                        </tr>
                                        <tr v-show="items.length > 0">
                                            <td></td>
                                            <td class="text-right">Cart Total</td>
                                            <td class="text-right">R{{Total}}</td>
                                            <td></td>
                                        </tr>
                                    </table>
                                </div>
                            </shopping-cart>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
                                        
            <div class="row">
            <div class="col-xs-3 text-center" v-for="item in items">
                <img class="img-responsive" :src="item.image" alt="products">
                <h5>{{item.title}}</h5>
                <h6>R{{item.price}}</h6>
                <input v-model="item.qty" type="number" class="form-control" placeholder="Qty" min="1"/>
                <button @click="addToCart(item)" class="btn btn-outline-primary" id="addCart">Add to Cart</button>         
            </div>

        </div>
    </div>
<?php
    include_once('footer.php');
?>

  