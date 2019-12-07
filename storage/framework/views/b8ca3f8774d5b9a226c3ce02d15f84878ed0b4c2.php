<?php $__env->startSection('content'); ?>

<div class="container">
    <h2><b><?php echo e($place->nama); ?></b></h2>
    <h5>Candi</h5>
    <ul class="list-inline my-3">
        <li class="list-inline-item" >
            <img src="/images/<?php echo e($place['gambar']); ?>" alt="..." style="width: 697px; height: 455px; margin-top: -407px;">
        </li>
        <li class="list-inline-item">
          <div id='map' style="width: 400px; height: 225px; z-index: 0"></div>
          <script src='https://unpkg.com/es6-promise@4.2.4/dist/es6-promise.auto.min.js'></script>
          <script src="https://unpkg.com/@mapbox/mapbox-sdk/umd/mapbox-sdk.min.js"></script>
          <script>
            mapboxgl.accessToken = 'pk.eyJ1IjoicnJhZmlkczE3IiwiYSI6ImNrM2F4dXZrYjA3ajgzbG51M3JrMXR6bnUifQ.ja3BRkAopqWe8Mv7nsj0Ow';
            var mapboxClient = mapboxSdk({ accessToken: mapboxgl.accessToken });
            mapboxClient.geocoding.forwardGeocode({
              query: '<?php echo e($place->map); ?>, Yogyakarta, Indonesia',
              autocomplete: false,
              limit: 1
            })
              .send()
              .then(function (response) {
                if (response && response.body && response.body.features && response.body.features.length) {
                  var feature = response.body.features[0];    
                  var map = new mapboxgl.Map({
                    container: 'map',
                    style: 'mapbox://styles/mapbox/streets-v11',
                    center: feature.center,
                    zoom: 10
                  });
                  new mapboxgl.Marker()
                  .setLngLat(feature.center)
                  .addTo(map);
                }
              }); 
            </script>
            <br>
            <h5 style="border: solid 1px #78FFC4; margin-top: -10px; padding: 10px; padding-left: 15px">
                <b><i class="clock icon"></i> Jam Operasional</b> <br>  <br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <?php echo e($place->buka); ?>-<?php echo e($place->tutup); ?> <br>
                <hr>
                <i class="money bill alternate icon"></i>
                <b>Tiket</b> <br> <br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Rp <?php echo e($place->harga_tiket); ?> <br>
                <hr>
                <button class="btn btn-success" data-toggle="modal" data-target="#BeliTiket" id="Beli" style="width: 370px">Beli Tiket</button>
            </h5>
        </li>
    </ul>
    <ul class="list-inline">
        <li class="list-inline-item" style="height: 150px; background-color: #EFFBFB; padding: 20px;">
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

<div class="container" style="background-color: #EFFBFB"> <br>
  <div style="font-size: 23px; padding-top:  15px; padding-bot: -15px;">
    &nbsp;
    <i class="envelope open outline icon"></i>
    <b>Ulasan</b>  
  </div>
    <?php if(Auth::check()): ?>
    <form action="<?php echo e(route('comments.store')); ?>" method="post">
    <?php echo e(csrf_field()); ?>

    <br>
      <hr>
      <label for="komen" style="font-size: 15px">
        <i class="edit icon"></i>
        <b>Tulis Komentar</b>
      </label>
      
      <br>
      <textarea class="form-control" name="content" id="komen" rows="3" placeholder="Tuliskan tentang obyek wisata ini"></textarea>
      <input type="hidden" name="place_id" value="<?php echo e($place->id); ?>"> <br>
      <button class="btn btn-primary float-right my-20" type="submit">Submit</button>
    </form>
    <?php endif; ?>
  
    <br><br><br><br>
    
    <?php $__currentLoopData = $place->comments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $comment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <div class="card">
        <h4 class="card-header">
          <i class="user circle icon"></i>
          <b><?php echo e($comment->user->name); ?></b> 
        </h4>
        <h5 class="card-header"><?php echo e($comment->created_at); ?></h5>
        <div class="card-body">
          <h5 class="card-title"><?php echo e($comment->content); ?></h5> <br>
          
        </div>
      </div>
      <hr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>

<div class="modal fade center" id="BeliTiket" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title" id="BeliTiketLabel"><b><i class="green ticket alternate icon"></i> Pembelian Tiket </b></h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action ="show.blade.php" method ="POST" style="font-size: 15px">
          <b>Obyek Wisata :</b> <?php echo e($place->nama); ?> <br>
          <b>Harga    :</b> Rp <?php echo e($place->harga_tiket); ?> <br>
          <b>ID Pemesanan :</b>
          <?php
              $id_pemesanan = rand() 
          ?>
          <?php echo e($id_pemesanan); ?>

          <br>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
        <form action="/buyticket" method="post">
          <?php echo e(csrf_field()); ?>

          <input type="hidden" name="id_pemesanan" value="<?php echo e($id_pemesanan); ?>">
          <input type="hidden" name="place_id" value="<?php echo e($place->id); ?>">
          <input type="hidden" value="<?php echo e(rand()); ?>" name="kode_tiket">
          <button type="submit" name="submit" class="btn btn-primary" data-toggle="modal" id ="Konfirm">Beli</button>
        </form>
      </div>
    </div>
  </div>
</div>

<script>
$(document).ready(function () {
    /* Launch modals */
    $('#Beli').on('click', function () {
      $('#BeliTiket').modal({
        show: true
      });
    });

    $('#Konfirm').on('click', function () {
      $('#KonfirmBeli').modal({
        show: true
      });
    });

    $(document).on('show.bs.modal', '.modal', function () {
			var zIndex = calculateZIndex();

			$(this).css('z-index', zIndex);

			setTimeout(function () {
				$('.modal-backdrop').not('.modal-stack').css('z-index', zIndex - 1).addClass('modal-stack');
			}, 0);
		})
		$(document).on('hidden.bs.modal', '.modal', function () {
			$('.modal:visible').length && $(document.body).addClass('modal-open');
		})
		function calculateZIndex() {
			var zIndex = Math.max.apply(null, Array.prototype.map.call(document.querySelectorAll('*'), function (el) {
				return +el.style.zIndex;
			})) + 10;

			return zIndex;
		}
});
    </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /opt/lampp/htdocs/PlesirJogja/resources/views/Places/show.blade.php ENDPATH**/ ?>