<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps(["route"=>"#", "icon"=>"", "title"=>"", "type"=>""]) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps(["route"=>"#", "icon"=>"", "title"=>"", "type"=>""]); ?>
<?php foreach (array_filter((["route"=>"#", "icon"=>"", "title"=>"", "type"=>""]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>

<?php if($type): ?>
<li class="breadcrumb-item active">
    <span>
        <?php if($icon): ?><i class="<?php echo e($icon); ?>"></i><?php endif; ?>
        <?php echo e($slot); ?>

    </span>
</li>
<?php else: ?>
<li class="breadcrumb-item">
    <a href='<?php echo e($route); ?>'>
        <i class="<?php echo e($icon); ?>"></i>
        <?php echo e($slot); ?>

    </a>
</li>
<?php endif; ?>
<?php /**PATH C:\xampp\htdocs\caratamir\resources\views/components/backend-breadcrumb-item.blade.php ENDPATH**/ ?>