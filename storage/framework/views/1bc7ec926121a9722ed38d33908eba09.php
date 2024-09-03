
<?php $__env->startSection('content'); ?>
<main style="margin-top:100px">
<div class="containerr">
    <div class="colr">
  
    </div>
    <div class="colr">
  
    </div>
    <div class="colrt">
    <h1>Create Post</h1>
    <form action="<?php echo e(route('posts.store')); ?>" method="POST" enctype="multipart/form-data">
        <?php echo csrf_field(); ?>
        <div class="mb-3">
            <label for="image" class="pst">Post Image:</label>
            <input type="file" name="image" id="image">
        </div>
        <div class="mb-3">
            <label for="title" class="form-label pst">Title</label>
            <input type="text" id="title" name="title" value="<?php echo e(old('title')); ?>" class="form-control">
        </div>
        <div>
            <label for="body" class="form-label pst">Body</label>
            <textarea id="body" name="body" class="form-control"><?php echo e(old('body')); ?></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Create</button>
    </form>
    </div>
    <div class="colr">
  
    </div>
</div>
</main>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\aiblog\blogsite\resources\views/posts/create.blade.php ENDPATH**/ ?>