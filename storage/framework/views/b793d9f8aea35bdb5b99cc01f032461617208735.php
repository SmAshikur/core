
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
        <h1 class="display-3 text-uppercase mb-3">Order Page</h1>
        <div class="d-inline-flex text-white">
            <h6 class="text-uppercase m-0"><a class="text-white" href="">Home</a></h6>
            <h6 class="m-0 px-3">/</h6>
            <h6 class="text-uppercase m-0">order</h6>
        </div>
    </div>
    <!-- Page Header Start -->

  <!-- Page Content-->
  <div class="container pt-3 pb-3">
    <div class="row pb-4">
        <div class="col-md-8 text-center mx-auto ">
            <div class="card border border-secondery shadow p-5">
                <h3>Congratulations !!! Your Order Submited</h3>
                <p>Course Title :- <?php echo e($course->title); ?></p>
                <p>Order Id:- <span class="badge badge-warning"><?php echo e($order->order_id); ?></span></p>
                <small class="alert alert-success">Please Take A Screenshoot This Order</small>
            </div>
        </div>
    </div>
  </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('master.front', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home3/therapylabonline/public_html/core/resources/views/front/course/order.blade.php ENDPATH**/ ?>