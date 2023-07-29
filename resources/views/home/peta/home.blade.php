@extends('home.layout.main')

<div id="notification" class="alert position-absolute notification justify-content-between mt-sm-4 mt-2 {{ session('notification') === 'Peta berhasil di tambah' || session('notification') === 'Anda telah bergabung dengan Tim!' || session('notification') === 'Anda sudah terdaftar sebagai peserta Tim ini!' ? 'appear' : 'd-none' }}"  role="alert">
  <p class="d-inline-block p-0 m-0 " >{{ session('notification') }}</p>
  <button type="button" class="btn-close btn-close" onclick="closenotification()" aria-label="Close"></button>
</div>

@section('content')
<div class="container pt-3">
    <div class="input-group mb-3">
      <input type="text" class="ps-2 b-primary-mu border-3  " placeholder="Cari..." aria-label="Cari">
      <button class="btn bg-primary-mu rounded-0" type="button">Cari</button>
    </div>  
    
      <table class="table">
        <thead class="bg-primary-mu " >
          <tr>
            <th width="5%" scope="col">ID</th>
            <th width="20%" scope="col">Nama</th>
            <th width="35%" scope="col">Detail</th>
            <th width="25%" scope="col">Harga</th>
            <th width="20%" scope="col">Aksi</th>
          </tr>
        </thead>
        
        <tbody >
          @foreach ($map as $map)
          <tr class="user-table">
            <th>{{ $loop->iteration }}</th>
            <td>{{ $map->title_lokasi }}</td>
            <td>{{ $map->detail_lokasi }}</td>
            <td>{{ $map->harga_sewa_lokasi }}</td>
            <td>
              <a href="/editpeta" class="btn btn-success">Edit</a>
              <form class="d-inline-block" action="/peta/{{$map->id}}" method="post">
                @csrf
                @method('delete')
                <button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    Hapus
                </button>
            </form>            
            </td>
          </tr>
          @endforeach
  
        </tbody>
        
      </table>
    
    <a href="/tambahpeta" class="add-button rounded-circle m-3" style="background-image: url(/css/img/add.svg); background-size: contain;" ></a>

    {{-- <div class="modal" id="exampleModal" tabindex="-1">
      <div class="modal-dialog">
        <div class="modal-content" style="width: 32vw" >
          <div class="modal-header bg-primary-mu">
            <div class="blank logo-sm rounded-circle d-inline-block"></div>
            <h5 class="ps-2 modal-title ">
              Hapus Peta
            </h5>
            <button type="button" class="btn-close btn-close-white"data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <p>Anda yakin ingin Menghapus peta ini?</p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
            <form action="/peta/{{$map->id}}" method="post">
              @csrf
              @method('delete')
              <button type="button" class="btn btn-danger" type="submit" value="Delete">Hapus</button> 
            </form>
          </div>
        </div>
      </div>
    </div> --}}
</div>
@endsection