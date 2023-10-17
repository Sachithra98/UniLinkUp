<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- custom css file link  -->
   <link rel="stylesheet" href="{{ asset('css/sty.css') }}">

    <title>Forgot Password</title>


    <style type="text/css">

        


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



    <div class="container_forget">
        <div class="forgot-password-form">
            <h2>Forgot Password</h2>
            <p>Please enter your email address to reset your password.</p>
            <form action="#" method="post">
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" placeholder="Enter your email" required>
                </div>
                <button class="btn" type="submit">Reset Password</button>
            </form>
        </div>
    </div>

    <!-- footer section starts -->
	@include('footer')
	<!-- footer section ends -->
    
</body>
</html>
