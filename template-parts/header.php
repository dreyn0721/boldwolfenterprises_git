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

	<header class="bg-light-alt py-3">
	  <div class="text-center mb-3">
	    <img src="https://dummyimage.com/200x80/000/fff&text=LOGO" class="logo" alt="Logo">
	  </div>

	  <nav class="navbar navbar-expand-lg navbar-light">
	    <div class="container">
	      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navMenu">
	        <span class="navbar-toggler-icon"></span>
	      </button>
	      <div class="collapse navbar-collapse justify-content-center" id="navMenu">
	        <ul class="navbar-nav gap-3">
	          <li class="nav-item"><a class="nav-link" href="<?php echo $base_url; ?>">Home</a></li>
	          <li class="nav-item"><a class="nav-link" href="<?php echo $base_url; ?>/blog.php">Blogs</a></li>
	          <li class="nav-item"><a class="nav-link" href="<?php echo $base_url; ?>#faq">FAQ</a></li>
	          <li class="nav-item"><a class="nav-link" href="<?php echo $base_url; ?>#contact">Contact</a></li>
	        </ul>
	      </div>
	    </div>
	  </nav>
	</header>



	<main class="main-content">