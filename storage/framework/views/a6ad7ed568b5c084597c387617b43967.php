<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps(["small"=>""]) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps(["small"=>""]); ?>
<?php foreach (array_filter((["small"=>""]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>
<button onclick="window.history.back();" class="btn btn-warning m-1 <?php echo e(($small=='true')? 'btn-sm' : ''); ?>" data-toggle="tooltip" title="<?php echo e(__('Return Back')); ?>"><i class="fas fa-reply"></i>&nbsp;<?php echo e($slot); ?></button><?php /**PATH C:\xampp\htdocs\caratamir\resources\views/components/backend/buttons/return-back.blade.php ENDPATH**/ ?>