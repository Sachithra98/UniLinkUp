<!--dhilmi--> 
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Privacy & Policy</title>

   <!-- swiper css link  -->
   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="{{ asset('css/sty.css') }}">

 
  
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

</head>
<body>

 
<section class="header">

<div class="logo">
                <a href="<?=url('')?>"><img src="{{asset('storage/images/site images/connectu.png')}}" style="padding:0px" height="50px" width="200px" alt="Logo"></a>
   </div>


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
        <h1 align="center">Privacy policy</h1><br><br>
      We’ll always keep your data safe and secure. So you’re clued up, here’s why we need it and how we use it.<br><br>


    <p>This Privacy Policy describes how our platform collects, uses, shares,
    and protects information obtained from users of our university post-sharing platform.
    By using our platform, you agree to the collection and use of information as described in this policy.</p>
    <br>

   
      <h3>Information Collection and Use</h3>
      <li> Personal Information: We may collect personal information such as name, email address, and university affiliation when you register on our platform or engage in activities.</li>
      <li>Post Content: Any posts, comments, or information shared on the platform may be stored and displayed publicly, linked to your account.</li>
      <li>Usage Data: We may automatically collect information about your interaction with our platform, including IP address, browser type, pages visited, and timestamps.</li>
    
      <br>
      <h3>Use of Collected Information</h3>
      <p>We may use the collected information for the following purposes:
        <ul>
      <li>Platform Operation: To operate, maintain, and improve our platform's functionality and user experience.</li>
      <li> Communication: To send periodic emails regarding platform updates, announcements, or related information.</li>
      <li> Personalization: To personalize user experience and display content tailored to your interests and university affiliation.</li>
      <li> Research and Analytics: To analyze user trends, preferences, and interactions for research and analytical purposes.</li>
      <br>

      <h3>Information Sharing</h3>
      <p>We do not sell, trade, or rent users' personal identification information to others.
         However, we may share aggregated demographic information not linked to any personal identification information regarding visitors and users with our business partners and advertisers.</p>
         <br>

    
        <h3>Data Security</h3>
        <p>We implement appropriate data collection, storage, and processing practices and security measures to protect against unauthorized access, alteration, disclosure, or destruction of your personal information, username, password, transaction information, and data stored on our platform.</p>
        <br>

    
         <h3>Your Rights and Choices</h3>
         <li>Access and Correction: You may access, update, or correct your personal information through your account settings.</li>
         <li>Opt-out: You can opt-out of receiving certain emails or communications from us by following the instructions provided in the communication.</li>
          <br>

    
          <h3>Changes to this Privacy Policy</h3>
          <p>We reserve the right to update or revise this privacy policy at any time. We will post the revised policy on this page, and it's your responsibility to review this policy periodically for any changes.</p>
          <br>

          
          <br><br>
          <p>If you have any questions about this Privacy Policy, the practices of this platform, or your dealings with this platform, please contact us. 
          <br><br>This Privacy Policy was last updated on 15 /12/2023</p>
    </section>

      </div>

    <!-- footer section starts -->
  @include('footer')
  <!-- footer section ends -->
   
  
  
</body>
</html>
