<!DOCTYPE html>
<html lang="en">

<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">

	<title>Optimy Exam</title>

	<!-- Bootstrap core CSS -->
	<link href="<?php echo WEB_PATH; ?>assets/css/bootstrap.css" rel="stylesheet">

	<!-- Bootstrap core JavaScript -->
	<script src="<?php echo WEB_PATH; ?>assets/js/jquery-3.5.0.js"></script>
	<script src="<?php echo WEB_PATH; ?>assets/js/bootstrap.js"></script>

</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark static-top">
	<div class="container">
		<a class="navbar-brand" href="<?=WEB_URL?>/index/index">Articles</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
			<span class="navbar-toggler-icon"></span>
		</button>
		<ul class="navbar-nav ml-auto">
			<li class="nav-item">
				<a class="nav-link" href="<?=WEB_URL?>/index/index?filter=government">Government</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="<?=WEB_URL?>/index/index?filter=sports">Sports</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="<?=WEB_URL?>/index/index?filter=food">Food</a>
			</li>
			<li class="nav-item active">
				<a class="nav-link btn btn-success" href="<?=WEB_URL?>/index/create">Create</a>
			</li>
		</ul>
	</div>
</nav>
