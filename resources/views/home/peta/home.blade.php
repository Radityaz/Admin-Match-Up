@extends('home.layout.main')

<div id="notification" class="alert position-absolute notification justify-content-between mt-sm-4 mt-2 {{ session('notification') === 'Peta berhasil di tambah' || session('notification') === 'Anda telah bergabung dengan Tim!' || session('notification') === 'Anda sudah terdaftar sebagai peserta Tim ini!' ? 'appear' : 'd-none' }}"  role="alert">
  <p class="d-inline-block p-0 m-0 " >{{ session('notification') }}</p>
  <button type="button" class="btn-close btn-close" onclick="closenotification()" aria-label="Close"></button>
</div>

@section('content')
<div class="container pt-3 vh-100">
    <div class="input-group mb-3">
      <input type="text" class="ps-2 b-primary-mu border-3  radius-8" placeholder="Cari..." aria-label="Cari">
      <button class="btn bg-primary-mu scale-hover radius-8" >Cari</button>
    </div>  
    
      <table class="table">
        <thead class="bg-primary-mu " >
          <tr>
            <th width="5%" scope="col">ID</th>
            <th width="20%" scope="col">Nama</th>
            <th width="35%" scope="col">Detail</th>
            <th width="25%" scope="col" class="text-center" >Harga</th>
            <th width="20%" scope="col">Aksi</th>
          </tr>
        </thead>
        
        <tbody >
          @foreach ($map as $map)
          <tr class="user-table">
            <th>{{ $loop->iteration }}</th>
            <td>{{ $map->title_lokasi }}</td>
            <td>{{ $map->detail_lokasi }}</td>
            <td class="text-center" >{{ $map->harga_sewa_lokasi }}</td>
            <td>
              <a href="/editpeta/{{$map->id}}/edit" class="btn btn-success scale-hover ">Edit</a>
              {{-- <form class="d-inline-block" action="/peta/detaildestroy/{{$map->id}}" method="get">
                @csrf --}}
                {{-- @method('delete') --}}
                {{-- <button class="btn btn-danger scale-hover " data-bs-toggle="modal" data-bs-target="#exampleModal{{$map->id}}">
                    Hapus
                </button> --}}
            {{-- </form>--}}
            </td>
          </tr>
          @endforeach
  
        </tbody>
        
      </table>
      {{-- <section class="no-data" >
        @if($map->count() > 0)
        <section class="white-space" ></section>   
        @else
        <div class="flag-icon" ></div>
        <p style="opacity: 50%;">Tidak ada hasil yang ditemukan.</p>
    @endif
    </section> --}}
    
    <a href="/tambahpeta" class="add-button rounded-circle m-3 scale-hover " style="background-image: url(/css/img/add.svg); background-size: contain;" ></a>

    <div class="modal" id="exampleModal" tabindex="-1">
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
            <button type="button" class="btn btn-secondary scale-hover "  data-bs-dismiss="modal">Batal</button>
            <form action="/peta/{{$map->id}}" method="post">
              @csrf
              @method('delete')
              <button type="button" class="btn btn-danger scale-hover " type="submit" value="Delete">Hapus</button> 
            </form>
          </div>
        </div>
      </div>
    </div>
    {{-- <section class="no-data" >
      @if($map->count() > 0)
      <section class="white-space" ></section>   
      @else
      <div class="flag-icon" ></div>
      <p style="opacity: 50%;">Tidak ada hasil yang ditemukan.</p>
  @endif
  </section> --}}
</div>
@endsection