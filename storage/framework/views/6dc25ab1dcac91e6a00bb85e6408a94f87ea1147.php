<!doctype html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--===============================================================================================-->	
	    <link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
    <!--===============================================================================================-->	
        <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
    <!--===============================================================================================-->	
        <link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="css/util.css">
        <link rel="stylesheet" type="text/css" href="css/main.css">
    <!--===============================================================================================-->
    <!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
    <!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
    <!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
    <!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
    <!--===============================================================================================-->
	<script src="js/main.js"></script>


    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title><?php echo e(config('apps.name', 'PlesirJogja.com')); ?></title>

    <!-- Scripts -->
    <script src="<?php echo e(asset('js/app.js')); ?>" defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.13/semantic.min.js"></script>

    
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>

    
    <script src='https://api.mapbox.com/mapbox-gl-js/v1.4.1/mapbox-gl.js'></script>
    <link href='https://api.mapbox.com/mapbox-gl-js/v1.4.1/mapbox-gl.css' rel='stylesheet' />

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.13/semantic.min.css">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?php echo e(url('/css/beranda.css')); ?>" />
    <link rel="stylesheet" type="text/css" href="<?php echo e(url('/css/jadwal.css')); ?>" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Styles -->
    <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">
    <style>
    .zoom-effect {  
    width: 100%;
    height: 360px;
    margin: 0 auto;
    overflow: hidden;  
    }
    
    .kotak {
    top: 0;
    left: 0;
    }
    
    .kotak img {
    -webkit-transition: 0.4s ease;
    transition: 0.4s ease;
    width: 600px;
    }
    
    .zoom-effect:hover .kotak img {
    -webkit-transform: scale(1.08);
    transform: scale(1.08);
    }
    .star-rating {
        line-height:32px;
        font-size:2em;
    }

    .star-rating .fa-star{
        color: yellow;
    }
    body {
        /* background-image: url("/images/lampu.jpg"); */
        background-size: 100%;
        width: 100%;
        height: 100%;
    }

    #menu {
        position: absolute;
        background: #fff;
        padding: 10px;
        font-family: 'Open Sans', sans-serif;
    }

        .checked {
            color: orange;
        }
    </style>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #4F874C; position: fixed; width: 100%; z-index: 100; opacity: 90%">
                <a class="navbar-brand" href="<?php echo e(url('/')); ?>" style="color: white; font-size: 20px; opacity: 100%">
                    <i class="location arrow icon"></i>
                    <b> <?php echo e(config('apps.name', 'PlesirJogja.com')); ?> </b>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="<?php echo e(__('Toggle navigation')); ?>">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent" style="z-index:1" 1>
                    <!-- Left Side Of Navbar -->
                    
                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        <?php if(auth()->guard()->guest()): ?>
                        <?php if(Route::has('register')): ?>
                            <li class="nav-item">
                                <a class="btn btn-outline-success mx-3" href="<?php echo e(route('register')); ?>" style="font-size: 15px; color: white; border-color: white"><?php echo e(__('Register')); ?></a>
                            </li>
                        <?php endif; ?>
                            <li class="nav-item">
                                <a class="btn btn-success" href="<?php echo e(route('login')); ?>" style="font-size: 15px;"><?php echo e(__('Login')); ?></a>
                            </li>
                        <?php else: ?>
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" style="color: white; z-index: 30" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    <?php echo e(Auth::user()->name); ?> <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown" style="white; z-index: 30">
                                    <a class="dropdown-item" href="<?php echo e(route('logout')); ?>" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                        <?php echo e(__('Logout')); ?>

                                    </a>
                                    <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                                        <?php echo csrf_field(); ?>
                                    </form>
                                </div>
                            </li>
                        <?php endif; ?>
                    </ul>
                </div> 
        </nav>
        <div style="background-color: #579654; position: fixed; width: 100%; margin-top: 55px; z-index: 20; opacity: 90%; color: white; height: 55px">
            <div class="container" style=" height: 45px; font-size: 15px">
                <ul class="nav nav-pills" id="navbars" style="padding-top: 3px; padding-bot: 7px; color: white">
                    <li class="nav-item mx-2 pt-2">
                        <a class="nav-link btn btn-outline-success" href="<?php echo e(url('/schedules/show')); ?>" id="satu" style="color:white; border-color: white">
                            <i class="calendar alternate outline icon"></i>
                            Jadwal Saya
                        </a>
                    </li>
                    <li class="nav-item mx-2 pt-2">
                        <a class="nav-link btn btn-outline-success" href="<?php echo e(url('/baskets/show')); ?>" id="tiga" style="color:white; border-color: white">
                            <i class="ticket alternate icon"></i>
                            Tiket Saya
                        </a>
                    </li>
                    <li class="nav-item mx-2 pt-2">
                        <a class="nav-link btn btn-outline-success" href="<?php echo e(url('/places')); ?>" id="tiga" style="color:white; border-color: white">
                            <i class="map marker outline icon"></i>
                            Obyek Wisata
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <br> <br> <br> <br>

        <main class="py-5" style="background-color: transparent">
            <?php echo $__env->yieldContent('content'); ?>
        </main>
    </div> 


    <script>
        $(document).ready(function() {
            $("#search").on("keyup", function() {
                var value = $(this).val().toLowerCase();
                $('#tabel li').filter(function() {
                    $(this).toggle($(this).find('a').text().toLowerCase().indexOf(value) > -1)
                });
                console.log("ok");
            });
        });
    </script>

</body>
</html>





    <?php /**PATH /opt/lampp/htdocs/PlesirJogja/resources/views/layouts/app.blade.php ENDPATH**/ ?>