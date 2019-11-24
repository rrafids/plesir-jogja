<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('apps.name', 'PlesirJogja.com') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.13/semantic.min.js"></script>

    {{-- Script AJAX --}}
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>
    
    {{-- Script API MapBox --}}
    <script src='https://api.mapbox.com/mapbox-gl-js/v1.4.1/mapbox-gl.js'></script>
    <link href='https://api.mapbox.com/mapbox-gl-js/v1.4.1/mapbox-gl.css' rel='stylesheet' />

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.13/semantic.min.css">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ url('/css/beranda.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ url('/css/jadwal.css') }}" />

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #245B43">
            
                <a class="navbar-brand" href="{{ url('/') }}" style="color: white; font-size: 20px;">
                    <i class="location arrow icon"></i>
                    <b> {{ config('apps.name', 'PlesirJogja.com') }} </b>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="btn btn-outline-success mx-3" href="{{ route('register') }}" style="font-size: 15px;">{{ __('Register') }}</a>
                            </li>
                        @endif
                            <li class="nav-item">
                                <a class="btn btn-success" href="{{ route('login') }}" style="font-size: 15px;">{{ __('Login') }}</a>
                            </li>
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" style="color: white" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
                
        </nav>
        <div style="background-color: #377559">
            <div class="container" style=" height: 45px; font-size: 15px">
                <ul class="nav nav-pills" id="navbars" style="padding-top: 3px; padding-bot: 3px;">
                    <li class="nav-item">
                        <a class="nav-link" href="#" id="satu" style="color: white">
                            <i class="calendar alternate outline icon"></i>
                            Jadwal Saya
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="" id="dua" style="color: white">Paket Wisata</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/places')}}" id="tiga" style="color: white">
                            <i class="tag icon"></i>
                            Obyek Wisata
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        
        <main class="py-4">
            @yield('content')
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

{{-- <script>
    $(document).ready(function(){
    
     fetch_places_data();
    
     function fetch_places_data(query = '')
     {
      $.ajax({
       url:"{{ route('places.action') }}",
       method:'GET',
       data:{query:query},
       dataType:'json',
       success:function(data)
       {
        $('tbody').html(data.table_data);
        $('#total_records').text(data.total_data);
       }
      })
     }
    
     $(document).on('keyup', '#search', function(){
      var query = $(this).val();
      fetch_places_data(query);
     });
    });
    </script> --}}
    