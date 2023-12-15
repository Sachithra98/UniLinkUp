<!-- sachithra-start -->
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Notices</title>

   <!-- swiper css link  -->
   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="{{ asset('css/sty.css') }}">
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            margin: 20px;
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

        .main .con{
            border: 1px solid black;
            border-radius: 8px;
            
            margin-bottom: 20px;
            margin-top: 20px;
            background: var(--light-white);
        }


        /* .notice-container {
            max-width: 800px;
            margin: auto;
            padding: 20px;
            border: 1px solid black;
            border-radius: 8px;
            margin-bottom: 20px;
            margin-top: 20px;
            background: var(--white);
        } */

    .notice-container {
        max-width: 800px;
        margin: auto;
        padding: 20px;
        border: 1px solid #ddd; /* Border color */
        border-radius: 8px;
        margin-bottom: 20px;
        margin-top: 20px;
        background: #fff; /* Background color */
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Box shadow for a subtle lift */
    }

    .notice-container .Nheader {
        background: #fff; /* Background color */
        border: 1px solid #ddd; /* Border color */
        text-align: left;

    }

    .notice-container span {
        display: block;
        color: #666; /* Date text color */
        font-size: 14px;
        margin-bottom: 10px;
    }

    .notice-container h5 {
        color: #333; /* Notice Id text color */
        margin-bottom: 10px;
    }

    .notice-container h3 {
        color: #000; /* Title text color */
        font-weight: bold;
        font-size: 24px;
        margin-bottom: 10px;
    }

    .notice-container p {
        color: #333; /* Description text color */
        margin-bottom: 10px;
        
    }

    .notice-container img {
        max-width: 100%;
        height: auto;
        margin-bottom: 10px;
        border-radius: 4px; /* Optional: Add border radius to the image */
    }

    .buttons {
        display: flex;
        justify-content: space-around;
        margin-top: 10px;
        background: #CFCFCF;
    }

    .btn {
        background-color: #3490dc; /* Button background color */
        color: #fff; /* Button text color */
        padding: 8px 16px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }

    

    .btn:hover {
        background-color: #2779bd; /* Button background color on hover */
    }

    /* Optional: Style font awesome icons */
    .fa {
        margin-right: 5px;
    }



        
    </style>
</head>

<body>


    <!-- header section starts -->
    @include('header')
	<!-- header section ends -->

    


    <div class="back" >
        <a href="<?=url('viewer')?>" class="btn"  style="margin-bottom: 20px; margin-right: 1200px;">Back</a>
    </div>

    <div class="main">

    <h2 style="text-decoration: underline;">Published Notices</h2>
    
    @foreach ($publishNotices as $notice)
      
    
      
            <div class="notice-container">
                <div class="Nheader">
              <span>Created on: {{ $notice->created_at->format('Y-m-d') }}</span>
              <!-- <h5>Notice Id:{{$notice->Publish_notice_id}}</h5> -->
                </div>
              <h2 style=" font-weight: bold;">{{ $notice->Title }}</h2>
              <p>{{ $notice->Description }}</p>
              <img src="/uploads/{{ $notice->media_path }}" width='400' height='400' class="image"/>
              <div class="buttons">
                <button class="btn">Like <i class="fa fa-thumbs-up"></i></button>
                <button class="btn">Dislike <i class="fa fa-thumbs-down"></i></button>
                <button class="btn">Share <i class="fa fa-share-alt"></i></button>
                <a href="{{ asset('/uploads/' . $notice->media_path) }}" class="btn" download>Download <i class="fa fa-download"></i></a>

                </div>
            </div>
      @endforeach

    
</div>

      <!-- footer section starts -->
      @include('footer')
        <!-- footer section ends -->
        @section('scripts')
        <script src="{{ asset('js/your-js-file.js') }}"></script>
        @endsection
</body>

</html>
