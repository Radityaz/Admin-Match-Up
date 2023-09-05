@extends('home.layout.main')

@section('content')
    <div class="container-fluid vh-100" style="overflow-y: auto">
        <div class="d-flex align-items-center pt-3 pb-2 position-fixed bg-white w-75">
            <a href="/peta" class="logo-xsm " style="background-image: url(/css/img/back.svg); background-size: contain;" ></a>
            <h3 class="text-dark m-0 p-0 ps-3">Edit Peta</h3>
            <div></div>
        </div>
        <section class="d-flex flex-column align-items-center py-3 mt-5">
          <p>Tampilan Peta</p>
            <iframe src="{{$map->embed_google_map}}" id="mapsdisplay" class="add-map-display blank"></iframe>
            
            <form class="w-50 pt-3" action="/editpeta/{{$map->id}}" method="POST">
              @method('put')
              @csrf
              <div class="mb-3">
                <label for="Title" class="form-label">Title Lokasi</label>
                <input type="text" class="form-control" id="Title" name="title_lokasi" value="{{$map->title_lokasi}}"  placeholder="Masukkan title lokasi... " style="border: 3px solid #FF8A35">
              </div>
              <div class="mb-3">
                <label for="detail" class="form-label">Detail Lokasi</label>
                <input type="text" class="form-control" id="detail" name="detail_lokasi" value="{{$map->detail_lokasi}}" placeholder="Masukkan detail lokasi..." style="border: 3px solid #FF8A35">
              </div>
              <div class="mb-3">
                <label for="Harga" class="form-label">Harga Sewa Lokasi</label>
                <input type="text" class="form-control" id="Harga" name="harga_sewa_lokasi" placeholder="Masukkan Harga Sewa..." value="{{ $map->harga_sewa_lokasi }}" style="border: 3px solid #FF8A35" oninput="formatCurrency(this)" required>
              </div>
              <div class="mb-3">
                <label for="embed" class="form-label">Embed google Maps</label>
                <input type="text" class="form-control" id="embed" name="embed_google_map" value="{{$map->embed_google_map}}" placeholder="Masukkan Embed google Maps Lokasi..." style="border: 3px solid #FF8A35">
              </div>
              <button type="submit" class="btn bg-primary-mu rounded-0">Submit</button>
            </form>
            <form action="/peta/{{$map->id}}" method="post">
              @csrf
              @method('delete')
              <button type="submit" class="btn btn-danger" style="color: white;" >Delete</button>
          </form>
        </section>
    </div>
@endsection