<?php
session_start();

if (isset($_POST['logout']) && $_POST['logout'] == 'true') {
    session_unset();
    session_destroy();
    header('Location: login_form.php');
    exit;
}

@include 'config.php';

session_start();

if (isset($_POST['submit'])) {

    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $pass = md5($_POST['password']);
    $cpass = md5($_POST['cpassword']);
    $user_type = $_POST['user_type'];

    $select = "SELECT * FROM user_form WHERE email = '$email' && password = '$pass'";
    $result = mysqli_query($conn, $select);

    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_array($result);

        if ($row['user_type'] == 'admin') {
            $_SESSION['admin_name'] = $row['name'];
            header('location:crud_operations/crud.php');
        } elseif ($row['user_type'] == 'user') {
            $_SESSION['user_name'] = $row['name'];
            header('location:user_page.php');
        }
    } else {
        // Increase login attempts
        if (!isset($_SESSION['login_attempts'])) {
            $_SESSION['login_attempts'] = 1;
        } else {
            $_SESSION['login_attempts'] += 1;
        }

        // Lock login after three attempts
        if ($_SESSION['login_attempts'] >= 3) {
            $_SESSION['login_locked'] = time() + (10 * 60); // lock for ten minutes
        }

        // Prompt user
        $error[] = 'Incorrect email or password!';

        // Redirect user after 3 failed attempts
        if (isset($_SESSION['login_locked']) && $_SESSION['login_locked'] > time()) {
            $error[] = 'Login is locked. Please try again later.';
        } else {
            $error[] = 'Incorrect email or password!';
        }
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Global Swimming and Camping</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <link rel="stylesheet" href="css/style.css">
   <link rel="stylesheet" href="login_system/css/style.css">

</head>
<body>
<header class="header">

<a href="index.php" class="logo">
    <img src="img/images/LOGO.png" alt="">

</a>

<nav class="navbar">
    <a href="index.php">Home</a>
    <a href="information.php">Information</a>
    <a href="reviews.php">Reviews</a>
    <a href="featured.php">Featured</a>
    <a href="contact.php">contact</a>
</nav>

<div class="icons">
    <div class="fas fa-search" id="search-btn"></div>
    <div class="fas fa-bars" id="menu-btn"></div>
</div>

<div class="search-form">
    <input type="search" id="search-box" placeholder="search here...">
    <label for="search-box" class="fas fa-search"></label>
</div>



</header>
<div class="form-container">

   <form action="" method="post">
      <h3>login now</h3>
      <?php
      if(isset($error)){
         foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
         };
      };
      ?>
      <input type="email" name="email" required placeholder="enter your email">
      <input type="password" name="password" required placeholder="enter your password">
      <input type="submit" name="submit" value="login now" class="form-btn">
      <p>don't have an account? <a href="register_form.php">register now</a></p>
   </form>

</div>


<section class="footer">

    <div class="share">
        <a href="#" class="fab fa-facebook-f"></a>
        <a href="#" class="fab fa-twitter"></a>
        <a href="#" class="fab fa-instagram"></a>
        <a href="#" class="fab fa-linkedin"></a>
        <a href="#" class="fab fa-pinterest"></a>
    </div>

    <div class="links">
        <a href="#">home</a>
        <a href="#">about</a>
        <a href="#">new</a>
        <a href="#">products</a>
        <a href="#">review</a>
        <a href="#">contact</a>
        <a href="policy.php">Privacy Policy</a>
    </div>

    <div class="credit">created by <span>Designed by Lord.Mordecai</span> | all rights reserved</div>

</section>



<script src="js/script.js"></script>
    <script src="JS/swiper-bundle.min.js"></script>
    <script>
      var swiper = new Swiper(".mySwiper", {
        slidesPerView: 1,
        loop: true,
        pagination: {
          el: ".swiper-pagination",
          clickable: true,
        },
        navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev",
        },
      });
    </script>
    


</body>
</html>