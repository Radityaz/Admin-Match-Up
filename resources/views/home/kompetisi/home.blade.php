@extends('home.layout.main')

@section('content')
<div class="container pt-3">
    <div class="input-group-kompetisi mb-3">
        <input type="text" class="ps-2 b-primary-mu border-3  " placeholder="Nama..." aria-label="Cari">
        <input type="text" class="ps-2 b-primary-mu border-3  " placeholder="Lokasi..." aria-label="Cari">
        <input type="text" class="ps-2 b-primary-mu border-3  " placeholder="Olahraga..." aria-label="Cari">
        <button class="btn bg-primary-mu rounded-0" type="button">Cari</button>
    </div> 
    <div class="container wrapper m-0 p-0 pb-3">
    @foreach ($kompetisi as $kompetisi)
        <div class="wrapper-box shadow-regular p-2">
            <div class="upperbox d-flex align-items-center">
                <img class="box-logo p-0 m-0 rounded-circle" src="{{asset('storage/'. $kompetisi->image)}}" alt="" style="object-fit: cover; object-position: center;" >
                <div class="ps-2 h-100 w-75 d-flex flex-column justify-content-evenly">
                    <p class="text-muted m-0" style="font-size: 8px;" >Penyelengara Kompetisi</p>
                    <h3 class="bold m-0" >{{$kompetisi->title}}</h3>
                    <span class="w-75 d-flex" style="gap: 13px">
                        <span class="w-50 d-inline-block text-center bold"  style="border: 2px solid #FE6B00; font-size: 12px; color:#FE6B00 ">Terbuka</span>
                        <span class="w-50 d-inline-block text-center bold"  style="border: 2px solid #7C5CB1; font-size: 12px; color:#7C5CB1 ">{{$kompetisi->tingkatan}}</span>
                    </span>
                </div>
                <div class="infobox">
                    <div>
                        <div class="logo-xsm  " style="background-image: url(/css/img/kalender.svg); background-size: contain;" ></div>
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
                    <a href="/editkompetisi/{{$kompetisi->id}}/edit" class="text-center bg-success border-0 text-white" style="text-decoration: none" >Edit</a>
                    <button class="bg-danger border-0 text-white" >Delete</button>
                </div>
            </div>
        </div>
    @endforeach
</div>
</div>
<a href="/tambahkompetisi" class="add-button rounded-circle m-3" style="background-image: url(/css/img/add.svg); background-size: contain;" ></a>
@endsection