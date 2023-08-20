@extends('home.layout.main')

@section('content')
  <div class="container w-100 h-100 p-3">
    <h3>Halo, [Nama]</h3>
    <p>Selamat datang di page admin</p>
    <hr>
    <div id="statistik-wrapper" class="p-1" >
      <div class="box p-2 d-flex flex-column justify-content-between" style="border-radius: 8px" >
        <div class="d-flex align-items-center" >
          <img class="blank logo-sm rounded-circle" src="" alt="">
          <h6 class="d-inline-block p-0 m-0 ms-2 fw-bold" >Jumlah Pengguna</h6>
        </div>
        <div>
          <h1 class="d-inline-block p-0 m-0" >0</h1>
          <p class="d-inline-block p-0 m-0" >akun</p>
        </div>
      </div>

      <div class="box p-2 d-flex flex-column justify-content-between" style="border-radius: 8px" >
        <div class="d-flex align-items-center" >
          <img class="blank logo-sm rounded-circle" src="" alt="">
          <h6 class="d-inline-block p-0 m-0 ms-2 fw-bold" >Jumlah Sparring</h6>
        </div>
        <div>
          <h1 class="d-inline-block p-0 m-0" >0</h1>
          <p class="d-inline-block p-0 m-0" >akun</p>
        </div>
      </div>

      <div class="box p-2 d-flex flex-column justify-content-between" style="border-radius: 8px" >
        <div class="d-flex align-items-center" >
          <img class="blank logo-sm rounded-circle" src="" alt="">
          <h6 class="d-inline-block p-0 m-0 ms-2 fw-bold" >Jumlah Mabar</h6>
        </div>
        <div>
          <h1 class="d-inline-block p-0 m-0" >0</h1>
          <p class="d-inline-block p-0 m-0" >akun</p>
        </div>
      </div>

      <div class="box p-2 d-flex flex-column justify-content-between" style="border-radius: 8px" >
        <div class="d-flex align-items-center" >
          <img class="blank logo-sm rounded-circle" src="" alt="">
          <h6 class="d-inline-block p-0 m-0 ms-2 fw-bold" >Jumlah Tim</h6>
        </div>
        <div>
          <h1 class="d-inline-block p-0 m-0" >0</h1>
          <p class="d-inline-block p-0 m-0" >akun</p>
        </div>
      </div>
    </div>
  </div>
@endsection