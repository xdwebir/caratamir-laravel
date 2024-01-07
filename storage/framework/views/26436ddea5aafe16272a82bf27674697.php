<div>
    <div class="row mt-4">
        <div class="col">
            <input type="text" class="form-control my-2" placeholder=" Search" wire:model="searchTerm" />

            <div class="table-responsive">
                <table class="table table-hover table-responsive-sm" wire:loading.class="table-secondary">
                    <thead>
                        <tr>
                            <th>موبایل</th>
                            <th><?php echo e(__('labels.backend.users.fields.status')); ?></th>
                            <th><?php echo e(__('labels.backend.users.fields.roles')); ?></th>
                            <th><?php echo e(__('labels.backend.users.fields.permissions')); ?></th>
                            <th><?php echo e(__('labels.backend.users.fields.social')); ?></th>

                            <th class="text-end"><?php echo e(__('labels.backend.action')); ?></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>

                            <td><?php echo e($user->mobile); ?></td>
                            <td>
                                <?php echo $user->status_label; ?>

                                <?php echo $user->confirmed_label; ?>

                            </td>
                            <td>
                                <?php if($user->getRoleNames()->count() > 0): ?>
                                <ul class="fa-ul">
                                    <?php $__currentLoopData = $user->getRoleNames(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $role): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <li><span class="fa-li"><i class="fas fa-check-square"></i></span> <?php echo e(ucwords($role)); ?></li>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </ul>
                                <?php endif; ?>
                            </td>
                            <td>
                                <?php if($user->getAllPermissions()->count() > 0): ?>
                                <ul>
                                    <?php $__currentLoopData = $user->getDirectPermissions(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $permission): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <li><?php echo e($permission->name); ?></li>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </ul>
                                <?php endif; ?>
                            </td>
                            <td>
                                <ul class="list-unstyled">
                                    <?php $__currentLoopData = $user->providers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $provider): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <li>
                                        <i class="fab fa-<?php echo e($provider->provider); ?>"></i> <?php echo e(label_case($provider->provider)); ?>

                                    </li>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </ul>
                            </td>

                            <td class="text-end">
                                <a href="<?php echo e(route('backend.users.show', $user)); ?>" class="btn btn-success btn-sm mt-1" data-toggle="tooltip" title="<?php echo e(__('labels.backend.show')); ?>"><i class="fas fa-desktop"></i></a>
                                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('edit_users')): ?>
                                <a href="<?php echo e(route('backend.users.edit', $user)); ?>" class="btn btn-primary btn-sm mt-1" data-toggle="tooltip" title="<?php echo e(__('labels.backend.edit')); ?>"><i class="fas fa-wrench"></i></a>
                                <a href="<?php echo e(route('backend.users.changePassword', $user)); ?>" class="btn btn-info btn-sm mt-1" data-toggle="tooltip" title="<?php echo e(__('labels.backend.changePassword')); ?>"><i class="fas fa-key"></i></a>
                                <?php if($user->status != 2): ?>
                                <a href="<?php echo e(route('backend.users.block', $user)); ?>" class="btn btn-danger btn-sm mt-1" data-method="PATCH" data-token="<?php echo e(csrf_token()); ?>" data-toggle="tooltip" title="<?php echo e(__('labels.backend.block')); ?>" data-confirm="Are you sure?"><i class="fas fa-ban"></i></a>
                                <?php endif; ?>
                                <?php if($user->status == 2): ?>
                                <a href="<?php echo e(route('backend.users.unblock', $user)); ?>" class="btn btn-info btn-sm mt-1" data-method="PATCH" data-token="<?php echo e(csrf_token()); ?>" data-toggle="tooltip" title="<?php echo e(__('labels.backend.unblock')); ?>" data-confirm="Are you sure?"><i class="fas fa-check"></i></a>
                                <?php endif; ?>
                                <a href="<?php echo e(route('backend.users.destroy', $user)); ?>" class="btn btn-danger btn-sm mt-1" data-method="DELETE" data-token="<?php echo e(csrf_token()); ?>" data-toggle="tooltip" title="<?php echo e(__('labels.backend.delete')); ?>" data-confirm="Are you sure?"><i class="fas fa-trash-alt"></i></a>
                                <?php if($user->email_verified_at == null): ?>
                                <a href="<?php echo e(route('backend.users.emailConfirmationResend', $user->id)); ?>" class="btn btn-primary btn-sm mt-1" data-toggle="tooltip" title="Send Confirmation Email"><i class="fas fa-envelope"></i></a>
                                <?php endif; ?>
                                <?php endif; ?>
                            </td>
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-7">
            <div class="float-left">
                <?php echo $users->total(); ?> <?php echo e(__('labels.backend.total')); ?>

            </div>
        </div>
        <div class="col-5">
            <div class="float-end">
                <?php echo $users->links(); ?>

            </div>
        </div>
    </div>
</div>
<?php /**PATH C:\xampp\htdocs\caratamir\resources\views/livewire/users-index.blade.php ENDPATH**/ ?>