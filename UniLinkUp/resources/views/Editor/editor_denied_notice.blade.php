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
           
        }


        .notice-container {
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

   <!-- taskbar section starts -->
   @include('Editor/editor_task')
    <!-- taskbar section ends -->




<div class="main">

    <div class="back" >
        <a href="<?=url('editor')?>" class="btn"  style="margin-bottom: 20px; margin-right: 1200px;">Back</a>
    </div>

    <h1 style="text-decoration: underline">Rejected Notices</h1>
    <br><br>

            @foreach ($denied_notices as $denied_notice)
            <div class="con">
            <div>
                <p>Notice ID: {{ $denied_notice->notice_id }}</p>
                <p style="color:blue">Reason for denied: {{ $denied_notice->reason }}</p>
                <p style="color:blue">Corrections Should be Done: {{ $denied_notice->corrections }}</p>
                
                <!-- Display associated poll details -->
                <div class="notice-container">
                    <h3>Associated Notice:</h3>
                    <p>Notice Title: {{ $denied_notice->notice->Title }}</p>
                    <p>Notice Description: {{ $denied_notice->notice->Description }}</p>
                    <img src="/uploads/{{ $denied_notice->notice->media_path }}" width='200' height='200' class="image"/>
                    <img src="/uploads/{{ $denied_notice->notice->Approval_Letter }}" width='200' height='200' class="image"/>
                </div>
                
                <!-- Other fields if needed -->
            </div>
            <div class="update"  style="text-align: center; display: flex; justify-content: center; align-items: center; padding-top: 5rem; padding-bottom: 5rem;">
                            <button class="btn denied-btn"  style="margin-left: 1rem; background-color: red;">Delete</button>
                            <button class="btn" style="margin-left: 1rem; background-color: #404ca0;" type="submit">Update Event</button> 
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
