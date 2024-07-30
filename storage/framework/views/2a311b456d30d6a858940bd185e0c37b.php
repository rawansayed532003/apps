<?php if($errors->any()): ?>
<div class="alert alert-danger">
    <ul class="list-unstyled">
        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <li><?php echo e($error); ?></li>
        
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


    </ul>


</div>

<?php endif; ?><?php /**PATH E:\project\app\resources\views/errors.blade.php ENDPATH**/ ?>