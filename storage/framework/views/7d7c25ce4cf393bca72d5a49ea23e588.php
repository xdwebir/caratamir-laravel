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
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.backend-breadcrumb-item','data' => ['type' => 'active','icon' => ''.e($module_icon).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('backend-breadcrumb-item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['type' => 'active','icon' => ''.e($module_icon).'']); ?><?php echo e(__($module_title)); ?> <?php echo $__env->renderComponent(); ?>
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
<div class="card">
    <div class="card-body">

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
                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('add_'.$module_name)): ?>
                <?php if (isset($component)) { $__componentOriginal9b9e18b95e82fd4467419c83b8a91f29 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9b9e18b95e82fd4467419c83b8a91f29 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.buttons.create','data' => ['route' => ''.e(route("backend.$module_name.create")).'','title' => ''.e(__('Create')).' '.e(ucwords(Str::singular($module_name))).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('buttons.create'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['route' => ''.e(route("backend.$module_name.create")).'','title' => ''.e(__('Create')).' '.e(ucwords(Str::singular($module_name))).'']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal9b9e18b95e82fd4467419c83b8a91f29)): ?>
<?php $attributes = $__attributesOriginal9b9e18b95e82fd4467419c83b8a91f29; ?>
<?php unset($__attributesOriginal9b9e18b95e82fd4467419c83b8a91f29); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9b9e18b95e82fd4467419c83b8a91f29)): ?>
<?php $component = $__componentOriginal9b9e18b95e82fd4467419c83b8a91f29; ?>
<?php unset($__componentOriginal9b9e18b95e82fd4467419c83b8a91f29); ?>
<?php endif; ?>
                <?php endif; ?>

                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('restore_'.$module_name)): ?>
                <div class="btn-group">
                    <button class="btn btn-secondary dropdown-toggle" type="button" data-coreui-toggle="dropdown" aria-expanded="false">
                        <i class="fas fa-cog"></i>
                    </button>
                    <ul class="dropdown-menu">
                        <li>
                            <a class="dropdown-item" href='<?php echo e(route("backend.$module_name.trashed")); ?>'>
                                <i class="fas fa-eye-slash"></i> نمایش حذف شده ها
                            </a>
                        </li>
                    </ul>
                </div>
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

        <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('users-index', [])->html();
} elseif ($_instance->childHasBeenRendered('83QKzJo')) {
    $componentId = $_instance->getRenderedChildComponentId('83QKzJo');
    $componentTag = $_instance->getRenderedChildComponentTagName('83QKzJo');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('83QKzJo');
} else {
    $response = \Livewire\Livewire::mount('users-index', []);
    $html = $response->html();
    $_instance->logRenderedChild('83QKzJo', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>

    </div>
    <div class="card-footer">

    </div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\caratamir\resources\views/backend/users/index.blade.php ENDPATH**/ ?>