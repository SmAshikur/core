<?php $__currentLoopData = $datas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=> $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<tr>
    <td>#<?php echo e($data->order_id); ?></td>
    <td>
        <?php echo e($data->course_id); ?>

    </td>
    <td>
        <?php echo e($data->name); ?>

    </td>
    <td>
        <?php echo e($data->email); ?>

    </td>
    <td>
        <?php echo e($data->phone); ?>

    </td>
    <td>
        <?php echo e($data->address); ?>

    </td>
    <td>
        <div class="dropdown">
            <button class="btn btn-<?php echo e($data->status == 1 ? 'success' : 'danger'); ?> btn-sm  dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <?php echo e($data->status == 1 ? __('Pending') : __('Deliverd')); ?>

            </button>
            <div class="dropdown-menu animated--fade-in" aria-labelledby="dropdownMenuButton">
              <a class="dropdown-item" href="<?php echo e(route('back.corse_order.status',[$data->id,1,'status'])); ?>"><?php echo e(__('Pending')); ?></a>
              <a class="dropdown-item" href="<?php echo e(route('back.corse_order.status',[$data->id,0,'status'])); ?>"><?php echo e(__('Deliverd')); ?></a>
            </div>
        </div>
    </td>
   
    <td>
        <div class="action-list">
            <a class="btn btn-secondary btn-sm "
                href="<?php echo e(route('back.course.edit',$data->id)); ?>">
                <i class="fas fa-edit"></i>
            </a>
            <a class="btn btn-danger btn-sm " data-toggle="modal"
                data-target="#confirm-delete" href="javascript:;"
                data-href="<?php echo e(route('back.course.destroy',$data->id)); ?>">
                <i class="fas fa-trash-alt"></i>
            </a>
        </div>
    </td>
</tr>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php /**PATH /home3/therapylabonline/public_html/core/resources/views/back/course/order_table.blade.php ENDPATH**/ ?>