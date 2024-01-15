<div class="text-end">
    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('edit_'.$module_name)): ?>
    <?php if (isset($component)) { $__componentOriginal2069d544d3cc5860e4d89c6ceb57fc0f = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal2069d544d3cc5860e4d89c6ceb57fc0f = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.backend.buttons.edit','data' => ['route' => ''.route("backend.$module_name.edit", $data).'','title' => ''.e(__('Edit')).' '.e(ucwords(Str::singular($module_name))).'','small' => 'true']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('backend.buttons.edit'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['route' => ''.route("backend.$module_name.edit", $data).'','title' => ''.e(__('Edit')).' '.e(ucwords(Str::singular($module_name))).'','small' => 'true']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal2069d544d3cc5860e4d89c6ceb57fc0f)): ?>
<?php $attributes = $__attributesOriginal2069d544d3cc5860e4d89c6ceb57fc0f; ?>
<?php unset($__attributesOriginal2069d544d3cc5860e4d89c6ceb57fc0f); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal2069d544d3cc5860e4d89c6ceb57fc0f)): ?>
<?php $component = $__componentOriginal2069d544d3cc5860e4d89c6ceb57fc0f; ?>
<?php unset($__componentOriginal2069d544d3cc5860e4d89c6ceb57fc0f); ?>
<?php endif; ?>
    <?php endif; ?>
    <?php if (isset($component)) { $__componentOriginal4641b16a0da73e489a5f597c8c13579e = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal4641b16a0da73e489a5f597c8c13579e = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.backend.buttons.show','data' => ['route' => ''.route("backend.$module_name.show", $data).'','title' => ''.e(__('Show')).' '.e(ucwords(Str::singular($module_name))).'','small' => 'true']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('backend.buttons.show'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['route' => ''.route("backend.$module_name.show", $data).'','title' => ''.e(__('Show')).' '.e(ucwords(Str::singular($module_name))).'','small' => 'true']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal4641b16a0da73e489a5f597c8c13579e)): ?>
<?php $attributes = $__attributesOriginal4641b16a0da73e489a5f597c8c13579e; ?>
<?php unset($__attributesOriginal4641b16a0da73e489a5f597c8c13579e); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal4641b16a0da73e489a5f597c8c13579e)): ?>
<?php $component = $__componentOriginal4641b16a0da73e489a5f597c8c13579e; ?>
<?php unset($__componentOriginal4641b16a0da73e489a5f597c8c13579e); ?>
<?php endif; ?>
</div>
<?php /**PATH C:\xampp\htdocs\caratamir\resources\views/backend/includes/action_column.blade.php ENDPATH**/ ?>