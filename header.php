<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wine Shop</title>
    <link rel="stylesheet" href="Dependencies/bootstrap.css">
    <link rel="stylesheet" href="Dependencies/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="Dependencies/owl.carousel.min.css">
    <link rel="stylesheet" href="Dependencies/owl.theme.default.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="assets/css/style.css" />
</head>

<body>
<div></div>
    <!-- header section for mobile size  -->

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
                            <img src="images/language.png" alt=""> EN <i class="fa fa-angle-down"></i>
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
                            My Account <i class="fa fa-angle-down"></i>
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
                    <li class="search_box">
                        <a href="javascript:void(0)">
                            <i class="fa fa-search"></i>
                        </a>
                        <div class="search_widget">
                            <form action="#">
                                <input type="text" placeholder="Search Your Wine...">
                                <button type="submit">
                                    <i class="fa fa-search"></i>
                                </button>
                            </form>
                        </div>
                    </li>
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
                    <li class="menu-item-has-children">
                        <a href="#">Wines</a>
                        <ul class="sub-menu">
                            <li class="menu-item-has-children">
                                <a href="#">Red Wines</a>
                                <ul class="sub-menu">
                                    <li><a href="#">Pinot Noir</a></li>
                                    <li><a href="#">Cabernet Sauvignon</a></li>
                                    <li><a href="#">Syrah</a></li>
                                    <li><a href="#">Rhone Blends</a></li>
                                    <li><a href="#">Merlot</a></li>
                                    <li><a href="#">Gamay</a></li>
                                </ul>
                            </li>
                            <li class="menu-item-has-children">
                                <a href="#">White Wines</a>
                                <ul class="sub-menu">
                                    <li><a href="#">Chardonnay</a></li>
                                    <li><a href="#">Riesling</a></li>
                                    <li><a href="#">Pinot Gris</a></li>
                                    <li><a href="#">Viogneir</a></li>
                                </ul>
                            </li>
                            <li class="menu-item-has-children">
                                <a href="#">Others</a>
                                <ul class="sub-menu">
                                    <li><a href="#"><b>Champagne & Sparkling</b></a></li>
                                    <li><a href="#"><b>Rose Wine</b></a></li>
                                    <li><a href="#"><b>Glassware & Accessories</b></a></li>
                                    <li><a href="#"><b>Wine Tasting Sets</b></a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children"><a href="./about.html">About Us</a></li>
                    <li class="menu-item-has-children">
                        <a href="#">Region</a>
                        <ul class="sub-menu">
                            <li><a href="#">India</a></li>
                            <li><a href="#">USA</a></li>
                            <li><a href="#">Australia</a></li>
                            <li><a href="#">UK</a></li>
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
                                        <li>
                                            <a href="index.php" class="active">Home</a>
                                        </li>
                                        <li class="mega_items">
                                            <a href="product.php">Products</i></a>
                                            
                                        </li>
                                        <li><a href="./about.php">About Us</a></li>
                                        <li>
                                            <a href="contact.php">Contact Us</i></a>
                                            
                                        </li>
                                        <?php 
                                        
                                                if(isset($_SESSION['fname'])){;?>
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
                                                            <p><span>£ 7 </span> X 1</p>
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
                                                            <p><span>£ 5</span> X 1</p>
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
                                                            <span class="price">£ 6</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="mini_cart_footer">
                                                    <div class="cart_button">
                                                        <a href="mycart.php">View Cart</a>
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