<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<title><?= $siteTitle; ?></title>
	<meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
	<link rel="icon" href="assets/img/favicon.ico" type="image/x-icon"/>

	<!-- Fonts and icons -->
	<script src="assets/js/plugin/webfont/webfont.min.js"></script>
	<script>
		WebFont.load({
			google: {"families":["Lato:300,400,700,900"]},
			custom: {"families":["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands", "simple-line-icons"], urls: ['assets/css/fonts.min.css']},
			active: function() {
				sessionStorage.fonts = true;
			}
		});
	</script>

	<!-- CSS Files -->
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/atlantis.min.css">
	<link rel="stylesheet" href="assets/css/custom.css">


	<style>
	.login{height: -webkit-fill-available;min-height: 100vh;}
	.show-password{
		position: absolute;
		right: 20px;
		top: 50%;
		transform: translateY(-50%);
		font-size: 20px;
		cursor: pointer;
	}
	.register-slogan {
		background-image: linear-gradient(rgba(196, 199, 10, 0.733), rgba(3, 72, 121, 0.425)), url("assets/img/amazing-Green-Leaf-Background.jpg");
		background-position: center;
		background-repeat: no-repeat;
		background-size: cover;
		position: relative;
	}
	.powered-by{
		background-image:  url("assets/img/Angkasa_Pura_II_logo_2014.svg");
		background-position: center;
		background-repeat: no-repeat;
		background-size: cover;
 		position: relative;
 		background-size: 250px 100px;
	}
</style>
</head>
<body >
	
	<div class="row mr-0 login" >
		<div class="col align-items-center col-xl-8 col-md-8  bg-dark register-slogan">
				<div class="row align-items-center h-100">
					<div class="col-xl-12 login-img-area  text-center my-2">
						<img src="assets/img/logo_ums.svg" class="w-75">
						<div class="my-3 py-5 text-dark powered-by">
							Powered By :
 						</div>
					</div>
				</div>
		</div>

		<div class="col-xl-4 col-md-4 col-sm-12 bg-white py-3" >
				<div class="card card-signin  border border-white shadow-none">
					<div class="card-body ">
					<h2 class="text-center py-4">Sign <strong>In</strong></h2>
					<p class="text-center text-black-50 pt-5">Silahkan masukan username dan password anda  yang sudah terdaftar.
					Untuk memulai menggunakan layanan dari aplikasi ini
					</p>		
					<div class="alert alert-danger bg-danger text-white invisible text-meddium" id="alert-login" role="alert" >
						<b>!</b>  The Username or Password is <b>incorrect</b>.
					</div>
					<form class="form-signin">
						<div class="form-group form-floating-label pb-2">
							<input type="text" id="username" class="form-control input-border-bottom" required autofocus>
							<label for="username" class="placeholder">Username</label>
						</div>
		
						<div class="form-group form-floating-label  py-2 my-3">
							<input type="password" id="password"  class="form-control input-border-bottom"  required>
							<label for="inputPassword" class="placeholder">Password</label>
							<div class="show-password">
									<i class="icon-eye"></i>
							</div>
						</div>
					
						<button type="submit" class="my-3 btn btn-lg btn-primary btn-block text-uppercase" onclick="doLogin();">Login</button>
					</form>
					</div>
				</div>
		</div>
	</div>

	  
	<!--   Core JS Files   -->
	<script src="assets/js/core/jquery.3.2.1.min.js"></script>
	<script src="assets/js/core/popper.min.js"></script>
	<script src="assets/js/core/bootstrap.min.js"></script>

	<!-- jQuery UI -->
	<script src="assets/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
	<script src="assets/js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js"></script>
 

	
	<!-- Bootstrap Notify -->
	<script src="assets/js/plugin/bootstrap-notify/bootstrap-notify.min.js"></script>
 

	<!-- Atlantis JS -->
	<script src="assets/js/atlantis.min.js"></script>


	<!-- Login JS -->
	<script src="assets/js/login.js"></script>
</body>
</html>