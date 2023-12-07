<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>About Us</title>

   <!-- swiper css link  -->
   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="{{ asset('css/sty.css') }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
       

 *{
    font-family: 'Poppins', sans-serif;
    margin:0; padding:0;
    box-sizing: border-box;
    outline: none; border:none;
    text-decoration: none;
    text-transform: capitalize;
 }
 


 .main{
   flex:1 1 41rem;
   background: var(--light-bg);
   font-size: 1.75rem;
   padding:1rem 0;
   padding-left: 7rem;
   padding-right: 3rem;
   line-height: 2;
   color:var(--black);
 }


 .main h1 {
  margin: 0;
  text-decoration: underline;
  font-size: 5rem;
 }
    </style>
    <title>Centered Paragraph</title>
</head>
<body>

<section class="header">

   <a href="<?=url('index')?>" class="logo">UniLinkUp</a>

   <nav class="navbar">
      <a href="<?=url('index')?>">Home</a>
      <a href="<?=url('about')?>">About Us</a>
      <a href="<?=url('faq')?>">FAQs?</a>
   </nav>

   <div class="logo">
                <a href="<?=url('')?>"><img src="{{asset('storage/images/site images/uor.png')}}" style="padding:0px" height="40px" width="30px" alt="Logo"></a>
   </div>
      


   <div id="menu-btn" class="fas fa-bars"></div>
   
</section>


<div class="main">

    <div class="back" >
        <a href="<?=url('index')?>" class="btn" style="margin-bottom: 20px;">Back</a>
    </div>
    

    <section>
            <br>
            <h1 align='center'>About Us</h1>
        
            <br><br><p>Welcome to our lively university post-sharing platform, where campus life pulses digitally. Going beyond academic, our platform weaves a vibrant tapestry of special events, small businesses, and important notices resonating throughout our university premises.</<p>
            <p>Our platform is the central hub for all campus events. Whether it's cultural festivals, academic conferences, charity drives, or club activities, we provide a one-stop place for students to share, explore, and connect with the various special events that make our university pulse with life. It's more than just sharing information; it's about building a sense of community and shared experiences that extend beyond the classroom, creating lasting memories well beyond graduation.</<p>
            <p>In addition to being a marketplace for innovation and a calendar for events, we are also the go-to destination for crucial notices that keep the university community informed. From administrative updates to campus-wide announcements, we serve as the conduit for communication that ensures everyone is in the loop, fostering a sense of transparency and unity among our diverse student body.</<p>
            <p>Join us in this digital journey where each post contributes to our university life canvas. Whether you're looking for entrepreneurial inspiration, staying updated on campus events, or ensuring you never miss a crucial notice, our platform is your all-in-one destination. Welcome to a space where the vibrancy of university life is captured, celebrated, and shared.</<p>           
            <br><br>

    </section>
</div>

    


     <!-- footer section starts -->
     @include('footer')
	<!-- footer section ends -->
    
</body>
</html>
