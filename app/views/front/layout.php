<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from demo.shapedtheme.com/kotha-pro-html/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 28 Apr 2019 08:46:58 GMT -->
<head>
	<!-- Document Settings -->
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
	<!-- Page Title -->
	<title><?=$this->e($title)?></title>
	<!-- Fonts -->
	<link
		href="https://fonts.googleapis.com/css?family=Lato:300,400,400i,700,700i%7cOswald:300,400,500,600,700%7cPlayfair+Display:400,400i,700,700i"
		rel="stylesheet">
	<!-- Styles -->
	<link rel="stylesheet" href="assets/front/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/front/css/font-awesome.min.css">
	<link rel="stylesheet" href="assets/front/css/slick-theme.css">
	<link rel="stylesheet" href="assets/front/css/slick.css">
	<link rel="stylesheet" href="assets/front/style.css">
	<!-- HTML5 shim and Respond.js IE9 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	<script src="assets/front/js/html5shiv.js"></script>
	<script src="assets/front/js/respond.js"></script>
	<![endif]-->
</head>
<body>

<?php $this->insert('front/blocks/header'); ?>

<div class="kotha-default-content">
	<div class="container">
		<div class="row">

			<?php
			echo $this->section('content');

			// если шаблон полноформатный, подключаем сайдбар
			if ($crop_layout !== 1) {
				$this->insert('front/blocks/sidebar');
			}
			?>

		</div>
	</div>
</div>

<?php $this->insert('front/blocks/footer') ?>

<div class="scroll-up">
	<a href="#"><i class="fa fa-angle-up"></i></a>
</div>

<!--//Script//-->
<script src="assets/front/js/jquery-1.12.4.min.js"></script>
<script src="assets/front/js/bootstrap.min.js"></script>
<script src="assets/front/js/slick.min.js"></script>
<script src="assets/front/js/main.js"></script>
</body>

<!-- Mirrored from demo.shapedtheme.com/kotha-pro-html/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 28 Apr 2019 08:46:58 GMT -->
</html>