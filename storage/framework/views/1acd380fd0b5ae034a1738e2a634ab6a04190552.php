
<?php $__env->startSection('meta'); ?>
<meta name="keywords" content="<?php echo e($setting->meta_keywords); ?>">
<meta name="description" content="<?php echo e($setting->meta_description); ?>">
<?php $__env->stopSection(); ?>
<?php $__env->startSection('title'); ?>
    <?php echo e(__('Teachers Traning')); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <!-- Page Title-->
 <!-- Page Header Start -->
    <div class="page-header container-fluid bg-primary d-flex flex-column align-items-center justify-content-center">
        <h1 class="display-3 text-uppercase mb-3">Bkahs Payment Form</h3>
        <div class="d-inline-flex text-white">
            <h6 class="text-uppercase m-0"><a class="text-white" href="">Home</a></h6>
            <h6 class="m-0 px-3">/</h6>
            <h6 class="text-uppercase m-0">Bkahs Payment</h6>
        </div>
    </div>
    <!-- Page Header Start -->

  <!-- Page Content-->
  <div class="container pt-3 pb-3">
    <div class="row pb-4">
        <div class="col-md-12">
            <h3>Bkahs Payment Form</h3>
            <div class="mt-4 card shadow border">
                <div class="card-body">
                    <h1><a href="<?php echo e(route('result.children')); ?>" class="btn btn-sm btn-success">Complete Your Payment</a></h1>
                </div>
            </div>
        </div>
    </div>
  </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('master.front', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home3/therapylabonline/public_html/core/resources/views/front/assisment/result/bkash_payment.blade.php ENDPATH**/ ?>