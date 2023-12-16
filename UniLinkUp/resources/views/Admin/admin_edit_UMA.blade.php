
<!-- sachithra-start -->

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Admin Edit</title>

   <!-- swiper css link  -->
   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="{{ asset('css/sty.css') }}">

   <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

   
   <link rel="stylesheet" href="{{ asset('css/sty.css') }}">
   <!-- <link rel ="stylesheet" href="Plugin/bootstrap.min.css">
   <link rel="stylesheet" href="css <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
   <!-- custom css file link  -->

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
       
            @if (session('success'))
            <div class="alert alert-success">
                {{ session('success')}}
            </div>
             @endif 
           
            <h1>Edit Data</h1>

            @isset($admin)
                <form action="{{ url('update_data/'.$admin->id) }}" method="post">
                    @csrf
                    <!-- Your form fields here using $admin -->
                    <label for="Admin_Name">Admin Name</label>
                    
                    <input type="text" class="form-control" id="Admin_Name" name="Admin_Name" value="{{ $admin->Admin_Name }}">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Email address</label>
                        <input type="email" class="form-control" name="email" id="exampleFormControlInput1" value="{{ $admin->email}}">
                    </div>
                   

                    <br>
                    <button type="submit" class="btn btn-primary">Update Admin</button>
                </form>
            @else
                <p>No admin data found</p>
            @endisset
    </div>
        

</div>

<br>
    <!-- ... (your scripts) ... -->

       <br>
     <!-- footer section starts -->
     @include('footer')
	<!-- footer section ends -->
</body>
</html>