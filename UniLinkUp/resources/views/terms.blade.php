<!--dhanuja-->
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Terms & Conditions</title>

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

<a href="<?=url('index')?>" class="logo">ConnectU</a>

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
        <h1 align='center'>Terms and Conditions</h1>
        <br><br>

        <ol>
            <li>Acceptance of Terms 
                <br>By accessing or using Unilinkup, you agree to comply with and be bound by these terms and conditions. If you do not agree with any part of these terms, you may not use the Unilinkup.
            </li>
            <br>
        
            <li> User Accounts
                <ul>
                <li>Account Registration: To access certain features of the Unilinkup, you may be required to register for an account. You agree to provide accurate and current information during the registration process and to update such information to keep it accurate and current.</li>
                
                <li>Account Security: You are responsible for maintaining the confidentiality of your account credentials and for all activities that occur under your account. Notify us immediately of any unauthorized use of your account or any other breach of security.</li>
                </ul>
            </li>
            <br>

            <li>Content Ownership and Rights
                <ul>
                    <li>User Content: Users may submit content to the Unilinkup. By doing so, you grant Unilinkup a non-exclusive, worldwide, royalty-free license to use, reproduce, modify, adapt, publish, translate, distribute, and display such content.</li>
                        
                    <li>Intellectual Property: The Unilinkup and its original content, features, and functionality are owned by Unilinkup and are protected by international copyright, trademark, patent, trade secret, and other intellectual property or proprietary rights laws.</li>
                </ul>
            </li>
            <br>

            <li>Prohibited Conduct
            <br>
            You agree not to:
            <br>
                <ul>
                    <li>Use the Unilinkup for any illegal purpose or in violation of any local, state, national, or international law.</li>
                    <li>Interfere with or disrupt the Unilinkup or servers or networks connected to the Unilinkup.</li>
                    <li>Impersonate any person or entity or falsely state or otherwise misrepresent your affiliation with a person or entity.</li>
                    <li>Use any robot, spider, site search/retrieval application, or other automated device, process, or means to access, retrieve, scrape, or index the Unilinkup or any content on the Unilinkup.</li>
                </ul>
            </li>
            <br>

            <li> Termination
                <br>
                Unilinkup reserves the right to terminate or suspend your account and access to the Unilinkup at its sole discretion, without notice, for conduct that Unilinkup believes violates these terms or is harmful to other users or Unilinkup.
            </li>
            <br>
        
            <li> Disclaimer of Warranties
                <br>
                The Unilinkup is provided as is and as available without any warranties of any kind, either express or implied. Unilinkup team does not warrant that the Unilinkup  will be uninterrupted or error-free.
            </li>
            <br>

            <li>Limitation of Liability
                <br>
                To the fullest extent permitted by applicable law, Unilinkup team shall not be liable for any indirect, incidental, special, consequential, or punitive damages, or any loss of profits or revenues, whether incurred directly or indirectly, or any loss of data, use, goodwill, or other intangible losses resulting from:
            
                <ul>
                <li> Your use or inability to use the Unilinkup .
                <li> Any unauthorized access to or use of our servers and/or any personal information stored therein.
                <li> Any interruption or cessation of transmission to or from the Unilinkup .
                <li> Any bugs, viruses, trojan horses, or the like that may be transmitted to or through the Unilinkup .
                </ul>
            </li>
            <br>

            <li>Modifications to Terms
            <br>
                Unilinkup reserves the right to modify or replace these terms at any time. Your continued use of the Unilinkup after any such changes constitutes your acceptance of the new terms.
            </li>
            <br>

            <li> Governing Law
            <br>
            These terms shall be governed by and construed in accordance with the laws of [Your Jurisdiction], without regard to its conflict of law principles.
            </li>

            <br>
            <li> Contact Information
            <br>
            If you have any questions about this terms and conditions, the practices of this platform, or your dealings with this platform, please contact us. 
            </li>
        </ol>

          <br><br>This terms and conditions was last updated on 10/12/2023</p>
    </section>

      </div>

    <!-- footer section starts -->
  @include('footer')
  <!-- footer section ends -->
   
  
  
</body>
</html>
