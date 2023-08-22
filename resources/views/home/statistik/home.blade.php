@extends('home.layout.main')

@section('content')

  <div class="container p-3 " style="height: 100vh" >
    <div class="info-box">
      <h2>Halo, {{Auth::user()->name}}</h2>
      <p>Selamat datang di page admin</p>
    </div>
    <canvas class="my-4 w-100" id="myChart" width="900" height="380"></canvas>
    <div id="statistik-wrapper" class="p-3"  >
      <div class="box p-2 d-flex shadow-regular flex-column justify-content-between text-light " style="border-radius: 8px ; background: #c72418;" >
        <div class="d-flex align-items-center" >
          <h6 class="d-inline-block p-0 m-0 ms-2 fw-bold" >Jumlah Pengguna</h6>
        </div>
        <div>
          <h1 class="d-inline-block p-0 m-0" >{{ $user->count() }}</h1>
          <p class="d-inline-block p-0 m-0" >akun</p>
        </div>
      </div>

      <div class="box p-2 d-flex flex-column shadow-regular justify-content-between text-light " style="border-radius: 8px ; background: #67c916" >
        <div class="d-flex align-items-center" >
          <h6 class="d-inline-block p-0 m-0 ms-2 fw-bold" >Jumlah Sparring</h6>
        </div>
        <div>
          <h1 class="d-inline-block p-0 m-0" >{{$sparring->count()}}</h1>
          <p class="d-inline-block p-0 m-0" > Event</p>
        </div>
      </div>

      <div class="box p-2 d-flex flex-column shadow-regular justify-content-between text-light " style="border-radius: 8px; background: #1641cc;" >
        <div class="d-flex align-items-center" >
          <h6 class="d-inline-block p-0 m-0 ms-2 fw-bold" >Jumlah Mabar</h6>
        </div>
        <div>
          <h1 class="d-inline-block p-0 m-0" >{{$mabar->count()}}</h1>
          <p class="d-inline-block p-0 m-0" >akun</p>
        </div>
      </div>

      <div class="box p-2 d-flex flex-column shadow-regular justify-content-between text-light " style="border-radius: 8px; background: #c4107c" >
        <div class="d-flex align-items-center" >
          <h6 class="d-inline-block p-0 m-0 ms-2 fw-bold" >Jumlah Tim</h6>
        </div>
        <div>
          <h1 class="d-inline-block p-0 m-0" >{{$tim->count()}}</h1>
          <p class="d-inline-block p-0 m-0" >akun</p>
        </div>
      </div>
    </div>
    {{-- <div class="row p-3" style="height: 45%;" >
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
    </div> --}}
  </div>
  
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="../../assets/js/vendor/popper.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>

    <!-- Icons -->
    <script src="https://unpkg.com/feather-icons/dist/feather.min.js"></script>
    <script>
      feather.replace()
    </script>

    <!-- Graphs -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js"></script>
    <script>
      var ctx = document.getElementById("myChart");
      var myChart = new Chart(ctx, {
        type: 'line',
        data: {
          labels: ["21-08-2023", "22-08-2023",  ],
          datasets: [
            {
              data: [ 0 , {{ $user->count() }} ],
              lineTension: 0,
              backgroundColor: 'transparent',
              borderColor: '#c72418',
              borderWidth: 4,
              pointBackgroundColor: '#c72418'
            },
            {
              data: [0, {{ $sparring->count() }}],
              lineTension: 0,
              backgroundColor: 'transparent',
              borderColor: '#67c916', // Warna orange
              borderWidth: 4,
              pointBackgroundColor: '#67c916'
            },
            {
              data: [0 , {{ $mabar->count() }}],
              lineTension: 0,
              backgroundColor: 'transparent',
              borderColor: '#1641cc', // Warna orange
              borderWidth: 4,
              pointBackgroundColor: '#1641cc'
            },
            {
              data: [0, {{ $tim->count() }}],
              lineTension: 0,
              backgroundColor: 'transparent',
              borderColor: '#c4107c', // Warna orange
              borderWidth: 4,
              pointBackgroundColor: '#c4107c'
            }
          ]
        },
        options: {
          scales: {
            yAxes: [{
              ticks: {
                beginAtZero: false
              }
            }]
          },
          legend: {
            display: false,
          }
        }
      });
    </script>

@endsection