<?php $__env->startSection('content'); ?>

<div class="container">
    <h2><b><?php echo e($place->nama); ?></b></h2>
    <h5>Candi</h5>
    <ul class="list-inline my-3">
        <li class="list-inline-item" >
            <img src="/images/<?php echo e($place['gambar']); ?>" alt="..." style="width: 697px; height: 455px; margin-top: -407px;">
        </li>
        <li class="list-inline-item">
          <div id='map' style='width: 400px; height: 220px;'></div>
          <script>
            mapboxgl.accessToken = 'pk.eyJ1IjoicnJhZmlkczE3IiwiYSI6ImNrM2F4dXZrYjA3ajgzbG51M3JrMXR6bnUifQ.ja3BRkAopqWe8Mv7nsj0Ow&libraries=places';
            var map = new mapboxgl.Map({
              container: 'map',
              style: 'mapbox://styles/mapbox/streets-v11'
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
    <i class="comment outline icon"></i>
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

<div class="modal fade" id="BeliTiket" tabindex="-1" role="dialog" aria-labelledby="BeliTiketLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="BeliTiketLabel">Pembelian Tiket</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action ="show.blade.php" method ="POST">
        <h5>Deskrpisi Tiket</h5>
        Tiket ke : <?php echo e($place->nama); ?> <br>
        Harga    : Rp <?php echo e($place->harga_tiket); ?> <br>
        Booking ID :<?php echo rand() . "\n"; ?>
        <br>
        <br>
        <h5> Data Diri :</h5>
        <br>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Nama :</label>
            <input type="text" class="form-control" name ="Nama">
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Email:</label>
            <input type="text" class="form-control"name="Email">
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Nomor Telepon:</label>
            <input type="text" class="form-control" name="NoTelp">
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary"  data-toggle="modal" data-target="#KonfirmBeli" id ="Konfirm">Beli</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="KonfirmBeli" tabindex="-1" role="dialog" aria-labelledby="KonfirmBeliLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="KonfirmBeliLabel">Pembelian Tiket</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
            <script type="text/javascript">
            
            </script>
        <form>
        <h5>Deskrpisi Tiket</h5>
        Tiket ke : <?php echo e($place->nama); ?> <br>
        Harga    : Rp <?php echo e($place->harga_tiket); ?> <br>
        Booking ID :<?php echo rand() . "\n"; ?>
        <br>
        <br>
        <h5> Data Diri :</h5>
        <br>
          <div class="form-group">
            
          </div>
          <div class="form-group">
            <input type="text" class="form-control" value="Email">
          </div>
          <div class="form-group">
            <input type="text" class="form-control" name="NoTelp">
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Konfirmasi</button>
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