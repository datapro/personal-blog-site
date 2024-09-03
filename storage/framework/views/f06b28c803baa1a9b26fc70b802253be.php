<!DOCTYPE html>
<html lang="en">
<?php echo $__env->make('includes.head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<body class="body body2 tg-heading-subheading animation-style3">
    <!--=====progress END=======-->

<div class="preloader-area">
    <div class="preloader">
      <!-- Replace with your PNG logo -->
      <img src="<?php echo e(asset('assetsmain/img/logo/preloader.png')); ?>" alt="Logo" class="logo">
    </div>
  </div>
<!-- removed overlay loading  -->

    <?php echo $__env->make('includes.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
   <?php echo $__env->yieldContent('content'); ?>
    <?php echo $__env->make('includes.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</body>
</html><?php /**PATH C:\xampp\htdocs\aiblog\blogsite\resources\views/layouts/main.blade.php ENDPATH**/ ?>