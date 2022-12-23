<?php include 'functions.php' ?>
<?php include 'header.php' ?>

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

    <div class="social-media">
        <p>Connect with us :</p>
        <div class="social-icons">
          <a href="#">
            <i class="fab fa-facebook-f"></i>
          </a>
          <a href="#">
            <i class="fab fa-twitter"></i>
          </a>
          <a href="#">
            <i class="fab fa-instagram"></i>
          </a>
          <a href="#">
            <i class="fab fa-linkedin-in"></i>
          </a>
        </div><br>
        <div class="credit">Made with <span style="color:tomato">❤</span> by <a href="https://www.learningrobo.com/">Learning Robo</a></div>
      </div>
    </div>

    <div class="form-wrap">
        <form action="contactprocess.php" method="POST">
            <h2 class="form-title">Send us a message</h2>
            <?php 
			$Msg="";
			if(isset($_GET['error'])){
				$Msg="please fill blanks";
				echo '<div class="alert alert-danger">'.$Msg.'</div>';
			}
			if(isset($_GET['success']))
            {
                $Msg = " Your Message Has Been Sent ";
                echo '<div class="alert alert-success">'.$Msg.'</div>';
            }
			?>
            <div class="form-fields">
                <div class="form-group">
                    <input type="text" class="fname" placeholder="First Name" name="UName" required="required">
                </div>
                <div class="form-group">
                    <input type="text" class="lname" placeholder="Last Name"  required="required">
                </div>
                <div class="form-group">
                    <input type="email" class="email" placeholder="EMail" name="Email" required="required">
                </div>
               
                <div class="form-group">
                    <textarea name="msg" id="" placeholder="Write your message"></textarea>
                </div>
            </div>
            <input type="submit" name="btn-send" value="Send Message" class="submit-button">
        </form>
    </div>
    <!-- footer -->
    
</body>
</html>