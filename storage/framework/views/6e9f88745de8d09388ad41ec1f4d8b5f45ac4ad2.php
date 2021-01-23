<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Artcon</title>
	 <meta name="viewport" content="width=device-width, initial-scale=1">
	 <meta content="width=1180" name="viewport" id="viewport">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
          integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
          <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="meida.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>
<body>
<div class="header">
			<div class="top-head">
				<div class="top-head-first">

						<span class="far"><i class="fas fa-phone"></i></span>
						<a href="home"><p>(+374) 98-24-2895</p></a>

						    <hr>

							<span class="far"><i class="fas fa-envelope"></i></span>
							<a href="home"><p>mkrtchyanartak178@gmail.com</p></a>

							<hr>

							<span class="far"><i class="fas fa-map-marker-alt"></i></span>
							<a href="home"><p>Armenia, Gyumri</p></a>
					</div>
						<div class="top-head-second">

							<a href="https://www.facebook.com/artak.mkrtchyan.3762/timeline?_rdc=1&_rdr#_"><i class="fab fa-facebook-f"></i></a>
							<a href="https://www.instagram.com/mkrtchyan_artack/?hl=ru"><i class="fab fa-twitter"></i></a>
							<a href="https://www.linkedin.com/in/artak-mkrtchyan-838179200/"><i class="fab fa-linkedin-in"></i></a>
							<a href="https://twitter.com/Artack4"><i class="fab fa-instagram"></i></a>
						</div>
				</div>

				<div class="under-head">
							<div class="under-cont">
								<div class="logo">
						<a href="home"><i class="logo-icon fas fa-kaaba"></i></a>
						<a href="home"><h1>Artcon <span class="fullstop">.</span></h1></a>
					</div>

							</div>
							<h2 id="about-h2">Administration</h2>
					<div class="head-button">
						<a href="home">	<button> Order <span style="font-style: italic;">service</span> </button></a>
					</div>
						</div>
				</div>





				<div class="users-block">


								<div class="alert alert-info">
									<h3><?php echo e($data->name); ?></h3>
									<p><?php echo e($data->email); ?></p>
									<p><small><?php echo e($data->created_at); ?></small></p>
									<p><?php echo e($data->message); ?></p>
									<a href="<?php echo e(route('contact-data','$data->id')); ?>"><button class="btn btn-warning">Details</button> </a>
								</div>

				</div>
<?php /**PATH C:\OpenServer\domains\finish_project\resources\views/general/one-admin.blade.php ENDPATH**/ ?>