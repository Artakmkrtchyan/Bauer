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
</head>
<body>
<div class="header">
			<div class="top-head">
				<div class="top-head-first">

						<span class="far"><i class="fas fa-phone"></i></span>
						<a class="list-unstyled" href="home"><p class="list-unstyled">(+374) 98-24-2895</p></a>

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
					<a href="admin">Click to Refresh</a>

          <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $el): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

								<div class="user-info">
									<h3><?php echo e($el->name); ?></h3>
									<hr>
									<span><?php echo e('Email: ' .$el->email); ?></span>
									<hr>
									<span ><?php echo e('Phone: +'  .$el->phone); ?></span>
									<hr>
									<span>Message</span>
									<p ><?php echo e($el->message); ?></p>

									<p><small><?php echo e($el->created_at); ?></small></p>


									<form action="<?php echo e(url('/delete/' . $el->id)); ?>" method="post" id="myForm" >
											<?php echo csrf_field(); ?>
										<button type="submit" id="btn" name="button">Delete</button>
									</form>

								</div>

					 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

				</div>















        <div class="footer">
        			<div class="footer-container">

        		<div class="footer-logo">
        				<div class="logo">
        						<a href="home"><i class="logo-icon fas fa-kaaba"></i></a>
        						<a href="home"><h1 style="color:#ffffff; ">Artcon <span class="fullstop">.</span></h1></a>
        					</div>
        					<div class="footer-button">
        						<h1>Консультация</h1>
        						<p>Для строительства заполните и <br> отправьте свои данные.
        Наш сотрудник свяжется с вами.</p>
        					<!-- <input type="input" placeholder="Your Phone" name=""> -->
        					<!-- <button>Send</button> -->
        					</div>

        		</div>



        		<div class="footer-contact">
        					<h1 >Контакты</h1>

        		<div class="footer-contact-text">
        		<div class="footer-contact-text-block">
        			<span class="fav"><i class="fas fa-clock"></i></span>
        		<p>Пон - Пят; 8.00am 6.00pm</p>
        		</div>

        		<div class="footer-contact-text-block">
        			<span class="fav"><i class=" fas fa-map-marker-alt"></i></span>
        		<p>Armenia, Gyumri</p>
        		</div>

        		<div class="footer-contact-text-block">
        			<span class="fav"><i class= " fas fa-phone"></i></span>
        		<p>+374 98-24-2895</p>
        		</div>

        		<div class="footer-contact-text-block">
        			<span class="fav"><i class="fass fas fa-envelope"></i></span>
        		<a href="home"><p>mkrtchyanartak178@gmail.com</p></a>
        		</div>
        								</div>




        		</div>


        			</div>
        		</div>



        		<div class="copyright">
        			<div class="copy-text">

        		<p>Copyright<i class="far fa-copyright" style="color:#8b98c2; font-size:14px;  "></i>2020 Artcon by Mkrtchyan Artak. Все права защищены.</p>


        			</div>

        			<div class="top-head-second">

        					<a href="https://www.facebook.com/artak.mkrtchyan.3762/timeline?_rdc=1&_rdr#_"><i class="fab fa-facebook-f"></i></a>
        					<a href="https://twitter.com/Artack4"><i class="fab fa-twitter"></i></a>
        					<a href="https://www.linkedin.com/in/artak-mkrtchyan-838179200/"><i class="fab fa-linkedin-in"></i></a>
        					<a href="https://www.instagram.com/mkrtchyan_artack/?hl=ru"><i class="fab fa-instagram"></i></a>
        				</div>
        		<div class="copy-link">
        			<a href="admin">Условия эксплуатации</a>
        			<hr>
        			<p>Политика конфиденциальности</p>
        		</div>

        		</div>



				<script type="text/javascript" src="script.js"></script>
				</body>
				</html>
<?php /**PATH C:\OpenServer\domains\finish_project\resources\views/ru/admin_ru.blade.php ENDPATH**/ ?>