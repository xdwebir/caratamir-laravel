<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps(["data"=>"", "module_name"]) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps(["data"=>"", "module_name"]); ?>
<?php foreach (array_filter((["data"=>"", "module_name"]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>
<p>
    <?php echo app('translator')->get("All values of :module_name (Id: :id)", ['module_name'=>ucwords(Str::singular($module_name)), 'id'=>$data->id]); ?>
</p>
<table class="table table-responsive-sm table-hover table-bordered">
    <?php
    $all_columns = $data->getTableColumns();
    ?>
    <thead>
        <tr>
            <th scope="col">
                <strong>
                    <?php echo app('translator')->get('Name'); ?>
                </strong>
            </th>
            <th scope="col">
                <strong>
                    <?php echo app('translator')->get('Value'); ?>
                </strong>
            </th>
        </tr>
    </thead>
    <tbody>
        <?php $__currentLoopData = $all_columns; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $column): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td>
                <strong>
                    <?php echo e(__(label_case($column->Field))); ?>

                </strong>
            </td>
            <td>
                <?php echo show_column_value($data, $column); ?>

            </td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table>


<?php if (isset($component)) { $__componentOriginala2772d123992ff773f161a8f4fee8224 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginala2772d123992ff773f161a8f4fee8224 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.library.lightbox','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('library.lightbox'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginala2772d123992ff773f161a8f4fee8224)): ?>
<?php $attributes = $__attributesOriginala2772d123992ff773f161a8f4fee8224; ?>
<?php unset($__attributesOriginala2772d123992ff773f161a8f4fee8224); ?>
<?php endif; ?>
<?php if (isset($__componentOriginala2772d123992ff773f161a8f4fee8224)): ?>
<?php $component = $__componentOriginala2772d123992ff773f161a8f4fee8224; ?>
<?php unset($__componentOriginala2772d123992ff773f161a8f4fee8224); ?>
<?php endif; ?><?php /**PATH C:\xampp\htdocs\caratamir\resources\views/components/backend/section-show-table.blade.php ENDPATH**/ ?>