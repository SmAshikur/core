
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
        <h1 class="display-3 text-uppercase mb-3"><?php echo e(optional($courses[0])->category); ?></h1>
        <div class="d-inline-flex text-white">
            <h6 class="text-uppercase m-0"><a class="text-white" href="">Home</a></h6>
            <h6 class="m-0 px-3">/</h6>
            <h6 class="text-uppercase m-0"><?php echo e(optional($courses[0])->category); ?></h6>
        </div>
    </div>
    <!-- Page Header Start -->

  <!-- Page Content-->
  <div class="container pt-3 pb-3">
    <div class="row pb-4">
        <?php $__currentLoopData = $courses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-lg-4 col-md-6">
                <a href="<?php echo e(route('single-course',$item->slug)); ?>" class="card mb-4 faq-box">
                    <img class="img-fluid" style="height:250px;object-fit:cover;" src="<?php echo e($item->image ? asset('assets/images/'.optional($item)->image) : asset('assets/images/placeholder.png')); ?>"alt="No Image Found">
                    <div class="card-body">
                        <h6 class="card-title"><?php echo e(optional($item)->title); ?></h6>
                        <p class="card-text"><?php echo Str::limit(optional($item)->description,230); ?></p>
                        <small><b>Price : </b> $<?php echo e(optional($item)->price); ?> <i><?php echo e(optional($item)->time); ?></i></small><br/>
                        <span class="text-sm text-muted link"><?php echo e(__('View Details')); ?> <i class="icon-chevron-right"></i></span>
                    </div>
                </a>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
  </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('master.front', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home3/therapylabonline/public_html/core/resources/views/front/course/course.blade.php ENDPATH**/ ?>