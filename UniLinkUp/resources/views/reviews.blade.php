<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Create Review</title>

   <!-- swiper css link  -->
   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="{{ asset('css/sty.css') }}">


    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

        <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        .container {
           
            background-color: #eee;
            margin-top: 30px; 
            padding-bottom: 40px;
        }

        .main-content .back .btn{
            margin-left: 180px;

        }


        .main-content .container h1{
            text-align: center;
            text-decoration: underline;
            margin-bottom: 40px;
        }
        

      
        .main-content .container row  {
            width: 100%;
            padding: 10px;
           
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

    <div class="main-content">

        

        <div class="back" >
                <a href="<?=url('index')?>" class="btn" style="margin-bottom: 20px;">Back</a>
            </div>

            <div class="container">

                 <h1 align='center'>FAQs</h1>
       


                <div class="row">
                    @foreach($reviews as $review)
                    <div class="col-md-4">
                        <div class="border border-primary p-3 mb-3">
                            <!-- User Image Icon -->
                            <img src="{{asset('storage/images/site images/pic-5.png')}}" alt="User Icon" class="img-fluid mb-2">

                            <p class="text-primary">{{ $review->name }}</p>
                            <p>{{ $review->comment }}</p>
                        </div>
                    </div>
                    @endforeach
                </div>
                <div class="new_review" style="text-align: center; display: flex; justify-content: center; align-items: center; padding-top:5rem; padding-bottom:5rem;">
    <a href="{{ route('createReview') }}" class="btn" style="align:center" >Add New Review</a>
    </div>

        </div>
    </div>


</body>
             <!-- footer section starts -->
            @include('footer')
            <!-- footer section ends -->
</html>