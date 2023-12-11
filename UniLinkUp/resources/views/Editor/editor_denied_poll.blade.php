<!-- sachithra-start -->
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Poll System</title>

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

    </style>
</head>

<body>


    <!-- header section starts -->
    @include('header')
	<!-- header section ends -->



<div class="main">

    <div class="back" >
        <a href="<?=url('editor')?>" class="btn"  style="margin-bottom: 20px; margin-right: 1200px;">Back</a>
    </div>

            @foreach ($denieds as $denied)
            <div class="con">
            <div>
                <h2>Poll ID: {{ $denied->poll_id }}</h2>
                <p>Reason for denied: {{ $denied->reason }}</p>
                <p>Corrections Should be Done: {{ $denied->corrections }}</p>
                
                <!-- Display associated poll details -->
                <div class="poll-container">
                    <h3>Associated Poll:</h3>
                    <p>Poll Title: {{ $denied->poll->poll_title }}</p>
                    <p>Poll Description: {{ $denied->poll->poll_desc }}</p>
                    <p>Question: {{ $denied->poll->question }}</p>
                </div>
                
                <!-- Other fields if needed -->
            </div>
            <div class="update"  style="text-align: center; display: flex; justify-content: center; align-items: center; padding-top: 5rem; padding-bottom: 5rem;">
                            <button class="btn denied-btn"  style="margin-left: 1rem; background-color: red;">Delete</button>
                            <button class="btn" style="margin-left: 1rem; background-color: #404ca0;" type="submit">Update Poll</button> 
                </div>
            </div>
            @endforeach



    </div>



</div>

<!-- Add this script inside the head or at the end of the body in your HTML -->
<script>
    document.addEventListener('DOMContentLoaded', function () {
        // Attach a click event listener to all elements with the class 'denied-btn'
        var deleteButtons = document.querySelectorAll('.denied-btn');
        
        deleteButtons.forEach(function (button) {
            button.addEventListener('click', function () {
                // Find the closest parent with the class 'con' and remove it
                var container = this.closest('.con');
                container.remove();
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
