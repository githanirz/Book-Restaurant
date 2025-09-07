@extends('backend.layouts.main')


@section('content')
<div class="pagetitle">
    <h1>Data Tables</h1>
  </div><!-- End Page Title -->

  <section class="section">
    <div class="row">
      <div class="col-lg-12">

        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Data Kategori</h5>
           
            @if (session()->has('pesan'))
          <div class="alert alert-success mt-3" role="alert">
              {{ session('pesan') }}
          </div>
          @endif

          <a href="/kategori-backend/create" class="btn btn-primary"><span data-feather="plus-circle">
          </span> Create kategori</a>
            <!-- Table with stripped rows -->
            <table class="table datatable">
              <thead>
                <tr>
                  <th scope="col">No</th>
                  <th scope="col">Nama</th>
                  <th scope="col">Aksi</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($kategoris as $data)
                <tr>
                  <th scope="row">{{$kategoris->firstItem()+$loop->index}}</th>
                  <td>{{$data->nama}}</td>
                  <td>
                    <a href="/kategori-backend/{{ $data->id }}/edit" class="btn btn-warning btn-sm">
                        <span data-feather="edit"></span> Edit</a>
            
            <form action="kategori-backend/{{ $data->id }}" method="post" class="d-inline">
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
            {{$kategoris->links()}}
          </div>
        </div>

      </div>
    </div>
  </section>
  @endsection