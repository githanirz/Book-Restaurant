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
            <form method="post" action="/kategori-backend">
                @csrf
                <div class="mb-2">
                  <label for="nama" class="form-label">Nama Kategori</label>
                  <input type="text" class="form-control @error('nama') is-invalid @enderror border-tebal" name="nama" value="{{ old('nama')}}">
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