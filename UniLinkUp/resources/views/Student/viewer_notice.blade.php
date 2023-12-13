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


        .notice-container {
            max-width: 800px;
            margin: auto;
            padding: 20px;
            border: 1px solid black;
            border-radius: 8px;
            margin-bottom: 20px;
            margin-top: 20px;
            background: var(--white);
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
          <span>Created on: {{ $notice->created_at->format('Y-m-d') }}</span>
              <h5>Notice Id:{{$notice->Publish_notice_id}}</h5>
              <h3 style=" font-weight: bold;">{{ $notice->Title }}</h3>
              <p>{{ $notice->Description }}
              <h3>{{ $notice->media_path }}</h3>

              <button class="btn">Like <i class="fa fa-thumbs-up"></i></button>
              <button class="btn">Dislike <i class="fa fa-thumbs-down"></i></button>
              <button class="btn">Share <i class="fa fa-share-alt"></i></button>
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
