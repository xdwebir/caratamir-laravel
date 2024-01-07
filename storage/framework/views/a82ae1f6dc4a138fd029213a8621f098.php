<?php $__env->startSection('title'); ?> <?php echo e(__($module_action)); ?> <?php echo e(__($module_title)); ?> <?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumbs'); ?>
<?php if (isset($component)) { $__componentOriginal7656ed5b9ac7ccedb61554288421e12e = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal7656ed5b9ac7ccedb61554288421e12e = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.backend-breadcrumbs','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('backend-breadcrumbs'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
    <?php if (isset($component)) { $__componentOriginalf7c2a2e50b691952b99230d672014d7d = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalf7c2a2e50b691952b99230d672014d7d = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.backend-breadcrumb-item','data' => ['route' => ''.e(route("backend.$module_name.index")).'','icon' => ''.e($module_icon).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('backend-breadcrumb-item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['route' => ''.e(route("backend.$module_name.index")).'','icon' => ''.e($module_icon).'']); ?>
        <?php echo e(__($module_title)); ?>

     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalf7c2a2e50b691952b99230d672014d7d)): ?>
<?php $attributes = $__attributesOriginalf7c2a2e50b691952b99230d672014d7d; ?>
<?php unset($__attributesOriginalf7c2a2e50b691952b99230d672014d7d); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalf7c2a2e50b691952b99230d672014d7d)): ?>
<?php $component = $__componentOriginalf7c2a2e50b691952b99230d672014d7d; ?>
<?php unset($__componentOriginalf7c2a2e50b691952b99230d672014d7d); ?>
<?php endif; ?>

    <?php if (isset($component)) { $__componentOriginalf7c2a2e50b691952b99230d672014d7d = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalf7c2a2e50b691952b99230d672014d7d = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.backend-breadcrumb-item','data' => ['type' => 'active']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('backend-breadcrumb-item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['type' => 'active']); ?><?php echo e(__($module_action)); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalf7c2a2e50b691952b99230d672014d7d)): ?>
<?php $attributes = $__attributesOriginalf7c2a2e50b691952b99230d672014d7d; ?>
<?php unset($__attributesOriginalf7c2a2e50b691952b99230d672014d7d); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalf7c2a2e50b691952b99230d672014d7d)): ?>
<?php $component = $__componentOriginalf7c2a2e50b691952b99230d672014d7d; ?>
<?php unset($__componentOriginalf7c2a2e50b691952b99230d672014d7d); ?>
<?php endif; ?>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal7656ed5b9ac7ccedb61554288421e12e)): ?>
<?php $attributes = $__attributesOriginal7656ed5b9ac7ccedb61554288421e12e; ?>
<?php unset($__attributesOriginal7656ed5b9ac7ccedb61554288421e12e); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal7656ed5b9ac7ccedb61554288421e12e)): ?>
<?php $component = $__componentOriginal7656ed5b9ac7ccedb61554288421e12e; ?>
<?php unset($__componentOriginal7656ed5b9ac7ccedb61554288421e12e); ?>
<?php endif; ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<?php if (isset($component)) { $__componentOriginald36b52f60875c92b52c37822caf252de = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginald36b52f60875c92b52c37822caf252de = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.backend.layouts.edit','data' => ['data' => $user]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('backend.layouts.edit'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['data' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($user)]); ?>
    <?php if (isset($component)) { $__componentOriginal57a22d33ea7984d606412297cfe33b67 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal57a22d33ea7984d606412297cfe33b67 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.backend.section-header','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('backend.section-header'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
        <i class="<?php echo e($module_icon); ?>"></i> <?php echo e(__($module_title)); ?> <small class="text-muted"><?php echo e(__($module_action)); ?></small>

         <?php $__env->slot('subtitle', null, []); ?> 
            <?php echo app('translator')->get(":module_name Management Dashboard", ['module_name'=>Str::title($module_name)]); ?>
         <?php $__env->endSlot(); ?>
         <?php $__env->slot('toolbar', null, []); ?> 
            <?php if (isset($component)) { $__componentOriginal03c0e80d38d2a15cf58878ae679803f0 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal03c0e80d38d2a15cf58878ae679803f0 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.backend.buttons.return-back','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('backend.buttons.return-back'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal03c0e80d38d2a15cf58878ae679803f0)): ?>
<?php $attributes = $__attributesOriginal03c0e80d38d2a15cf58878ae679803f0; ?>
<?php unset($__attributesOriginal03c0e80d38d2a15cf58878ae679803f0); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal03c0e80d38d2a15cf58878ae679803f0)): ?>
<?php $component = $__componentOriginal03c0e80d38d2a15cf58878ae679803f0; ?>
<?php unset($__componentOriginal03c0e80d38d2a15cf58878ae679803f0); ?>
<?php endif; ?>
            <?php if (isset($component)) { $__componentOriginal8110bcd06083da5640cb413b304f0671 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal8110bcd06083da5640cb413b304f0671 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.buttons.show','data' => ['route' => ''.route("backend.$module_name.show", $$module_name_singular).'','title' => ''.e(__('Show')).' '.e(ucwords(Str::singular($module_name))).'','class' => 'ms-1']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('buttons.show'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['route' => ''.route("backend.$module_name.show", $$module_name_singular).'','title' => ''.e(__('Show')).' '.e(ucwords(Str::singular($module_name))).'','class' => 'ms-1']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal8110bcd06083da5640cb413b304f0671)): ?>
<?php $attributes = $__attributesOriginal8110bcd06083da5640cb413b304f0671; ?>
<?php unset($__attributesOriginal8110bcd06083da5640cb413b304f0671); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8110bcd06083da5640cb413b304f0671)): ?>
<?php $component = $__componentOriginal8110bcd06083da5640cb413b304f0671; ?>
<?php unset($__componentOriginal8110bcd06083da5640cb413b304f0671); ?>
<?php endif; ?>
         <?php $__env->endSlot(); ?>
     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal57a22d33ea7984d606412297cfe33b67)): ?>
