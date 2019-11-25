<?php $__env->startSection('content'); ?>

<div class="container">
    <h2><b><?php echo e($place->nama); ?></b></h2>
    <h5>Candi</h5>
    <ul class="list-inline my-3">
        <li class="list-inline-item" >
            <img src="/images/<?php echo e($place['gambar']); ?>" alt="..." style="width: 697px; height: 455px; margin-top: -407px;">
        </li>
        <li class="list-inline-item">
            <div id='map' style='width: 400px; height: 300px;'></div>
            <script>
                mapboxgl.accessToken = 'pk.eyJ1IjoicnJhZmlkczE3IiwiYSI6ImNrM2F4dXZrYjA3ajgzbG51M3JrMXR6bnUifQ.ja3BRkAopqWe8Mv7nsj0Ow';
                var map = new mapboxgl.Map({
                    container: 'map',
                    style: 'mapbox://styles/mapbox/streets-v11'
                });
            </script>
            <br>
            <h5 style="border: solid 1px #78FFC4; margin-top: -10px; padding: 10px; padding-left: 15px">
                Buka: <?php echo e($place->buka); ?>-<?php echo e($place->tutup); ?> <br>
                <hr>
                Tiket: Rp <?php echo e($place->harga_tiket); ?> <br>
                <hr>
                <button class="btn btn-success" data-toggle="modal" data-target="#BeliTiket" id="Beli" style="width: 370px">Beli Tiket</button>
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
    <form class="form-group">
            <div class="form-group">
                    <label for="komen">Komentar</label>
                    <textarea class="form-control" id="komen" rows="3"></textarea>
            </div>
            <div class="">
                <button class="btn btn-primary float-right my-20" type="submit">Submit</button>
            </div>
            <table class="table">
                <tbody>
                    <?php $__currentLoopData = $comments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $comment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><h4><?php echo e($comment->user_id); ?></h4></td>
                    </tr>
                    <tr>
                        <td><h6><?php echo e($comment->content); ?></h6></td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
                </tbody>
            </table>
    </form>
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
              <input for="message-text" class="col-form-label"value="{{}}" >
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