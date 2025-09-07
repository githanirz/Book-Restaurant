@extends('backend.layouts.main')
@section('title', 'Dasboard')
@section('navHome','active')

@section('content')
<div class="pagetitle">
    <h1>Insert Blog</h1>
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

<form method="post" action="/blog-backend" enctype="multipart/form-data">
  @csrf
  <div class="mb-2">
    <label for="title" class="form-label">Title</label>
    <input type="text" class="form-control @error('title') is-invalid @enderror border-tebal" name="title" value="{{ old('title')}}">
    @error('title')
    <div class="invalid-feedback">
        {{ $message }}
    </div>
    @enderror
  </div>
  
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
    <label for="excerpt" class="form-label">excerpt</label>
    <input type="text" class="form-control @error('excerpt') is-invalid @enderror  border-tebal" name="excerpt" value="{{ old('excerpt')}}">
    @error('excerpt')
    <div class="invalid-feedback">
        {{ $message }}
    </div>
    @enderror
  </div>

    <div class="mb-2">
      <label for="body" class="form-label">Body</label>
      <textarea class="form-control @error('body') is-invalid @enderror  border-tebal" name="body" rows="6">{{ old('body')}}</textarea>
      @error('body')
        <div class="invalid-feedback">
        {{ $message }}
        </div>
    @enderror
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