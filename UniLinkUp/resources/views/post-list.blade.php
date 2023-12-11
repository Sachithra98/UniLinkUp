<!--piyumi--> 
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>post</title>

   <!-- swiper css link  -->
   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="{{ asset('css/sty.css') }}">

   <style>
    .container h1 {
    margin: 0;
    text-decoration: underline;
    font-size: 4rem;
    }
    </style>

</head>
<body>

<div class="container">

    <h1 align="center">Post List</h1>
    

    @foreach($posts as $post)
        <div class="card text-center" >
            <div class="card-header">
            
            </div>
                <div class="card-body">
                    <h4 class="card-title">{{ $post->Title }}</h4>
                    <p class="card-text">{{ $post->Description }}</p>
                    <strong>Post Media:</strong> {{ $post->media_path }}<br>
                   
                </div>
                <div class="card-footer text-body-secondary">
                <a href="#" class="btn btn-primary">Like</a>
                <a href="#" class="btn btn-primary">Dislike</a>
                <a href="#" class="btn btn-primary">Share</a>
                </div>
        </div>
        @endforeach

</div>

    
</body>
</html>