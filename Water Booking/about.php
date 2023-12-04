<?php

@include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>about</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php include 'header.php'; ?>

<section class="about">

   <div class="row">

      <div class="box">
         <img src="images/little-girl.jpg" alt="">
         <h3>why choose us?</h3>
         <p>Because we’ve been there and done it. When you choose us, you’ll feel the benefit for so many years’ Because we’ll understand your brand Because we’re easy to work with. 
         We take the work seriously, but not ourselves. We’re not prickly, precious or pretentious.</p>
         <a href="contact.php" class="btn">contact us</a>
      </div>

      <div class="box">
         <img src="images/waterab.png" alt="">
         <h3>what we provide?</h3>
         <p>we provide free services and free delivery , customer satisfaction is the main focus of our platform , 
            all types of water bottles of any sizes are available.</p>
         <a href="shop.php" class="btn">our shop</a>
      </div>

   </div>

</section>

<section class="reviews">

   <h1 class="title">clients reivews</h1>

   <div class="box-container">

      <div class="box">
         <img src="images/abt2.jpg" alt="">
         <p>The products are very with a good quality and quantity .
            I had an emergency order and it was deliverd very soon on time without any delay.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Charlie</h3>
      </div>

      <div class="box">
         <img src="images/pic-3.png" alt="">
         <p>I really enjoyed the combo products especially in a water delivery website , 
            all the combo offer are very rare offer and I found it intresting.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Manoj YG</h3>
      </div>

      <div class="box">
         <img src="images/pic-6.png" alt="">
         <p>I wanted a huge delivery on water cans this platform really healped me in solving the lack very soon without any delay.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Rose</h3>
      </div>

      <div class="box">
         <img src="images/pic-4.png" alt="">
         <p>As a mother of twin kid it was very difficult to find pure water this platform has really helped me in finding pure water in a good quality.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>shravya gosh</h3>
      </div>

      <div class="box">
         <img src="images/pic-5.png" alt="">
         <p>The water bottles of all the sizes and lot many brands of my choice had made me intresting about this website and will be using the website regularly</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Dhanush</h3>
      </div>

      <div class="box">
         <img src="images/abt1.jpg" alt="">
         <p>I am really fond of this platform it is very useful acording to the neccessity.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Stesin</h3>
      </div>

   </div>

</section>









<?php include 'footer.php'; ?>

<script src="js/script.js"></script>

</body>
</html>