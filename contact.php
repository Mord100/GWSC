<?php
@include 'config.php';

if (!empty($_POST["submit"])) {
    $fullname = $_POST["fullname"];
    $email = $_POST["email"];
    $message = $_POST["message"];
    $response = $_POST['g-recaptcha-response'];

    $url = 'https://www.google.com/recaptcha/api/siteverify';
    $data = array(
        'secret' => 'KEY',
        'response' => $response
    );
    $options = array(
        'http' => array (
            'method' => 'POST',
            'content' => http_build_query($data)
        )
    );
    $context  = stream_context_create($options);
    $verify = file_get_contents($url, false, $context);
    $captcha_success = json_decode($verify);
    
    if ($captcha_success->success) {
        $conn = mysqli_connect('localhost', 'root', '', 'user_db');
        mysqli_select_db($conn, "user_db");
        mysqli_query($conn, "INSERT INTO contact_form (fullname, email, message) VALUES ('" . $fullname . "', '" . $email . "', '" . $message . "')");
        $insert_id = mysqli_insert_id($conn);
        if (!empty($insert_id)) {
            $message = "Successfully Added.";
            echo "<script>alert('Message added successfully');</script>";
        }
    } else {
        $error[] = "reCAPTCHA verification failed. Please try again.";
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
        <div class="fas fa-user" id="search-btn" onclick="window.location.href='login_form.php'"></div>


        
    
    </div>

    <div class="search-form">
        <input type="search" id="search-box" placeholder="search here...">
        <label for="search-box" class="fas fa-search"></label>

    </div>

   

</header>


<div class="form-container">

   <form action="" method="post">
      <h3>CONTACT US</h3>
      <?php
      if(isset($error)){
         foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
         };
      };
      ?>
      <input type="text" name="fullname" required placeholder="enter your name">
      <input type="email" name="email" required placeholder="enter your email">
      <input type="text" name="message" required placeholder="type for message">
      <input type="submit" name="submit" value="submit now" class="form-btn">
   </form>

</div>



<section class="contact" id="contact">

    <h1 class="heading"> <span>LOCATIONS AND </span> MAPS</h1>

    <div class="row">
       <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d123905.83519588425!2d33.72252505563451!3d-13.
       955190930530582!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1921d31ffc299805%3A0x4b7eb9f
       20a03ff9!2sLilongwe!5e0!3m2!1sen!2smw!4v1664555749209!5m2!1sen!2smw" width="600" height="450" style="border:0;"
        allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe> 
        <div class="content">
            <h3>OUR LOCATION SITES AND MAPS</h3>
            <p>Global Wild Swimming and Camping (GWSC) is a new business to the market and are 
                expanding its business to beyond the local community.</p>
            <p></p>
            <a href="information.html" class="btn">learn more</a>
        </div>

    </div>

</section>




<section class="footer">

    <div class="share">
        <a href="#" class="fab fa-facebook-f"></a>
        <a href="#" class="fab fa-twitter"></a>
        <a href="#" class="fab fa-instagram"></a>
        <a href="#" class="fab fa-linkedin"></a>
        <a href="#" class="fab fa-pinterest"></a>
    </div>

    <div class="links">
        <a href="index.php">Home</a>
        <a href="information.php">Information</a>
        <a href="reviews.php">Review</a>
        <a href="featured.php">Featured</a>
        <a href="contact.php">Contact</a>
        <a href="policy.php">Privacy Policy</a>
    </div>

    <div class="credit">created by <span>Mordecai Chingolo</span> | all rights reserved</div>

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