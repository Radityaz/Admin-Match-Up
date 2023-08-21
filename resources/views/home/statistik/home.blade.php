@extends('home.layout.main')

@section('content')

<div class="info-box">
  <h2>Halo, {{Auth::user()->name}}</h2>
  <p>Selamat datang di page admin</p>
</div>

  <div class="container w-100 h-100 p-3">
    <h3></h3>
    <p></p>
    <div id="statistik-wrapper" class="p-1" >
      <div class="box p-2 d-flex shadow-regular flex-column justify-content-between" style="border-radius: 8px" >
        <div class="d-flex align-items-center" >
          <img class="blank logo-sm rounded-circle" src="" alt="">
          <h6 class="d-inline-block p-0 m-0 ms-2 fw-bold" >Jumlah Pengguna</h6>
        </div>
        <div>
          <h1 class="d-inline-block p-0 m-0" >{{ $user->count() }}</h1>
          <p class="d-inline-block p-0 m-0" >akun</p>
        </div>
      </div>

      <div class="box p-2 d-flex flex-column shadow-regular justify-content-between" style="border-radius: 8px" >
        <div class="d-flex align-items-center" >
          <img class="blank logo-sm rounded-circle" src="" alt="">
          <h6 class="d-inline-block p-0 m-0 ms-2 fw-bold" >Jumlah Sparring</h6>
        </div>
        <div>
          <h1 class="d-inline-block p-0 m-0" >{{$sparring->count()}}</h1>
          <p class="d-inline-block p-0 m-0" >akun</p>
        </div>
      </div>

      <div class="box p-2 d-flex flex-column shadow-regular justify-content-between" style="border-radius: 8px" >
        <div class="d-flex align-items-center" >
          <img class="blank logo-sm rounded-circle" src="" alt="">
          <h6 class="d-inline-block p-0 m-0 ms-2 fw-bold" >Jumlah Mabar</h6>
        </div>
        <div>
          <h1 class="d-inline-block p-0 m-0" >{{$mabar->count()}}</h1>
          <p class="d-inline-block p-0 m-0" >akun</p>
        </div>
      </div>

      <div class="box p-2 d-flex flex-column shadow-regular justify-content-between" style="border-radius: 8px" >
        <div class="d-flex align-items-center" >
          <img class="blank logo-sm rounded-circle" src="" alt="">
          <h6 class="d-inline-block p-0 m-0 ms-2 fw-bold" >Jumlah Tim</h6>
        </div>
        <div>
          <h1 class="d-inline-block p-0 m-0" >{{$tim->count()}}</h1>
          <p class="d-inline-block p-0 m-0" >akun</p>
        </div>
      </div>
    </div>
    <div class="row p-3" style="height: 45%;" >
      <div class="col-4 p-2 shadow-regular " style="border-radius: 8px" >
        olahraga Favorite

        <table class="w-100 h-75" >
          <thead class="bg-primary-mu ">
            <tr>
              <th width="10%" scope="col" class="ps-2" >ID</th>
              <th width="70%" scope="col" class="ps-2" >Olahraga</th>
              <th width="20%" scope="col" class="ps-2" >Jumlah</th>
            </tr>
          </thead>
          <tbody>
            <tr style="border-bottom:1px solid grey" >
              <th class="ps-2" >1</th>
              <td class="ps-2" >Sepak Bola</td>
              <td class="ps-2 text-center " >0</td>
            </tr>
            <tr style="border-bottom:1px solid grey" >
              <th class="ps-2" >2</th>
              <td class="ps-2" >Futsal</td>
              <td class="ps-2 text-center " >0</td>
            </tr>
            <tr style="border-bottom:1px solid grey" >
              <th class="ps-2" >3</th>
              <td class="ps-2" >Ping Pong</td>
              <td class="ps-2 text-center " >0</td>
            </tr>
            <tr style="border-bottom:1px solid grey" >
              <th class="ps-2" >4</th>
              <td class="ps-2" >Badminton</td>
              <td class="ps-2 text-center " >0</td>
            </tr>
            <tr style="border-bottom:1px solid grey" >
              <th class="ps-2" >5</th>
              <td class="ps-2" >voli</td>
              <td class="ps-2 text-center " >0</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
  

@endsection