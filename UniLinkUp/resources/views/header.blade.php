<!-- sachithra-start -->
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

<a href="home.php" class="logo">ConnectU</a>

<nav class="navbar">
   <a href="<?=url('index')?>"><i class="fa fa-home" style="font-size:24px"></i></a>
   <a href="search.php">
      <form class="search" action="/action_page.php" style="margin:auto;max-width:300px">
         <input type="text" placeholder="Search.." name="search2">
         <button type="submit"><i class="fa fa-search"></i></button>
         

      </form>
   </a>
   <a>
  <!-- Add this button to your navbar with a moon icon -->
<button id="theme-toggle-btn" onclick="toggleTheme()" style="padding: 8px 12px; background-color: #7c838a; color: #fff; border: none; border-radius: 4px; cursor: pointer; transition: background-color 0.3s ease;">
    <i class="fas fa-moon"></i> <!-- Font Awesome moon icon -->
</button>

<!-- Include this inline script after your existing JavaScript files -->
<script>
    function toggleTheme() {
        const body = document.body;
        body.classList.toggle('dark-mode');

        // Save the current theme preference in localStorage
        const isDarkMode = body.classList.contains('dark-mode');
        localStorage.setItem('darkMode', isDarkMode);
    }

    // Check if there's a theme preference saved in localStorage
    const savedTheme = localStorage.getItem('darkMode');
    if (savedTheme === 'true') {
        document.body.classList.add('dark-mode');
    }
</script>

<!-- Add these styles directly within your HTML -->
<style>
    body.dark-mode {
        background-color: #1a1a1a;
        color: #c0c0c0; /* Change the font color for dark mode */
    }
    body {
        transition: background-color 0.5s, color 0.5s;
    }
</style>


   </a>
   <a href="<?=url('')?>"><i class="fa fa-bell" style="font-size:24px"></i></a>
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
   <li class="nav-item">
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
<!-- sachithra-end -->