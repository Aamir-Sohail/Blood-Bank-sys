<!doctype html>
<html lang="en">
  <head>
  	<title>Login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="assets/css/login.css">

	</head>
	<body>
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
				
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-12 col-lg-10">
					<div class="wrap d-md-flex">
						<div class="img" style="background-image: url(assets/img/1.jpg);">
			      </div>
						<div class="login-wrap p-4 p-md-5">
			      	<div class="d-flex">
			      		<div class="w-100">
			      			<h3 class="mb-4">Sign In</h3>
			      		</div>
								<div class="w-100">
									<p class="social-media d-flex justify-content-end">
										<a href="#" class="social-icon d-flex align-items-center justify-content-center"><span class="fa fa-facebook"></span></a>
										<a href="#" class="social-icon d-flex align-items-center justify-content-center"><span class="fa fa-twitter"></span></a>
									</p>
								</div>
			      	</div>
							<form action="index.php" method="post" class="signin-form">
							<div class="panel">
							<?php if(isset($Err)){?>
								<div class="alert alert-danger">
									<?php echo $Err;?>
								</div>
							<?php }?>
						</div>
			      		<div class="form-group mb-3">
			      			<label class="label" for="name">Email</label>
			      			<input type="email" class="form-control" placeholder="Email"  name="email" required>
			      		</div>
		            <div class="form-group mb-3">
		            	<label class="label" for="password">Password</label>
		              <input type="password" class="form-control" placeholder="Password"  name="password" required>
		            </div>
		            <div class="form-group">
		            	<input type="submit" class="form-control btn btn-primary rounded submit px-3" name="login" value = "Sign In" />
		            </div>

		          </form>
		          <p class="text-center">Not a member? <a data-toggle="tab" href="register.php">Sign Up</a></p>
		        </div>
		      </div>
				</div>
			</div>
		</div>
	</section>

	<script src="assets/js/jquery.min.js"></script>
  <script src="assets/js/popper.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
  <script src="assets/js/main.js"></script>

	</body>
</html>

<?php session_start();
include './connection/connection.php';

if(isset($_POST['login'])){
	$username=mysqli_real_escape_string($conn,$_POST['email']);
	$password=mysqli_real_escape_string($conn,$_POST['password']);
	$sql="SELECT * FROM members WHERE email='$username'";
	$result= mysqli_query($sql);
	if(mysqli_num_rows($result)==1){
		$row=mysqli_fetch_assoc($result);
		if(md5($password)==$row['password']){
			$_SESSION['adlogin']=$row['id'];
			header("Location: index.php");

		}else{
			$Err="Username OR Password Incorrect";//Password 
		}

	}else{
		$Err="Username OR Password Incorrect";//EMail
	}

}


?> -->
