<?php include'functions.php' ?>
<!DOCTYPE html>
<html>

<head>
    <title>About Us Section</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
    <link rel="stylesheet" href="Dependencies/bootstrap.css">
    <link rel="stylesheet" href="Dependencies/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="Dependencies/owl.carousel.min.css">
    <link rel="stylesheet" href="Dependencies/owl.theme.default.min.css">
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>

    <div class="off_canvas_overlay"></div>

    <div class="offcanvas_menu offcanvas_two">
        <div class="canvas_open">
            <a href="javascript:void(0)">
                <i class="fa fa-bars"></i>
            </a>
        </div>

        <div class="offcanvas_menu_wrapper">
            <div class="canvas_close">
                <a href="javascript:void(0)">
                    <i class="fa fa-times"></i>
                </a>
            </div>
            <div class="header_account">
                <ul>
                    <li class="language">
                        <a href="#">
                            <img src="images/language.png" alt=""> EN
                        </a>
                        <ul class="dropdown_language">
                            <li><a href="#">English</a></li>
                            <li><a href="#">Germany</a></li>
                            <li><a href="#">Japanese</a></li>
                        </ul>
                    </li>
                    <li class="currency">
                        <a href="#">
                            INR<i class="fa fa-angle-down"></i>
                        </a>
                        <ul class="dropdown_currency">
                            <li><a href="#">EUR - EURO</a></li>
                            <li><a href="#">GBP - British Pound</a></li>
                            <li><a href="#">USD - US Dollar</a></li>
                        </ul>
                    </li>
                    <li class="top_links">
                        <a href="#">
                            My Account
                        </a>
                        <ul class="dropdown_links">
                            <li><a href="#">Checkout</a></li>
                            <li><a href="#">My Account</a></li>
                            <li><a href="#">Shopping Cart</a></li>
                            <li><a href="#">Wishlist</a></li>
                        </ul>
                    </li>

                </ul>
            </div>

            <div class="header_right_info">
                <ul>
                    
                    <li class="header_wishlist">
                        <a href="#">
                            <i class="fa fa-heart"></i>
                            <span class="item_count">4</span>
                        </a>
                    </li>
                    <li class="mini_cart_wrapper">
                        <a href="javascript:void(0)">
                            <i class="fa fa-shopping-cart"></i>
                            
                        </a>
                        <div class="mini_cart mini_cart2">
                            <div class="cart_gallery">
                                <div class="cart_item">
                                    <div class="cart_img">
                                        <a href="#">
                                            <img src="images/cart1.png" alt="">
                                        </a>
                                    </div>
                                    <div class="cart_info">
                                        <a href="#">
                                            Quinta do Crasto
                                        </a>
                                        <p><span>£26669</span> X 1</p>
                                    </div>
                                    <div class="cart_remove">
                                        <a href="#"><i class="fa fa-times"></i></a>
                                    </div>
                                </div>
                                <div class="cart_item">
                                    <div class="cart_img">
                                        <a href="#">
                                            <img src="images/cart2.png" alt="">
                                        </a>
                                    </div>
                                    <div class="cart_info">
                                        <a href="#">
                                            Domaine Jacques Prieur
                                        </a>
                                        <p><span>£55961</span> X 1</p>
                                    </div>
                                    <div class="cart_remove">
                                        <a href="#"><i class="fa fa-times"></i></a>
                                    </div>
                                </div>

                            </div>

                            <div class="mini_cart_table">
                                <div class="cart_table_border">
                                    <div class="cart_total">
                                        <span>Sub Total :</span>
                                        <span class="price">£82630</span>

                                    </div>
                                    <div class="cart_total mt-10">
                                        <span>Total :</span>
                                        <span class="price">£82630</span>
                                    </div>
                                </div>
                            </div>
                            <div class="mini_cart_footer">
                                <div class="cart_button">
                                    <a href="#">View Cart</a>
                                </div>
                                <div class="cart_button">
                                    <a href="#">Checkout</a>
                                </div>

                            </div>
                        </div>



                    </li>
                </ul>
            </div>

            <div id="menu" class="text-left">
                <ul class="offcanvas_main_menu">
                    <li class="menu-item-has-children active">
                        <a href="#">Home</a>
                    </li>
                    
                    <li class="menu-item-has-children"><a href="#">Gifts</a></li>
                    <li class="menu-item-has-children"><a href="./about.html">About Us</a></li>
                    <li class="menu-item-has-children">
                        <a href="#">Region</a>
                        <ul class="sub-menu">
                            <li><a href="#">India</a></li>
                            <li><a href="#">USA</a></li>
                            <li><a href="#">Australia</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children">
                        <a href="#">User</a>
                        <ul class="sub-menu">
                            <li><a href="./login.html">Log In</a></li>
                        </ul>
                    </li>
                </ul>
            </div>

            <div class="offcanvas_footer">
                <span><a href="#"><i class="fa fa-envelope"></i> wine@gmail.com</a></span>
                <ul>
                    <li class="facebook">
                        <a href="#">
                            <i class="fab fa-facebook"></i>
                        </a>
                    </li>
                    <li class="twitter"><a href="#"><i class="fab fa-twitter"></i></a></li>
                    <li class="pinterest"><a href="#"><i class="fab fa-pinterest"></i></a></li>
                    <li class="linkedin"><a href="#"><i class="fab fa-linkedin"></i></a></li>
                    <li class="google-plus"><a href="#"><i class="fab fa-google-plus"></i></a></li>

                </ul>
            </div>

        </div>
    </div>

    <header>
        <div class="main_header header_transparent header-mobile-m">
            <div class="header_container sticky-header">
                <div class="container-fluid">
                    <div class="row align-items-center">
                        <div class="col-lg-2" style="display: inline-block;">
                            <div class="logo">
                                <a href="index.html"> <img src="images/logo.png" alt=""></a>
                            </div>
                        </div>
                        <div class="col-lg-6" style="display: inline-block;">
                            <div class="main_menu menu_two menu_position">
                                <nav>
                                    <ul>
                                    <li><a href="index.php" class="active">Home</a></li>
                                        <li><a href="product.php">Products</a></li>
                                        <li><a href="about.php">About Us</a></li>
                                        <li><a href="contact.php">Contact Us</a></li>
                                        <?php 
                                        
                                                if(isset($_SESSION['username'])){;?>
                                                        <li><a href="logout.php">Logout </a></li>
                                                        <li><a href="mycart.php">My Cart</i></a></li>
                                                    <?php }else{ ?>
                                                        <li><a href="login.php">Login </a></li>
                                                        
                                        <?php } ?>

                                    </ul>
                                </nav>
                            </div>
                        </div>

                        <div class="col-lg-4" style="display: inline-block;">
                            <div class="header_top_right">
                                <div class="header_right_info">
                                    <ul>
                                        
                                        
                                        <li class="mini_cart_wrapper">
                                            <a href="javascript:void(0)">
                                                <i class="fa fa-shopping-cart"></i>
                                                <span class="item_count">2</span>
                                            </a>
                                            <div class="mini_cart mini_cart2">
                                                <div class="cart_gallery">
                                                    <div class="cart_item">
                                                        <div class="cart_img">
                                                            <a href="#">
                                                                <img src="images/cart1.png" alt="">
                                                            </a>
                                                        </div>
                                                        <div class="cart_info">
                                                            <a href="#">
                                                                Quinta do Crasto
                                                            </a>
                                                            <p><span>£26669</span> X 1</p>
                                                        </div>
                                                        <div class="cart_remove">
                                                            <a href="#"><i class="fa fa-times"></i></a>
                                                        </div>
                                                    </div>
                                                    <div class="cart_item">
                                                        <div class="cart_img">
                                                            <a href="#">
                                                                <img src="images/cart2.png" alt="">
                                                            </a>
                                                        </div>
                                                        <div class="cart_info">
                                                            <a href="#">
                                                                Domaine Jacques Prieur
                                                            </a>
                                                            <p><span>£55961</span> X 1</p>
                                                        </div>
                                                        <div class="cart_remove">
                                                            <a href="#"><i class="fa fa-times"></i></a>
                                                        </div>
                                                    </div>

                                                </div>

                                                <div class="mini_cart_table">
                                                    <div class="cart_table_border">
                                                        <div class="cart_total">
                                                            <span>Sub Total :</span>
                                                            <span class="price">£82630</span>

                                                        </div>
                                                        <div class="cart_total mt-10">
                                                            <span>Total :</span>
                                                            <span class="price">£82630</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="mini_cart_footer">
                                                    <div class="cart_button">
                                                        <a href="#">View Cart</a>
                                                    </div>
                                                    <div class="cart_button">
                                                        <a href="#">Checkout</a>
                                                    </div>

                                                </div>
                                            </div>



                                        </li>
                                    </ul>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <div class="section">
        <div class="container1">
            <div class="content-section">
                <div class="title">
                    <h1>About Us</h1>
                </div>
                <div class="content">
                    <h3>We Deliver Taste That You Deserve!</h3>
                    <p>We are avaliable to help you whenever you are in trouble related to our services we have a very
                        capable team that will help you when you need our help just call us or you can tell us on our
                        social media platforms. As you can see they are given below.</p>
                    <div class="button">
                        <a href="">Read More</a>
                    </div>
                </div>
                <div class="social">
                    <a href=""><i class="fab fa-facebook-f"></i></a>
                    <a href=""><i class="fab fa-twitter"></i></a>
                    <a href=""><i class="fab fa-instagram"></i></a>
                </div>
            </div>
            <div class="image-section">
                <img src="images/img one.jpg" style="height: 600px; ;">
            </div>
        </div>
    </div>

    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-3">
                    <div class="footer-block about">
                        <h4 class="footer-title">Company</h4>
                        <hr class="footer_border">
                        <ul class="list-unstyled">
                            <li><a href="javascript:void(0)">About Us</a></li>
                            <li><a href="javascript:void(0)">Contact Us</a></li>
                            <li><a href="javascript:void(0)">Privacy Policy</a></li>
                            <li><a href="javascript:void(0)">Terms &amp; Conditons</a></li>
                            <li><a href="javascript:void(0)">Support Center</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3 col-sm-3">
                    <div class="footer-block about">
                        <h4 class="footer-title">Useful Link</h4>
                        <hr class="footer_border">
                        <ul class="list-unstyled">
                            <li><a href="javascript:void(0)">Gift Cards</a></li>
                            <li><a href="javascript:void(0)">Size Chart</a></li>
                            <li><a href="javascript:void(0)">My Account</a></li>
                            <li><a href="javascript:void(0)">Our Locations</a></li>
                            <li><a href="javascript:void(0)">FAQs</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3 col-sm-3">
                    <div class="footer-block about">
                        <h4 class="footer-title">Questions?</h4>
                        <hr class="footer_border">
                        <ul class="list-unstyled">
                            <li><a href="javascript:void(0)">Help Center</a></li>
                            <li><a href="javascript:void(0)">Track Order</a></li>
                            <li><a href="javascript:void(0)">Return</a></li>
                            <li><a href="javascript:void(0)">Shipping Info</a></li>
                            <li><a href="javascript:void(0)">Wishlist</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3 col-sm-3">
                    <div class="footer-block about">
                        <h4 class="footer-title">Connect With Us</h4>
                        <hr class="footer_border">
                        <div class="contact_footer">
                            <div class="footer_icon">
                                <a href="#"><i class="fab fa-facebook"></i></a>
                                <a href="#"><i class="fab fa-pinterest"></i></a>
                                <a href="#"><i class="fab fa-github"></i></a>
                                <a href="#"><i class="fab fa-linkedin"></i></a>
                                <a href="#"><i class="fab fa-google"></i></a>
                                <a href="#"><i class="fab fa-youtube"></i></a>
                                <a href="#"><i class="fab fa-dribbble"></i></a>
                            </div>
                        </div>
                        <br>
                        <div class="contact_footer">
                            <div class="footer_icon">
                                <div><i class="fa fa-paper-plane"></i>Bengaluru, Karnataka</div>
                                <div><i class="fa fa-envelope"></i><a href="mailto:wine@gmail.com">wine@gmail.com</a>
                                </div>
                                <div><i class="fa fa-phone"></i><a href="tel:+91-9898989898">+91-9898989898</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer_bottom_outer">
            <div class="container">
                <div class="row">
                    <!-- <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 footerbottom_link">
                        <div class="card">
                            <ul class="list-inline">
                                <li><img src="images/card-1.png" alt="" class="img-responsive"></li>
                                <li><img src="images/card-2.png" alt="" class="img-responsive"></li>
                                <li><img src="images/card-4.png" alt="" class="img-responsive"></li>
                                <li><img src="images/card-5.png" alt="" class="img-responsive"></li>
                                <li><img src="images/card-6.png" alt="" class="img-responsive"></li>
                                <li><img src="images/card-7.png" alt="" class="img-responsive"></li>
                            </ul>
                        </div>
                    </div> -->
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="copyright">
                            <p>Wine Shop &copy; 2022. Made with <i class="fa fa-heart"></i>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <script src="Dependencies/jquery.min.js"></script>
    <script src="Dependencies/jquery.easing.min.js"></script>
    <script src="Dependencies/bootstrap.min.js"></script>
    <script src="Dependencies/masterslider.min.js"></script>
    <script src="Dependencies/owl.carousel.min.js"></script>
    <script src="main.js"></script>

</body>

</html>