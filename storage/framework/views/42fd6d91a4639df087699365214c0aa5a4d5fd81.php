<?php $__env->startSection('content'); ?>

<div class="container">

    <div class="headline">

        <b>Cari, Beli</b> dan <b>Atur</b> Wisatamu di <b>Jogja!</b> 
        <br>
        <button type="button" class="btn btn-primary pb-3" data-toggle="modal" data-target=".bd-example-modal-lg">
            <div class="bAturWisata">
                <i class="calendar alternate outline icon"></i>
                Atur Wisataku
            </div>
        </button>


<!-- Modal -->
<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Tambahkan Jadwal Wisata</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        <div class="modal-body">
            <form action="">
                <div class="form-group">
                    <label for="nama">Nama Jadwal</label>
                    <input type="text" class="form-control" name="nama">
                </div>
                <div class="form-group">
                    <label for="date">Tanggal</label>
                    <input type="date" class="form-control" name="date">
                </div>
            </form>
        </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Keluar</button>
                <button type="button" class="btn btn-primary">Buat Jadwal</button>
            </div>
        </div>
    </div>
</div>

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