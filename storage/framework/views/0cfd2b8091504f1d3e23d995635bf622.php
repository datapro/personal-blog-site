<?php $__env->startSection('content'); ?>
<main style="margin-top:100px">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><?php echo e(__('Dashboard')); ?></div>

                <div class="card-body">
                    <?php if(session('status')): ?>
                        <div class="alert alert-success" role="alert">
                            <?php echo e(session('status')); ?>

                        </div>
                    <?php endif; ?>

                    <?php echo e(__('You are logged in !')); ?> <?php echo e(Auth::user()->name); ?>

                </div>
            </div>
        </div>
    </div>
</div>
<div class="containerr">
    <div class="colr">
  
    </div>
    <div class="colrt">
        <h1>Blog Posts</h1>
        <a href="<?php echo e(route('posts.create')); ?>" class="btn btn-primary">Create New Post</a>
        <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div>
                    <?php if($post->image): ?>
                    <div>
                        <img src="<?php echo e(asset('storage/' . $post->image)); ?>" alt="<?php echo e($post->title); ?>" style="max-width:100px;">
                    </div>
                <?php endif; ?>
                <h2><?php echo e($post->title); ?></h2>
                <?php
                $excerptLength = 500; // Number of characters to display initially
                $body = $post->body;
                $isLongContent = strlen($body) > $excerptLength;
                $excerpt = $isLongContent ? substr($body, 0, $excerptLength) : $body;
            ?>
                <p class="pst"><?php echo e($excerpt); ?><?php if($isLongContent): ?>...<?php endif; ?></p>
                <a href="<?php echo e(route('posts.show', $post)); ?>" class="btn btn-primary">Read More</a>
                <a href="<?php echo e(route('posts.edit', $post)); ?>" class="btn btn-success">Edit</a>
                <form action="<?php echo e(route('posts.destroy', $post)); ?>" method="POST" class="inline">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('DELETE'); ?>
                    <button type="submit" class="btn btn-danger" class="inline">Delete</button>
                </form>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
    <div class="colr">
        
    </div>
</div>
</main>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\aiblog\blogsite\resources\views/home.blade.php ENDPATH**/ ?>