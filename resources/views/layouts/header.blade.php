<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/semantic-ui@2.4.2/dist/semantic.min.css">
    <script
        src="https://code.jquery.com/jquery-3.1.1.min.js"
        integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
        crossorigin="anonymous"></script>
    <script src="semantic/dist/semantic.min.js"></script>
    <style>
        body {
            background-color: #F4FFF6;
        }
    </style>
    <title>@yield('title')</title>
</head>
<body>
    @section('navbar')
        <div class="ui secondary  menu">
            <div class="item">
                <h2 style="color: green;">
                    <i class="green rocket icon" style="margin-right: 10px;"></i><b>PlesirJogja.com</b>
                </h2>
            </div>


            <div class="right menu">
                <div class="item">
                    <div class="ui fluid icon input" style="width: 1000px; margin: -15px;">
                        <input type="text" placeholder="Cari Obyek Wisata...">
                        <i class="search icon"></i>
                    </div>
                </div>
                <div class="item" style="margin-right: -20px;">
                    <button class="ui inverted green basic button">
                        <i class="green shop icon"></i>
                    </button>
                </div>
                <div class="item" style="margin-right: -20px;">
                    <button class="ui green button">
                        Masuk
                    </button>
                </div>
                <div class="item">
                    <button class="ui inverted green button">
                        Daftar
                    </button>
                </div>
            </div>
        </div>
        <div style="margin-top: -20px;">
        </div>
        <div class="ui secondary pointing menu" style="background-color: #E5F4E7; margin-top: 20px;">
            <a class="green item active">
                Jadwal Saya
            </a>
            <a class="green item">
                Paket Wisata
            </a>
            <a class="green item">
                Tiket Saya
            </a>
            <div class="right menu">
            </div>
        </div>
    @show

    <div class="container">
        @yield('content')
    </div>
</body>
</html>
