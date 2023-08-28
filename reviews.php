<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Global Swimming and Camping</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <link rel="stylesheet" href="css/style.css">

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


<section class="home1" id="home">

    <div class="content">
        <h3>GLOBAL WILD SWIMMING AND CAMPING</h3>
        <p>Global Wild Swimming and Camping (GWSC) is a new business to the market and are 
            expanding its business to beyond the local community.</p>
        <a href="information.html" class="btn">Discover More</a>
        <a href="login_form.php" class="btn">Log In</a>
    </div>

</section>


<section class="review" id="review">

    <h1 class="heading"> customer's <span>review</span> </h1>

    <div class="box-container">

        <div class="box">
 
            <p>Global Wild Swimming and Camping (GWSC) is a new business to the market and are 
                expanding its business to beyond the local community. They are looking for an online ecommerce website to help them promote its facilities to those that enjoy camping and 
                swimming the wilds.</p>
            <img src="img/images/pic-1.jpg" class="user" alt="">
            <h3>Customer1</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
        </div>

        <div class="box">

            <p>Global Wild Swimming and Camping (GWSC) is a new business to the market and are 
                expanding its business to beyond the local community. They are looking for an online ecommerce website to help them promote its facilities to those that enjoy camping and 
                swimming the wilds.</p>
            <img src="img/images/pic-1.jpg" class="user" alt="">
            <h3>Customer2</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
        </div>
        
        <div class="box">
            <p>Global Wild Swimming and Camping (GWSC) is a new business to the market and are 
                expanding its business to beyond the local community. They are looking for an online ecommerce website to help them promote its facilities to those that enjoy camping and 
                swimming the wilds.</p>
            <img src="img/images/pic-1.jpg" class="user" alt="">
            <h3>Customer3</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
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
                <span>by admin / 21st may, 2023</span>
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
                <span>by admin / 21st may, 2023</span>
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
                <span>by admin / 21st may, 2023</span>
                <p>Global Wild Swimming and Camping (GWSC) is a new business to the market and are 
                expanding its business to beyond the local community.</p>
                <a href="#" class="btn">read more</a>
            </div>
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