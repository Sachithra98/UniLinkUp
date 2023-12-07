<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">


   <!-- swiper css link  -->
   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="{{ asset('css/sty.css') }}">
    <title>FAQ's</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <!-- Add your custom CSS file if needed -->
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">

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

            <h1 align='center'>FAQs</h1>

    <section>
        <br><br>
            <div class="accordion" id="faqAccordion">
                <div class="card">
                    <div class="card-header" id="faqHeading1">
                        <h4 class="mb-0">
                            <div class="" data-toggle="collapse" data-target="#faqCollapse1" aria-expanded="true" aria-controls="faqCollapse1">
                                I have an item that has been approved, how do I post it on the website?
                            </div>
                        </h4>
                    </div><br>

                    <div id="faqCollapse1" class="collapse show" aria-labelledby="faqHeading1" data-parent="#faqAccordion">
                        <div class="card-body">
                            We have appointed editors divided into clubs or societies or otherwise, departments or faculties. Every section mentioned above is aware of it and if it is a society, the editor of the respective society or the editor of the respective faculty if it is a faculty, meet them and give them the relevant information along with the approval letter. When provided, you can publish a post on the website through them.

                        </div>
                        <br>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="faqHeading2">
                        <h4 class="mb-0">
                            <div class="" data-toggle="collapse" data-target="#faqCollapse2" aria-expanded="true" aria-controls="faqCollapse2">
                                Is there a specific format or template for creating event or notice posts on the platform?
                            </button>
                        </h4>
                    </div>

                    <div id="faqCollapse2" class="collapse show" aria-labelledby="faqHeading2" data-parent="#faqAccordion">
                        <div class="card-body">
                            Yes, our platform encourages a standardized format for creating event or notice posts to ensure clarity and consistency. When submitting a post as an editor,<br> please include the following information:<br>

                            Title: Provide a concise and descriptive title for your event or notice.<br>
                            Date and Time: Clearly specify the date and time of the event or the duration of the notice.<br>
                            Location: Include the venue or relevant location details for events.<br>
                            Description: Write a detailed yet concise description of the event or notice, covering key information and any necessary context.<br>
                            Attachments: If applicable, attach any supporting documents, images, or files related to the event or notice.<br>
                            By following this format, you not only expedite the approval process but also enhance the overall user experience for viewers on our platform.<br><br> It helps ensure that the information is presented in a clear and organized manner.

                        </div>
                    </div>
                </div>
            </div>
        <br><br>
    </section>
</div>

<!-- footer section starts -->
@include('footer')
  <!-- footer section ends -->


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<!-- Add your custom JavaScript file if needed -->
<script src="{{ asset('js/custom.js') }}"></script>

</body>
</html>
