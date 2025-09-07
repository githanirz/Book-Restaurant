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
            <h5 class="card-title">Data Blog</h5>
           
            @if (session()->has('pesan'))
          <div class="alert alert-success mt-3" role="alert">
              {{ session('pesan') }}
          </div>
          @endif

          <a href="/blog-backend/create" class="btn btn-primary"><span data-feather="plus-circle">
          </span> Create blog</a>
            <!-- Table with stripped rows -->
            <table class="table datatable">
              <thead>
                <tr>
                  <th scope="col">No</th>
                  <th scope="col">Title</th>
                  <th scope="col">User</th>
                  <th scope="col">Gambar</th>
                  <th scope="col">Excerpt</th>
                  <th scope="col">Body</th>
                  <th scope="col">Aksi</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($blogs as $data)
                <tr>
                  <th scope="row">{{$blogs->firstItem()+$loop->index}}</th>
                  <td>{{$data->title}}</td>
                  <td>{{$data->user->name}}</td>
                  <td style="width: 10px;">
                    <a href="/img/{{ $data->gambar }}" class="view-image-btn" title="View gambar">
                        <img src="/img/{{ $data->gambar }}" alt="gambar" class="gambar-table" width="100px">
                    </a>
                </td>
                <td>{{$data->excerpt}}</td>
                <td>{{$data->body}}</td>
                  <td>
                    <a href="/blog-backend/{{ $data->id }}/edit" class="btn btn-warning btn-sm">
                        <span data-feather="edit"></span> Edit</a>
            
            <form action="blog-backend/{{ $data->id }}" method="post" class="d-inline">
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
            {{$blogs->links()}}
          </div>
        </div>

      </div>
    </div>
  </section>
  @endsection