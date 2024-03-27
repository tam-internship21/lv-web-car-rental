
<?php $__env->startSection('title',"404 Error"); ?>
<?php $__env->startSection('content'); ?>
<div class="col-md-8">
    <div class="form-input-content text-center error-page">
        <h1 class="error-text font-weight-bold">404</h1>
        <h4><i class="fa fa-exclamation-triangle text-warning"></i> The page you were looking for is not found!</h4>
        <p>You may have mistyped the address or the page may have moved.</p>
        <div>
            <a class="btn btn-primary" href="/login.html">Back to Home</a>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('ICO::layoutpage', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/wallet_wta_finance/public_html/app/Modules/ICO/Views/page/404.blade.php ENDPATH**/ ?>