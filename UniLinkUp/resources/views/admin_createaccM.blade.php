<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Create Accounts For Moderators</title>

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

        /* Style radio buttons and labels */
        .main-content .container input[type="radio"] {
            margin-right: 5px;
        }

        .main-content .container .radio-group {
            display: flex;
            align-items: center;
            gap: 10px;
            margin-bottom: 15px;
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
        <h1>Create Accounts For Moderators</h1>

            <form action="<?=url('')?>" method="post">
                <div class="form-group">
                    <label for="Moderator_Id">Moderator ID:</label>
                    <input type="text" id="Moderator_Id" name="Moderator_Id" required>
                </div>

                <div class="form-group">
                    <label for="Dep_Id">Department ID:</label>
                    <input type="text" id="Dep_Id" name="Dep_Id" required>
                </div>

                <div class="form-group">
                    <label for="Position">Position:</label>
                    <input type="text" id="Position" name="Position" required>
                </div>

                <div class="form-group">
                    <label for="M_Email">Moderator Email:</label>
                    <input type="text" id="M_Email" name="M_Email" required>
                </div>

                <div class="form-group">
                    <label for="M_Password">Moderator Password:</label>
                    <input type="text" id="M_Password" name="M_Password" required>
                </div>

                <div class="form-group">
                    <label for="M_Name">Moderator Name:</label>
                    <input type="text" id="M_Name" name="M_Name" required>
                </div>

                <div class="form-group">
                    <label for="Society_Id">Society ID:</label>
                    <input type="text" id="Society_Id" name="Society_Id" required>
                </div>

                <div class="form-group">
                    <label for="Admin_Id">Admin ID:</label>
                    <input type="text" id="Admin_Id" name="Admin_Id" required>
                </div>

                <div class="form-group">
                    <label for="Editor_Id">Editor ID:</label>
                    <input type="text" id="Editor_Id" name="Editor_Id" required>
                </div> 

                

               
           
                <div class="new_accountsM" style="text-align: center; display: flex; justify-content: center; align-items: center; padding-top: 5rem; padding-bottom: 5rem;">
                            <button class="btn" style="margin-left: 1rem;" type="reset">Reset</button>
                            <button class="btn" style="margin-left: 1rem;" type="submit">Save</button> 
                </div>

     

            </form>
    </div>
    
</div>

    <!-- footer section starts -->
    @include('footer')
	<!-- footer section ends -->

</body>
</html>