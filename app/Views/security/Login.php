<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<title>UMS - Unified Monitoring Service - Login</title>
	<meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
	<link rel="icon" href="<?= base_url('assets/img/favicon.ico') ?>" type="image/x-icon"/>
 
	 <!-- Fonts and icons -->
	 <script src="<?= base_url('assets/js/plugin/webfont/webfont.min.js') ?>"></script>
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
	<link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css') ?>">
	<link rel="stylesheet" href="<?= base_url('assets/css/atlantis.min.css') ?>">
	<link rel="stylesheet" href="<?= base_url('assets/css/fonts.min.css') ?>">
	<link rel="stylesheet" href="<?= base_url('assets/css/custom.css') ?>">

</head>
<body >
	
	<div class="row mr-0 login" >
		<div class="col align-items-center col-xl-8 col-md-8  bg-dark register-slogan">
				<div class="row align-items-center h-100">
					<div class="col-xl-12 login-img-area  text-center my-2">
						<img src="<?= base_url('assets/img/logo_ums.svg') ?>" class="w-75">
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
					<p class="text-center text-black-50 pt-5">
						Silahkan masukan username dan password anda  yang sudah terdaftar.
						Untuk memulai menggunakan layanan dari aplikasi ini
					</p>	

 					<?php if(\Config\Services::validation()->listErrors() != null): ?>
						<div class="alert alert-danger bg-danger text-white h5" id="alert-login" role="alert" >
							Username or Password field is required.
						</div>
					<?php endif ?> 
					<?php $session = session(); 
						if(!empty($session->getFlashdata('failed'))):
					?>        
					<div class="alert alert-danger bg-danger text-white h5" id="alert-login" role="alert" >
						<?= $session->getFlashdata('failed');?>
					</div>                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                               
					<?php endif ?>
					<form class="form-signin" method="POST" action="<?= base_url('Login/auth'); ?>">
						<div class="form-group form-floating-label py-3 mt-4">
							<input type="text" id="username" name="username" class="form-control input-border-bottom" required  autofocus>
							<label for="username" class="placeholder">Username</label>
						</div>
		
						<div class="form-group form-floating-label  py-2 my-3">
							<input type="password" id="password" name="password" class="form-control input-border-bottom" required  >
							<label for="inputPassword" class="placeholder">Password</label>
							<div class="show-password">
									<i class="icon-eye"></i>
							</div>
						</div>
					
						<button type="submit" class="my-3 btn btn-lg btn-primary btn-block text-uppercase">Login</button>
					</form>
					</div>	
				</div>
			</div>	
	</div>				
	<!--   Core JS Files   -->
	<script src="<?= base_url('assets/js/core/jquery.3.2.1.min.js') ?>"></script>
	<script src="<?= base_url('assets/js/core/bootstrap.min.js') ?>"></script>


	<!-- Atlantis JS -->
	<script src="<?= base_url('assets/js/atlantis.min.js') ?>"></script>

	<!-- Login JS -->
	<script src="<?= base_url('assets/js/login.js') ?>"></script>
</body>
</html>