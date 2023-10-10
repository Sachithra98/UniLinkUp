<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Animated Login Form</title>
	<link rel="stylesheet" href="style.css">
	<!--bootsrap links-->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<!--bootstrap links-->

	<!--font links-->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@600&family=Roboto:wght@100&display=swap" rel="stylesheet">
	<!--font links-->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

<style>
    *{
	margin: 0;
	padding: 0;
	box-sizing: boder-box;
	font-family: 'Merriweather', serif;

}

.all-content{
	background: #f7f5f2;
}

html ::-webkit-scrollbar-track{
	background:transparent;
}

html ::-webkit-scrollbar-thumb{
	background: #b2744c;
	border-radius:10px;
}

html ::-webkit-scrollbar{
	width: 10px;
}

/* navbar start */
#navbar{
	background-color: #000040;
}
#logo img{
	border-radius: 10px;
	width: 80px;
	margin-left: 40px;
}

.navbar-nav{
	margin-left: 50px;
}

.nav-item .nav-link{
	color: white;
	margin-left: 10px;
	font-weight: bold;
	transition: 0.5s;
}

.nav-item .nav-link:hover{
	background: #f7f5f2;
	border-radius: 5px;
	color:blue;
}

/* navbar end */ 

 body{
 	background-image: url("images/n.jpg");
 	background-repeat: no-repeat;
 	background-size: cover;

 }


section{
	position:relative;
	width: 100%;
	height: 100vh;
	display: flex;
}

section .imgBx{
	position:relative;
	width: 200px;
	height: flex;
}

section .imgBx img{
	position: absolute;
	top: 100px;
	margin-left: 430px;
	width:370px;
	height: 450px;
	

}

section .text h4{

	position: absolute;
	top: 25%;
	color:#fff;
	margin-left: 300px;
	

}
.box{
	justify-content: center;
	position: relative;
	width: 370px;
	height: 450px;
	background: white;
	
	overflow: hidden;
	margin-top: 100px ;
	margin-left: 600px;
}



.box::before{

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




.box::after{

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

form{

	position:absolute;
	inset: 2px;
	
	background: white;
	z-index: 10;
	padding: 30px 30px;
	display: flex;
	flex-direction: column;

}

#role {
  width: 200px; /* Set the width of the select box */
  padding: 10px; /* Add some padding for better appearance */
  font-size: 16px; /* Set the font size */
  border: 1px solid #f7f5f2; /* Add a border */
  border-radius: 5px; /* Add border radius for rounded corners */
  background-color: #f7f5f2; /* Set the background color */
  color: #23242a; /* Set the text color */
  margin-top: 15px;
}
































h2{ 
	color: #23242a;
	font-size: 35px;
	font-weight: 500;
	text-align: center;

}

.inputBox{
	position: relative;
	width: 300px;
	margin-top: 35px;
}

.inputBox input{
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

input[type="submit"]{

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

input[type="submit"]:active{
	background: linear-gradient(90deg,#453fff,#453fff);
	opacity: 0.8;
}

.inputBox span{
	position: absolute;
	left: 0;
	padding: 20px 10px 10px;
	font-size: 1em;
	color:#23242a;
	pointer-events: none;
	letter-spacing: 0.05em;
	transition: 0.5s;
}

.inputBox input:valid ~ span,
.inputBox input:focus ~ span

{
	color:#23242a;
	transform: translateX(-10px) translateY(-30px);
	font-size: 0.75em;
}

.inputBox i{
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

.inputBox input:valid ~ i,
.inputBox input:focus ~ i
{
	height: 44px;
} 

.links{
	display: flex;
	justify-content: space-between;

}
.links a{
	margin: 25px 0;
	font-size: 1em;
	color: #23242a;
	text-decoration: none;

}
.links a:hover,
.links a:nth-child(2){
	color: #23242a;
}

.links a:nth-child(2):hover{
	text-decoration:underline 2px;
	text-underline-offset: 5px;
}



</style>





</head>
<body>
		<div class="all-content">
	<!--navbar start-->	

	<nav class="navbar navbar-expand-lg" id="navbar">
  <div class="container-fluid">
    <a class="navbar-brand" href="#" id="logo"><img src="./images/logo.jpg"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span><i class="fa-solid fa-bars" style="color: white; font-size: 23px;"></i></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#contactus">Contact Us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#faq's">FAQ'S</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#privacy&policy">Privacy & Policy</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#signup">Sign Up</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#login">Log In</a>
        </li>
        
          
        
      </ul>
    </div>
  </div>
</nav>
  </div>



  


	<section>

		<section>
		<div class="imgBx">
			<img src="images/pp.jpg">
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
				<option vlaue="country">Select Role</option>
				<option vlaue="Editor">Editor</option>
				<option vlaue="Moderator">Moderator</option>
				<option vlaue="Admin">Admin</option>
				<option vlaue="Student">Student</option>


			</select>




			<input type="submit" value="Login">
			<div class="links">
				<a href="forgotpassword.html">Fogot Password?</a>
				<a href="#">SignUp</a>

			</div>
		</form>

	

		</div>
</section>
</body>
</html>