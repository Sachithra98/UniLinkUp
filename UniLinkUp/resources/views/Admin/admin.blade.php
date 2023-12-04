<!-- sachithra-start -->
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Admin Home</title>

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
   @include('taskbar')
	<!-- taskbar section ends -->

    <div class="container">
        <div class="greeting-box">
            <h1><div class="greeting" id="greeting"></div></h1>
            <h3>Welcome back Admin!</h3>
            <h4>This is an Admin Page.</h4>
            <h4> Every new day is a chance to change your life. Have a nice day...</h4>
            <div class="clock" id="clock"></div>
        </div>

        <div class="image-container">
            <img class="image" src="{{asset('storage/images/site images/wel.jpg')}}" alt="Welcome Image">
        </div>
    </div>

   



    <section class="services">
        <h1 class="heading-title">Reports</h1>

        <div class="box-container">
        
        <div class="box">
        <div class="cards">
            <div class="card">
                <div class="card icon">
                    <i class="fas fa-users" style="font-size:36px"></i>
                </div>
                <div class="card icon">
                    <h2>1200<h2>
                    <h3>Total Users</h3>
                </div>
            </div>
        </div>
        </div>

        <div class="box">
        <div class="cards">
            <div class="card">
                <div class="card icon">
                    <i class="fa fa-thumbs-up" style="font-size:36px"></i>
                </div>
                <div class="card icon">
                    <h2>621<h2>
                    <h3>Total Likes</h3>
                </div>
            </div>
        </div>
        </div>


        <div class="box">
        <div class="cards">
            <div class="card">
                <div class="card icon">
                    <i class="fa fa-thumbs-down" style="font-size:36px"></i>
                </div>
                <div class="card icon">
                    <h2>4<h2>
                    <h3>Total Dislikes</h3>
                </div>
            </div>
        </div>
        </div>


        <div class="box">
        <div class="cards">
            <div class="card">
                <div class="card icon">
                    <i class="fa fa-address-card" style="font-size:36px"></i>
                </div>
                <div class="card icon">
                    <h2>50<h2>
                    <h3>Total Notice Posts</h3>
                </div>
            </div>
        </div>
        </div>


        <div class="box">
        <div class="cards">
            <div class="card">
                <div class="card icon">
                    <i class="fa fa-calendar" style="font-size:36px"></i>
                </div>
                <div class="card icon">
                    <h2>35<h2>
                    <h3>Total Event Posts</h3>
                </div>
            </div>
        </div>
        </div>


        <div class="box">
        <div class="cards">
            <div class="card">
                <div class="card icon">
                    <i class="fas fa-poll-h" style="font-size:36px"></i>
                </div>
                <div class="card icon">
                    <h2>20<h2>
                    <h3>Total Polls</h3>
                </div>
            </div>
        </div>
        </div>


        <div class="box">
        <div class="cards">
            <div class="card">
                <div class="card icon">
                    <i class="fa fa-camera" style="font-size:36px"></i>
                </div>
                <div class="card icon">
                    <h2>7<h2>
                    <h3>Total Albums</h3>
                </div>
            </div>
        </div>
        </div>


        <div class="box">
        <div class="cards">
            <div class="card">
                <div class="card icon">
                    <i class="fas fa-user-cog" style="font-size:36px"></i>
                </div>
                <div class="card icon">
                    <h2>24<h2>
                    <h3>Total Roles</h3>
                </div>
            </div>
        </div>
        </div>
        

        <div class="box">
        <div class="cards">
            <div class="card">
                <div class="card icon">
                    <i class="fa fa-graduation-cap" style="font-size:36px"></i>
                </div>
                <div class="card icon">
                    <h2>9<h2>
                    <h3>Total Faculties</h3>
                </div>
            </div>
        </div>
        </div>


        <div class="box">
        <div class="cards">
            <div class="card">
                <div class="card icon">
                <i class="	fas fa-id-card-alt" style="font-size:36px"></i>
                </div>
                <div class="card icon">
                    <h2>13<h2>
                    <h3>Total Societies</h3>
                </div>
            </div>
        </div>
        </div>

        </div>

    </section>



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