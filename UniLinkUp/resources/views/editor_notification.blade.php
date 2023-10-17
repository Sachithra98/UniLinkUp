	<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Notification</title>
	<link rel="stylesheet" href="{{ asset('css/notification.css') }}">
</head>
<body>
	<nav>
		<div class="logo"> </div>
		<div class="icon" onclick="toggleNotifi()">
			<img src="img/bell.png" alt=""> <span>17</span>
		</div>
		<div class="notifi-box" id="box">
			<h2>Notifications <span>17</span></h2>
			<div class="notifi-item">
				<img src="{{asset('storage/images/site images/avat1r1.png')}}" alt="img">
				<div class="text">
				   <h4>Ediors Name</h4>
				   <p>Post Title</p>
				   <p>Post Id</p>
			    </div> 
			</div>

			<div class="notifi-item">
				<img src="{{asset('storage/images/site images/avat1r2.png')}}" alt="img">
				<div class="text">
				   <h4>Ediors Name</h4>
				   <p>Post Title</p>
				   <p>Post Id</p>
			    </div> 
			</div>

			<div class="notifi-item">
				<img src="{{asset('storage/images/site images/avat1r3.png')}}" alt="img">
				<div class="text">
				   <h4>Ediors Name</h4>
				   <p>Post Title</p>
				   <p>Post Id</p>
			    </div> 
			</div>

			<div class="notifi-item">
				<img src="{{asset('storage/images/site images/avat1r4.png')}}" alt="img">
				<div class="text">
				   <h4>Ediors Name</h4>
				   <p>Post Title</p>
				   <p>Post Id</p>
			    </div> 
			</div>

			<div class="notifi">
				
				<div class="text">
				   <a href="#" ><h4>See All Notifications</h4></a>
				  
				 <img>
			    </div> 
			</div>

		</div>
	</nav>

	<script src="js/script.js"></script>
</body>
</html>