<?php $attributes = $__attributesOriginal57a22d33ea7984d606412297cfe33b67; ?>
<?php unset($__attributesOriginal57a22d33ea7984d606412297cfe33b67); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal57a22d33ea7984d606412297cfe33b67)): ?>
<?php $component = $__componentOriginal57a22d33ea7984d606412297cfe33b67; ?>
<?php unset($__componentOriginal57a22d33ea7984d606412297cfe33b67); ?>
<?php endif; ?>
    <hr>

    <div class="row mt-4">
        <div class="col">
            <?php echo e(html()->modelForm($user, 'PATCH', route('backend.users.update', $user->id))->class('form-horizontal')->open()); ?>


            <div class="row mb-3">
                <?php
                $field_name = 'email';
                $field_lable = __('labels.backend.users.fields.email');
                $field_placeholder = $field_lable;
                $required = "required";
                ?>
                <div class="col-12 col-sm-2">
                    <div class="form-group">
                        <?php echo e(html()->label($field_lable, $field_name)->class('form-label')); ?> <?php echo fielf_required($required); ?>

                    </div>
                </div>
                <div class="col-12 col-sm-10">
                    <div class="form-group">
                        <?php echo e(html()->text($field_name)->placeholder($field_placeholder)->class('form-control')->attributes(["$required"])); ?>

                    </div>
                </div>
            </div>

            <div class="row mb-3">
                <?php
                $field_name = 'password';
                $field_lable = __('labels.backend.users.fields.password');
                $field_placeholder = $field_lable;
                $required = "required";
                ?>
                <div class="col-12 col-sm-2">
                    <div class="form-group">
                        <?php echo e(html()->label($field_lable, $field_name)->class('form-label')); ?> <?php echo fielf_required($required); ?>

                    </div>
                </div>
                <div class="col-12 col-sm-10">
                    <div class="form-group">
                        <a href="<?php echo e(route('backend.users.changePassword', $user->id)); ?>" class="btn btn-outline-primary btn-sm"><i class="fas fa-key"></i> Change password</a>
                    </div>
                </div>
            </div>

            <div class="row mb-3">
                <?php
                $field_name = 'profile';
                $field_lable = __('Profile');
                $field_placeholder = $field_lable;
                $required = "";
                ?>
                <div class="col-12 col-sm-2">
                    <div class="form-group">
                        <?php echo e(html()->label($field_lable, $field_name)->class('form-label')); ?> <?php echo fielf_required($required); ?>

                    </div>
                </div>
                <div class="col-12 col-sm-10">
                    <div class="form-group">
                        <a href="<?php echo e(route('backend.users.profileEdit', $user->id)); ?>" class="btn btn-outline-primary btn-sm"><i class="fas fa-user"></i> Update Profile</a>
                    </div>
                </div>
            </div>

            <div class="row mb-3">
                <?php
                $field_name = 'confirmed';
                $field_lable = __('labels.backend.users.fields.confirmed');
                $field_placeholder = $field_lable;
                $required = "";
                ?>
                <div class="col-12 col-sm-2">
                    <div class="form-group">
                        <?php echo e(html()->label($field_lable, $field_name)->class('form-label')); ?> <?php echo fielf_required($required); ?>

                    </div>
                </div>
                <div class="col-12 col-sm-10">
                    <div class="form-group">
                        <?php if($user->email_verified_at == null): ?>
                        <a href="<?php echo e(route('backend.users.emailConfirmationResend', $user->id)); ?>" class="btn btn-outline-primary btn-sm " data-toggle="tooltip" title="Send Confirmation Email"><i class="fas fa-envelope"></i> Send Confirmation Email</a>
                        <?php else: ?>
                        <?php echo $user->confirmed_label; ?>

                        <?php endif; ?>
                    </div>
                </div>
            </div>

            <div class="row mb-3">
                <?php
                $field_name = 'social';
                $field_lable = __('labels.backend.users.fields.social');
                $field_placeholder = $field_lable;
                $required = "";
                ?>
                <div class="col-12 col-sm-2">
                    <div class="form-group">
                        <?php echo e(html()->label($field_lable, $field_name)->class('form-label')); ?> <?php echo fielf_required($required); ?>

                    </div>
                </div>
                <div class="col-12 col-sm-10">
                    <div class="form-group">
                        <?php $__empty_1 = true; $__currentLoopData = $user->providers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $provider): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                        <li>
                            <i class="fab fa-<?php echo e($provider->provider); ?>"></i> <?php echo e(label_case($provider->provider)); ?>

                        </li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                        <?php echo e(__("No social profile added!")); ?>

                        <?php endif; ?>
                    </div>
                </div>
            </div>

            <div class="form-group row mb-3">
                <?php echo e(html()->label(__('Abilities'))->class('col-sm-2 form-control-label')); ?>

                <div class="col">
                    <div class="row mb-3">
                        <div class="col-sm-6">
                            <div class="card card-accent-primary">
                                <div class="card-header">
                                    <?php echo app('translator')->get('Roles'); ?>
                                </div>
                                <div class="card-body">
                                    <?php if($roles->count()): ?>
                                    <?php $__currentLoopData = $roles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $role): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class="card mb-3">
                                        <div class="card-header">
                                            <div class="checkbox">
                                                <?php echo e(html()->label(html()->checkbox('roles[]', in_array($role->name, $userRoles), $role->name)->id('role-'.$role->id) . "&nbsp;". ucwords($role->name) . "&nbsp;(".$role->name.")")->for('role-'.$role->id)); ?>

                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <?php if($role->id != 1): ?>
                                            <?php if($role->permissions->count()): ?>
                                            <?php $__currentLoopData = $role->permissions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $permission): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <i class="far fa-check-circle mr-1"></i>&nbsp;<?php echo e($permission->name); ?>&nbsp;
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            <?php else: ?>
                                            <?php echo app('translator')->get('None'); ?>
                                            <?php endif; ?>
                                            <?php else: ?>
                                            <?php echo app('translator')->get('All Permissions'); ?>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                    <!--card-->
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="card card-accent-info">
                                <div class="card-header">
                                    <?php echo app('translator')->get('Permissions'); ?>
                                </div>
                                <div class="card-body">
                                    <?php if($permissions->count()): ?>
                                    <?php $__currentLoopData = $permissions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $permission): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class="checkbox">
                                        <?php echo e(html()->label(html()->checkbox('permissions[]', in_array($permission->name, $userPermissions), $permission->name)->id('permission-'.$permission->id) . ' ' . $permission->name)->for('permission-'.$permission->id)); ?>

                                    </div>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-sm-4">
                    <div class="form-group">
                        <?php if (isset($component)) { $__componentOriginal01f50869d947699da362d3a7b41e6d66 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal01f50869d947699da362d3a7b41e6d66 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.backend.buttons.save','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('backend.buttons.save'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal01f50869d947699da362d3a7b41e6d66)): ?>
