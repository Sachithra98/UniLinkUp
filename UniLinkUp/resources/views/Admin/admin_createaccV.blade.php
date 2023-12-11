<!DOCTYPE html>
<!--sachithra-start-->
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Create Accounts For Students</title>

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
            padding-bottom: 40px;
        }

        .main-content .back .btn{
            margin-left: 180px;

        }


        .main-content .container h1{
            text-align: center;
            text-decoration: underline;
            margin-bottom: 40px;
        }
        /* Style the labels */
        .main-content .container label {
            font-weight: bold;
            display: inline-block;
            margin-bottom: 5px;
            width: 160px; /* Adjust the width as needed */
            margin-right: 10px; /* Add space between label and input */
        }

        /* Style text input fields */
        .main-content .container input[type="text"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        .main-content .container textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;   
        }

        /* Style file input fields */
        .main-content .container input[type="file"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        .main-content .container  .form-group select {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }


        .main-content .container  .form-group {
            display: flex;
            flex-direction: row;
            align-items: center;
            margin-bottom: 15px;
        }

        /* Style the form container (optional) */
        .main-content .container form {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            padding-top:40px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: #f9f9f9;
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
        <a href="{{route('admin.dashboard')}}" class="btn" style="margin-bottom: 20px;">Back</a>
    </div>

    <div class="container">
        <h1>Create Accounts For Students</h1>
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success')}}
            </div>
        @endif

            <form action="{{ url('/studentInput') }}" method="post">
                @csrf
                <div class="form-group">
                    <label for="Student_Id">Student ID:</label>
                    <input type="text" id="Student_Id" name="Student_Id" required>
                </div>

                

                <div class="form-group">
                    <label for="Batch_Id">Batch ID:</label>
                    <input type="text" id="Batch_Id" name="Batch_Id" required>
                </div>

                <div class="form-group">
                    <label for="S_Email">Student Email:</label>
                    <input type="text" id="S_Email" name="S_Email" required>
                </div>

                <div class="form-group">
                    <label for="S_Password">Student Password:</label>
                    <input type="text" id="S_Password" name="S_Password" required>
                </div>

                <div class="form-group">
                    <label for="S_Name">Student Name:</label>
                    <input type="text" id="S_Name" name="S_Name" required>
                </div>

                <div class="form-group">
                    <label for="Admin_Id">Admin ID:</label>
                    <input type="text" id="Admin_Id" name="Admin_Id" required>
                </div>


                <div class="form-group faculty-options">
                    <label for="Faculty_Id">Faculty:</label>
                    <select name="Faculty_Id" id="Faculty_Id"  required>
                        <option value="">Select Faculty:</option>
                        @foreach($faculties as $row1)
                            <option value="{{ $row1->Faculty_Id }}" {{ old('Faculty_Id') == $row1->Faculty_Id ? 'selected' : '' }}>
                                {{ $row1->Faculty_Name }}
                            </option>
                        @endforeach
                    </select>
                    @error('Faculty_Id')
                        <div class="alert alert-danger">{{$message}}</div>
                    @enderror
                </div>


                <!--sachi-end -->


                <div class="form-group">
                    <label for="Dep_Id">Department:</label>
                    <select name="Dep_Id" id="Dep_Id" required >
                        <option value="">Select Department :</option>
                        @foreach($departments as $row3)
                            <option value="{{ $row3->Dep_Id }}" {{ old('Dep_Id') == $row3->Dep_Id ? 'selected' : '' }}>
                                {{ $row3->Dep_Name }}
                            </option>
                        @endforeach
                    </select>
                    @error('Dep_Id')
                        <div class="alert alert-danger">{{$message}}</div>
                    @enderror
                </div> 

               
           
                <div class="new_accountsV" style="text-align: center; display: flex; justify-content: center; align-items: center; padding-top: 5rem; padding-bottom: 5rem;">
                            <button class="btn" style="margin-left: 1rem;" type="reset">Reset</button>
                            <button class="btn" style="margin-left: 1rem;" type="submit">Save</button> 
                </div>

     

            </form>
            <!--sachithra-end -->
 
            <!-- jayani-start-->
            <form action="{{route('upload') }}" method="post" enctype="multipart/form-data">
            @csrf
            <h4>Create Bulk Accounts For Students</h4>
           <!--  @if (session('success'))
            <div class="alert alert-success">
                {{ session('success')}}
            </div>
        @endif -->
            <div class="form-group">
                <label for="file">Choose CSV File:</label>
                <input type="file" name="file" id="file" class="form-control" accept=".csv">
            </div>
            <button type="submit" class="btn btn-primary">Upload</button>
    </form>
    <!--jayani-end-->

    </div>

   
    
</div>

    <!-- footer section starts -->
    @include('footer')
	<!-- footer section ends -->

</body>
<!--Sachithra-end-->
</html>