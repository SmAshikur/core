<?php $__currentLoopData = $datas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=> $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<tr>
    <td>#<?php echo e($key+1); ?></td>
    <td>
        <?php echo e($data->category); ?>

    </td>
    <td>
        <?php echo e($data->title); ?>

    </td>
    <td>
        <?php echo e(Str::limit($data->sub_title,10)); ?>

    </td>
    <td>
        <?php echo Str::limit(optional($data)->description,150); ?>

    </td>
    <td>
        <?php echo e($data->price); ?> $ <?php echo e($data->time); ?>

    </td>
    <td>
        <?php if($data->status == 1): ?>
        <a class="btn btn-success btn-sm">Active</a>
        <?php else: ?>
        <a class="btn btn-primary btn-sm">Inactive</a>
        <?php endif; ?>
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
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php /**PATH /home3/therapylabonline/public_html/core/resources/views/back/course/table.blade.php ENDPATH**/ ?>