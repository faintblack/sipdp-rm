<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
	<meta name="author" content="Coderthemes">

	<link rel="shortcut icon" href="assets/images/logormmadani1.png">
	<link rel="shortcut icon" href="assets/images/logo1.png">
	<link rel="shortcut icon" href="assets/images/logormmadani1.png">

	<title>SIPDP-RM</title>

	<link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
	<link href="assets/css/core.css" rel="stylesheet" type="text/css" />
	<link href="assets/css/components.css" rel="stylesheet" type="text/css" />
	<link href="assets/css/icons.css" rel="stylesheet" type="text/css" />
	<link href="assets/css/pages.css" rel="stylesheet" type="text/css" />
	<link href="assets/css/responsive.css" rel="stylesheet" type="text/css" />
<script src="assets/js/modernizr.min.js"></script>
</head>
<body>
	<div class="account-pages">
		<img src="assets/images/rumahsakit1.png" style="width: 100%; height: 100%;">
	</div>
	<div class="clearfix"></div>

	<div class="wrapper-page">
		<div class="card-box">
			<div class="panel-heading">
				<div class="text-center">
					<img src="assets/images/logormmadani1.png">
				</div>
				<h3 class="text-center"><b>Sistem Informasi Pengelolaan Data Pasien dan Rekam Medis</b></h3>
				<h3 class="text-center"><b>(SIPDP-RM)</b></h3>
			</div>
			<div class="panel-body">
				<?php
				$attributes = array('class' => 'form-horizontal m-t-20');
      	echo form_open('SiteController/verification', $attributes);
				?>
					<div class="form-group ">
						<div class="col-xs-12">
							<input autofocus name="username" class="form-control" type="text" required="" placeholder="Username">
						</div>
					</div>

					<div class="form-group">
						<div class="col-xs-12">
							<input name="password" class="form-control" type="password" required="" placeholder="Password">
						</div>
					</div>

					<div class="form-group text-center m-t-40">
						<div class="col-xs-12">
							<button name="btnLogin" class="btn btn-info btn-block text-uppercase waves-effect waves-light" type="submit">
								LOGIN
							</button>
						</div>
					</div>
				<?php echo form_close(); ?>
			</div>
		</div>
	</div>

	<script>
		var resizefunc = [];
	</script>

	<!-- jQuery  -->
	<script src="assets/js/jquery.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/detect.js"></script>
	<script src="assets/js/fastclick.js"></script>
	<script src="assets/js/jquery.slimscroll.js"></script>
	<script src="assets/js/jquery.blockUI.js"></script>
	<script src="assets/js/waves.js"></script>
	<script src="assets/js/wow.min.js"></script>
	<script src="assets/js/jquery.nicescroll.js"></script>
	<script src="assets/js/jquery.scrollTo.min.js"></script>


	<script src="assets/js/jquery.core.js"></script>
	<script src="assets/js/jquery.app.js"></script>
</body>
</html>