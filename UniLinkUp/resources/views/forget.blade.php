<!--piyumi--> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- custom css file link  -->
   <link rel="stylesheet" href="{{ asset('css/sty.css') }}">

    <title>Forgot Password</title>


    <style type="text/css">

        
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

.forgot-password-form {
    width: 600px;
    height: 400px;
    margin: 0 auto;
}

h2 {
    color: #333;
}

p {
    color: #777;
}

.form-group {
    margin-bottom: 20px;
    text-align: left;
}

label {
    display: block;
    font-weight: bold;
    margin-bottom: 5px;
    color: #333;
}

input[type="email"] {
    width: 550px;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
    font-size: 16px;
}

/*
button {
    background-color: #222;
    color: #fff;
    border: none;
    padding: 10px 20px;
    border-radius: 5px;
    cursor: pointer;
    font-size: 16px;
}

button:hover {
    background-color: #0056b3;
}
 */


 </style>

</head>


<body>


    <!-- header section starts -->
    @include('header')
	<!-- header section ends -->

    <div class="main">

    <div class="back" >
                <a href="<?=url('index')?>" class="btn" style="margin-bottom: 20px;">Back</a>
            </div>

    <div class="container">
        <div class="forgot-password-form">
            <br>
            <h2>Forgot Password</h2>
            <br>
            <p>Please contact system administrators to reset your password.</p>
            <p>Don't be hesitate to contact us for any inquary. Our Contact delatils are provided in the footer section.</p>
            <!-- <form action="#" method="post">
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" placeholder="Enter your email" required>
                </div>
                <button class="btn" type="submit">Reset Password</button>
            </form> -->
        </div>
    </div>
</div>
    <!-- footer section starts -->
	@include('footer')
	<!-- footer section ends -->
    
</body>
</html>
