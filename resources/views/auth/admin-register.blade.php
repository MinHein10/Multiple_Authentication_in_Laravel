<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Register</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<!-- LINEARICONS -->
		<link rel="stylesheet" href="{{asset('fonts/linearicons/style.css')}}">

		<!-- STYLE CSS -->
		<link rel="stylesheet" href="{{asset('css/style.css')}}">
	</head>

	<body>

		<div class="wrapper">
			<div class="inner">
				<img src="{{asset('images/image-1.png')}}" alt="" class="image-1">
				<form method="POST" action="{{route('admin.register.submit')}}">
                    @csrf
					<h3>Create New Admin Account?</h3>
					<div class="form-holder">
						<span class="lnr lnr-user"></span>
						<input type="text" class="form-control" id="name" name="name" placeholder="Username">
					</div>
					<div class="form-holder">
						<span class="lnr lnr-envelope"></span>
						<input type="text" class="form-control" placeholder="Mail" id="email" name="email">
					</div>
					<div class="form-holder">
						<span class="lnr lnr-lock"></span>
						<input type="password" class="form-control" placeholder="Password" id="password" name="password" required>
					</div>
					<div class="form-holder">
						<span class="lnr lnr-lock"></span>
						<input type="password" class="form-control" placeholder="Confirm Password" id="password-confirm" name="password_confirmation" required >
					</div>
					<button type="submit">
						<span>Register</span>
					</button>
				</form>
				<img src="{{asset('images/image-2.png')}}" alt="" class="image-2">
			</div>

		</div>

		<script src="{{asset('js/jquery-3.3.1.min.js')}}"></script>
		<script src="{{asset('js/main.js')}}"></script>
	</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>
