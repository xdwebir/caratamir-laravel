<?php
$notifications = optional(auth()->user())->unreadNotifications;
$notifications_count = optional($notifications)->count();
$notifications_latest = optional($notifications)->take(5);
?>

<header class="header header-sticky mb-2">
    <div class="container-fluid">
        <button class="header-toggler px-md-0 me-md-3" type="button" onclick="coreui.Sidebar.getInstance(document.querySelector('#sidebar')).toggle()">
            <i class="fa-solid fa-bars"></i>
        </button>
        <a class="header-brand d-sm-none" href="#">
            <img class="sidebar-brand-full" src="<?php echo e(asset('img/backend-logo-square.jpg')); ?>" height="46" alt="<?php echo e(app_name()); ?>">
        </a>
        <ul class="header-nav d-none d-md-flex">
            <li class="nav-item"><a class="nav-link" href="<?php echo e(route('frontend.index')); ?>" target="_blank"><?php echo e(app_name()); ?>&nbsp;<i class="fa-solid fa-arrow-up-right-from-square"></i></a></li>
        </ul>
        <ul class="header-nav ms-auto">
            <li class="nav-item dropdown">
                <a class="nav-link" data-coreui-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                    <i class="fa-regular fa-bell"></i>
                    &nbsp; <?php if($notifications_count): ?><span class="badge badge-pill bg-danger"><?php echo e($notifications_count); ?></span><?php endif; ?>
                </a>
                <div class="dropdown-menu dropdown-menu-end pt-0">
                    <div class="dropdown-header bg-light py-2">
                        <strong><?php echo app('translator')->get("You have :count notifications", ['count'=>$notifications_count]); ?></strong>
                    </div>

                    <?php if($notifications_latest): ?>
                    <?php $__currentLoopData = $notifications_latest; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $notification): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php
                    $notification_text = isset($notification->data['title'])? $notification->data['title'] : $notification->data['module'];
                    ?>
                    <a class="dropdown-item" href="<?php echo e(route("backend.notifications.show", $notification)); ?>">
                        <i class="<?php echo e(isset($notification->data['icon'])? $notification->data['icon'] : 'fa-solid fa-bullhorn'); ?> "></i>&nbsp;<?php echo e($notification_text); ?>

                    </a>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php endif; ?>
                </div>
            </li>
        </ul>

        <ul class="header-nav ms-3">
            <li class="nav-item dropdown">
                <a class="nav-link" data-coreui-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                    <i class="fa-solid fa-language"></i>&nbsp; <?php echo e(strtoupper(App::getLocale())); ?>

                </a>
                <div class="dropdown-menu dropdown-menu-end pt-0">
                    <div class="dropdown-header bg-light py-2">
                        <div class="fw-semibold"><?php echo e(__('Change language')); ?></div>
                    </div>
                </div>
            </li>

            <li class="nav-item dropdown">
                <a class="nav-link py-0" data-coreui-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                    <div class="avatar avatar-md">
                        <img class="avatar-img" src="<?php echo e(asset(auth()->user()->avatar)); ?>" alt="<?php echo e(asset(auth()->user()->name)); ?>">
                    </div>
                </a>
                <div class="dropdown-menu dropdown-menu-end pt-0">
                    <div class="dropdown-header bg-light py-2">
                        <div class="fw-semibold"><?php echo e(__('Account')); ?></div>
                    </div>

                    <a class="dropdown-item" href="<?php echo e(route('backend.users.profile', Auth::user()->id)); ?>">
                        <i class="fa-regular fa-user me-2"></i>&nbsp;<?php echo e(Auth::user()->name); ?>

                    </a>
                    <a class="dropdown-item" href="<?php echo e(route('backend.users.profile', Auth::user()->id)); ?>">
                        <i class="fa-regular fa-user me-2"></i>&nbsp;<?php echo e(Auth::user()->email); ?>

                    </a>

                    <div class="dropdown-divider"></div>

                    <a class="dropdown-item" href="<?php echo e(route('backend.notifications.index')); ?>">
                        <i class="fa-regular fa-bell me-2"></i>&nbsp;
                        <?php echo app('translator')->get('Notifications'); ?> <span class="badge bg-danger ml-auto"><?php echo e($notifications_count); ?></span>
                    </a>

                    <div class="dropdown-header bg-light py-2"><strong><?php echo app('translator')->get('Settings'); ?></strong></div>

                    <a class="dropdown-item" href="<?php echo e(route('logout')); ?>" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        <i class="fa-solid fa-right-from-bracket me-2"></i>&nbsp;
                        <?php echo app('translator')->get('Logout'); ?>
                    </a>
                    <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;"> <?php echo csrf_field(); ?> </form>
                </div>
            </li>
        </ul>
    </div>

    <div class="header-divider"></div>

    <div class="container-fluid">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb my-0 ms-2">
                <?php echo $__env->yieldContent('breadcrumbs'); ?>
            </ol>
        </nav>
        <div class="d-flex flex-row float-end">
            <div class=""><?php echo e(date_today()); ?>&nbsp;</div>
            <div id="liveClock" class="clock" onload="showTime()"></div>
        </div>
    </div>
</header>
<?php /**PATH C:\xampp\htdocs\caratamir\resources\views/backend/includes/header.blade.php ENDPATH**/ ?>