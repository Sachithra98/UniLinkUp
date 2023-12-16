<!-- sachithra-start -->
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Ediitor Home</title>

   <!-- swiper css link  -->
   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/sty.css">

   <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
   <!-- custom css file link  -->
   <link rel="stylesheet" href="{{ asset('css/sty.css') }}">
   <!-- <link rel ="stylesheet" href="Plugin/bootstrap.min.css">
   <link rel="stylesheet" href="css/index.css"> -->



    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Roboto, sans-serif;
            background-color: aliceblue;
            margin-top: 20px;
        }

        .container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 30px;
            background-color: #f0f0f0;
            border-radius: 5px;
            margin-top: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .greeting-box {
            flex: 1;
            padding: 10px;
        }

        .greeting {
            margin-bottom: 10px;
        }

        .clock {
            font-size: 24px;
        }

        .image-container {
            flex: 1;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .image {
            width: 200px;
            height: 200px;
            border-radius: 50%; /* Make the image circular */
        }


    </style>

</head>
<body>

    <!-- header section starts -->
    @include('header')
	<!-- header section ends -->

<div class="con">

    <!-- taskbar section starts -->
    @include('Editor/editor_task')
    <!-- taskbar section ends -->

    <div class="container">
        <div class="greeting-box">
            <h1><div class="greeting" id="greeting"></div></h1>
            <h3>Welcome back !</h3>
            <h5>This is an Editor Page.</h5>
            <h4> You are the gatekeeper of excellence. Use your editing skills to filter information, polish content, and uphold our standards of quality. Your dedication safeguards the integrity of our platform.</h4>
            <div class="clock" id="clock"></div>
        </div>

        <div class="image-container">
            <img class="image" src="{{asset('storage/images/site images/wel.jpg')}}" alt="Welcome Image">
        </div>
    </div>

    <br><br>





    <script>
    function clock() {
            var date = new Date();
            var hours = date.getHours();
            var minutes = date.getMinutes();
            var seconds = date.getSeconds();
            var midday;

            hours = updateTime(hours);
            minutes = updateTime(minutes);
            seconds = updateTime(seconds);

            // If-else condition
            midday = (hours >= 12) ? "PM" : "AM";
            var name = "{{ Auth::guard('editor')->user()->E_Name }}";



            // Greeting message with the user's name
            var greeting;
            if (hours < 12) {
                greeting = "Good Morning " + name + "!";
            }
            if (hours >= 12 && hours <= 18) {
                greeting = "Good Afternoon " + name + "!";
            }
            if (hours >= 18 && hours <= 24) {
                greeting = "Good Evening " + name + "!";
            }

            document.getElementById("greeting").innerHTML = greeting;
            document.getElementById("clock").innerHTML = hours + ":" + minutes + ":" + seconds + midday;

            var time = setTimeout(function () {
                clock();
            }, 1000);
        }

        function updateTime(k) {
            if (k < 10) {
                return "0" + k;
            } else {
                return k;
            }
        }




        // Call the clock function after defining it
        clock();
    </script>





   <!-- footer section starts -->
	@include('footer')
	<!-- footer section ends -->

</div>
</body>
</html>
<!-- sachithra-end -->
