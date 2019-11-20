<?php $__env->startSection('content'); ?>

<div class="container">
    <h2><b><?php echo e($place->nama); ?></b></h2>
    <h5>Candi</h5>
    <ul class="list-inline">
        <li class="list-inline-item my-3">
            <img src="/images/<?php echo e($place['gambar']); ?>" style="width: 1100px; height: 500px;" alt="...">
        </li>
    </ul>
    <ul class="list-inline">
        <li class="list-inline-item p-3" style="background-color: #94C89F">
            <h3 style="color: white">
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <?php echo e($place->deskripsi); ?>

            </h3>
        </li>
        <li class="list-inline-item my-3">`
            
        </li>
    </ul>
</div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /opt/lampp/htdocs/PlesirJogja/resources/views/Places/show.blade.php ENDPATH**/ ?>