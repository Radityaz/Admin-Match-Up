@extends('home.layout.main')

@section('content')
    <div class="modal modal-custom" id="MapsInput" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content modal-content-maps" >
            <div class="modal-header bg-primary-mu">
            <div class="blank logo-sm rounded-circle d-inline-block"></div>
            <h5 class="ps-2 modal-title ">
                Masukkan Peta
            </h5>
            <button type="button" class="btn-close btn-close-white"data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <input class="w-100 ps-3" type="text" id="searchinput" onkeyup="searchLocation()" placeholder="Masukkan Nama Lokasi" style="height: 10%" type="text">
                <div id="table_data" class="w-100 maps-wrapper">
                <button class="maps-box p-3 b-0" data-filter="markas" onclick="mapsList(0)" data-bs-dismiss="modal">
                    <h6 class="fw-bold">Markas</h6>
                    <p class="m-0" >Detail</p>
                </button>
                <button class="maps-box p-3 b-0" data-filter="berlian" onclick="mapsList(1)" data-bs-dismiss="modal">
                    <h6 class="fw-bold">Berlian</h6>
                    <p class="m-0" >Detail</p>
                </button>
                <button class="maps-box p-3 b-0" data-filter="lapangan" onclick="mapsList(2)" data-bs-dismiss="modal">
                    <h6 class="fw-bold">Lapangan Besito</h6>
                    <p class="m-0" >Detail</p>
                </button>
                </div>
            </div>
            
            <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Batal</button>
            </div>
        </div>
        </div>
    </div>


    <div class="container-fluid vh-100" style="overflow-y: auto">
        <div class="d-flex align-items-center pt-3 pb-2 position-fixed bg-white w-75">
            <a href="/pengguna" class="logo-sm " style="background-image: url(/css/img/back.svg); background-size: contain;" ></a>
            <h3 class="text-dark m-0 p-0 ps-3">Tambah Kompetisi</h3>
            <div></div>
        </div>
        <form action="/kompetisi/store" method="post" enctype="multipart/form-data" class="content">
        @csrf
        <section class="d-flex flex-column align-items-center justify-content-center py-3 mt-5 "  >
                <div class="add-image">
                    <div class="image-box" >
                        <img class="img-preview rounded-circle" style="height: 150px; width: 150px; object-fit:cover; object-position: center; position: relative"  alt="">
                    </div>
                    <div class="edit-image ms-2 p-0 m-0">
                        <label for="image" class="rounded-circle blank" style="width: 35px; height: 35px"></label>
                        <input oninput="InputChange()"  style="display: none" type="file" id="image" name="image" onchange="previewImage()" required>
                    </div>
                </div>
        </section>
        <section class="d-flex flex-column align-items-center py-3 mt-5 "  >
            <div class="w-50 m-0 p-2 bg-primary-mu"><h3>Title</h3></div>
            <div class="kompetisi-wrapper-1 w-50 p-2 shadow-still">
                <div class="mb-3" style="grid-area: w1-1" >
                    <label for="title" class="form-label">Title</label>
                    <input type="text" maxlength="30" class="form-control input-kompetisi" id="title" name="title" placeholder="Masukkan title kompetisi (maksimal 30)" style="border: 3px solid #FF8A35">
                </div>
                <div class="mb-3 " style="grid-area: w1-2">
                    <label for="olahraga" class="form-label">Olahraga</label>
                    <select type="text" class="form-select input-kompetisi" id="olahraga" name="olahraga" placeholder="Masukkan cabang olahraga..." style="border: 3px solid #FF8A35">
                        <option value="" >Pilih Olahraga...</option>
                        <option value="Sepak Bola">Sepak Bola</option>
                        <option value="Futsal">Futsal</option>
                        <option value="Ping Pong">Ping Pong</option>
                        <option value="Bulutangkis">Bulutangkis</option>
                        <option value="Renang">Renang</option>
                    </select>
                </div>
                <div class="mb-3" style="grid-area: w1-3">
                    <label for="deskripsi" class="form-label">Deskripsi</label>
                    <textarea type="text" maxlength="255" class="form-control input-kompetisi" id="deskripsi" name="deskripsi" placeholder="Masukkan deskripsi kompetisi (maksimal 255)" style="border: 3px solid #FF8A35; height: 90%; resize: none;"></textarea>
                </div>
            </div>
        </section>
        <section class="d-flex flex-column align-items-center py-3 mt-3"  >
            <div class="w-50 m-0 p-2 bg-primary-mu"><h3>Juara</h3></div>
            <div class="kompetisi-wrapper-2 w-50 p-2 shadow-still">
                <div class="mb-3" style="grid-area: w2-1" >
                    <label for="juara1" class="form-label">Juara 1</label>
                    <textarea type="text" class="form-control input-kompetisi h-75 " id="juara1" name="juara_pertama" placeholder="Masukkan deskripsi juara..." style="border: 3px solid #FF8A35; resize: none;"></textarea>
                </div>
                <div class="mb-3 " style="grid-area: w2-2">
                    <label for="juara2" class="form-label">Juara 2</label>
                    <textarea type="text" class="form-control input-kompetisi h-75" id="juara2" name="juara_kedua" placeholder="Masukkan deskripsi juara..." style="border: 3px solid #FF8A35;resize: none;"></textarea>
                </div>
                <div class="mb-3" style="grid-area: w2-3">
                    <label for="juara3" class="form-label">Juara 3</label>
                    <textarea type="text" class="form-control input-kompetisi h-75" id="juara3" name="juara_ketiga" placeholder="Masukkan deskripsi juara..." style="border: 3px solid #FF8A35; resize: none;"></textarea>
                </div>
            </div>
        </section>
        <section class="d-flex flex-column align-items-center py-3 mt-3"  >
            <div class="w-50 m-0 p-2 bg-primary-mu"><h3>Lokasi</h3></div>
            <div class="kompetisi-wrapper-3 w-50 p-2 shadow-still">
                <div class="mb-3" >
                    <label for="lokasi" class="form-label">Lokasi Kompetisi</label>
                    <div class="w-100" style="display: grid; grid-template-columns: 3fr 1fr; gap: 15px;">
                        <input type="text" class="form-control input-kompetisi h-100" id="lokasi" name="lokasi" placeholder="Masukkan deskripsi juara..." style="border: 3px solid #FF8A35">
                        <a data-bs-toggle="modal" data-bs-target="#MapsInput" class="btn bg-primary-mu h-100">Tambah</a>
                    </div>
                </div>
                <div>
                    <p class="d-flex align-items-center" >Detail Lokasi</p>
                    <iframe src="" class="blank w-100" style="height: 85%" frameborder="0"></iframe>
                </div>
            </div>
        </section>
        <section class="d-flex flex-column align-items-center py-3 mt-3"  >
            <div class="w-50 m-0 p-2 bg-primary-mu"><h3>Aksesibilitas</h3></div>
            <div class="kompetisi-wrapper-4 w-50 p-2 shadow-still">
                <div class="mb-3"  >
                    <label for="slot" class="form-label">Slot Tersedia</label>
                    <input type="number" class="form-control input-kompetisi h-50 " id="slot" name="max_member" placeholder="Masukkan jumlah slot..." style="border: 3px solid #FF8A35">
                </div>
                <div class="mb-3 " >
                    <label for="tingkatan" class="form-label">Tingkatan</label>
                    {{-- <input type="text" class="form-control input-kompetisi h-50" id="tingkatan" name="tingkatan" placeholder="Masukkan tingkatan kompetisi..." style="border: 3px solid #FF8A35"> --}}
                    <select type="text" class="form-select input-kompetisi" id="tingkatan" name="tingkatan" placeholder="Masukkan Tingkatan umur..." style="border: 3px solid #FF8A35">
                        <option value="">Pilih Tingkatan...</option>
                        <option value="7-10">7-10</option>
                        <option value="10-17">10-17</option>
                        <option value="17-20">17-20</option>
                    </select>
                </div>
            </div>
        </section>
        <section class="d-flex flex-column align-items-center py-3 mt-3"  >
            <div class="w-50 m-0 p-2 bg-primary-mu"><h3>Informasi</h3></div>
            <div class="kompetisi-wrapper-5 w-50 p-2 shadow-still">
                <div class="mb-3" style="grid-area: w5-1" >
                    <label for="date" class="form-label">Tanggal</label>
                    <input type="date" class="form-control input-kompetisi h-50 " id="date" name="tanggal_pertandingan" placeholder="Masukkan tanggal kompetisi..." style="border: 3px solid #FF8A35">
                </div>
                <div class="mb-3" style="grid-area: w5-2" >
                    <label for="Harga Masuk" class="form-label">Harga Masuk Tersedia</label>
                    <input type="number" class="form-control input-kompetisi h-50 " id="Harga Masuk" name="harga_tiket" placeholder="Masukkan harga masuk..." style="border: 3px solid #FF8A35">
                </div>
                <div class="mb-3" style="grid-area: w5-3" >
                    <label for="Lama Pertandingan" class="form-label">Lama Pertandingan</label>
                    <input type="number" class="form-control input-kompetisi h-50 " id="Lama Pertandingan" name="lama_pertandingan" placeholder="Masukkan lama pertandingan..." style="border: 3px solid #FF8A35">
                </div>
                <div class="mb-3" style="grid-area: w5-4" >
                    <label for="Pukul" class="form-label">Pukul</label>
                    <input type="time" class="form-control input-kompetisi h-50 " id="Pukul" name="waktu_pertandingan" placeholder="Masukkan waktu pertadingan..." style="border: 3px solid #FF8A35">
                </div>
                <div class="mb-3" style="grid-area: w5-5" >
                    <label for="PlusInfo" class="form-label">Informasi Tambahan</label>
                    <textarea maxlength="255" class="form-control input-kompetisi " id="slot" name="deskripsi_tambahan" placeholder="Masukkan informasi tambahan (maksimal 255)" style="border: 3px solid #FF8A35; height: 90%; resize: none "></textarea>
                </div>
            </div>
            
        </section>
        <section class="d-flex flex-column align-items-center py-3 mt-3"  >
            <button class="btn bg-primary-mu" type="submit" name="submit" value="save">Submit</button>
        </section>
    </form>
    </div>
@endsection