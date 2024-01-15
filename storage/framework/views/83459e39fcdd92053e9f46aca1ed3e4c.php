<?php $__env->startSection('title'); ?>
    <?php echo e($$module_name_singular->name); ?>پروفایل
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <section class="container">
        <div class="row">
            <div class="col-sm-3 my-4">
                <div class="p-3 shadow-lg text-center">
                    <div class="">
                        <h3 class="">
                            <?php echo e($$module_name_singular->name); ?>

                        </h3>

                        <?php if(auth()->guard()->check()): ?>

                            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('view_frontend_accountant')): ?>
                                <div class="mt-4">
                                    <a class="text-decoration-none text-dark" href='<?php echo e(route('frontend.payments.confirmlist')); ?>'>
                                        <div class="">
                                            تایید پرداخت
                                        </div>
                                    </a>
                                </div>
                            <?php endif; ?>
                            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('view_frontend_service_provider')): ?>
                                <div class="mt-4">
                                    <a class="text-decoration-none text-dark" href='<?php echo e(route('frontend.provider.orders.orderhistory')); ?>'>
                                        <div class="">
                                            تاریخچه سفارشات
                                        </div>
                                    </a>
                                </div>
                                <div class="mt-4">
                                    <a class="text-decoration-none text-dark"
                                        href='<?php echo e(route('frontend.payments.paymenthistory')); ?>'>
                                        <div class="">
                                            تاریخچه پرداخت
                                        </div>
                                    </a>
                                </div>
                                <div class="mt-4">
                                    <a class="text-decoration-none text-dark" href='<?php echo e(route('frontend.payments.create')); ?>'>
                                        <div class="">
                                            ثبت رسید پرداخت
                                        </div>
                                    </a>
                                </div>
                                <div class="mt-4">
                                    <a class="text-decoration-none text-dark" href='<?php echo e(route('frontend.provider.orders.pricedefinelist')); ?>'>
                                        <div class="">
                                            ثبت قیمت تمام شده
                                        </div>
                                    </a>
                                </div>
                                <div class="mt-4" class="mt-4">
                                    <a class="text-decoration-none text-dark"
                                        href='<?php echo e(route('frontend.providerprofiles.edit', ['id' => auth()->user()->id])); ?>'>
                                        <div class="">
                                            ویرایش پروفایل خدمات
                                        </div>
                                    </a>
                                </div>
                            <?php endif; ?>


                            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('view_frontend_operator')): ?>
                                <div class="mt-4">
                                    <a class="text-decoration-none text-dark" href='<?php echo e(route('frontend.operator.orders.waitinglist')); ?>'>
                                        <div class="">
                                            تایید سفارشات
                                        </div>
                                    </a>
                                </div>
                                <div class="mt-4">
                                    <a class="text-decoration-none text-dark" href='<?php echo e(route('frontend.operator.orders.orderhistory')); ?>'>
                                        <div class="">
                                            تاریخچه سفارشات
                                        </div>
                                    </a>
                                </div>
                            <?php endif; ?>

                            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('view_frontend_customer')): ?>
                                <div class="mt-4">
                                    <a class="text-decoration-none text-dark" href='<?php echo e(route('frontend.customer.orders.create')); ?>'>
                                        <div class="">
                                            ثبت سفارش
                                        </div>
                                    </a>
                                </div>
                                <div class="mt-4">
                                    <a class="text-decoration-none text-dark" href='<?php echo e(route('frontend.customer.orders.orderhistory')); ?>'>
                                        <div class="">
                                            تاریخچه سفارشات
                                        </div>
                                    </a>
                                </div>
                            <?php endif; ?>

                            <div class="mt-4">
                                <a class="text-decoration-none text-dark"
                                    href='<?php echo e(route('frontend.users.profileEdit', encode_id($$module_name_singular->id))); ?>'>
                                    <div class="">
                                        ویرایش پروفایل
                                    </div>
                                </a>
                            </div>

                            <div class="mt-4">
                                <a class="text-decoration-none text-dark"
                                    href="<?php echo e(route('frontend.users.changePassword', encode_id($$module_name_singular->id))); ?>">
                                    <div class="">
                                        تغییر کلمه عبور
                                    </div>
                                </a>
                            </div>
                        <?php endif; ?>

                    </div>
                </div>
            </div>
            <div class="col-sm-9 my-4">
                <div class="p-4 shadow-lg">
                    <h3 class="">
                        پروفایل
                    </h3>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="">
                                <span class="">نام: </span>
                                <span class=""><?php echo e($$module_name_singular->first_name); ?></span>
                            </div>
                            <div class="">
                                <span class="">نام خانوادگی: </span>
                                <span class=""><?php echo e($$module_name_singular->last_name); ?></span>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="">
                                <span class="">ایمیل: </span>
                                <span class=""><?php echo e($$module_name_singular->email); ?></span>
                            </div>
                            <div class="">
                                <span class="">موبایل:</span>
                                <span class=""><?php echo e($$module_name_singular->mobile); ?></span>
                            </div>
                        </div>
                    </div>
                </div>
                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('view_frontend_service_provider')): ?>
                    <div class="mt-4 p-4 shadow-lg">
                        بدهی شما: <?php echo e($sumpay); ?> تومان
                    </div>
                <?php endif; ?>

            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('after-scripts'); ?>
    <script type="module" src="https://cdn.jsdelivr.net/npm/sharer.js@latest/sharer.min.js"></script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('frontend.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\caratamir\resources\views/frontend/users/profile.blade.php ENDPATH**/ ?>