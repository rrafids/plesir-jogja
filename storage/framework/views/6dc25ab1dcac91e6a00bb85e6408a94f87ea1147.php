<!doctype html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

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

    <!-- Styles -->
    <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #245B43">
            
                <a class="navbar-brand" href="<?php echo e(url('/')); ?>" style="color: white; font-size: 20px;">
                    <i class="location arrow icon"></i>
                    <b> <?php echo e(config('apps.name', 'PlesirJogja.com')); ?> </b>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="<?php echo e(__('Toggle navigation')); ?>">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        <li class="nav-item">
                            <a href="" style="color: white">
                                <i class="shopping cart icon"></i>
                            </a>
                        </li>
                        <?php if(auth()->guard()->guest()): ?>
                        <?php if(Route::has('register')): ?>
                            <li class="nav-item">
                                <a class="btn btn-outline-success mx-3" href="<?php echo e(route('register')); ?>" style="font-size: 15px;"><?php echo e(__('Register')); ?></a>
                            </li>
                        <?php endif; ?>
                            <li class="nav-item">
                                <a class="btn btn-success" href="<?php echo e(route('login')); ?>" style="font-size: 15px;"><?php echo e(__('Login')); ?></a>
                            </li>
                        <?php else: ?>
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" style="color: white" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    <?php echo e(Auth::user()->name); ?> <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
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
        <div style="background-color: #377559">
            <div class="container" style=" height: 45px; font-size: 15px">
                <ul class="nav nav-pills" id="navbars" style="padding-top: 3px; padding-bot: 3px;">
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo e(url('/schedules')); ?>" id="satu" style="color: white">
                            <i class="calendar alternate outline icon"></i>
                            Jadwal Saya
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="" id="dua" style="color: white">Paket Wisata</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo e(url('/places')); ?>" id="tiga" style="color: white">
                            <i class="tag icon"></i>
                            Obyek Wisata
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        
        <main class="py-4">
            <?php echo $__env->yieldContent('content'); ?>
        </main>
    </div> 
    <div id='map' style='width: 400px; height: 300px;'></div>
</body>
</html>


<script type="text/javascript">
    $(document).ready(function(){
        $('ul li a').click(function(){
            $('li a').removeClass("active");
            $(this).addClass("active");
        });
    });
</script>


    <?php /**PATH /opt/lampp/htdocs/PlesirJogja/resources/views/layouts/app.blade.php ENDPATH**/ ?>