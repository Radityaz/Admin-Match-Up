@extends('home.layout.main')

@section('content')
<div class="container pt-3">
  <div class="input-group mb-3">
    <form class="w-100" action="/pengguna/search" method="get">
      @csrf
    <input type="text" name="search" class="ps-2 b-primary-mu border-3 radius-8" placeholder="Cari..." aria-label="Cari">
    <button class="btn bg-primary-mu scale-hover radius-8" type="submit">Cari</button>
    </form>
  </div>
  <table class="table">
    <thead class="bg-primary-mu">
      <tr>
        <th width="5%" scope="col">ID</th>
        <th width="10%" scope="col">Username</th>
        <th width="10%" scope="col">Nama</th>
        <th width="10%" scope="col">Email</th>
        <th width="10%" scope="col">Skor</th>
        <th width="10%" scope="col">status</th>
        <th width="10%" scope="col">Aksi</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($user as $users)
      <tr class="user-table">
        <th>{{ $loop->iteration }}</th>
        <td>{{$users->username}}</td>
        <td>{{$users->name}}</td>
        <td>{{$users->email}}</td>
        <td>{{ $users->skor }}</td>
        <td>{{ $users->status }}</td>
        <td>
          <a href="/detailpengguna/{{$users->id}}" class="btn btn-success scale-hover">Detail</a>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>



@endsection
