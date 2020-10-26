<!DOCTYPE HTML>
<html>
<head>
<title>PT. Nindya Karya (Persero)</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="tes coding, pt nindya karya, programmer" />

<link href="<?php echo base_url();?>assets/css/bootstrap.min.css" rel='stylesheet' />

<link href="<?php echo base_url();?>assets/part/signin.css" rel="stylesheet">

<style>
  .bd-placeholder-img {
	font-size: 1.125rem;
	text-anchor: middle;
	-webkit-user-select: none;
	-moz-user-select: none;
	-ms-user-select: none;
	user-select: none;
  }

  @media (min-width: 768px) {
	.bd-placeholder-img-lg {
	  font-size: 3.5rem;
	}
  }
</style>
</head>
<body class="text-center">
	<form class="form-signin" action="<?php echo base_url() ?>login/signup" method="post">
		<img class="mb-4" src="<?php echo base_url();?>assets/img/nindya-karya.png" alt="" width="100" height="100">
		
		<h3 class="h3 mb-3 font-weight-normal">Sistem Laporan Produksi</h3>
		
		<label for="inputEmail" class="sr-only">Email address</label>
		<input type="email" id="email" name="email" class="form-control" placeholder="Email address" required autofocus>
		<label for="inputPassword" class="sr-only">Password</label>
		<input type="password" id="password-field" name="password" class="form-control" placeholder="Password" required>
		
		<button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
		<footer class="footer mt-auto py-3">
		<div class="container" align="center">
			<span class="text-muted">&copy; 2020 <a href="<?php echo base_url(); ?>" target="_blank">PT. Nindya Karya (Persero)</a></span>
		</div>
	</footer>
	</form>
	
</body>
</html>