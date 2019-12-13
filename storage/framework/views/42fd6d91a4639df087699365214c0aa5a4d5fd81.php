<?php $__env->startSection('content'); ?>
<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel" style="position: flex; margin-top: -140px">
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
        <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner" style="background-color: green">
        <div class="carousel-item active">
        <img src="<?php echo e(url('/images/bunga_matahari.jpg')); ?>" class="d-block w-100" alt="..." style="height: 1027px; opacity: 85%">
        <div class="carousel-caption d-none d-md-block">
            <a href="<?php echo e(url('/places')); ?>" class="btn btn-outline-success btn-lg" style="color: white; border: white; font-size: 30px"><b>Cari Wisata</b></a>
            <h3>Temukan tujuan wisatamu</h3>
        </div>
    </div>
    <div class="carousel-item" style="background-color: green">
        <img src="<?php echo e(url('/images/tiket.jpg')); ?>" class="d-block w-100" alt="..." style="height: 1027px; opacity: 85%">
        <div class="carousel-caption d-none d-md-block">
            <a href="<?php echo e(url('/places')); ?>" class="btn btn-outline-success btn-lg" style="color: white; border: white; font-size: 30px"><b>Beli Tiket</b></a>
            <h3>Beli tiketmu secara online</h3>
        </div>
    </div>
    <div class="carousel-item" style="background-color: green">
        <img src="<?php echo e(url('/images/jam.jpg')); ?>" class="d-block w-100" alt="..." style="height: 1027px; opacity: 85%">
        <div class="carousel-caption d-none d-md-block">
            <a href="<?php echo e(url('/schedules')); ?>" class="btn btn-outline-success btn-lg" style="color: white; border: white; font-size: 30px"><b>Atur Jadwal</b></a>
            <h3>Atur jadwal wisatamu</h3>
        </div>
    </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
    </div>

<div class="container" >
    <div class="headline px-3" style="margin-top: -700px; position: absolute; color: white; background-color: #5C994E; padding: 10px">
        Temukan <b>Liburan Impianmu</b> di <b> Jogja</b> 
    </div>
    <div class="headline px-3" style="margin-top: -600px; position: absolute; color: #5C994E; background-color: white; padding: 10px">
        Melalui  <b>PlesirJogja!</b>
    </div>
    
</div>

<div class="definition" mb-5>
        <div class="def_title">
            Apa itu <b>PlesirJogja.com</b>?
        </div>
        <div class="def_content">
            PlesirJogja.com adalah web portal wisata yang <br>
            di dalamnya dapat melakukan pembelian tiket dan penjadwalan wisata <br>
            untuk daerah Yogyakarta
        </div>
</div>

<br>

<div class="container mt-5">
    <div class="ui segment">
        <div class="about_title">
            PlesirJogja.com
            <?php for($i=0; $i<25; $i++): ?> 
                &emsp;
            <?php endfor; ?>
            Temukan Kami di:    
            <i class="instagram icon"></i>
            <i class="facebook icon"></i>
            <i class="twitter icon"></i>
        </div>
        
        <div class="ui divider"></div>

        <div class="ui three column very relaxed grid">
            <div class="column">
                <p> <b>Perusahaan</b> </p>
                <p>Kontak Kami</p>
                <p>Kerja Sama</p>
                <p></p>
            </div>
            <div class="column">
                <p><b>Produk</b></p>
                <p>Paket Wisata</p>
                <p></p>
                <p></p>
            </div>
            <div class="column">
                <p><b>Pembayaran</b></p>
                <p>Transfer ATM</p>
                <p>e-Money</p>
                <p></p>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>



<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /opt/lampp/htdocs/PlesirJogja/resources/views/home.blade.php ENDPATH**/ ?>