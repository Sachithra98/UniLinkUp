<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>share post</title>

   <!-- swiper css link  -->
   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="{{ asset('css/sty.css') }}">


</head>  

<style>
    e>
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



        .main-content .container .share-box {
        display: flex;
        align-items: center;
        gap: 10px;
        
        }

        .main-content .container .share-link {
        flex-grow: 1;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
        margin-right: 10px;
        }

        .main-content .container.copy-button {
        cursor: pointer;
        background-color: #4CAF50;
        color: white;
        padding: 10px;
        border: none;
        border-radius: 5px;
     }

     .main-content .container .btn-group{
        display: flex;
        justify-content: space-around;
        margin-top: 10px;
        background: #CFCFCF;

     }
</style>

<body>
        <!-- header section starts -->
        @include('header')
	<!-- header section ends -->

    

<div class="main-content">
    
    <div class="back" >
        <a href="<?=url('viewer_notice')?>" class="btn" style="margin-bottom: 20px;">Back</a>
    </div>

<div class="container">


    <div class="card text-center" >
        <div  class="card-header">
            <h3 class="card-title">Share Post</h3>
        </div><br>
            <div class="card-body" >
        
                <div class="share-link" style="background-color:white" id="post-link">http://127.0.0.1:8000/Notice/{{$id}}</div>
                <br>
                <div class="btn-group">
                    <!-- WhatsApp share -->
                    <a href="https://api.whatsapp.com/send?text=Check out this post: [URL]" class="btn btn-whatsapp" target="_blank">
                        <i class="fab fa-whatsapp"></i> WhatsApp
                    </a>

                    <!-- Facebook share -->
                    <a href="https://www.facebook.com/sharer/sharer.php?u={{ url()->current() }}" class="btn btn-facebook" target="_blank">
                        <i class="fab fa-facebook-f"></i> Facebook
                    </a>

                    <!-- Twitter share -->
                    <a href="https://twitter.com/intent/tweet?url={{ url()->current() }}&text=Check out this post: Title of the Post" class="btn btn-twitter" target="_blank">
                        <i class="fab fa-twitter"></i> Twitter
                    </a>
                    <button class="btn btn-copy" onclick="copyLink()">
                        <i class="fas fa-copy"></i> Copy Post Link
                    </button>
                </div>
            </div>
            <div class="card-footer text-muted">

            </div>
    </div>
   
</div>
<br>


<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js" integrity="sha512-+Z5FN2KAlN1D3zF2Q62B5eYIvBl3fD2Nf5z+J8VVg55bfaTOr8VoRC9cVQTsHL3QF8d3tFH82KQdu2UcHh5GCA==" crossorigin="anonymous"></script>
<script>
    function copyLink() {
        var copyText = document.getElementById("post-link");
        var input = document.createElement("input");
        input.value = copyText.textContent;
        document.body.appendChild(input);
        input.select();
        document.execCommand("copy");
        document.body.removeChild(input);
        alert("Link copied to clipboard!");
    }
</script>
@include('footer')
        <!-- footer section ends -->
        @section('scripts')
        <script src="{{ asset('js/your-js-file.js') }}"></script>
        @endsection

</body>
    </html>



