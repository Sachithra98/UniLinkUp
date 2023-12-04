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
    <title>FAQ Page</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <!-- Add your custom CSS file if needed -->
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
</head>
<body>

<section class="header">

<a href="<?=url('index')?>" class="logo">UniLinkUp</a>

<nav class="navbar">
   <a href="<?=url('index')?>">Home</a>
   <a href="<?=url('about_us')?>">About Us</a>
   <a href="<?=url('')?>">FAQs?</a>
</nav>

<div class="logo">
             <a href="<?=url('')?>"><img src="{{asset('storage/images/site images/uor.png')}}" style="padding:0px" height="40px" width="30px" alt="Logo"></a>
</div>
   


<div id="menu-btn" class="fas fa-bars"></div>

</section>


<div class="container mt-5">

<div class="back" >
        <a href="<?=url('index')?>" class="btn" style="margin-bottom: 20px;">Back</a>
    </div>

    <h2>FAQs</h2>

    <div class="accordion" id="faqAccordion">
        <div class="card">
            <div class="card-header" id="faqHeading1">
                <h5 class="mb-0">
                    <button class="btn btn-link" data-toggle="collapse" data-target="#faqCollapse1" aria-expanded="true" aria-controls="faqCollapse1">
                        I have an item that has been approved, how do I post it on the website?
                    </button>
                </h5>
            </div>

            <div id="faqCollapse1" class="collapse show" aria-labelledby="faqHeading1" data-parent="#faqAccordion">
                <div class="card-body">
                    We have appointed editors divided into clubs or societies or otherwise, departments or faculties. Every section mentioned above is aware of it and if it is a society, the editor of the respective society or the editor of the respective faculty if it is a faculty, meet them and give them the relevant information along with the approval letter. When provided, you can publish a post on the website through them.

                </div>
            </div>
        </div>
        <!-- FAQ items go here -->
    </div>
</div>


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<!-- Add your custom JavaScript file if needed -->
<script src="{{ asset('js/custom.js') }}"></script>

</body>
</html>
