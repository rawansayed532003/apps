<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>all posts</title>
</head>
<body>
 
<h3><?php echo e($posts->id); ?>-<?php echo e($posts->title); ?></h3>

<p><?php echo e($posts->content); ?></p>
<a href="<?php echo e(url('posts')); ?>">Back</a>


    
</body>
</html><?php /**PATH E:\project\app\resources\views/posts/show.blade.php ENDPATH**/ ?>