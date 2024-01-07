<?php if($errors->any()): ?>
<div class="alert alert-danger" role="alert">
    <p>
        <i class="fas fa-exclamation-triangle"></i> <?php echo app('translator')->get('Please fix the following errors & try again!'); ?>
    </p>
    <ul>
        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <li><?php echo e($error); ?></li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>
</div>
<?php endif; ?>
<?php /**PATH C:\xampp\htdocs\caratamir\resources\views/backend/includes/errors.blade.php ENDPATH**/ ?>