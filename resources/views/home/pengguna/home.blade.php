@extends('home.layout.main')

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
          <th width="20%" scope="col">Username</th>
          <th width="20%" scope="col">Nama</th>
          <th width="20%" scope="col">Email</th>
          <th width="20%" scope="col">Skor</th>
          <th width="20%" scope="col">Aksi</th>
        </tr>
      </thead>
      <tbody >
        @foreach ($user as $user)
        <tr class="user-table" >
          <th>1</th>
          <td>{{$user->username}}</td>
          <td>{{$user->name}}</td>
          <td>{{$user->email}}</td>
          <td>100</td>
          <td>
            <a href="/detailpengguna/{{$user->id}}" class="btn btn-success">Detail</a>
            <a href="" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal" >Blokir</a>
          </td>
        </tr>
        @endforeach

      </tbody>
    </table>
    <div class="modal" id="exampleModal" tabindex="-1">
      <div class="modal-dialog">
        <div class="modal-content" style="width: 32vw" >
          <div class="modal-header bg-primary-mu">
            <div class="blank logo-sm rounded-circle d-inline-block"></div>
            <h5 class="ps-2 modal-title ">
              Konfirmasi Blokir
            </h5>
            <button type="button" class="btn-close btn-close-white"data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <p  >Anda yakin ingin memblokir pengguna ini?</p>
            {{-- <p>Nama: {{$user->name}}</p>
            <p>Email: {{$user->email}}</p> --}}
            <p class="bold font-primary-mu" >Skor: 100</p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
            <form class="content1" action="/pengguna/{{$user->id}}" method="POST">
                @csrf
                @method('delete')
              <button type="submit" class="btn btn-danger">Blokir</button>
            </form>
          </div>
        </div>
      </div>
    </div>
</div>

@endsection