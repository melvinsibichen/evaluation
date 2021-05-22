<!doctype html>
<html lang="en">
  <head>
  	<title>Login 10</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="css/style.css">

	</head>
	<body class="img js-fullheight" style="background-image: url(https://images.pexels.com/photos/4145153/pexels-photo-4145153.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940);">
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">


			
				<div class="col-md-6 text-center mb-5">
				

		


					<h2 class="heading-section"> LOGIN</h2>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-6 col-lg-4">
					<div class="login-wrap p-0">
		      	<h3 class="mb-4 text-center">Have an account?</h3>
				  <form action="/logs" method="post">
                  {{ csrf_field() }}
		      		<div class="form-group">
		      			<input name="emailid" type="text" class="form-control" placeholder="Email" required>
		      		</div>
	            <div class="form-group">
	              <input  name="password" id="password-field" type="password" class="form-control" placeholder="Password" required>
	              <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
	            </div>
	            <div class="form-group">
	            	<button type="submit" class="form-control btn btn-primary submit px-3">LOGIN</button>
	            </div>

	            <div class="form-group d-md-flex">
	            	<div class="w-50">
		            	<label>Don't have Account?</label>
						</div>			  
									 
									
				<div class="w-50 text-md-right">
				<a href="/signin" style="color: #fff">Sign In</a>
				</div>
	            </div>
	          </form>

			  
	          <p class="w-100 text-center">&mdash; Or Login As &mdash;</p>
	          <div class="social d-flex text-center">
	          	<a href="/adminlogin" class="px-2 py-2 mr-md-1 rounded"><span class="ion-logo-facebook mr-2"></span> ADMIN</a>
	          	<a href="/facultylogin" class="px-2 py-2 ml-md-1 rounded"><span class="ion-logo-twitter mr-2"></span> FACULTY</a>
				 
	          </div>
		      </div>
				</div>
			</div>
		</div>
	</section>

	<script src="js/jquery.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>

	</body>
</html>

