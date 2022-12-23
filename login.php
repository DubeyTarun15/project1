
<?php include 'functions.php' ?>


<?php

if (isset($_POST['signup'])) {
  $data = $_POST;
  $user_exists = email_exists($data['email']);
  if ($user_exists) {
    $response = [
      'type' => 'error',
      'message' => 'Email is Already Taken!',
    ];
  } else {
    if ($data["password"] == $data["cpassword"]) {
      $data["type"] = 'user';
      $user = signup($data);
      if ($user) {
        $response = [
          'type' => 'success',
          'message' => 'User Registered Successfully!',
        ];
        login($data);
      } else {
        $response = [
          'type' => 'error',
          'message' => 'Some Error Occured!',
        ];
      }
    } else {
      $response = [
        'type' => 'error',
        'message' => 'Passwords should match!',
      ];
    }
  }
}

?>

<?php

if (isset($_POST['login'])) {
  $data = $_POST;
  $user = login($data);
  if (!$user) {
    $response = [
      'type' => 'error',
      'message' => 'Login Failed!'
    ];
  } else {
    header("Location: index.php");
  }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="style.css" />
  <title>Sign in & Sign up Form</title>
</head>

<body>
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
                                    
                                    <!-- <li class="mini_cart_wrapper">
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
                                                    <a href="#">View Cart</a>
                                                </div>
                                                <div class="cart_button">
                                                    <a href="#">Checkout</a>
                                                </div>

                                            </div>
                                        </div>



                                    </li>
                                </ul> -->
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
  <div class="container2">
    <div class="forms-container">
      <div class="signin-signup">
      <?php if (isset($response)) { ?>
          <div class="message-box <?= $response['type'] ?>">
            <p><?= $response['message'] ?></p>
          </div>
        <?php } ?>
        <form action="?" method="POST" class="sign-in-form">
          <h2 class="title">Sign in</h2>
          <div class="input-field">
            <i class="fas fa-user"></i>
            <input type="email" name="email" placeholder="Email"  />
          </div>
          <div class="input-field">
            <i class="fas fa-lock"></i>
            <input type="password" placeholder="Password" name="password" />
          </div>
          <input type="submit" value="Login" name="login" class="btn solid" />
          <p class="social-text">Or Sign in with social platforms</p>
          <div class="social-media">
            <a href="#" class="social-icon">
              <i class="fab fa-facebook-f"></i>
            </a>
            <a href="#" class="social-icon">
              <i class="fab fa-twitter"></i>
            </a>
            <a href="#" class="social-icon">
              <i class="fab fa-google"></i>
            </a>
            <a href="#" class="social-icon">
              <i class="fab fa-linkedin-in"></i>
            </a>
          </div>
        </form>
        <?php if (isset($response)) { ?>
          <div class="message-box <?= $response['type'] ?>">
            <p><?= $response['message'] ?></p>
          </div>
        <?php } ?>
        <form action="?" method="POST"  class="sign-up-form">
          <h2 class="title">Sign up</h2>
          <div class="input-field">
            <i class="fas fa-user"></i>
            <input type="text" placeholder="first name" name="fname" required="required">
          </div>
          <div class="input-field">
            <i class="fas fa-user"></i>
            <input type="text" placeholder="last name" name="lname" required="required">
          </div>
          <div class="input-field">
            <i class="fas fa-user"></i>
            <input type="email" placeholder="Enter Email" name="email" required="required">
          </div>
          <div class="input-field">
            <i class="fas fa-lock"></i>
            <input type="password" name="password" placeholder="Password" />
          </div>
          <div class="input-field">
            <i class="fas fa-envelope"></i>
            <input type="password" placeholder="Confirm Password" name="cpassword" required="required">
          </div>
          <input type="submit" name="signup" class="btn" value="Sign up" />
          <p class="social-text">Or Sign up with social platforms</p>
          <div class="social-media">
            <a href="#" class="social-icon">
              <i class="fab fa-facebook-f"></i>
            </a>
            <a href="#" class="social-icon">
              <i class="fab fa-twitter"></i>
            </a>
            <a href="#" class="social-icon">
              <i class="fab fa-google"></i>
            </a>
            <a href="#" class="social-icon">
              <i class="fab fa-linkedin-in"></i>
            </a>
          </div>
        </form>
      </div>
    </div>

    <div class="panels-container">
      <div class="panel left-panel">
        <div class="content">
          <h3>New here?</h3>
          <p>
            Take your journey to the next level. Have some wine.
          </p>
          <button class="btn transparent" id="sign-up-btn">
            Sign up
          </button>
        </div>
      </div>
      <div class="panel right-panel">
        <div class="content">
          <h3>One of us?</h3>
          <p>
            Start your day with us.
          </p>
          <button class="btn transparent" id="sign-in-btn">
           Login
          </button>
        </div>
      </div>
    </div>
  </div>

  <script>
    const sign_in_btn = document.querySelector("#sign-in-btn");
    const sign_up_btn = document.querySelector("#sign-up-btn");
    const container = document.querySelector(".container2");

    sign_up_btn.addEventListener("click", () => {
      container.classList.add("sign-up-mode");
    });

    sign_in_btn.addEventListener("click", () => {
      container.classList.remove("sign-up-mode");
    });
  </script>
</body>

</html>