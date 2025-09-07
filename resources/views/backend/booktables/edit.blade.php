@extends('backend.layouts.main')
@section('title', 'Dasboard')
@section('navHome','active')

@section('content')
<div class="pagetitle">
    <h1>Update Kategori</h1>
  </div><!-- End Page Title -->
  <style>
    .border-tebal {
        border: 1px solid black;
    }
  </style>
    <br>
  <section class="section">
    <div class="row">
      <div class="col-lg-12">

        <div class="card">
          <div class="card-body col-lg-6 mb-5">
            <form method="post" action="/booktable-backend/{{ $booktable->id}}" enctype="multipart/form-data">
              @method('PUT')
                @csrf
                <div class="mb-2">
                  <label for="nama" class="form-label">Nama</label>
                  <input type="text" class="form-control @error('nama') is-invalid @enderror" name="nama" value="{{ old('nama',$booktable->nama)}}">
                  @error('nama')
                  <div class="invalid-feedback">
                      {{ $message }}
                  </div>
                  @enderror
                </div>
                <div class="mb-2">
                  <label for="tanggal" class="form-label">Tanggal</label>
                  <input type="date" class="form-control @error('tanggal') is-invalid @enderror" name="tanggal" value="{{ old('tanggal',$booktable->tanggal)}}">
                  @error('tanggal')
                  <div class="invalid-feedback">
                      {{ $message }}
                  </div>
                  @enderror
                </div>
                <div class="mb-2">
                  <label for="waktu" class="form-label">Waktu</label>
                  <input type="text" class="form-control @error('waktu') is-invalid @enderror" name="waktu" value="{{ old('waktu',$booktable->waktu)}}">
                  @error('waktu')
                  <div class="invalid-feedback">
                      {{ $message }}
                  </div>
                  @enderror
                </div>

                <div class="mb-2">
                  <label for="email" class="form-label">Email</label>
                  <input type="text" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ 
                  old('email',$booktable->email)}}">
                  @error('email')
                  <div class="invalid-feedback">
                      {{ $message }}
                  </div>
                  @enderror
                </div>

                <div class="mb-2">
                  <label for="nohp" class="form-label">No Telepon</label>
                  <input type="number" class="form-control @error('nohp') is-invalid @enderror" name="nohp" value="{{ 
                  old('nohp',$booktable->nohp)}}">
                  @error('nohp')
                  <div class="invalid-feedback">
                      {{ $message }}
                  </div>
                  @enderror
                </div>

                <div class="mb-2">
                  <label for="pesan" class="form-label">Pesan</label>
                  <input type="text" class="form-control @error('pesan') is-invalid @enderror" name="pesan" value="{{ old('pesan',$booktable->pesan)}}">
                  @error('pesan')
                  <div class="invalid-feedback">
                      {{ $message }}
                  </div>
                  @enderror
                </div>
                  <button type="submit" class="btn btn-primary">Submit</button>
              </form>


          </div>
        </div>

      </div>
    </div>
  </section>
  @endsection