@extends('layouts.main')
@section('title', 'Daftar Booking')
@section('navBooking', 'active')

@section('content')
<style>
.form-margin {
  margin-left: 0.2px; 
}
</style>


    <!-- ======= Book A Table Section ======= -->
    <section id="book-a-table" class="book-a-table">
        <div class="container" data-aos="fade-up">
  
          <div class="section-header">
            
            <p>Book <span>Your Stay</span> With Us</p>
          </div>
  
          <div class="row g-0">
  
            <div class="col-lg-4">
  <img src="assets/img/reservation.jpg" alt="Reservation" class="img-fluid" style="width: 400px; height: auto;" data-aos="zoom-out" data-aos-delay="200">
</div>

  
            <div class="col-lg-8 d-flex align-items-center reservation-form ">
              <form method="post" action="/booktable-create" enctype="multipart/form-data">
                @csrf
                <div class="row gy-4">
                <div class="mb-2 col-lg-4 col-md-6">
                  <label for="nama" class="form-label">Nama Pemesan</label>
                  <input type="text" class="form-control @error('nama') is-invalid @enderror border-tebal" name="nama" value="{{ old('nama')}}">
                  @error('nama')
                  <div class="invalid-feedback">
                      {{ $message }}
                  </div>
                  @enderror
                </div>
                <div class="mb-2 col-lg-4 col-md-6">
                  <label for="tanggal" class="form-label">Tanggal</label>
                  <input type="date" class="form-control @error('tanggal') is-invalid @enderror border-tebal" name="tanggal" value="{{ old('tanggal')}}">
                  @error('tanggal')
                  <div class="invalid-feedback">
                      {{ $message }}
                  </div>
                  @enderror
                </div>
                <div class="mb-2 col-lg-4 col-md-6">
                  <label for="waktu" class="form-label">Waktu</label>
                  <input type="text" class="form-control @error('waktu') is-invalid @enderror border-tebal" name="waktu" value="{{ old('waktu')}}">
                  @error('waktu')
                  <div class="invalid-feedback">
                      {{ $message }}
                  </div>
                  @enderror
                </div>
                <div class="mb-2 col-lg-4 col-md-6">
                  <label for="email" class="form-label">Email</label>
                  <input type="text" class="form-control @error('email') is-invalid @enderror border-tebal" name="email" value="{{ old('email')}}">
                  @error('email')
                  <div class="invalid-feedback">
                      {{ $message }}
                  </div>
                  @enderror
                </div>
                <div class="mb-2 col-lg-4 col-md-6">
                  <label for="nohp" class="form-label">No Telepon</label>
                  <input type="number" class="form-control @error('nohp') is-invalid @enderror border-tebal" name="nohp" value="{{ old('nohp')}}">
                    @error('nohp')
                    <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                  @enderror
                </div>
                <div class="mb-2 col-lg-4 col-md-6">
                  <label for="pesan" class="form-label">Pesan</label>
                  <input type="text" class="form-control @error('pesan') is-invalid @enderror border-tebal" name="pesan" value="{{ old('pesan')}}">
                  @error('pesan')
                  <div class="invalid-feedback">
                      {{ $message }}
                  </div>
                  @enderror
                </div>
              </div>
                  <div class="text-center">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
            </div><!-- End Reservation Form -->
  
          </div>
  
        </div>
      </section><!-- End Book A Table Section -->
@endsection