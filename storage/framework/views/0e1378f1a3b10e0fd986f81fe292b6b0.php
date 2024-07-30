<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>add posts</title>
</head>
<body>
    <?php echo $__env->make('errors', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <form method="post" action="<?php echo e(url('posts/store')); ?>">
        <?php echo csrf_field(); ?>
    <input type="text"  name="title">
    <br>
    <textarea name="content" cols="30" rows="10"></textarea>
    <br>
    <input type="submit" value="add">
</form>
    
</body>
</html><?php /**PATH E:\project\app\resources\views/posts/create.blade.php ENDPATH**/ ?>