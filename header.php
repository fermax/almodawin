<!DOCTYPE html>
<html>
	<head>
		<title>blog 2016</title>
		<script src="public/js/jquery-1.12.4.min.js"></script>
		<script src="public/js/bootstrap.min.js"></script>
		<link rel="stylesheet" type="text/css" href="//www.fontstatic.com/f=zahra">
		<link rel="stylesheet" type="text/css" href="public/css/bootstrap-rtl.css">
		<link rel="stylesheet" type="text/css" href="public/css/style.css">
		<link rel="stylesheet" type="text/css" media="all" href="public/css/animate.css">
		<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/earlyaccess/droidarabickufi.css">
	</head>
	<body style="direction: rtl">
		<!--nav begin-->
		<div class="container ">
			<nav class="navbar navbar-inverse animated bounceInDown">
			  <div class="container-fluid">
				<div class="navbar-header">
				  <a class="navbar-brand" href="index.php">المدون الإسلامي</a>
				</div>
				<ul class="nav navbar-nav">
				  <li <?php if( count($_GET) === 0 ){echo "class=\"active\"";}?>><a href="index.php"><strong>الرئيسة</strong></a></li>
				  <li><a href="#">البحث</a></li>
				  <li><a href="#">اتصل بنا</a></li>
				  <li><a href="#">من نحن؟</a></li>
				</ul>
			  </div>
			</nav>
		</div>
		<!--nav end-->