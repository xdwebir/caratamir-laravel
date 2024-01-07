<?php if($errors->any()): ?>
<div class="alert alert-danger" role="alert">
    <p>
        <i class="fa fa-exclamation-triangle"></i> <?php echo e(__('Please fix the following errors & try again!')); ?>

    </p>
    <ul>
        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <li><?php echo e($error); ?></li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>
</div>
<?php endif; ?>

<?php if (isset($component)) { $__componentOriginal96031147be5983e70892f56ce73af4cf = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal96031147be5983e70892f56ce73af4cf = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.frontend.flash-message','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('frontend.flash-message'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal96031147be5983e70892f56ce73af4cf)): ?>
<?php $attributes = $__attributesOriginal96031147be5983e70892f56ce73af4cf; ?>
<?php unset($__attributesOriginal96031147be5983e70892f56ce73af4cf); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal96031147be5983e70892f56ce73af4cf)): ?>
<?php $component = $__componentOriginal96031147be5983e70892f56ce73af4cf; ?>
<?php unset($__componentOriginal96031147be5983e70892f56ce73af4cf); ?>
<?php endif; ?>

<?php if(session('status')): ?>
<p class="alert alert-success"><?php echo e(session('status')); ?></p>
<?php endif; ?><?php /**PATH C:\xampp\htdocs\caratamir\resources\views/frontend/includes/messages.blade.php ENDPATH**/ ?>