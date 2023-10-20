
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Create New Event</title>

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
        <h1>Create New Event</h1>

            <form action="<?=url('')?>" method="post">
                <div class="form-group">
                    <label for="post_id">Post ID:</label>
                    <input type="text" id="post_id" name="post_id" required>
                </div>

                <div class="form-group">
                    <label for="post_title">Post Title:</label>
                    <input type="text" id="post_title" name="post_title" required>
                </div>

                <div class="form-group">
                    <label for="post_desc">Post Description:</label>
                    <input type="text" id="post_desc" name="post_desc" required>
                </div>

                <div class="form-group">
                    <label for="exp date">Expire Date:</label>
                    <input type="text" id="exp date" name="exp date" required>
                </div>

                <div class="form-group">
                    <label for="">Post Media:</label>
                    <input type="file" id="post" name="post" multiple required>
                </div>

                <div class="form-group">
                    <label for="approval">Approval letter:</label>
                    <input type="file" id="approval" name="approval" multiple required>
                </div>


                <div class="radio-group">
                    <label>Choose Society Type:</label><br>
                    <input type="radio" id="university_society" name="society_type" value="University Society" required>
                    <label for="university_society">University Society</label>
                    
                    <input type="radio" id="faculty_society" name="society_type" value="Faculty Society" required>
                    <label for="faculty_society">Faculty Society</label><br><br>
                </div>

                <div class="form-group faculty-options">
                    <label for="faculty">Faculty:</label>
                    <select>
                        <option>Faculty of Science</option>
                        <option>Faculty of Engineering</option>
                        <option>Faculty of Medicine</option>
                        <option>Faculty of Technology</option>
                        <option>Faculty of Agriculture</option>
                        <option>Faculty of Allied Health Science</option>
                        <option>Faculty of Humanitieas and Social Sciences</option>
                        <option>Faculty of Management</option>
                        <option>Faculty of Fisheries and Marine Science</option>
                    </select>
                </div>

                <div class="form-group university-society-options">
                    <label for="society">Society:</label>
                    <select>
                        <option>Leo club</option>
                        <option>AIESEC</option>
                        <option>Buddhist Society</option>
                        <option>Rotaract Club</option>
                        <option>Catheolic Society</option>
                        <option>Chemistry Society</option>
                        <option>Mathematical & Statistics Society</option>
                    </select>
                </div>
            
            
    <script>
                
    $(document).ready(function() {
        const universitySocietyRadio = $('#university_society');
        const facultySocietyRadio = $('#faculty_society');
        const universitySocietyOptions = $('.university-society-options');
        const facultyOptions = $('.faculty-options');
        const universitySocietySelect = $('#universitySocietySelect');
        const facultySelect = $('#facultySelect');

        universitySocietyRadio.change(function() {
            if (universitySocietyRadio.is(':checked')) {
                universitySocietyOptions.show();
                facultyOptions.hide();
                facultySelect.prop('disabled', true);
                universitySocietySelect.prop('disabled', false);
            }
        });

        facultySocietyRadio.change(function() {
            if (facultySocietyRadio.is(':checked')) {
                universitySocietyOptions.show();
                facultyOptions.show();
                facultySelect.prop('disabled', false);
                universitySocietySelect.prop('disabled', false);
            }
        });
    });
</script>
                
           
                <div class="new_society" style="text-align: center; display: flex; justify-content: center; align-items: center; padding-top: 5rem; padding-bottom: 5rem;">
                            <button class="btn" style="margin-left: 1rem;" type="reset">Reset</button>
                            <button class="btn" style="margin-left: 1rem;" type="submit">Save</button> 
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