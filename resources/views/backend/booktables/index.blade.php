@extends('backend.layouts.main')


@section('content')
<div class="pagetitle">
    <h1>Data Booking Table</h1>
  </div><!-- End Page Title -->

  <section class="section">
    <div class="row">
      <div class="col-lg-12">

        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Data Booking Table</h5>
           
            @if (session()->has('pesan'))
          <div class="alert alert-success mt-3" role="alert">
              {{ session('pesan') }}
          </div>
          @endif

          <a href="/booktable-backend/create" class="btn btn-primary"><span data-feather="plus-circle">
          </span> Create Booking</a>
            <!-- Table with stripped rows -->
            <table class="table datatable">
              <thead>
                <tr>
                  <th scope="col">No</th>
                  <th scope="col">Nama</th>
                  <th scope="col">Tanggal</th>
                  <th scope="col">Waktu</th>
                  <th scope="col">No HP</th>
                  <th scope="col">Pesan</th>
                  <th scope="col">Aksi</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($booktables as $data)
                <tr>
                  <th scope="row">{{$booktables->firstItem()+$loop->index}}</th>
                  <td>{{$data->nama}}</td>
                  <td>{{$data->tanggal}}</td>
                  <td>{{$data->waktu}}</td>
                  <td>{{$data->nohp}}</td>
                  <td>{{$data->pesan}}</td>
                  <td>
                    <a href="/booktable-backend/{{ $data->id }}/edit" class="btn btn-warning btn-sm">
                        <span data-feather="edit"></span> Edit</a>
            
            <form action="booktable-backend/{{ $data->id }}" method="post" class="d-inline">
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
            {{$booktables->links()}}
          </div>
        </div>

      </div>
    </div>
  </section>
  @endsection