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
   <link rel="stylesheet" href="{{ asset('css/sty.css') }}">
  


</head>
<body>
  <!-- header section starts  -->

<section class="header">

<a href="home.php" class="logo">UniLinkUp</a>

<nav class="navbar">
   <a href="<?=url('index')?>"><i class="fa fa-home" style="font-size:24px"></i></a>
   <a href="search.php">
      <form class="search" action="/action_page.php" style="margin:auto;max-width:300px">
         <input type="text" placeholder="Search.." name="search2">
         <button type="submit"><i class="fa fa-search"></i></button>
      </form>
   </a>
   <a href="<?=url('editor_notification')?>"><i class="fa fa-bell" style="font-size:24px"></i></a>
   <a href="<?=url('')?>">Log Out</a>
   

     
   
   <!-- <?php
if (isset($_SESSION['User_Fname'])){
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
   <li class="nav-item">s
   <a class="nav-link" href="sign_up.php">Sign Up</a>
   </li>

';
}

?> -->
</nav>

<div class="logo">
                <a href="<?=url('')?>"><img src="{{asset('storage/images/site images/uor.png')}}" style="padding:0px" height="40px" width="30px" alt="Logo"></a>
   </div>


<div id="menu-btn" class="fas fa-bars"></div>

</section>

<!-- header section ends -->

<!-- swiper js link  -->
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="{{ asset('js/script.js') }}"></script>

</body>
</html>