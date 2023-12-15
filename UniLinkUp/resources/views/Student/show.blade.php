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
    
  @extends('layouts.app')

</head>
<body>


    <!-- header section starts -->
    @include('header')
	<!-- header section ends -->

    @if(Session::has('success'))
    <div class="alert alert-success" role="alert">
    {{ Session::get('success') }}
    </div>
    @endif
    
    

    <div class="back" >
        <a href="<?=url('viewer')?>" class="btn"  style="margin-bottom: 20px; margin-right: 1200px;">Back</a>
    </div>

    <div class="main">

    <h2 style="text-decoration: underline;">Published Notices</h2>
                    
          <div class="notice-container">
          <span>Created on: {{ $selected_notice->created_at->format('Y-m-d') }}</span>
              <h5>Notice Id:{{$selected_notice->Publish_notice_id}}</h5>
              <h3 style=" font-weight: bold;">{{ $selected_notice->Title }}</h3>
              <p>{{ $selected_notice->Description }}
              <h3>{{ $selected_notice->media_path }}</h3>

          <div class="card-footer">
            <!-- Like Button with Bootstrap Icon -->
            @if($selected_notice->isLiked)

            <button class="btn btn-primary" disabled>
                <i class="fa fa-thumbs-up"></i> Liked {{ $selected_notice->likes_count }}
            </button>
            <form class="btn"  action="{{ route('remove.like', ['Publish_notice_id' => $notice->Publish_notice_id]) }}" method="post">
                @csrf
                <button class="btn btn-danger"  type="submit"><i class="fa fa-thumbs-down" ></i> Unlike </button>
            </form>
            <!-- <a href="" type="button" class="btn btn-danger ">Unlike</a> -->
            @else

            <form class="btn"  action="{{ route('add.like', ['Publish_notice_id' => $notice->Publish_notice_id]) }}" method="post">
                @csrf
                <button class="btn" style="border-color: black;" type="submit"><i class="fa fa-thumbs-up"></i> Add Like {{$selected_notice->likes_count }} </button>
            </form>
            @endif
            <!-- Share Button with Bootstrap Icon -->

            <form class="btn"  action="{{ route('post.share', ['Publish_notice_id' => $notice->Publish_notice_id]) }}" method="post">
                @csrf
                <button class="btn btn-info" type="submit"> <i class="fa fa-share"></i> Share </button>
            </form>

           
            </div>
        </div>
     </div>

      <!-- footer section starts -->
      @include('footer')
        <!-- footer section ends -->
        @section('scripts')
        <script src="{{ asset('js/your-js-file.js') }}"></script>
        @endsection
</body>

</html>
