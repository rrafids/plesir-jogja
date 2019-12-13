<?php $__env->startSection('content'); ?>


    <div class="container">
        <div class="row">
            <div class="col-30">
                <h1 class="mt-5 mb-5 ml-2" style="font-weight: bold; color: green">
                    <img src="/images/beach.png" alt="" style="width: 200px"> <br> <br>
                    Obyek Wisata
                </h1> <br> 
                <div class="input-group ml-2" style="width: 300px; margin-top: -20px">
                    <input type="search" class="cari form-control" placeholder="Cari Obyek Wisata..." name="search" id="search">
                </div>
                <ul class="list-inline" id="tabel">
                    <?php $__currentLoopData = $places; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $place): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li class="list-inline-item my-3 mx-2">
                                    <div class="card" style="width: 25rem">
                                        <img src="/images/<?php echo e($place['gambar']); ?>" class="card-img" style="width: 350px; height: 300px;" alt="...">
                                        <div class="card-body" style="margin-top: -150px; color: white">
                                            <a href="/places/<?php echo e($place->id); ?>" ><h2 style="color: white; font-weight: bold" class="card-img-top"><?php echo e($place['nama']); ?></h2></a> <br>
                                            <br>
                                            <a href="/places/<?php echo e($place->id); ?>" class="btn btn-primary">Lihat Detail</a>
                                        </div>
                                    </div>
                                </li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>  
                <table>
                    <tbody>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>








<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /opt/lampp/htdocs/PlesirJogja/resources/views/Places/index.blade.php ENDPATH**/ ?>