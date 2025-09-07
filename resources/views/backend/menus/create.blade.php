@extends('backend.layouts.main')
@section('title', 'Dasboard')
@section('navHome','active')

@section('content')
<div class="pagetitle">
    <h1>Insert Kategori</h1>
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
              
<form method="post" action="/menu-backend" enctype="multipart/form-data">
  @csrf
  <div class="mb-2">
    <label for="gambar" class="form-label">Gambar</label>
  
    <img  id="file-preview" class="img-fluid col-sm-6 mb-3 d-block" height="100">
  
    <input type="file" class="form-control @error('gambar') is-invalid @enderror  border-tebal" name="gambar" id="gambar">
    @error('gambar')
    <div class="invalid-feedback">
        {{ $message }}
    </div>
    @enderror
  </div>
  <div class="mb-2">
    <label for="nama" class="form-label">nama</label>
    <input type="text" class="form-control @error('nama') is-invalid @enderror border-tebal" name="nama" value="{{ old('nama')}}">
    @error('nama')
    <div class="invalid-feedback">
        {{ $message }}
    </div>
    @enderror
  </div>


    <div class="mb-2">
      <label for="deskripsi" class="form-label">deskripsi</label>
      <textarea class="form-control @error('deskripsi') is-invalid @enderror  border-tebal" name="deskripsi" rows="6">{{ old('deskripsi')}}</textarea>
      @error('deskripsi')
        <div class="invalid-feedback">
        {{ $message }}
        </div>
    @enderror
    </div>

    <div class="mb-2">
      <label for="harga" class="form-label">harga</label>
      <input type="text" class="form-control @error('harga') is-invalid @enderror  border-tebal" name="harga" value="{{ old('harga')}}">
      @error('harga')
      <div class="invalid-feedback">
          {{ $message }}
      </div>
      @enderror
    </div>

    <div class="mb-2">
      <label for="kategori" class="form-label">Kategori</label>
      <select class="form-select" name="kategori_id">
        @foreach ($kategoris as $kategori)
          @if (old('kategori_id')== $kategori->id)
          <option value="{{ $kategori->id }}" selected>{{ $kategori->nama}}</option>  
          @else
            <option value="{{ $kategori->id }}">{{ $kategori->nama}}</option>  
          @endif 
        @endforeach
        
      </select>
      </div>
      
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
<script>
  const input = document.getElementById('gambar');
  const previewPhoto = () => {
      const file = input.files;
      if (file) {
          const fileReader = new FileReader();
          const preview = document.getElementById('file-preview');
  fileReader.onload = function (event) {
              preview.setAttribute('src', event.target.result);
          }
          fileReader.readAsDataURL(file[0]);
      }
  }
  input.addEventListener("change", previewPhoto);
</script>

          </div>
        </div>

      </div>
    </div>

  </section>
  @endsection