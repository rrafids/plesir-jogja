<?php $__env->startSection('content'); ?>


    <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel" style="margin-top: -120px">
        <div class="carousel-inner">
            <div class="carousel-item active">
            <img src="<?php echo e(url('/images/hutran.jpg')); ?>" class="d-block w-100" alt="..." style="width: 100%; height: 700px;">
        </div>
        <div class="carousel-item">
            <img src="<?php echo e(url('/images/sungai.jpg')); ?>" class="d-block w-100" alt="..." style="width: 100%; height: 700px;">
        </div>
        <div class="carousel-item">
            <img src="<?php echo e(url('/images/rumah.jpg')); ?>" class="d-block w-100" alt="..." style="width: 100%; height: 700px;">
        </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <div class="container">
        <h2 class="px-3 py-3" style="font-size: 45px; position: absolute; background-color: green; margin-top: -400px; color: white; z-index: 2">
            <b>Cari</b> Wisata Tujuanmu
        </h2>
        <h2 class="px-3 py-3" style="font-size: 45px; position: absolute; background-color: white; margin-top: -320px; color: green; z-index: 2">
            <b>Beli</b> Tiketnya
        </h2>
        <div class="row">
            <div class="col-30">
                <div class="input-group ml-2 mb-5" style="width: 1090px; margin-top: -100px; margin-bot: 100px">
                    <input type="search" class="cari form-control" placeholder="Cari Obyek Wisata..." name="search" id="search" style="height: 60px; font-size: 20px; z-index: 2">
                </div> <br> <br> <br>
                <h2 style="color: green; font-weight: bold; text-align: center">Destinasi Populer di Jogja</h2>
                <br> <br>  
                <ul class="list-inline" id="tabel">
                    <?php $__currentLoopData = $places; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $place): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li class="list-inline-item my-2 mx-2" style="height: 300px">
                                <div class="card" style="width: 25rem">
                                    <div class="zoom-effect">
                                        <div class="kotak">
                                            <img src="/images/<?php echo e($place['gambar']); ?>" class="zoom" style="width: 350px; height: 300px;" alt="...">
                                        </div>               
                                    <div class="card-body" style="margin-top: -150px; color: white; position: absolute">
                                        <a href="/places/<?php echo e($place->id); ?>" >
                                            <h2 style="color: white; font-weight: bold" class="card-img-top"><?php echo e($place['nama']); ?></h2>
                                            <b style="color: #A1DA9E; font-size: 25px"><?php echo e($place->rating); ?></b>/5
                                        </a> <br>
                                        <a href="/places/<?php echo e($place->id); ?>" class="btn btn-primary" style="margin-left: 220px">Lihat Detail</a>
                                    </div>
                                </div>
                            </li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>  
            </div>
        </div>
    </div>

    <script>
            $(document).ready(function(){
                $('.zoom').hover(function() {
                    $(this).addClass('transisi');
                }, function() {
                    $(this).removeClass('transisi');
                });
            });  
        </script>
<?php $__env->stopSection(); ?>








<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /opt/lampp/htdocs/PlesirJogja/resources/views/Places/index.blade.php ENDPATH**/ ?>