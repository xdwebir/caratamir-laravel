<div class="sidebar sidebar-dark sidebar-fixed" id="sidebar">
    <div class="sidebar-brand d-none d-md-flex">
        <a href="<?php echo e(route('backend.dashboard')); ?>">
            <img class="sidebar-brand-full" src="<?php echo e(asset('img/backend-logo.jpg')); ?>" height="46" alt="<?php echo e(app_name()); ?>">
            <img class="sidebar-brand-narrow" src="<?php echo e(asset('img/backend-logo-square.jpg')); ?>" height="46" alt="<?php echo e(app_name()); ?>">
        </a>
    </div>

    <?php echo $admin_sidebar->asUl( ['class' => 'sidebar-nav', 'data-coreui'=>'navigation', 'data-simplebar'], ['class' => 'nav-group-items'] ); ?>


    <button class="sidebar-toggler" type="button" data-coreui-toggle="unfoldable"></button>
</div><?php /**PATH C:\xampp\htdocs\caratamir\resources\views/backend/includes/sidebar.blade.php ENDPATH**/ ?>