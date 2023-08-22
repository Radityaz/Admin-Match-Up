@extends('home.layout.main')

@section('content')

<div class="modal" id="exampleModal" tabindex="-1">
    <div class="modal-dialog">
    <div class="modal-content" style="width: 32vw" >
        <div class="modal-header bg-primary-mu">
        <h5 class="ps-2 modal-title ">
            Konfirmasi Hapus Kompetisi
        </h5>
        <button type="button" class="btn-close btn-close-white"data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
        <p  >Anda yakin ingin menghapus Kompetisi ini?</p>
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
        <div class="d-flex align-items-center pt-3 pb-2 position-fixed bg-white w-75" style="z-index: 100000;">
            <a href="/kompetisi" class="logo-xsm scale-hover" style="background-image: url(/css/img/back.svg); background-size: contain;" ></a>
            <h4 class="text-dark m-0 p-0 ps-3">Edit Kompetisi {{ $kompetisi->title }}</h3>
            <div></div>
        </div>
        <form action="/editkompetisi/{{$kompetisi->id}}" method="post" enctype="multipart/form-data" >
        @method('put')
        @csrf
        <section class="d-flex flex-column align-items-center justify-content-center py-3 mt-5 "  >
            <div class="add-image">
                <div class="image-box" >
                    <img class="img-preview rounded-circle" src="{{asset('storage/'. $kompetisi->image)}}" style="height: 150px; width: 150px; object-fit:cover; object-position: center; position: relative"  alt="">
                </div>
                <div class="edit-image ms-2 p-0 m-0">
                    <label for="image" class="rounded-circle scale-hover " style="width: 35px; height: 35px ; background-image: url(/css/img/add-image.jpg); background-size: contain "></label>
                    <input oninput="InputChange()"  style="display: none" type="file" id="image" name="image" onchange="previewImage()" required>
                </div>
            </div>
    </section>
        <section class="d-flex flex-column align-items-center py-3 mt-5 "  >
            <div class="w-50 m-0 p-2 bg-primary-mu"><h3>Title</h3></div>
            <div class="kompetisi-wrapper-1 w-50 p-2 shadow-still">
                <div class="mb-3" style="grid-area: w1-0" >
                    <label for="title" class="form-label">Penyelenggara</label>
                    <input type="text" class="form-control input-kompetisi" id="title" name="penyelengara" value="{{$kompetisi->penyelengara}}" placeholder="Masukkan title kompetisi..." style="border: 3px solid #FF8A35"  >
                </div>
                <div class="mb-3" style="grid-area: w1-1" >
                    <label for="title" class="form-label">Title</label>
                    <input type="text" class="form-control input-kompetisi" id="title" name="title" value="{{$kompetisi->title}}" placeholder="Masukkan title kompetisi..." style="border: 3px solid #FF8A35"  >
                </div>
                <div class="mb-3 " style="grid-area: w1-2">
                    <label for="olahraga" class="form-label">Olahraga</label>
                    <select type="text" class="form-select input-kompetisi" id="olahraga" name="olahraga" placeholder="Masukkan cabang olahraga..." style="border: 3px solid #FF8A35" >
                        <option value="{{$kompetisi->olahraga}}" >{{$kompetisi->olahraga}}</option>
                        <option value="Sepak Bola">Sepak Bola</option>
                        <option value="Futsal">Futsal</option>
                        <option value="Ping Pong">Ping Pong</option>
                        <option value="Bulutangkis">Bulutangkis</option>
                        <option value="Renang">Renang</option>
                    </select>
                </div>
                <div class="mb-3" style="grid-area: w1-3">
                    <label for="deskripsi" class="form-label">Deskripsi</label>
                    <textarea type="text" class="form-control input-kompetisi" id="deskripsi" name="deskripsi" value="{{$kompetisi->deskripsi}}" placeholder="Masukkan deskripsi kompetisi..." style="border: 3px solid #FF8A35; height: 90%; resize: none;">{{$kompetisi->deskripsi}}</textarea>
                </div>
            </div>
        </section>
        <section class="d-flex flex-column align-items-center py-3 mt-3"  >
            <div class="w-50 m-0 p-2 bg-primary-mu"><h3>Juara</h3></div>
            <div class="kompetisi-wrapper-2 w-50 p-2 shadow-still">
                <div class="mb-3" style="grid-area: w2-1" >
                    <label for="juara1" class="form-label">Juara 1</label>
                    <textarea type="text" class="form-control input-kompetisi h-75 " id="juara1" name="juara_pertama" placeholder="Masukkan deskripsi juara..." style="border: 3px solid #FF8A35; resize: none;"  >{{$kompetisi->juara_pertama}}</textarea>
                </div>
                <div class="mb-3 " style="grid-area: w2-2">
                    <label for="juara2" class="form-label">Juara 2</label>
                    <textarea type="text" class="form-control input-kompetisi h-75" id="juara2" name="juara_kedua" placeholder="Masukkan deskripsi juara..." style="border: 3px solid #FF8A35;resize: none;">{{$kompetisi->juara_kedua}}</textarea>
                </div>
                <div class="mb-3" style="grid-area: w2-3">
                    <label for="juara3" class="form-label">Juara 3</label>
                    <textarea type="text" class="form-control input-kompetisi h-75" id="juara3" name="juara_ketiga" placeholder="Masukkan deskripsi juara..." style="border: 3px solid #FF8A35; resize: none;">{{$kompetisi->juara_ketiga}}</textarea>
                </div>
            </div>
        </section>
        <section class="d-flex flex-column align-items-center py-3 mt-3"  >
            <div class="w-50 m-0 p-2 bg-primary-mu"><h3>Lokasi</h3></div>
            <div class="kompetisi-wrapper-3 w-50 p-2 shadow-still">
                <div class="mb-3" >
                    <label for="lokasi" class="form-label">Lokasi Kompetisi</label>
                    <div class="w-100" style="display: grid; grid-template-columns: 1fr; gap: 15px;">
                        <input type="text" class="form-control input-kompetisi h-100" id="lokasi" name="lokasi" value="{{$kompetisi->lokasi}}" placeholder="Masukkan deskripsi juara..." style="border: 3px solid #FF8A35" readonly >
                    </div>
                    <input class="d-none" type="detail_lokasi" value="{{ $kompetisi->detail_lokasi }}" >
                </div>
                <iframe src="{{ $kompetisi->embed_lokasi }}" class="blank w-100 h-100" frameborder="0"></iframe>
            </div>
        </section>
        <section class="d-flex flex-column align-items-center py-3 mt-3"  >
            <div class="w-50 m-0 p-2 bg-primary-mu"><h3>Aksesibilitas</h3></div>
            <div class="kompetisi-wrapper-4 w-50 p-2 shadow-still">
                <div class="mb-3"  >
                    <label for="slot" class="form-label">Slot Tersedia</label>
                    <input type="number" class="form-control input-kompetisi h-50 " id="slot" name="max_member" value="{{$kompetisi->max_member}}" placeholder="Masukkan jumlah slot..." style="border: 3px solid #FF8A35">
                </div>
                <div class="mb-3 " >
                    <label for="tingkatan" class="form-label">Tingkatan</label>
                    <input type="text" class="form-control input-kompetisi h-50" id="tingkatan" name="tingkatan" value="{{$kompetisi->tingkatan}}" placeholder="Masukkan tingakatan kompetisi..." style="border: 3px solid #FF8A35">
                </div>
            </div>
        </section>
        <section class="d-flex flex-column align-items-center py-3 mt-3"  >
            <div class="w-50 m-0 p-2 bg-primary-mu"><h3>Informasi</h3></div>
            <div class="kompetisi-wrapper-5 w-50 p-2 shadow-still">
                <div class="mb-3" style="grid-area: w5-1" >
                    <label for="date" class="form-label">Tanggal</label>
                    <input type="date" class="form-control input-kompetisi h-50 " id="datepick" name="tanggal_pertandingan" value="{{$kompetisi->tanggal_pertandingan}}" placeholder="Masukkan jumlah slot..." style="border: 3px solid #FF8A35" >
                </div>
                <div class="mb-3" style="grid-area: w5-2" >
                    <label for="Harga Masuk" class="form-label">Harga Masuk Tersedia</label>
                    <input type="number" class="form-control input-kompetisi h-50 " id="Harga Masuk" name="harga_tiket" value="{{$kompetisi->harga_tiket}}" placeholder="Masukkan jumlah slot..." style="border: 3px solid #FF8A35">
                </div>
                <div class="mb-3" style="grid-area: w5-3" >
                    <label for="Lama Pertandingan" class="form-label">Lama Pertandingan</label>
                    <input type="number" class="form-control input-kompetisi h-50 " id="Lama Pertandingan" name="lama_pertandingan" value="{{$kompetisi->lama_pertandingan}}" placeholder="Masukkan jumlah slot..." style="border: 3px solid #FF8A35">
                </div>
                <div class="mb-3" style="grid-area: w5-4" >
                    <label for="Pukul" class="form-label">Pukul</label>
                    <input type="time" class="form-control input-kompetisi h-50 " id="Pukul" name="waktu_pertandingan" value="{{$kompetisi->waktu_pertandingan}}" placeholder="Masukkan jumlah slot..." style="border: 3px solid #FF8A35">
                </div>
                <div class="mb-3" style="grid-area: w5-5" >
                    <label for="PlusInfo" class="form-label">Informasi Tambahan</label>
                    <textarea type="number" class="form-control input-kompetisi " id="slot" name="deskripsi_tambahan" placeholder="Masukkan jumlah slot..." style="border: 3px solid #FF8A35; height: 90%; resize: none ">{{$kompetisi->deskripsi_tambahan}}</textarea>
                </div>
            </div>
            
        </section>
        <section class="d-flex align-items-center justify-content-center py-3 mt-3" style="gap: 15px" >
            <button class="btn bg-primary-mu text-light scale-hover " type="submit" name="submit" value="save">Submit</button>
            <button class="btn bg-danger text-light scale-hover" data-bs-toggle="modal" data-bs-target="#exampleModal" type="submit" name="submit" value="save">Delete</button>
        </section>
    </form>
    </div>
@endsection