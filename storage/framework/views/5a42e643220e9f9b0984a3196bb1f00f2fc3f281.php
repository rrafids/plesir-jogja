    <style>
        .judul {
            text-align: center;
            color: white;
            height: 155px;
            margin-top: -33px;
            font-size: 45px;
        }

        img {
            width: 300px;
            height: 200px;
        }

        .keterangan {
            font-size: 15px;
        }

        th {
            text-align: center;
            font-size: 22px;
        }

        tr {
            text-align: center;
        }

        .nama {
            font-size: 18px;
        }

        .waktu {
            font-size: 20px;
        }

        form {
            margin: 0 auto;
            padding: 5px;
            position: center;
            width: 300px;
            text-align: left;
            background-color: white;
            border-color: green;
            border: 2px solid green;

        }

    </style>
<?php $__env->startSection('title', 'PlesirJogja.com'); ?>

<style>
    h1,h2,p,a{
        font-family: sans-serif;
        font-weight: normal;
    }

    .jam {
        overflow: hidden;
        width: 437px;
        margin: 30px auto;
        margin-bottom: -10px;

    }
    .kotak{
        float: left;
        width: 100px;
        height: 40px;
        background-color: green;
        opacity: 10;

        background-size: 100%;
    }
    .jam p {
        color: white;
        font-size: 20px;
        position: center;
        padding: 5px;
        text-align-all: center;
        margin: 7px;
    }


