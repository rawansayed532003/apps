<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>add posts</title>
</head>
<body>

    <form method="post" action="<?php echo e(url("posts/update/$post->id")); ?>">
        <?php echo csrf_field(); ?>
    <input type="text"  name="title" value="<?php echo e($post->title); ?>">
    <br>
    <textarea name="content" cols="30" rows="10"><?php echo e($post->content); ?></textarea>
    <br>
    <input type="submit" value="add">
</form>
    
</body>
</html><?php /**PATH E:\project\app\resources\views/posts/edit.blade.php ENDPATH**/ ?>