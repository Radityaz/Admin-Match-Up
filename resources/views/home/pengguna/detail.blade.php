@extends('home.layout.main')

@section('content')

    <div class="modal" id="exampleModal" tabindex="-1">
        <div class="modal-dialog">
        <div class="modal-content" style="width: 32vw" >
            <div class="modal-header bg-primary-mu">
            <h5 class="ps-2 modal-title ">
                Konfirmasi Blokir Pengguna
            </h5>
            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
            <p  >Anda yakin ingin Memblokir pengguna ini?</p>
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
            {{-- <form class="content1" action="/pengguna/{{$user->id}}" method="POST"> --}}
                @csrf
                @method('delete')
                <button type="submit" class="btn btn-danger">Blokir</button>
            </form>
            </div>
        </div>
        </div>
    </div>

    <div class="container-fluid vh-100" style="overflow-y: auto">
        <div class="d-flex align-items-center pt-3 pb-2 position-fixed bg-white " style="width: 77.5%;" >
            <a href="/pengguna" class="logo-xsm blank" style="background: url(/css/img/back-button.png); background-size: contain; background-repeat: no-repeat" ></a>
            <h3 class="text-dark m-0 p-0 ps-3">Detail Pengguna</h3>
            <button data-bs-toggle="modal" data-bs-target="#exampleModal" class="report btn ms-auto bg-danger text-light" style="background-size: contain;" style="height: 28px;" >Blokir</button>

        </div>
        <section class="d-flex flex-column align-items-center py-3 mt-5"  >
            <img class="image-box rounded-circle blank" src="{{asset('storage/'. $user->image)}}">
            <h3 class="my-3">{{$user->username}}</h3>
            <p class="text-muted" >{{$user->email}}</p>
            <div class="w-25 d-flex justify-content-evenly px-5" >
                <a href="https://www.instagram.com/{{$user->instagram}}/" class="logo-xsm blank " style="background: url(/css/img/instagram.jpg); background-size: contain;" ></a>
                <a href="https://web.facebook.com/{{$user->facebook}}" class="logo-xsm blank " style="background: url(/css/img/facebook.jpg); background-size: contain;"></a>
                <a href="https://wa.me/{{$user->whatsapp}}" class="logo-xsm blank " style="background: url(/css/img/whatapps.jpg); background-size: contain;"></a>
            </div>
            <hr class="w-50" >
            <p>Deskripsi</p>
            <p class="text-muted" >{{ $user->deskripsi }}</p>
            <hr class="w-50" >
            <h3>Biodata Diri</h3>
            <table class="table w-50">
                <tbody>
                    <tr class="user-table b-primary-mu" style="border-width: 3px" >
                    <th width="10%" class="user-table b-primary-mu" style="border-width: 3px" > <div class="logo-sm blank " style="background: url(/css/img/gender.png); background-size: contain;"   ></div> </th>
                    <td class="user-table b-primary-mu" style="border-width: 3px"  >Gender</td>
                    <td>{{$user->gender}}</td>
                    </tr>
                    <tr class="user-table b-primary-mu" style="border-width: 3px" >
                        <th width="10%" class="user-table b-primary-mu" style="border-width: 3px" > <div class="logo-sm blank " style="background: url(/css/img/age.png); background-size: contain;" ></div> </th>
                        <td class="user-table b-primary-mu" style="border-width: 3px"  >Usia</td>
                        <td>{{$user->usia}} Tahun</td>
                    </tr>
                    <tr class="user-table b-primary-mu" style="border-width: 3px" >
                        <th width="10%" class="user-table b-primary-mu" style="border-width: 3px" > <div class="logo-sm blank " style="background: url(/css/img/weight.png); background-size: contain;" ></div> </th>
                        <td class="user-table b-primary-mu" style="border-width: 3px"  >Berat Badan</td>
                        <td>{{$user->berat_badan}} Kg</td>
                    </tr>
                    <tr class="user-table b-primary-mu" style="border-width: 3px" >
                        <th width="10%" class="user-table b-primary-mu" style="border-width: 3px" > <div class="logo-sm blank " style="background: url(/css/img/height.png); background-size: contain;" ></div> </th>
                        <td class="user-table b-primary-mu" style="border-width: 3px"  >Tinggi Badan</td>
                        <td>{{$user->tinggi_badan}} Cm</td>
                    </tr>
                </tbody>
            </table>
        </section>
    </div>
@endsection