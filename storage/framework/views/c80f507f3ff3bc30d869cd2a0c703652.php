<div class="text-end">
    <a href="<?php echo e(route('backend.users.show', $data)); ?>" class="btn btn-success btn-sm mt-1" data-toggle="tooltip" title="<?php echo e(__('labels.backend.show')); ?>"><i class="fas fa-desktop"></i></a>
    <a href="<?php echo e(route('backend.users.edit', $data)); ?>" class="btn btn-primary btn-sm mt-1" data-toggle="tooltip" title="<?php echo e(__('labels.backend.edit')); ?>"><i class="fas fa-wrench"></i></a>
    <a href="<?php echo e(route('backend.users.changePassword', $data)); ?>" class="btn btn-info btn-sm mt-1" data-toggle="tooltip" title="<?php echo e(__('labels.backend.changePassword')); ?>"><i class="fas fa-key"></i></a>

    <?php if($data->status != 2 && $data->id != 1): ?>
    <a href="<?php echo e(route('backend.users.block', $data)); ?>" class="btn btn-danger btn-sm mt-1" data-method="PATCH" data-token="<?php echo e(csrf_token()); ?>" data-toggle="tooltip" title="<?php echo e(__('labels.backend.block')); ?>" data-confirm="<?php echo app('translator')->get('Are you sure?'); ?>"><i class="fas fa-ban"></i></a>
    <?php endif; ?>

    <?php if($data->status == 2): ?>
    <a href="<?php echo e(route('backend.users.unblock', $data)); ?>" class="btn btn-info btn-sm mt-1" data-method="PATCH" data-token="<?php echo e(csrf_token()); ?>" data-toggle="tooltip" title="<?php echo e(__('labels.backend.unblock')); ?>" data-confirm="<?php echo app('translator')->get('Are you sure?'); ?>"><i class="fas fa-check"></i></a>
    <?php endif; ?>

    <?php if($data->id != 1): ?>
    <a href="<?php echo e(route('backend.users.destroy', $data)); ?>" class="btn btn-danger btn-sm mt-1" data-method="DELETE" data-token="<?php echo e(csrf_token()); ?>" data-toggle="tooltip" title="<?php echo e(__('labels.backend.delete')); ?>" data-confirm="<?php echo app('translator')->get('Are you sure?'); ?>"><i class="fas fa-trash-alt"></i></a>
    <?php endif; ?>

    <?php if($data->email_verified_at == null): ?>
    <a href="<?php echo e(route('backend.users.emailConfirmationResend', $data->id)); ?>" class="btn btn-primary btn-sm mt-1" data-toggle="tooltip" title="<?php echo app('translator')->get('Send confirmation email'); ?>"><i class="fas fa-envelope"></i></a>
    <?php endif; ?>
</div>
<?php /**PATH C:\xampp\htdocs\caratamir\resources\views/backend/includes/user_actions.blade.php ENDPATH**/ ?>