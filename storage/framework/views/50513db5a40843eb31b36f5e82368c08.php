<?php if($data->getRoleNames()->count() > 0): ?>
    <ul class="fa-ul">
        <?php $__currentLoopData = $data->getRoleNames(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $role): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <li><span class="fa-li" ><i class="fas fa-check-square"></i></span><?php echo e(ucwords($role)); ?></li>        
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>
<?php endif; ?>
<?php /**PATH C:\xampp\htdocs\caratamir\resources\views/backend/includes/user_roles.blade.php ENDPATH**/ ?>