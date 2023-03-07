

<?php $__env->startSection('content'); ?>

<div class="container-fluid">

	<!-- Page Heading -->
    <div class="card mb-4">
        <div class="card-body">
            <div class="d-sm-flex align-items-center justify-content-between">
                <h3 class="mb-0 bc-title"><b><?php echo e(__('Edit Child Category')); ?></b> </h3>
                <a class="btn btn-primary btn-sm" href="<?php echo e(route('back.assessment.index')); ?>"><i class="fas fa-chevron-left"></i> <?php echo e(__('Back')); ?></a>
                </div>
        </div>
    </div>

	<!-- Form -->
	<div class="row">

		<div class="col-xl-12 col-lg-12 col-md-12">

			<div class="card o-hidden border-0 shadow-lg">
				<div class="card-body ">
					<!-- Nested Row within Card Body -->
					<div class="row justify-content-center">
						<div class="col-lg-12">
								<form class="admin-form" action="<?php echo e(route('back.assessment.update',$assessment->id)); ?>" method="POST"
									enctype="multipart/form-data">

                                    <?php echo csrf_field(); ?>
									<?php echo method_field('PUT'); ?>
									<?php echo $__env->make('alerts.alerts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

									<div class="form-group">
										<label for="category_id"><?php echo e(__('Select Category')); ?> *</label>
										<select name="category_id" id="category_id" class="form-control" >
											<option value="" disabled><?php echo e(__('Select One')); ?></option>
											<?php $__currentLoopData = DB::table('assessment_categories')->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
											<option value="<?php echo e($cat->id); ?>" <?php echo e($assessment->cat_id == $cat->id ? 'selected' :''); ?> ><?php echo e($cat->name); ?></option>
											<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
										</select>
									</div>

									<div class="form-group">
										<label for="question"><?php echo e(__('Name')); ?> *</label>
										<input type="text" name="question" class="form-control item-name" id="question"
											placeholder="<?php echo e(__('Enter Name')); ?>" value="<?php echo e($assessment->question); ?>" >
									</div>

									<div class="form-group">
										<label for="pattern"><?php echo e(__('pattern')); ?> *</label>
										<input type="text" name="pattern" class="form-control" id="pattern"
											placeholder="<?php echo e(__('Enter pattern')); ?>" value="<?php echo e($assessment->pattern); ?>" >
									</div>

								<div class="form-group">
										<button type="submit"
											class="btn btn-secondary "><?php echo e(__('Submit')); ?></button>
									</div>

									<div>
								</form>
						</div>
					</div>
				</div>
			</div>

		</div>

	</div>

</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('master.back', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\demo\bs\well-known\core\resources\views/back/tests/assessment/edit.blade.php ENDPATH**/ ?>