</style>
<?php $__env->startSection('navbar'); ?>
    ##parent-placeholder-c63e3c1cfa2ff651ad4cfadea3e21265ffcf8ca3##
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <?php for($i=0; $i<1; $i++): ?>
        <br>
    <?php endfor; ?>
    <div class="judul">
        <?php for($i=0; $i<2; $i++): ?>
            <br>
        <?php endfor; ?>
        <b>
            <div class="ui menu" style="height: 240px; background: linear-gradient(green, forestgreen, forestgreen, forestgreen, forestgreen,forestgreen,green,green, green, green); border-color: green; margin-top: -38px;">
                <div class="item">
                    <div class="ui primary button" style="height: 200px; width: 600px; color: green; background: linear-gradient(#E6FFE9, #E6FFE9, #E6FFE9, #E6FFE9)" >
                        <h2>Paket Lengkap Sleman</h2>
                        <h3>1 Hari Wisata</h3>
                        <h4>Prambanan - Lava Tour - Makan Pagi dan Siang</h4>
                        <h4>Hanya Rp 750.000</h4>
                    </div>
                </div>
                <div class="item">
                    <h1 style="color: white; font-size: 40px; margin-bottom: 15px;">
                        Jadwal Wisatamu di Jogja Sekarang!
                        <br>
                        <button class="ui green button" style="margin-top: 23px; padding: 0px; height: 45px; width: 250px; font-size: 20px; text-align: center;">
                            Atur Jadwal
                        </button>
                        <div class="jam">
                            <div class="kotak">
                                <p><i class="clock outline icon"></i></p>
                            </div>
                            <div class="kotak">
                                <p id="jam"></p>
                            </div>
                            <div class="kotak">
                                <p id="menit"></p>
                            </div>
                            <div class="kotak">
                                <p id="detik"></p>
                            </div>
                        </div>
                    </h1>
                </div>
                <div class="item">
                    <div class="ui primary button" style="height: 200px; width: 575px; color: green; background: linear-gradient(#E6FFE9, #E6FFE9, #E6FFE9, #E6FFE9)" >
                        <h2>Paket Lengkap Jogja</h2>
                        <h3>6 Hari Wisata</h3>
                        <h4>Prambanan - Lava Tour - Tebing Breksi - Makan Pagi, Siang, Malam</h4>
                        <h4>Hanya Rp 750.000</h4>
                    </div>
                </div>
            </div>

        </b>
    </div>



    <script>
        window.setTimeout("waktu()", 1000);

        function waktu() {
            var waktu = new Date();
            setTimeout("waktu()", 1000);
            document.getElementById("jam").innerHTML = waktu.getHours();
            document.getElementById("menit").innerHTML = waktu.getMinutes();
            document.getElementById("detik").innerHTML = waktu.getSeconds();
        }
    </script>
    <br><br><br><br>
    <table class="ui green table">
        <thead>
        <tr style="text-align: center;"><th colspan="3">
                <select class="ui selection dropdown">
                    <option value="">Hari ini, Senin, 2 Desember 2019</option>
                    <option value="1">Selasa</option>
                    <option value="0">Rabu</option>
                </select>
            </th>
        </tr></thead><tbody>
        <tr>
            <th>
                <div class="waktu">
                    <i class="blue clock outline icon"></i> : 07.30-08.00
                </div>
            </th>
            <th>
                <div class="waktu">
                    <i class="blue clock outline icon"></i> : 09.30-11.00
                </div>
            </th>
            <th>
                <div class="waktu">
                    <i class="blue clock outline icon"></i> : 11.30-13.00
                </div>
            </th>
        </tr>

        <tr>
            <td>
                <?php for($i=0; $i<1; $i++): ?>
                    <br>
                <?php endfor; ?>
                <div class="nama">
                    <b><i class="university icon"></i>Tebing Breksi</b>(4.5/5, <a href="">Candi</a>)
                </div>
                <?php for($i=0; $i<1; $i++): ?>
                    <br>
                <?php endfor; ?>
                <img src="/images/tebing_breksi.jpg" alt="">
                <?php for($i=0; $i<2; $i++): ?>
                    <br>
                <?php endfor; ?>
                    <form action="">
                        <div class="keterangan">
                            <i class="blue clock outline icon"></i> : 09.30-11.00
                        </div>
                        <?php for($i=0; $i<1; $i++): ?>
                            <br>
                        <?php endfor; ?>
                        <div class="keterangan">
                            <b><i class="blue ticket alternate icon"></i> : </b>Sudah dibeli <a href="">(Lihat tiket)</a>
                        </div>
                        <?php for($i=0; $i<1; $i++): ?>
                            <br>
                        <?php endfor; ?>
                        <div class="keterangan">
                            <b><i class="blue glass martini icon"></i> : </b>
                            <a href="">Warung Sarapan Pagi, </a>
                            <a href="">Burjo Pamungkas</a>
                        </div>
                    </form>

            </td>
            <td>
                <?php for($i=0; $i<1; $i++): ?>
                    <br>
                <?php endfor; ?>
                <div class="nama">
                    <b><i class="university icon"></i>Candi Borobudur</b>(4.5/5, <a href="">Candi</a>)
                </div>
                <?php for($i=0; $i<1; $i++): ?>
                    <br>
                <?php endfor; ?>
                <img src="/images/borobudur.jpg" alt="">
                <?php for($i=0; $i<2; $i++): ?>
                    <br>
                <?php endfor; ?>
                    <form action="">
                        <div class="keterangan">
                            <i class="blue clock outline icon"></i> : 09.30-11.00
                        </div>
                        <?php for($i=0; $i<1; $i++): ?>
                            <br>
                        <?php endfor; ?>
                        <div class="keterangan">
                            <b><i class="blue ticket alternate icon"></i> : </b>Sudah dibeli <a href="">(Lihat tiket)</a>
                        </div>
                        <?php for($i=0; $i<1; $i++): ?>
                            <br>
                        <?php endfor; ?>
                        <div class="keterangan">
                            <b><i class="blue glass martini icon"></i> : </b>
                            <a href="">Warung Sarapan Pagi, </a>
                            <a href="">Burjo Pamungkas</a>
                        </div>
                    </form>
            </td>
            <td>
                <?php for($i=0; $i<1; $i++): ?>
                    <br>
                <?php endfor; ?>
                <div class="nama">
                    <b><i class="university icon"></i>Lava Tour</b>(4.5/5, <a href="">Candi</a>)
                </div>
                <?php for($i=0; $i<1; $i++): ?>
                    <br>
                <?php endfor; ?>
                <img src="/images/lava_tour.jpg" alt="">
                <?php for($i=0; $i<2; $i++): ?>
                    <br>
                <?php endfor; ?>
                    <form action="">
                        <div class="keterangan">
                            <i class="blue clock outline icon"></i> : 09.30-11.00
                        </div>
                        <?php for($i=0; $i<1; $i++): ?>
                            <br>
                        <?php endfor; ?>
                        <div class="keterangan">
                            <b><i class="blue ticket alternate icon"></i> : </b>Sudah dibeli <a href="">(Lihat tiket)</a>
                        </div>
                        <?php for($i=0; $i<1; $i++): ?>
                            <br>
                        <?php endfor; ?>
                        <div class="keterangan">
                            <b><i class="blue glass martini icon"></i> : </b>
                            <a href="">Warung Sarapan Pagi, </a>
                            <a href="">Burjo Pamungkas</a>
                        </div>
                    </form>
            </td>
        </tr>
        <tr></tr>
        </tbody>
    </table>


    <div style="margin-top: -10px; margin-right: 157px;">
        <div class="ui secondary  menu">
            <div class="right menu">
                <div class="item" style="margin-right: -20px;">
                    <button class="ui green button">
                        Beli Tiket
                    </button>
                </div>
                <div class="item">
                    <button class="ui inverted green button">
                        Ubah
                    </button>
                </div>
            </div>
        </div>
    </div>

    <?php for($i=0; $i<5; $i++): ?>
        <br>
    <?php endfor; ?>

    <h3 style="background-color: green; height: 300px; color: white; text-align: center; font-size: 35px; padding: 25px; padding-left: 40px;padding-right: 40px">
        <?php for($i=0; $i<1; $i++): ?>
            <br>
        <?php endfor; ?>
        Kenapa menggunakan PlesirJogja.com?
            <?php for($i=0; $i<2; $i++): ?>
                <br>
            <?php endfor; ?>
            <p style="font-size: 25px;">PlesirJogja.com adalah aplikasi portal wisata daerah Yogyakarta yang dapat membuat penjadwalan wisata dan menyediakan berbagai paket-paket wisata dengan harga yang lebih murah</p>
    </h3>

    <?php for($i=0; $i<10; $i++): ?>
        <br>
    <?php endfor; ?>

    <div class="ui horizontal segments" style="height: 500px; background-color: darkgreen; color: white;">

        <div class="ui segment">
            <?php for($i=0; $i<3; $i++): ?>
                <br>
            <?php endfor; ?>
                <b>Hubungi Kami</b>
            <p style="font-size: 10px;">

                    <br>
                    Email : plesirjogja@service.com
                    <br>
                    Telepon : 08123456789
            </p>
        </div>
        <div class="ui segment">
            <p></p>
        </div>
        <div class="ui segment">
            <p></p>
        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /opt/lampp/htdocs/PlesirJogja/resources/views/welcome.blade.php ENDPATH**/ ?>