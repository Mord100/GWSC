<?php 





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



<section class="contact" id="contact">

    <h1 class="heading"> <span>LOGIN/ </span> SIGNUP</h1>

    <div class="row">
        <form action="" method="POST">
            <h3>Log In Form</h3>
            <div class="inputBox">
                <span class="fas fa-user"></span>
                <input type="text" placeholder="User Name" name="UserName">
            </div>
            <div class="inputBox">
                <span class="fas fa-envelope"></span>
                <input type="email" placeholder="Email" name="Email">
            </div>
           
            <div class="inputBox">
                <span class="fas fa-key"></span>
                <input type="password" placeholder="Password" name="Password">
            </div> 
           
            <input type="submit" value="Log In" class="btn" name="register">

            <div class="content">

             <p><a href="register_form.php" class=""><span>SignUp</span></a> if you already have an account</p>
 
            </div>
            
           
        </form>

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
                <span>by admin / 21st may, 2021</span>
                <p>lobal Wild Swimming and Camping (GWSC) is a new business to the market and are 
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
                <span>by admin / 21st may, 2021</span>
                <p>lobal Wild Swimming and Camping (GWSC) is a new business to the market and are 
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
                <span>by admin / 21st may, 2021</span>
                <p>lobal Wild Swimming and Camping (GWSC) is a new business to the market and are 
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
        <a href="#">home</a>
        <a href="#">about</a>
        <a href="#">new</a>
        <a href="#">products</a>
        <a href="#">review</a>
        <a href="#">contact</a>
        <a href="#">blogs</a>
    </div>

    <div class="credit">created by <span>Designed by Lord.Mordecai</span> | all rights reserved</div>

</section>













<script src="js/script.js"></script>

</body>
</html>