<!-- sachithra-start -->
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Event Requests</title>

   <!-- swiper css link  -->
   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="{{ asset('css/sty.css') }}">
   <meta name="csrf-token" content="{{ csrf_token() }}">

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
            
            margin-bottom: 30px;
            margin-top: 30px;
            background: var(--light-white);
        }


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

    

    

        
    </style>
</head>

<body>


    <!-- header section starts -->
    @include('header')
	<!-- header section ends -->

    <div class="main">

        <div class="back" >
            <a href="<?=url('moderator')?>" class="btn"  style="margin-bottom: 20px; margin-right: 1200px;">Back</a>
        </div>

        <h2 style="text-decoration: underline;">Event Request for Publish</h2>
            <br>
       

                @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success')}}
                    </div>
                @endif

        <!-- Loop through each poll -->
        @foreach ($posts as $post)
        <div class="con">
            
            <div class="notice-container">
            <div class="Nheader">
                <span>Created on: {{ $post->created_at->format('Y-m-d') }}</span>
                <h5>Post Id:{{ $post->Post_Id }}</h5>
            </div>
                <h3 style=" font-weight: bold;">{{ $post->Title }}</h3>
                <p>Post Description: {{ $post->Description }}</p>
                
                <img src="/uploads/{{ $post->media_path }}" width='400' height='400' class="image"/>
                <img src="/uploads/{{ $post->Approval_Letter }}" width='400' height='400' class="image"/>

                


               


                <div class="moderator" style="text-align: center; display: flex; justify-content: center; align-items: center; padding-top: 5rem; padding-bottom: 5rem;">
                <a href="{{ url('moderator_denied_event') }}" class="btn" style="margin-left: 1rem; background-color: red;">Denied Request</a>
                <form action="{{ route('addDataToPublishEvent', ['postId' => $post->Post_Id]) }}" method="POST">
                @csrf
                    <button class="btn accept-btn"  style="margin-left: 1rem; background-color: #404ca0;" type="submit">Accept Request and Publish Event</button> 
                </div>
            </form>

            
        </div>
        @endforeach

    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
        const deniedButtons = document.querySelectorAll('.denied-btn');

        deniedButtons.forEach(button => {
            button.addEventListener('click', function () {
                const postId = this.dataset.postId;

                // Send an AJAX request to the server to update the denieds table
                // You need to adjust the URL and other parameters based on your actual routes and requirements
                fetch(`/update-denied_event/${postId}`, {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': '{{ csrf_token() }}', // Add CSRF token if needed
                    },
                    body: JSON.stringify({ post_id: postId }),
                })
                .then(response => response.json())
                .then(data => {
                    // Handle the response from the server if needed
                    console.log(data);
                })
                .catch(error => {
                    console.error('Error:', error);
                });
            });
        });
    });
    </script>

        
    <!-- footer section starts -->
    @include('footer')
  <!-- footer section ends -->

  @section('scripts')
  <script src="{{ asset('js/your-js-file.js') }}"></script>
  @endsection
</body>

</html>