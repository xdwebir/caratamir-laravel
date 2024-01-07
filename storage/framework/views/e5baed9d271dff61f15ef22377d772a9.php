<?php $__env->startSection('title'); ?>
    <?php echo e(app_name()); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <section class="container-fluid p-0 m-0">
        <div class="row">
            <div class="col-sm-6">
                <img class="w-100" src="<?php echo e(asset('img/default-banner.jpg')); ?>">
            </div>
            <div class="col-sm-6 p-4">
                <h1 class="">
                    کارا تعمیر - CaraTamir.ir
                </h1>
                <h2>
                    امداد رسانی
                </h2>
                <h2>
                    یدک کش
                </h2>
                <h2>
                    تعمیرگاه
                </h2>
                <h2>
                    سرویس خودرو
                </h2>
                <?php if(auth()->guard()->guest()): ?>
                    <div class="p-4 m-4">
                        <a href="<?php echo e(route('register')); ?>" class="btn btn-primary p-2 mx-3">ثبت نام</a>
                    </div>
                <?php endif; ?>

                <?php echo $__env->make('frontend.includes.messages', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\caratamir\resources\views/frontend/index.blade.php ENDPATH**/ ?>