<?php $attributes = $__attributesOriginal01f50869d947699da362d3a7b41e6d66; ?>
<?php unset($__attributesOriginal01f50869d947699da362d3a7b41e6d66); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal01f50869d947699da362d3a7b41e6d66)): ?>
<?php $component = $__componentOriginal01f50869d947699da362d3a7b41e6d66; ?>
<?php unset($__componentOriginal01f50869d947699da362d3a7b41e6d66); ?>
<?php endif; ?>
                    </div>
                </div>

                <div class="col-sm-8">
                    <div class="float-end">
                        <?php if($$module_name_singular->status != 2 && $$module_name_singular->id != 1): ?>
                        <a href="<?php echo e(route('backend.users.block', $$module_name_singular)); ?>" class="btn btn-danger" data-method="PATCH" data-token="<?php echo e(csrf_token()); ?>" data-toggle="tooltip" title="<?php echo e(__('labels.backend.block')); ?>" data-confirm="Are you sure?"><i class="fas fa-ban"></i></a>
                        <?php endif; ?>
                        <?php if($$module_name_singular->status == 2): ?>
                        <a href="<?php echo e(route('backend.users.unblock', $$module_name_singular)); ?>" class="btn btn-info" data-method="PATCH" data-token="<?php echo e(csrf_token()); ?>" data-toggle="tooltip" title="<?php echo e(__('labels.backend.unblock')); ?>" data-confirm="Are you sure?"><i class="fas fa-check"></i> Unblock</a>
                        <?php endif; ?>
                        <?php if($$module_name_singular->email_verified_at == null): ?>
                        <a href="<?php echo e(route('backend.users.emailConfirmationResend', $$module_name_singular->id)); ?>" class="btn btn-primary" data-toggle="tooltip" title="Send Confirmation Email"><i class="fas fa-envelope"></i></a>
                        <?php endif; ?>
                        <?php if($$module_name_singular->id != 1): ?>
                        <a href="<?php echo e(route("backend.$module_name.destroy", $$module_name_singular)); ?>" class="btn btn-danger" data-method="DELETE" data-token="<?php echo e(csrf_token()); ?>" data-toggle="tooltip" title="<?php echo e(__('labels.backend.delete')); ?>"><i class="fas fa-trash-alt"></i> Delete</a>
                        <?php endif; ?>
                        <?php if (isset($component)) { $__componentOriginal03c0e80d38d2a15cf58878ae679803f0 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal03c0e80d38d2a15cf58878ae679803f0 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.backend.buttons.return-back','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('backend.buttons.return-back'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?><?php echo app('translator')->get('Cancel'); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal03c0e80d38d2a15cf58878ae679803f0)): ?>
