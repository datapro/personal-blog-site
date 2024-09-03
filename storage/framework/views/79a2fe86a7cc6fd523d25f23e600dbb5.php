

<?php $__env->startSection('title', 'Edit Post'); ?>

<?php $__env->startSection('content'); ?>
<main style="margin-top:100px">
<div class="containerr">
    <div class="colr">
  
    </div>
    <div class="colr">
  
    </div>
    <div class="colrt">
    <h1>Edit Post</h1>
    <form action="<?php echo e(route('posts.update', $post->id)); ?>" method="POST" enctype="multipart/form-data">
        <?php echo csrf_field(); ?>
        <?php echo method_field('PUT'); ?>
          <!-- Other form fields for title, content, etc. -->
          <?php if($post->image): ?>
          <div>
              <img src="<?php echo e(asset('storage/' . $post->image)); ?>" alt="Current Image" style="max-width: 100px;">
          </div>
          <?php endif; ?>
        <div class="form-group">
            <label for="image" class="pst">Post Image:</label>
            <input type="file" name="image" id="image">
        </div>
        <div class="form-group">
            <label for="title" class="form-label pst">Title</label>
            <input type="text" id="title" name="title" class="form-control" value="<?php echo e(old('title', $post->title)); ?>">
            <?php $__errorArgs = ['title'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <small class="text-danger"><?php echo e($message); ?></small>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>
        <div class="form-group">
            <label for="body" class="form-label pst">Body</label>
            <textarea id="body" name="body"  cols="50", rows="10" class="form-control"><?php echo e(old('body', $post->body)); ?> </textarea>
            <?php $__errorArgs = ['body'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <small class="text-danger"><?php echo e($message); ?></small>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>
        <button type="submit" class="btn btn-primary">Update Post</button>
    </form>
    </div>
    <div class="colr">
  
    </div>

</div>
</main>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\aiblog\blogsite\resources\views/posts/edit.blade.php ENDPATH**/ ?>