<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
	<title>Login Form</title>

	<!-- custom CSS file link -->
	<link rel="stylesheet" href="{{ asset('css/sty.css') }}">

	<!-- swiper CSS link -->
	<link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

	<!-- Font Awesome CDN link -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

	<!-- Bootstrap links -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

	<!-- Your custom font links (if any) -->
	<!-- <link rel="stylesheet" href="your-font-link-here"> -->

<style>
   



.login{
	position:relative;
	width: 100%;
	height: 100vh;
	display: flex;
}

.login .imgBx{
	position:relative;
	width: 200px;
	height: flex;
}

.login .imgBx img {
    position: absolute;
    top: 100px;
    margin-left: 430px;
    width: 370px;
    height: 450px;
}

.login .text h4{

	position: absolute;
	top: 25%;
	color:#fff;
	margin-left: 300px;
	

}
.login.box{
	justify-content: center;
	position: relative;
	width: 370px;
	height: 450px;
	background: white;
	
	overflow: hidden;
	margin-top: 100px ;
	margin-left: 600px;
}



.login.box::before{

	content:'';
	position: absolute;
	top: -50%;
	left: -50%;
	width: 370px;
	height: 450px;
	background: linear-gradient(60deg,transparent,#453fff,#453fff);
	transform-origin: bottom right;
	animation: animate 6s linear infinite ;

}


.login.box::after{

	content:'';
	position: absolute;
	top: -50%;
	left: -50%;
	width: 370px;
	height: 450px;
	background: linear-gradient(60deg,transparent,#453fff,#453fff);
	transform-origin: bottom right;
	animation: animate 6s linear infinite ;
	animation-delay: -3s;

}

@keyframes animate{
	0%{

		transform: rotate(0deg);

	}
	100%{

		transform: rotate(360deg);

	}

}

.login form{

	position:absolute;
	inset: 2px;
	
	background: white;
	z-index: 10;
	padding: 30px 30px;
	display: flex;
	flex-direction: column;

}

.login #role {
    width: 200px;
    padding: 10px;
    font-size: 16px;
    border: 1px solid #f7f5f2;
    border-radius: 5px;
    background-color: #f7f5f2;
    color: #23242a;
    margin-top: 15px;
}


.login h2{ 
	color: #23242a;
	font-size: 35px;
	font-weight: 500;
	text-align: center;

}

.login.inputBox{
	position: relative;
	width: 300px;
	margin-top: 35px;
}

.login.inputBox input{
	position: relative;
	width: 100%; 
	padding: 20px 10px 10px;
	background: transparent;
	border: none;
	outline: none;
	color:#23242a;
	font-size:1em;
	letter-spacing: 0.05em;
	z-index: 10;
}

.login input[type="submit"]{

	font-size: 20px;
	border: none;
	outline: none;
	color:white;
	background: #000040;
	padding: 5px;
	margin-top:40px;
	border-radius:90px;
	font-weight:600;
	cursor:pointer;
	

}

.login input[type="submit"]:active{
	background: linear-gradient(90deg,#453fff,#453fff);
	opacity: 0.8;
}

.login .inputBox span{
	position: absolute;
	left: 0;
	padding: 20px 10px 10px;
	font-size: 1em;
	color:#23242a;
	pointer-events: none;
	letter-spacing: 0.05em;
	transition: 0.5s;
}

.login .inputBox input:valid ~ span,
.login .inputBox input:focus ~ span

{
	color:#23242a;
	transform: translateX(-10px) translateY(-30px);
	font-size: 0.75em;
}

.login .inputBox i{
	position: absolute;
	left: 0;
	bottom: 0;
	width: 100%;
	height: 2px;
	background: #f7f5f2;
	border-radius: 4px;
	transition: 0.5s;
	pointer-events: none;
	z-index: 9;
}

.login .inputBox input:valid ~ i,
.login .inputBox input:focus ~ i
{
	height: 44px;
} 

.login .links{
	display: flex;
	justify-content: space-between;

}
.login .links a{
	margin: 25px 0;
	font-size: 1em;
	color: #23242a;
	text-decoration: none;

}
.login .links a:hover,
.login .links a:nth-child(2){
	color: #23242a;
}

.login .links a:nth-child(2):hover{
	text-decoration:underline 2px;
	text-underline-offset: 5px;
}



</style>





</head>

	


<body>
	<!-- header section starts -->
	@include('header')
	<!-- header section ends -->

	<!-- Your content section starts here -->
	<section class="login">
		<div class="imgBx">
		<img src="{{ asset('storage/images/site images/home8.jpg') }}">

		</div>
		<div class="text">
			<h4>Welcome to LinkUp</h4>
		</div>
		<div class="box">
			<form action="">
				<h2>Sign In</h2>
				<div class="inputBox">
					<input type="text" required>
					<span>Username</span>
					<i></i>
				</div>
				<div class="inputBox">
					<input type="password" required>
					<span>Enter Password</span>
					<i></i>
				</div>
				<select id="role">
					<option value="country">Select Role</option>
					<option value="Editor">Editor</option>
					<option value="Moderator">Moderator</option>
					<option value="Admin">Admin</option>
					<option value="Student">Student</option>
				</select>
				<input type="submit" class="btn" value="Login">
				<div class="links">
					<a href="{{ url('forget') }}">Forgot Password?</a>
					<a href="#">SignUp</a>
				</div>
			</form>
		</div>
	</section>
	<!-- Your content section ends here -->

	<!-- footer section starts -->
	@include('footer')
	<!-- footer section ends -->
</body>
</html>
