{{-- <x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif

            <x-primary-button class="ms-3">
                {{ __('Log in') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout> --}}

<!--piyumi-->
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
            border-radius: 20px;
			cursor: pointer;
            padding: 0.8rem 1rem; /* Reduce padding to adjust button length */
			}

		.btn:hover{
			background: var(--main-color);
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

                <form>
                <h4>Please choose your Role here</h4>

                <a href="<?=url('AdminLogin')?>" class="btn" >Admin</a>
                <a href="<?=url('EditorLogin')?>" class="btn">Editor</a>
                <a href="<?=url('ModeratorLogin')?>" class="btn">Moderator</a>
                <a href="<?=url('StudentLogin')?>" class="btn">Student</a>
                <a href="<?=url('StaffLogin')?>" class="btn">Staff</a>
                </form>





		</div>
</section>


	<!-- footer section starts -->
	@include('footer')
	<!-- footer section ends -->
</body>
</html>

