@extends('backend.layouts.main')
@section('title', 'Dasboard')
@section('navHome','active')

@section('content')
<div class="pagetitle">
    <h1>Update Blog</h1>
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
            <form method="post" action="/blog-backend/{{ $blog->id}}" enctype="multipart/form-data">
              @method('PUT')
                @csrf
                <div class="mb-2">
                  <label for="title" class="form-label">Title</label>
                  <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ old('title',$blog->title)}}">
                  @error('title')
                  <div class="invalid-feedback">
                      {{ $message }}
                  </div>
                  @enderror
                </div>
                
                <div class="mb-2">
                    
                  <input type="hidden" name="image_old" value="{{ $blog->gambar}}">
                  <label for="gambar" class="form-label">Gambar</label>
                  
                  @if ($blog->gambar)
                    <img  id="file-preview" src="/img/{{ $blog->gambar }}" class="img-fluid col-sm-6 d-block mb-2" height="100">      
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
                  <label for="excerpt" class="form-label">excerpt</label>
                  <input type="text" class="form-control @error('excerpt') is-invalid @enderror" name="excerpt" value="{{ old('excerpt',$blog->excerpt)}}">
                  @error('excerpt')
                  <div class="invalid-feedback">
                      {{ $message }}
                  </div>
                  @enderror
                </div>
                
                
                 
                  <div class="mb-2">
                    <label for="body" class="form-label">Body</label>
                    <textarea class="form-control @error('body') is-invalid @enderror" name="body" rows="6">{{ old('body',$blog->body)}}</textarea>
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