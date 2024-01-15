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
<?php if (isset($component)) { $__componentOriginal593cc07d57ff55114f4fd57c5b40afcb = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal593cc07d57ff55114f4fd57c5b40afcb = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.backend.layouts.show','data' => ['data' => $$module_name_singular,'moduleName' => $module_name,'modulePath' => $module_path,'moduleTitle' => $module_title,'moduleIcon' => $module_icon,'moduleAction' => $module_action]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('backend.layouts.show'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['data' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($$module_name_singular),'module_name' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($module_name),'module_path' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($module_path),'module_title' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($module_title),'module_icon' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($module_icon),'module_action' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($module_action)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal593cc07d57ff55114f4fd57c5b40afcb)): ?>
<?php $attributes = $__attributesOriginal593cc07d57ff55114f4fd57c5b40afcb; ?>
<?php unset($__attributesOriginal593cc07d57ff55114f4fd57c5b40afcb); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal593cc07d57ff55114f4fd57c5b40afcb)): ?>
<?php $component = $__componentOriginal593cc07d57ff55114f4fd57c5b40afcb; ?>
<?php unset($__componentOriginal593cc07d57ff55114f4fd57c5b40afcb); ?>
<?php endif; ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('backend.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\caratamir\Modules/Order/Resources/views/backend/orders/show.blade.php ENDPATH**/ ?>