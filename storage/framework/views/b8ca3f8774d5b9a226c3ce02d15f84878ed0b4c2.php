<?php $__env->startSection('content'); ?>

<div class="container">
    <h2><b><?php echo e($place->nama); ?></b></h2>
    <h5>Candi</h5>
    <ul class="list-inline my-3">
        <li class="list-inline-item" >
            
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner" style="width: 697px; height: 455px;">
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="/images/<?php echo e($place['gambar']); ?>" alt="First slide" style="width: 697px; height: 455px;">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="/images/<?php echo e($place['gambar']); ?>" alt="Second slide" style="width: 697px; height: 455px;">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="/images/<?php echo e($place['gambar']); ?>" alt="Third slide" style="width: 697px; height: 455px;">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </li>
        <li class="list-inline-item">
            <div id='map' style='width: 400px; height: 275px; position: absolute; top: 190px;'></div>
            <script>
                mapboxgl.accessToken = 'pk.eyJ1IjoicnJhZmlkczE3IiwiYSI6ImNrM2F4dXZrYjA3ajgzbG51M3JrMXR6bnUifQ.ja3BRkAopqWe8Mv7nsj0Ow';
                var map = new mapboxgl.Map({
                    container: 'map',
                    style: 'mapbox://styles/mapbox/streets-v11'
                });
            </script>
            <h5 style="border: solid 1px #78FFC4; margin-top: -30px; padding: 10px; padding-left: 15px; position: absolute; top: 525px;">
                Buka: <?php echo e($place->buka); ?>-<?php echo e($place->tutup); ?>

                <hr>
                Tiket: Rp <?php echo e($place->harga_tiket); ?> 
                <hr>
                <button class="btn btn-success" style="width: 370px">Beli Tiket</button>
            </h5>
        </li>
    </ul>
    <ul class="list-inline">
        <li class="list-inline-item" style="height: 150px; background-color: #E8FAF2; padding: 20px;">
            <h3 class="mb-3">
                <b> Tentang <?php echo e($place->nama); ?> </b>
                <br>
            </h3>
            <h4>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <?php echo e($place->deskripsi); ?>

            </h4>
        </li>
    </ul>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /opt/lampp/htdocs/PlesirJogja/resources/views/Places/show.blade.php ENDPATH**/ ?>