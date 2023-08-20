@extends('home.layout.main')

@section('content')
<div class="container pt-3">
    <div class="input-group-kompetisi mb-3">
        <input type="text" class="ps-2 b-primary-mu border-3  " placeholder="Nama..." aria-label="Cari">
        <input type="text" class="ps-2 b-primary-mu border-3  " placeholder="Lokasi..." aria-label="Cari">
        <input type="text" class="ps-2 b-primary-mu border-3  " placeholder="Olahraga..." aria-label="Cari">
        <button class="btn bg-primary-mu rounded-0 scale-hover " type="button">Cari</button>
    </div> 
    <div class="container wrapper m-0 p-2 pb-3">
    @foreach ($kompetisi as $kompetisi)
        <div class="wrapper-box shadow-regular p-2">
            <div class="upperbox d-flex align-items-center">
                <img class="logo-xl p-0 m-0 rounded-circle" src="{{asset('storage/'. $kompetisi->image)}}" alt="" style="object-fit: cover; object-position: center;" >
                <div class="ps-2 h-100 w-75 py-3 d-flex flex-column justify-content-evenly">
                    <p class="text-muted m-0" style="font-size: 12px;" >Penyelengara Kompetisi</p>
                    <h3 class="bold m-0" >{{$kompetisi->title}}</h3>
                    <span class="w-75 d-flex" style="gap: 13px">
                        <span class="w-50 d-inline-block text-center bold"  style="border: 2px solid #FE6B00; font-size: 12px; color:#FE6B00 ">Terbuka</span>
                        <span class="w-50 d-inline-block text-center bold"  style="border: 2px solid #7C5CB1; font-size: 12px; color:#7C5CB1 ">{{$kompetisi->tingkatan}}</span>
                    </span>
                </div>
            </div>
            <div class="infobox">
                <div>
                    <div class="logo-xsm" style="background-image: url(/css/img/kalender.svg); background-size: contain;" ></div>
                    {{$kompetisi->tanggal_pertandingan}}
                </div>
                <div>
                    <div class="logo-xsm " style="background-image: url(/css/img/lokasi.svg); background-size: contain;" ></div>
                    {{$kompetisi->lokasi}}
                </div>
                <div>
                    <div class="logo-xsm " style="background-image: url(/css/img/price.svg); background-size: contain;" ></div>
                    {{$kompetisi->harga_tiket}}
                </div>
            </div>
            <div class="actionbox">
                <a href="/editkompetisi/{{$kompetisi->id}}/edit" class="text-center bg-success border-0 text-white scale-hover" style="text-decoration: none" >Edit</a>
                <button class="bg-danger border-0 text-white scale-hover " >Delete</button>
            </div>
        </div>
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
                                      <a class="dropdown-item" href="/editkompetisi/{{$kompetisi->id}}/edit">Edit</a>
                                      <a class="dropdown-item" href="#">Delete</a>
                                    </div>
                                </div> 
                            </div>
                        <div class="h-75" >
                            <p class="m-0 p-0" style="font-size: 11px;">Penyelengara Kompetisi</p>  
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
                    <span class="font-primary-mu" style="font-family: opensans-bold" >0/2</span>
                </div>
            </div>
        </div>
    @endforeach
</div>
</div>
<a href="/tambahkompetisi" class="add-button rounded-circle m-3 scale-hover " style="background-image: url(/css/img/add.svg); background-size: contain;" ></a>
@endsection