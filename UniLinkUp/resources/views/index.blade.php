


<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>home</title>

   <!-- swiper css link  -->
   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/sty.css">


</head>
<body>
   
<!-- header section starts  -->

<section class="header">

   <a href="home.php" class="logo">UniLinkUp</a>

   <nav class="navbar">
      <a href="index.php">Home</a>
      <a href="about.php">About Us</a>
      <a href="question.php">FAQs?</a>
      <a href='admin.php'>Admin</a>
      <a href="<?=url('login')?>">Log In</a>

      
      <!-- <?php
if (isset($_SESSION['User_name'])){
  echo "
      
      <li class='nav-item'>
      <a id='sign_out' class='nav-link' href='sign_out.php'>Sign out</a>
      </li>
";
}else{
  echo'
      <li class="nav-item">
      <a class="nav-link" href="sign_in.php">Sign In</a>
      </li>
      <li class="nav-item">
      <a class="nav-link" href="sign_up.php">Sign Up</a>
      </li>
   
  ';
}

?> -->
   </nav>
   <div class="logo">
                <a href="#"><img src="{{asset('storage/images/site images/uor.png')}}" style="padding:0px" height="40px" width="30px" alt="Logo"></a>
      </div>
      


   <div id="menu-btn" class="fas fa-bars"></div>
   
</section>

<!-- header section ends -->

<!-- home section starts  -->

<section class="home">

   <div class="swiper home-slider">

      <div class="swiper-wrapper">

         <div class="swiper-slide slide" style="background:url(images/home17.jpg)no-repeat">
            <div class="content">
                <h1 style="color: #000080;">UniLinkUp</h1>
               <span style="color: #000000;">Glad to see you in here!</span>
               <h3 style="color: #000040;"> Make it easy to stay in touch...</h3>
               <a href="log_in.php" class="btn">Log In</a>
            </div>
         </div>

         <div class="swiper-slide slide" style="background:url(images/home19.jpg) no-repeat">
         <div class="content">
               <h1 style="color: #000080;">UniLinkUp</h1>
               <span style="color: #000000;">Glad to see you in here!</span>
               <h3 style="color: #000080;"> Make it easy to stay in touch...</h3>
               <a href="log_in.php" class="btn">Log In</a>
            </div>
         </div>

         <div class="swiper-slide slide" style="background:url(images/home16.jpg) no-repeat">
         <div class="content">
               <h1 style="color: #000080;">UniLinkUp</h1>
               <span style="color: #000000;">Glad to see you in here!</span>
               <h3 style="color: #000040;"> Make it easy to stay in touch... </h3>
               <a href="log_in.php" class="btn">Log In</a>
            </div>
         </div>
         
      </div>

      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>

   </div>

</section>

<!-- home section ends -->

<!-- services section starts  -->

<section class="services">

   <h1 class="heading-title"> Our Faculties </h1>

   <div class="box-container">

      <div class="box">
         <img src="images/icona.png" alt="">
         <h3>Faculty of Technology </h3>
      </div>

      <div class="box">
         <img src="images/iconb.png" alt="">
         <h3>Faculty of Humanitieas and Social Sciences</h3>
      </div>

      <div class="box">
         <img src="images/iconc.png" alt="">
         <h3>Faculty of Engineering</h3>
      </div>

      <div class="box">
         <img src="images/icond.png" alt="">
         <h3>Faculty of Science</h3>
      </div>

      <div class="box">
         <img src="images/icone.png" alt="">
         <h3>Faculty of Medicine</h3>
      </div>

      <div class="box">
         <img src="images/iconf.png" alt="">
         <h3>Faculty of Agriculture</h3>
      </div>

      <div class="box">
         <img src="images/icong.png" alt="">
         <h3>Faculty of Management</h3>
      </div>

      <div class="box">
         <img src="images/iconh.png" alt="">
         <h3>Faculty of Allied Health Science</h3>
      </div>

      <div class="box">
         <img src="images/iconi.png" alt="">
         <h3>Faculty of Fisheries and Marine Science</h3>
      </div>

   </div>

</section>

<!-- services section ends -->


<!-- home packages section starts  -->

<section class="home-packages">

   <h1 class="heading-title">Top Selling Items </h1>

   <div class="box-container">

      <div class="box">
         <div class="image">
            <img src="images/im1.jpg" alt="">
         </div>
         <div class="content">
            <h3>Normal cap and Bucket hat</h3>
            <h2>Rs.900/=</h2>
            <a href="product.php" class="btn">View More</a>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="images/im5.jpg" alt="">
         </div>
         <div class="content">
         <h3>Ruhuna White Round Neck T-shirt</h3>
            <h2>Rs.1500/=</h2>
            <a href="product.php" class="btn">View More</a>
         </div>
      </div>
      
      <div class="box">
         <div class="image">
            <img src="images/im4.jpg" alt="">
         </div>
         <div class="content">
         <h3>Ruhuna Drawstring Backpack</h3>
            <h2>Rs.1200/=</h2>
            <a href="product.php" class="btn">View More</a>
         </div>
      </div>

   </div>

   <div class="load-more"> <a href="product.php" class="btn">Load More</a> </div>

