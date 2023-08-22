<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ADMIN |</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/main.css">
    <link rel="stylesheet" href="/css/notification.css">
</head>
<body>
    <div class="container-fluid" style="overflow-x: hidden; overflow-y: auto">
        <div class="row vh-100 vw-100 ">
            <div class="col-2 bg-primary-mu p-0 h-100 d-flex flex-column justify-content-between">
                <div class="d-flex flex-column" >
                    <div style="height: 35vh" class="p-3 mb-3 d-flex flex-column justify-content-evenly align-items-center" >
                        <img class="shadow-down admin-logo rounded-circle" src="{{ asset('storage/'. Auth::user()->image) }}">
                        <h5 class="m-0 bold" >{{Auth::user()->username}}</h5>
                        <p style="font-size: 12px; opacity: 75%"  class="m-0" >{{Auth::user()->email}}</p>
                    </div>
                    <a href="/statistik" class="w-100 navbar-button ps-3" style="{{ session('page') === 'statistik' ? 'background: white' : 'background: #FF8A35' }}" >
                        <img class="logo-xsm d-inline-block " src="/css/img/statistik.svg"  style="{{ session('page') === 'statistik' ? 'filter: none;' : 'filter: brightness(0) invert(1);' }} object-fit: contain;" >
                        <p class="m-0 ms-3" style="{{ session('page') === 'statistik' ? 'color: #FFBA35' : 'color: white' }}" >statistik</p>
                    </a>
                    <a href="/pengguna" class="w-100 navbar-button ps-3" style="{{ session('page') === 'pengguna' ? 'background: white' : 'background: #FF8A35' }}" >
                        <img class="logo-xsm d-inline-block " src="/css/img/pengguna.svg"  style="{{ session('page') === 'pengguna' ? 'filter: none;' : 'filter: brightness(0) invert(1);' }} object-fit: contain;" >
                        <p class="m-0 ms-3" style="{{ session('page') === 'pengguna' ? 'color: #FFBA35' : 'color: white' }}" >Pengguna</p>
                    </a>
                    <a href="/kompetisi" class="w-100 navbar-button ps-3" style="{{ session('page') === 'kompetisi' ? 'background: white' : 'background: #FF8A35' }}" >
                        <img class="logo-xsm d-inline-block " src="/css/img/kompetisi.svg"  style="{{ session('page') === 'kompetisi' ? 'filter: none;' : 'filter: brightness(0) invert(1);' }} object-fit: contain;" >
                        <p class="m-0 ms-3" style="{{ session('page') === 'kompetisi' ? 'color: #FFBA35' : 'color: white' }}" >kompetisi</p>
                    </a>
                    <a href="/peta" class="w-100 navbar-button ps-3" style="{{ session('page') === 'peta' ? 'background: white' : 'background: #FF8A35' }}" >
                        <img class="logo-xsm d-inline-block " src="/css/img/Map.svg"  style="{{ session('page') === 'peta' ? 'filter: none;' : 'filter: brightness(0) invert(1);' }} object-fit: contain;" >
                        <p class="m-0 ms-3" style="{{ session('page') === 'peta' ? 'color: #FFBA35' : 'color: white' }}" >peta</p>
                    </a>
                </div>
                <a href="/logout" class="w-100 navbar-button ps-3 " >
                    <div class="logo-xsm d-inline-block " style="background-image: url(/css/img/logout.svg); background-size: contain;" ></div>
                    <p class="m-0 ms-3" style="{{ session('page') === 'peta' ? 'color: #FFBA35' : 'color: white' }}" >Logout</p>
                </a>
            </div>
            <div class="col-10" style="overflow-y: auto">
                @yield('content')
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <script src="/js/main.js"></script>
    <script src="js/notification.js"></script>
</body>
</html>