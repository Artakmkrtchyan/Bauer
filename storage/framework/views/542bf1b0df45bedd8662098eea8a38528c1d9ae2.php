<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  	<link rel="stylesheet" href="css.css">
	<title>Home</title>
</head>
<body>
<div class="container">
	<div class="search_block">


	<form action="" method="" id="myForm">

    <input type="text" name="" id="main_input" placeholder="">
    <button id="button" type="submit">Submit</button>
	</form>


	</div>


<div class="cat_prod">


<div class="category">


</div>



<div class="products">
  <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <div>
          <label for="category_name"></label>
          <span id="category_name"><?php echo e($cat->name); ?></span>

      </div>
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>
</div>

</div>
</body>
</html>
<?php /**PATH C:\OpenServer\domains\finish_project\resources\views/home.blade.php ENDPATH**/ ?>