</section>

<!-- home packages section ends -->


<!-- home about section starts  -->

<section class="home-about">

   <div class="image">
      <img src="images/aboutus.jpg" alt="">
   </div>

   <div class="content">
      <h3>About Us</h3>
      <p>Empowering university communities to share knowledge, experiences, and achievements. Join us in shaping a brighter academic future together.</p>
      <a href="about.php" class="btn">Read More</a>
   </div>

</section>

<!-- home about section ends -->

<!-- reviews section starts  -->

<section class="reviews">

   <h1 class="heading-title"> Reviews </h1>

   <div class="swiper reviews-slider">

      <div class="swiper-wrapper">

         <div class="swiper-slide slide">
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
            </div>
            <p>"This university post sharing platform is a game-changer! It fosters collaboration and knowledge sharing among students, making learning enjoyable."</p>
            <h3>john deo</h3>
            <span>Student</span>
            <img src="images/pic-1.png" alt="">
         </div>

         <div class="swiper-slide slide">
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
            </div>
            <p>"This university post sharing platform is a game-changer! It fosters collaboration and knowledge sharing among students, making learning enjoyable."</p>
            <h3>john deo</h3>
            <span>Student</span>
            <img src="images/pic-2.png" alt="">
         </div>

         <div class="swiper-slide slide">
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
            </div>
            <p>"This university post sharing platform is a game-changer! It fosters collaboration and knowledge sharing among students, making learning enjoyable."</p>
            <h3>Sebastian F</h3>
            <span>Student</span>
            <img src="images/pic-3.png" alt="">
         </div>

         <div class="swiper-slide slide">
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
            </div>
            <p>"This university post sharing platform is a game-changer! It fosters collaboration and knowledge sharing among students, making learning enjoyable."</p>
            <h3>Leonie</h3>
            <span>Student</span>
            <img src="images/pic-4.png" alt="">
         </div>

         <div class="swiper-slide slide">
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
            </div>
            <p>"This university post sharing platform is a game-changer! It fosters collaboration and knowledge sharing among students, making learning enjoyable."</p>
            <h3>Jing</h3>
            <span>Student</span>
            <img src="images/pic-5.png" alt="">
         </div>

         <div class="swiper-slide slide">
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
            </div>
            <p>"This university post sharing platform is a game-changer! It fosters collaboration and knowledge sharing among students, making learning enjoyable." </p>
            <h3>Iana</h3>
            <span>Student</span>
            <img src="images/pic-6.png" alt="">
         </div>

      </div>

   </div>

</section>

<!-- reviews section ends -->



<!-- footer section starts  -->

<section class="footer">

   <div class="box-container">

   <div class="box">
         <h3>quick links</h3>
         <a href="index.php"> <i class="fas fa-angle-right"></i> Home</a>
         <a href="product.php"> <i class="fas fa-angle-right"></i>About Us</a>
         <a href="sign_in.php"> <i class="fas fa-angle-right"></i> Albums</a>
         <a href="sign_up.php"> <i class="fas fa-angle-right"></i> News Feed</a>
      </div>

      <div class="box">
         <h3>extra links</h3>
         <a href="question.php"> <i class="fas fa-angle-right"></i> FAQs?</a>
         <a href="#"> <i class="fas fa-angle-right"></i> Reviews</a>
         <a href="policy.php"> <i class="fas fa-angle-right"></i> privacy policy</a>
         <a href="terms.php"> <i class="fas fa-angle-right"></i> terms & conditions</a>
      </div>

      <div class="box">
         <h3>contact info</h3>
         <a href="#"> <i class="fas fa-phone"></i> +123-456-7890 </a>
         <a href="#"> <i class="fas fa-phone"></i> +94-779917404 </a>
         <a href="#"> <i class="fas fa-envelope"></i> Unilinkup@gmail.com</a>
         <a href="#"> <i class="fas fa-map"></i> University of Ruhuna, Wellamadama, Matara.</a>
      </div>

      <div class="box">
         <h3>follow us</h3>
         <a href="#"> <i class="fab fa-facebook-f"></i> facebook </a>
         <a href="#"> <i class="fab fa-whatsapp"></i> WhatsApp </a>
         <a href="#"> <i class="fab fa-twitter"></i> twitter </a>
         <a href="#"> <i class="fab fa-instagram"></i> instagram </a>
      </div>

   </div>

   <div class="credit"> created by <span> UniLinkUp Creaters </span> | all rights reserved! </div>

</section>

<!-- footer section ends -->









<!-- swiper js link  -->
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>