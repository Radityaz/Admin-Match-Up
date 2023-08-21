@extends('home.layout.main')

@section('content')
<div class="container pt-3">
    <div class="input-group-kompetisi mb-3">
        <input type="text" class="ps-2 b-primary-mu border-3 radius-8 " placeholder="Nama..." aria-label="Cari">
        <input type="text" class="ps-2 b-primary-mu border-3 radius-8 " placeholder="Lokasi..." aria-label="Cari">
        <input type="text" class="ps-2 b-primary-mu border-3 radius-8 " placeholder="Olahraga..." aria-label="Cari">
        <button class="btn bg-primary-mu  scale-hover radius-8" type="button">Cari</button>
    </div>
    <div class="container wrapper m-0 p-2 pb-3">
    @foreach ($kompetisi as $kompetisi)
        <div class="wrapper-box-new shadow-regular p-2">
            <div class="headerbox p-0 m-0">
                <div class="row w-100 h-100 p-0 m-0">
                    <div class="col-4 d-flex align-items-center justify-content-start m-0 p-0">
                        <img class="logo-xl-s rounded-circle shadow-down" src="{{asset('storage/'. $kompetisi->image)}}" alt="">
                    </div>
                    <div class="col-8 p-0 d-flex flex-column justify-content-evenly">
                            <div class=" h-25 d-flex align-items-center justify-content-end" >
                                <div class="dropdown dropleft">
                                    <button style="background: transparent; border: transparent" class="scale-hover" id="dropdownMenuButton" data-bs-toggle='dropdown' aria-haspopup="true" aria-expanded="false" >
                                        <img height="18px" src="/css/img/three-dots-vertical.svg" alt="">
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                      <a class="dropdown-item" href="/view">View</a>
                                      <a class="dropdown-item  {{ $joinedKompetisiCount > 0 ? 'd-none' : 'd-block' }} " href="/editkompetisi/{{$kompetisi->id}}/edit">Edit</a>
                                    </div>
                                </div>  
                            </div>
                        <div class="h-75" >
                            <p class="m-0 p-0" style="font-size: 11px;">{{$kompetisi->penyelengara}}</p>  
                            <h5 class="bold m-0" >{{$kompetisi->title}}</h5>
                            <span class="w-100 d-flex my-1" style="gap: 10px">
                                <span class="w-50 d-inline-block text-center bold "  style="border: 2px solid #FE6B00; font-size: 12px; color:#FE6B00 ; border-radius: 100px;">Terbuka</span>
                                <span class="w-50 d-inline-block text-center bold"  style="border: 2px solid #7C5CB1; font-size: 12px; color:#7C5CB1 ; border-radius: 100px;" " >{{$kompetisi->tingkatan}}</span>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="infobox">
                <div style="font-size: 12px;"  >
                    <div class="logo-xxsm" style="background-image: url(/css/img/kalender.svg); background-size: contain;" ></div>
                    {{$kompetisi->tanggal_pertandingan}}
                </div>
                <div style="font-size: 12px;"  >
                    <div class="logo-xxsm " style="background-image: url(/css/img/lokasi.svg); background-size: contain;" ></div>
                    {{$kompetisi->lokasi}}
                </div>
                <div style="font-size: 12px;"  >
                    <div class="logo-xxsm " style="background-image: url(/css/img/price.svg); background-size: contain;" ></div>
                    Rp {{$kompetisi->harga_tiket}}
                </div>
                <hr class="my-1 p-0" >
                <div class="d-felx justify-content-between" >
                    <span class="font-primary-mu" style="font-family: opensans-bold" >Member</span>
                    @php
                        $joinedKompetisiCount = $kompetisi->joinedKompetisi->count();
                    @endphp
                    <span class="font-primary-mu" style="font-family: opensans-bold" >{{$joinedKompetisiCount}}/{{$kompetisi->max_member}}</span>
                </div>
            </div>
        </div>
    @endforeach
</div>
</div>
<a href="/tambahkompetisi" class="add-button rounded-circle m-3 scale-hover " style="background-image: url(/css/img/add.svg); background-size: contain;" ></a>
@endsection