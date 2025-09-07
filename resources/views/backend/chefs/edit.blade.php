@extends('backend.layouts.main')

@section('content')
<div class="pagetitle">
    <h1>Update Chef</h1>
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
            <form method="post" action="/chef-backend/{{ $chef->id}}" enctype="multipart/form-data">
              @method('PUT')
                @csrf
                
                <div class="mb-2">
                  <input type="hidden" name="image_old" value="{{ $chef->gambar}}">
                  <label for="gambar" class="form-label">Gambar</label>
                  
                  @if ($chef->gambar)
                    <img  id="file-preview" src="/img/{{ $chef->gambar }}" class="img-fluid col-sm-6 d-block mb-2" height="100">      
                  @else
                    <img  id="file-preview" class="img-fluid col-sm-6 d-block mb-2" height="100">
                  @endif
          
                  <input type="file" class="form-control @error('gambar') is-invalid @enderror" name="gambar" id="gambar">
                  @error('gambar')
                    <div class="invalid-feedback">
                    {{ $message }}
                    </div>
                @enderror
                </div>
                <div class="mb-2">
                  <label for="nama" class="form-label">Nama chef</label>
                  <input type="text" class="form-control @error('nama') is-invalid @enderror border-tebal" name="nama" value="{{ 
                  old('nama',$chef->nama)}}">
                  @error('nama')
                  <div class="invalid-feedback">
                      {{ $message }}
                  </div>
                  @enderror
                </div>
                <div class="mb-2">
                  <label for="deskripsi" class="form-label">deskripsi</label>
                  <input type="text" class="form-control @error('deskripsi') is-invalid @enderror" name="deskripsi" value="{{ old('deskripsi',$chef->deskripsi)}}">
                  @error('deskripsi')
                  <div class="invalid-feedback">
                      {{ $message }}
                  </div>
                  @enderror
                </div>
                <div class="mb-2">
                  <label for="role" class="form-label">role</label>
                  <select class="form-select @error('role_id') is-invalid @enderror" name="role_id">
                    @foreach ($roles as $role)
                     @if (old('role_id' , $chef -> role_id)==$role->id)
                      <option value="{{ $role->id }}" selected>{{ $role->nama }}</option>
                    @else
                      <option value="{{ $role->id }}">{{ $role->nama }}</option>
                      @endif
                    @endforeach
                   
                  </select>
                  @error('role')
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