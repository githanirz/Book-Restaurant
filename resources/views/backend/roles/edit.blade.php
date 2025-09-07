@extends('backend.layouts.main')


@section('content')
<div class="pagetitle">
    <h1>Update Role</h1>
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
            <form method="post" action="/role-backend/{{ $roles->id }}">
                @method('PUT')
                @csrf
              
                <div class="mb-2">
                  <label for="nama" class="form-label">Nama role</label>
                  <input type="text" class="form-control @error('nama') is-invalid @enderror border-tebal" name="nama" value="{{ 
                  old('nama' ,$roles->nama)}}">
                  @error('nama')
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