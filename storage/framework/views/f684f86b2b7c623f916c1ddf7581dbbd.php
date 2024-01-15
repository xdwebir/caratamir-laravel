<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps(["route"=>"", "icon"=>"fas fa-wrench", "title", "small"=>"", "class"=>""]) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps(["route"=>"", "icon"=>"fas fa-wrench", "title", "small"=>"", "class"=>""]); ?>
<?php foreach (array_filter((["route"=>"", "icon"=>"fas fa-wrench", "title", "small"=>"", "class"=>""]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>

<?php if($route): ?>
<a href='<?php echo e($route); ?>'
    class='btn btn-primary m-1 <?php echo e(($small=='true')? 'btn-sm' : ''); ?> <?php echo e($class); ?>'
    data-toggle="tooltip"
    title="<?php echo e($title); ?>">
    <i class="<?php echo e($icon); ?>"></i>
    <?php echo e($slot); ?>

</a>
<?php else: ?>
<button type="submit"
    class='btn btn-primary m-1 <?php echo e(($small=='true')? 'btn-sm' : ''); ?> <?php echo e($class); ?>'
    data-toggle="tooltip"
    title="<?php echo e($title); ?>">
    <i class="<?php echo e($icon); ?>"></i>
    <?php echo e($slot); ?>

</button>
<?php endif; ?>
<?php /**PATH C:\xampp\htdocs\caratamir\resources\views/components/backend/buttons/edit.blade.php ENDPATH**/ ?>