<?php $attributes = $__attributesOriginal03c0e80d38d2a15cf58878ae679803f0; ?>
<?php unset($__attributesOriginal03c0e80d38d2a15cf58878ae679803f0); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal03c0e80d38d2a15cf58878ae679803f0)): ?>
<?php $component = $__componentOriginal03c0e80d38d2a15cf58878ae679803f0; ?>
<?php unset($__componentOriginal03c0e80d38d2a15cf58878ae679803f0); ?>
<?php endif; ?>
                    </div>
                </div>
            </div>
            <?php echo e(html()->closeModelForm()); ?>

        </div>
        <!--/.col-->
    </div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginald36b52f60875c92b52c37822caf252de)): ?>
<?php $attributes = $__attributesOriginald36b52f60875c92b52c37822caf252de; ?>
<?php unset($__attributesOriginald36b52f60875c92b52c37822caf252de); ?>
<?php endif; ?>
<?php if (isset($__componentOriginald36b52f60875c92b52c37822caf252de)): ?>
<?php $component = $__componentOriginald36b52f60875c92b52c37822caf252de; ?>
<?php unset($__componentOriginald36b52f60875c92b52c37822caf252de); ?>
<?php endif; ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('backend.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\caratamir\resources\views/backend/users/edit.blade.php ENDPATH**/ ?>