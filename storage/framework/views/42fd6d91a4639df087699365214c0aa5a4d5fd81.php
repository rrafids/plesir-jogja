<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="headline">
        <b>Cari, Beli</b> dan <b>Atur</b> Wisatamu di <b>Jogja!</b> 
        <br>
        <button class="green ui green button">
            <div class="bAturWisata">
                <i class="calendar alternate outline icon"></i>
                Atur Wisataku
            </div>
        </button>
        <div class="maps">
            <img src="/images/map1.png" class="g_maps" alt="">
            <br>
            <br>
            Terintegrasi dengan <b>Google Maps</b>
        </div>
    </div>
</div>
<div class="definition">
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

<div class="container">
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