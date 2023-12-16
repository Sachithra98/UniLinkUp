<!-- sachithra-start -->
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>User Management of Moderator</title>

   <!-- swiper css link  -->
   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="{{ asset('css/sty.css') }}">


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

        .container {
           
            background-color: #eee;
            margin-top: 30px; 
        }

        .main-content .container h1{
            text-align: center;
            text-decoration: underline;
        }

        .main-content .back .btn{
            margin-left: 180px;

        }
        

    </style>

</head>
<body>
   

    <!-- header section starts -->
    @include('header')
	<!-- header section ends -->

    <!-- taskbar section starts -->
    @include('taskbar')
	<!-- taskbar section ends -->


<div class="main-content">
    <div class="back" >
        <a href="{{route('admin_dashboard')}}" class="btn" style="margin-bottom: 20px;">Back</a>
    </div>
<div class="container">
    <h1>User Management of Moderator</h1>
    <table class="table table-boarder">
        <thead>
            <tr>
                <th> No  </th>
                <th> Name  </th>
                <th> Email  </th>
                <th> Position  </th>
                <th> Action  </th>
            </tr>
        </thead>
        <tbody>
            <!-----------connect with database------------>
            @php
                    $c = 1;
                    $con = mysqli_connect("127.0.0.1", "root", "", "unilinkup");
                    if ($con) {
                        // echo "Connection Done";
                    } else {
                        echo "Connection Failed";
                    }
  
        
                    ////select query start here////
                    $sel="SELECT * FROM moderators ";
                    $query=$con->query($sel);
            @endphp
                    @while($row = $query->fetch_assoc())
        

         
            <tr><td>{{ $c++}}</td>
                <td>{{ $row['M_Name'] }} </td>
                <td>{{ $row['email'] }} </td>
                <td>{{ $row['Position'] }} </td>
                
                <td>
                <td> <a href="edit_M/{{ $row['id'] }}"class="btn btn-primary">Edit</a></td>

                <td><a href="" class="btn btn-danger">Remove</a></td>
            </td>
            </tr>
            @endwhile
        </tbody>
    </table>

</div>
</div>

    <!-- footer section starts -->
    @include('footer')
	<!-- footer section ends -->

</body>
</html>
<!-- sachithra-end -->