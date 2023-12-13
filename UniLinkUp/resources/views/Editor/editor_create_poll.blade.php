
<!-- sachithra-start -->
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Create New Poll</title>

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
        
        .main-content .container textarea {
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

   

<div class="main-content">
    
    <div class="back" >
        <a href="<?=url('editor')?>" class="btn" style="margin-bottom: 20px;">Back</a>
    </div>

    <div class="container">
        <h1>Create New Poll</h1>

        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success')}}
            </div>
        @endif 

        <form action="{{ url('/pollInput') }}" method="post" enctype="multipart/form-data">

            @csrf
              

                <div class="form-group">
                    <label for="poll_title">Poll Title:</label>
                    <input type="text" id="poll_title" name="poll_title" value="{{ old('poll_title') }}" required>
                    @error('poll_title')
                        <div class="alert alert-danger">{{$message}}</div>
                    @enderror
                </div>



                <div class="form-group">
                    <label for="poll_desc">Description:</label>
                    <textarea class="poll_desc" id="poll_desc" name="poll_desc"  required>{{ old('poll_desc') }}</textarea>
                    @error('poll_desc')
                        <div class="alert alert-danger">{{$message}}</div>
                    @enderror
                </div>


                <div class="form-group">
                    <label for="">Poll Media:</label>
                    <input type="file" id="ppost" name="ppost" value="{{ old('ppost') }}" multiple required>
                    @error('ppost')
                        <div class="alert alert-danger">{{$message}}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="approval">Approval letter:</label>
                    <input type="file" id="approval" name="approval" value="{{ old('approval') }}" multiple required>
                    @error('approval')
                        <div class="alert alert-danger">{{$message}}</div>
                    @enderror
                </div>



                <div class="form-group">
                    <label for="question">Question:</label>
                    <input type="text" id="question" name="question" value="{{ old('question')}}" multiple required>
                    @error('question')
                        <div class="alert alert-danger">{{$message}}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="option1">Option1</label>
                    <input type="text" id="option1" name="option1" value="{{ old('option1')}}" multiple>
                    @error('option1')
                        <div class="alert alert-danger">{{$message}}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="option2">Option2</label>
                    <input type="text" id="option2" name="option2" value="{{ old('option2')}}" multiple>
                    @error('option2')
                        <div class="alert alert-danger">{{$message}}</div>
                    @enderror
                </div>


                <div class="form-group">
                    <label for="option3">Option3</label>
                    <input type="text" id="option3" name="option3" value="{{ old('option3')}}" multiple>
                    @error('option3')
                        <div class="alert alert-danger">{{$message}}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="option4">Option4</label>
                    <input type="text" id="option4" name="option4" value="{{ old('option4')}}" multiple>
                    @error('option4')
                        <div class="alert alert-danger">{{$message}}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="option5">Option5</label>
                    <input type="text" id="option5" name="option5" value="{{ old('option5')}}" multiple>
                    @error('option5')
                        <div class="alert alert-danger">{{$message}}</div>
                    @enderror
                </div>

                

                
                
           
                <div class="new_society" style="text-align: center; display: flex; justify-content: center; align-items: center; padding-top: 5rem; padding-bottom: 5rem;">
                            <button class="btn" style="margin-left: 1rem;" type="reset">Reset</button>
                            <button class="btn" style="margin-left: 1rem;" type="submit">Request for create poll</button> 
                </div>

     

            </form>
    </div>
    
</div>

    <!-- footer section starts -->
    @include('footer')
	<!-- footer section ends -->
    @section('scripts')
    <script src="{{ asset('js/your-js-file.js') }}"></script>
    @endsection
</body>
</html>
<!-- sachithra-end -->