<?php

$conn = mysqli_connect('localhost','root','','user_db');
if (!$conn) {
    die("CONNECTION FAILED;");
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
        <link rel="stylesheet" href="css/swiper-bundle.min.css" />
        <link rel="stylesheet" href="css/style.css" />
        

</head>
<body>
<div class="wrapper">
    <div class="content">
      <header>Cookies Consent</header>
      <p>This website use cookies to ensure you get the best experience on our website.</p>
      <div class="buttons">
        <button class="item">Accept</button>
        <a href="#" class="item">Learn more</a>
      </div>
    </div>
  </div>

  <script>
    const cookieBox = document.querySelector(".wrapper"),
    acceptBtn = cookieBox.querySelector("button");

    acceptBtn.onclick = ()=>{
      document.cookie = "CookieBy=GWSC; max-age="+60*60*24*30;
      if(document.cookie){ 
        cookieBox.classList.add("hide");
      }else{ 
        alert("Cookie can't be set! Please unblock this site from the cookie setting of your browser.");
      }
    }
    let checkCookie = document.cookie.indexOf("CookieBy=GWSC"); 
    checkCookie != -1 ? cookieBox.classList.add("hide") : cookieBox.classList.remove("hide");
  </script>
  </div>
    

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


<section class="main swiper mySwiper">
    <div class="wrapper swiper-wrapper">
      <div class="slide swiper-slide">
        <img src="img/images/slide1.jpg" alt="" class="image" />
        <div class="image-data">
            <h2>
                GLOBAL WILD SWIMMING AND CAMPING
          </h2>
          <span class="text">Global Wild Swimming and Camping (GWSC) is a new business to the market and are 
            expanding its business to beyond the local community.<br> They are looking for an online ecommerce website to help them promote its facilities to those that enjoy camping and 
            swimming the wilds.<br></span>
          
          <a href="information.php" class="btn">Discover More</a>
          <a href="login_form.php" class="btn">Log In</a>
        </div>
      </div>
      <div class="slide swiper-slide">
        <img src="img/images/slide2.jpg" alt="" class="image" />
        <div class="image-data">
            <h2>
                GLOBAL WILD SWIMMING AND CAMPING
          </h2>
          <span class="text">Global Wild Swimming and Camping (GWSC) is a new business to the market and are 
            expanding its business to beyond the local community.<br> They are looking for an online ecommerce website to help them promote its facilities to those that enjoy camping and 
            swimming the wilds.<br></span>
          
          <a href="information.php" class="btn">Discover More</a>
          <a href="login_form.php" class="btn">Log In</a>
        </div>
      </div>
      <div class="slide swiper-slide">
        <img src="img/images/slide3.jpg" alt="" class="image" />
        <div class="image-data">
            <h2>
                GLOBAL WILD SWIMMING AND CAMPING
          </h2>
          <span class="text">Global Wild Swimming and Camping (GWSC) is a new business to the market and are 
            expanding its business to beyond the local community.<br> They are looking for an online ecommerce website to help them promote its facilities to those that enjoy camping and 
            swimming the wilds.<br></span>
          
          <a href="information.php" class="btn">Discover More</a>
          <a href="login_form.php" class="btn">Log In</a>
        </div>
      </div>
     
    </div>

    <div class="swiper-button-next nav-btn"></div>
    <div class="swiper-button-prev nav-btn"></div>
    <div class="swiper-pagination"></div>
  </section>


<section class="about" id="about">

    <h1 class="heading"> <span>WELCOME TO</span> GWSC </h1>

    <div class="row">

        <div class="image">
            <img src="img/images/slide_03.jpg" alt="">
        </div>

        <div class="content">
            <h3>ABOUT GWSC</h3>
            <p>Global Wild Swimming and Camping (GWSC) is a new business to the market and are 
                expanding its business to beyond the local community. They are looking for an online ecommerce website to help them promote its facilities to those that enjoy camping and 
                swimming the wilds.</p>
            <p></p>
            <a href="information.php" class="btn">learn more</a>
        </div>

    </div>

</section>


<section class="blogs" id="blogs">

    <h1 class="heading"> AVAILABLE <span>PITCH TYPES</span> </h1>

    <div class="box-container">

        <div class="box">
            <div class="image">
                <img src="img/images/product_01.jpg" alt="">
            </div>
            <div class="content">
                <a href="#" class="title">GLOBAL WILD SWIMMING AND CAMPING</a>
                <span>Available till 21st April, 2023</span>
                <p>Global Wild Swimming and Camping (GWSC) is a new business to the market and are 
                    expanding its business to beyond the local community.</p>
                <a href="#" class="btn">read more</a>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="img/images/product_02.jpg" alt="">
            </div>
            <div class="content">
                <a href="#" class="title">GLOBAL WILD SWIMMING AND CAMPINGS</a>
                <span>Available till 21st April, 2023</span>
                <p>Global Wild Swimming and Camping (GWSC) is a new business to the market and are 
                    expanding its business to beyond the local community.</p>
                <a href="#" class="btn">read more</a>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="img/images/product_03.jpg" alt="">
            </div>
            <div class="content">
                <a href="#" class="title">GLOBAL WILD SWIMMING AND CAMPING</a>
                <span>Available till 21st April, 2023</span>
                <p>Global Wild Swimming and Camping (GWSC) is a new business to the market and are 
                    expanding its business to beyond the local community.</p>
                <a href="#" class="btn">read more</a>
            </div>
        </div>

    </div>

</section>



<section class="products" id="products">

    <h1 class="heading"> More <span>Pitches</span> </h1>

    <div class="box-container">

        <div class="box">
         
            <div class="image">
                <img src="img/images/product_04.jpg" alt="">
            </div>
            <div class="content">
                <h3>POOLS</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
            </div>
        </div>

        <div class="box">

            <div class="image">
                <img src="img/images/product_05.jpg" alt="">
            </div>
            <div class="content">
                <h3>TENTS</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="img/images/product_02.jpg" alt="">
            </div>
            <div class="content">
                <h3>AND MORE</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
            </div>
        </div>

    </div>

</section>



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
            <a href="information.php" class="btn">learn more</a>
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
        <a href="#" class="fas fa-angle-up"></a>
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