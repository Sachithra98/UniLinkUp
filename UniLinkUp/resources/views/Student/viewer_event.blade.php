<!-- sachithra-start -->
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Events</title>

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


        .poll-container {
            max-width: 800px;
            margin: auto;
            padding: 20px;
            border: 1px solid black;
            border-radius: 8px;
            margin-bottom: 20px;
            background: var(--white);
        }

        /* .btn {
            display: inline-block;
            padding: 10px 20px;
            font-size: 16px;
            cursor: pointer;
            text-align: center;
            text-decoration: none;
            outline: none;
            color: #fff;
            background-color: #007bff;
            border: none;
            border-radius: 4px;
        } */

        /* .btn:hover {
            background-color: #0056b3;
        } */
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

        <h2 style="text-decoration: underline;">Published Events</h2>

    @foreach ($publishEvent as $post)
        <div class="con">
            <h2 style="text-decoration: underline;">Event Request for Publish</h2>
            <div class="poll-container">
            <span>Created on: {{ $post->created_at->format('Y-m-d') }}</span>
                <h5>Post Id:{{ $post->Post_Id }}</h5>
                <h3 style=" font-weight: bold;">{{ $post->Title }}</h3>
                <p>Post Description: {{ $post->Description }}</p>
                <h4>Post Media: {{ $post->media_path }}</h4>
                <h4>Approval Letter: {{ $post->Approval_Letter }}</h4>

                <div class="card-footer text-body-secondary">
                <a href="#" class="btn btn-primary">Like</a>
                <a href="#" class="btn btn-primary">Dislike</a>
                <a href="#" class="btn btn-primary">Share</a>
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
