@extends('backend.layouts.main')
@section('title', 'Dasboard')
@section('navHome','active')

@section('content')
<div class="pagetitle">
    <h1>Data Tables</h1>

  </div><!-- End Page Title -->

  <section class="section">
    <div class="row">
      <div class="col-lg-12">

        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Data menu</h5>
           
            @if (session()->has('pesan'))
          <div class="alert alert-success mt-3" role="alert">
              {{ session('pesan') }}
          </div>
          @endif

          <a href="/menu-backend/create" class="btn btn-primary"><span data-feather="plus-circle">
          </span> Create Menu</a>
            <!-- Table with stripped rows -->
            <table class="table datatable">
              <thead>
                <tr>
                  <th scope="col">No</th>
                  <th scope="col">Gambar</th>
                  <th scope="col">nama</th>
                  <th scope="col">Deskripsi</th>
                  <th scope="col">Harga</th>
                  <th scope="col">Kategori</th>
                  <th scope="col">Aksi</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($menus as $data)
                    
                
                <tr>
                  <th scope="row">{{$menus->firstItem()+$loop->index}}</th>
                  <td style="width: 10px;">
                    <a href="/img/{{ $data->gambar }}" class="view-image-btn" title="View gambar">
                        <img src="/img/{{ $data->gambar }}" alt="gambar" class="gambar-table" width="100px">
                    </a>
                </td>
                  <td>{{$data->nama}}</td>
                  <td>{{$data->deskripsi}}</td>
                  <td>Rp.{{$data->harga}}</td>
                  <td>{{$data->kategori->nama}}</td>
                  <td>
                    <a href="/menu-backend/{{ $data->id }}/edit" class="btn btn-warning btn-sm">
                        <span data-feather="edit"></span> Edit</a>
            
            <form action="menu-backend/{{ $data->id }}" method="post" class="d-inline">
                @method('DELETE')
                    @csrf
                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Yakin akan menghapus data ?')">
                    <span data-feather="trash-2"></span> Delete</button>
            </form>
                    </td>
                </tr>
                @endforeach
              </tbody>
            </table>
            <!-- End Table with stripped rows -->
            {{$menus->links()}}
          </div>
        </div>

      </div>
    </div>
  </section>
  @endsection