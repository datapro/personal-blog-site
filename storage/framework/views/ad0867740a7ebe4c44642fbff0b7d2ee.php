

<?php $__env->startSection('title', $post->title); ?>

<?php $__env->startSection('content'); ?>
<main style="margin-top:100px">

<div class="containerr">
    <div class="colr">
  
    </div>
    <div class="colrt">
    <?php
        $excerptLength = 500; // Number of characters to display initially
        $body = $post->body;
        $isLongContent = strlen($body) > $excerptLength;
        $excerpt = $isLongContent ? substr($body, 0, $excerptLength) : $body;
    ?>
    <?php if($post->image): ?>
    <div>
        <img src="<?php echo e(asset('storage/' . $post->image)); ?>" alt="Current Image" style="max-width: 100px;">
    </div>
    <?php endif; ?>
        <h1><?php echo e($post->title); ?></h1>
        <div id="post-content">
            <p class="pst"><?php echo e($excerpt); ?><?php if($isLongContent): ?>...<?php endif; ?></p>
        
            <?php if($isLongContent): ?>
                <button id="show-more" class="btn btn-default pst">Read More</button>
                <p id="full-content" style="display:none;" class="pst"><?php echo e($body); ?></p>
            <?php endif; ?>
        </div>
        <?php if(auth()->guard()->check()): ?>
            <a href="<?php echo e(route('posts.edit', $post)); ?>" class="btn btn-warning">Edit</a>
            <form action="<?php echo e(route('posts.destroy', $post)); ?>" method="POST" style="display: inline-block;">
                <?php echo csrf_field(); ?>
                <?php echo method_field('DELETE'); ?>
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
        <?php endif; ?>
    
        <a href="<?php echo e(route('posts.index')); ?>" class="btn btn-primary">Back to Posts</a>
        <h3>Comments:</h3>
        <?php $__currentLoopData = $post->comments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $comment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div>
                <strong class="pst"><?php echo e($comment->author_name); ?></strong> says:
                <p class="pst"><?php echo e($comment->content); ?></p>
                <small class="pst"><?php echo e($comment->created_at->diffForHumans()); ?></small>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <form action="<?php echo e(route('comments.store', $post->id)); ?>" method="POST" class="form-group">
            <?php echo csrf_field(); ?>
            
            <div>
                <label for="author_name" class="form-label pst">Name:</label>
                <input type="text" name="author_name" required class="form-control"> 
            </div>
            <div>
                <label for="content" class="form-label pst">Comment:</label>
                <textarea name="content" class="form-control" required></textarea>
                
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
    
<div class="colr">
   
</div>
</div>
<script>
    document.getElementById('show-more').addEventListener('click', function() {
        var fullContent = document.getElementById('full-content');
        var showMoreButton = document.getElementById('show-more');
    
        if (fullContent.style.display === 'none') {
            fullContent.style.display = 'block';
            showMoreButton.textContent = 'Show Less';
        } else {
            fullContent.style.display = 'none';
            showMoreButton.textContent = 'Show More';
        }
    });
    </script>
    
<?php $__env->stopSection(); ?>




<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\aiblog\blogsite\resources\views/posts/show.blade.php ENDPATH**/ ?>