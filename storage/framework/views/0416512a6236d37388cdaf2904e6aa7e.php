<?php $__env->startSection('title'); ?> <?php echo app('translator')->get("Dashboard"); ?> <?php $__env->stopSection(); ?>

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
<div class="card mb-4 ">
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
            <?php echo app('translator')->get("Welcome to", ['name'=>config('app.name')]); ?>

             <?php $__env->slot('subtitle', null, []); ?> 
                <?php echo e(date_today()); ?>

             <?php $__env->endSlot(); ?>
             <?php $__env->slot('toolbar', null, []); ?> 
                <button class="btn btn-outline-primary mb-1" type="button" data-toggle="tooltip" data-coreui-placement="top" title="Tooltip">
                    <i class="fa-solid fa-bullhorn"></i>
                </button>
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

        <!-- Dashboard Content Area -->
        
        <!-- / Dashboard Content Area -->

    </div>
</div>

<?php echo $__env->make("backend.includes.dashboard_demo_data", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('backend.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\caratamir\resources\views/backend/index.blade.php ENDPATH**/ ?>