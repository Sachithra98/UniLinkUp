<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Login Form</title>

	<link rel="stylesheet" href="{{ asset('css/sty.css') }}">
	<link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

	<style>
		.lgin {
			position: relative;
			width: 100%;
			min-height: 100vh;
			display: flex;
			justify-content: space-between;
			background-color: #eee;
		}

		.lgin .imgBx {
			flex: 1;
			padding: 20px;
			text-align: center;
			display: flex;
			flex-direction: column;
			align-items: center; /* Center horizontally */
    		justify-content: center; /* Center vertically */
		}

		.lgin .imgBx img {
			max-width: 100%;
			height: auto;
			display: block;
			width: 100%;
		}

		.lgin .text1 h1 {
			color:#D2F9F9;
			text-transform: uppercase;
			padding:1rem 0;
			font-size: 4vw;
			text-decoration: none;

		}

		.lgin .text1 h3 {
			color: #eee;
			text-decoration: none;

		}

		.lgin .box1 {
			flex: 1;
			padding: 20px;
			text-align: center;
			position: relative;
			background: linear-gradient(60deg, #453fff, transparent, transparent, #453fff);
			background-size: 300% 300%;
			background-position: 50% 50%;
			animation: animate 6s linear infinite;
			margin: 10px; /* Add margin to create the light margin effect */
		}

		.lgin .box1::before,
		.lgin .box1::after {
			content: '';
			position: absolute;
			width: 100%;
			height: 100%;
			top: 0;
			left: 0;
			background: inherit;
		}



		@keyframes animate {
			0% {
				background-position: 100% 0;
			}
			100% {
				background-position: -100% 0;
			}
		}


		.lgin form {
			position: absolute;
			inset: 2px;
			background: white;
			z-index: 10;
			padding: 30px 30px;
			display: flex;
			flex-direction: column;
		}

		.lgin .btn{
			display: inline-block;
			background: var(--black);
			margin-top: 5rem;
			color:var(--white);
			font-size: 1.7rem;
			padding:1rem 3rem;
			cursor: pointer;
			}

		.btn:hover{
			background: var(--main-color);
		}


		.lgin #role {
			width: 200px;
			padding: 10px;
			font-size: 16px;
			border: 1px solid #f7f5f2;
			border-radius: 5px;
			background-color: #f7f5f2;
			color: #23242a;
			margin-top: 3rem;
		}

		.lgin h1 {
			color: #23242a;
			font-size: 50px;
			font-weight: 500;
			text-align: center;
			text-decoration: underline;
		}

		.lgin .inputBox1 {
			position: relative;
			width: 300px;
			margin-top: 35px;
			background-color: #eee;
		}

		.lgin .inputBox1 input {
			position: relative;
			width: 100%;
			padding: 20px 10px 10px;
			background: transparent;
			border: none;
			outline: none;
			color: #23242a;
			font-size: 1em;
			letter-spacing: 0.05em;
			z-index: 10;
		}



		.lgin .inputBox1 span {
			position: absolute;
			left: 0;
			padding: 20px 10px 10px;
			font-size: 1.7rem;
			color: #23242a;
			pointer-events: none;
			letter-spacing: 0.05em;
			transition: 0.5s;
		}

		.lgin .inputBox1 input:valid ~ span,
		.lgin .inputBox1 input:focus ~ span {
			color: #23242a;
			transform: translateX(-10px) translateY(-30px);
			font-size: 0.75em;
		}

		.lgin .inputBox1 i {
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

		.lgin .inputBox1 input:valid ~ i,
		.lgin .inputBox1 input:focus ~ i {
			height: 44px;
		}

		.lgin .links {
			display: flex;
			justify-content: space-between;
		}

		.lgin .links a {
			margin: 25px 0;
			font-size: 1.7rem;
			color: var(--main-color);
			text-decoration: underline;
		}

		.lgin .links a:hover,
		.lgin .links a:nth-child(2) {
			color:  var(--black);
		}

		.lgin .links a:nth-child(2):hover {
			text-decoration: underline 2px;
			text-underline-offset: 5px;
		}
	</style>
</head>


<body>


	<!-- header section starts -->
	@include('header')
	<!-- header section ends -->








	<section class="lgin">


		<div class="imgBx" style="background:url('{{asset('storage/images/site images/6.jpg')}}')no-repeat">

			<div class="text1">
				<h1>Welcome to UniLinkUp</h1>
				<h3>"Welcome to our UniLinkUp ! Connect, share, and engage with fellow scholars to enrich your academic journey here."</h3>
			</div>
		</div>


		<div class="box1">

			<form action="{{ route('loginCheck') }}" method="POST">
                @csrf
                <h1>Sign In</h1>
                <div class="inputBox1">
                    <input type="text" name="id" required>
                    <span>Username</span>
                    <i></i>
                </div>
                <div class="inputBox1">
                    <input type="password" name="password" required>
                    <span>Enter Password</span>
                    <i></i>
                </div>
                <select name="role" id="role">
					<option value="Student">Viewer</option>
                    <option value="Editor">Editor</option>
                    <option value="Moderator">Moderator</option>
                    <option value="Admin">Admin</option>
                    
                </select>
                <button class="btn" type="submit">Log In</button>
                <div class="links">
                    <a href="<?=url('forget')?>">Forgot Password?</a>
                </div>
            </form>



		</div>
</section>


	<!-- footer section starts -->
	@include('footer')
	<!-- footer section ends -->
</body>
</html>
