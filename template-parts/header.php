<?php 
include("init/database.php");
include("init/main-functions.php"); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="icon" type="image/x-icon" href="favicon.ico">
	
	<link href="assets/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
	<script src="assets/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
	<script src="assets/js/jquery-3.7.1.min.js" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="assets/font-awesome-4.7.0/css/font-awesome.min.css">


	<link href="assets/main.css" rel="stylesheet" crossorigin="anonymous">

	<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">


	<meta name="description" content="<?=$description;?>">
	<meta name="author" content="<?=$author;?>" />
	<title><?=$pagetitle;?></title>
</head>
<body>

	<header class="bg-light-alt ">

	  <nav class="navbar navbar-expand-lg navbar-light">

		  <div class="text-center p-2">
		    <a href="<?php echo $base_url; ?>"><img src="<?php echo $base_url;?>/assets/img/logoipsum-410.png" class="logo" alt="Logo"></a>
		  </div>


	    <div class="container">
	      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navMenu">
	        <span class="navbar-toggler-icon"></span>
	      </button>
	      <div class="collapse navbar-collapse justify-content-center" id="navMenu">
	        <ul class="navbar-nav gap-3">
	          <li class="nav-item"><a class="nav-link" href="<?php echo $base_url; ?>/blog.php">Blogs</a></li>
	          <li class="nav-item"><a class="nav-link" href="<?php echo $base_url; ?>#faq">FAQ</a></li>
	          <li class="nav-item"><a class="nav-link" href="<?php echo $base_url; ?>#contact">Contact</a></li>


				<?php if( logged_in() ): ?>
					<li class="nav-item"><a class="nav-link" href="<?php echo $base_url; ?>/logout.php">Logout</a></li>
				<?php else: ?>
					<li class="nav-item">
						<a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#authModal">
							Login
						</a>
					</li>
				<?php endif; ?>


	        </ul>
	      </div>
	    </div>
	  </nav>
	</header>








	<?php include("template-parts/auth-modal.php"); ?>


	<main class="main-content">