<footer class="footer text-muted mt-4">
    <div>
        <small>
            <a href="/" class="text-muted"><?php echo e(app_name()); ?></a>.
            <?php if(setting('show_copyright')): ?>
            <?php echo app('translator')->get('Copyright'); ?> &copy; <?php echo e(date('Y')); ?>

            <?php endif; ?>
        </small>
    </div>
    <div class="ms-auto"> <small><?php echo setting('footer_text'); ?></small> </div>
</footer><?php /**PATH C:\xampp\htdocs\caratamir\resources\views/backend/includes/footer.blade.php ENDPATH**/ ?>