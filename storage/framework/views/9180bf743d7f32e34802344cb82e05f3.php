<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>all posts</title>
</head>
<body>
    <a href="<?php echo e(url('posts/create')); ?>">add post</a>
    <hr>
   <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<h3>
    <a href="<?php echo e(url("posts/show/$post->id")); ?>">
    <?php echo e($post->id); ?>-<?php echo e($post->title); ?></a>
</h3>
<p><?php echo e($post->content); ?></p>
<a href="<?php echo e(url("posts/edit/$post->id")); ?>">edit </a>
<a href="<?php echo e(url("posts/destroy/$post->id")); ?>">destroy </a>
<hr>

   <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    
</body>
</html><?php /**PATH E:\project\app\resources\views/posts/index.blade.php ENDPATH**/ ?>