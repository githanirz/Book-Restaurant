@extends('layouts.main')
@section('title', 'Daftar Chef')
@section('navChef', 'active')

@section('content')

   <!-- ======= Chefs Section ======= -->
   <section id="chefs" class="chefs section-bg">
    <div class="container" data-aos="fade-up">
      <section id="menu" class="menu">
      <div class="section-header">
        <h2>Chefs</h2>
        <p>Our <span>Proffesional</span> Chefs</p>
      </div>
      <ul class="nav nav-tabs d-flex justify-content-center" data-aos="fade-up" data-aos-delay="200">
        @foreach ($roles as $data)
        <li class="nav-item">
          <a class="nav-link" href="/chef-detail/{{ $data->id}}" >
            <h4>{{$data->nama}}</h4>
          </a>
        </li><!-- End tab nav item -->
        @endforeach
    
      </ul>
      </section>
      <div class="row gy-4">
        @foreach ($chefs as $data)
        <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
          <div class="chef-member">
            <div class="member-img">
              <img src="/img/{{ $data->gambar }}" class="img-fluid" alt="">
              <div class="social">
                <a href=""><i class="bi bi-twitter"></i></a>
                <a href=""><i class="bi bi-facebook"></i></a>
                <a href=""><i class="bi bi-instagram"></i></a>
                <a href=""><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
            <div class="member-info">
              <h4>{{$data->nama}}</h4>
              <span>{{$data->role->nama}}</span>
              <p>{{$data->deskripsi}}</p>
            </div>
          </div>
        </div><!-- End Chefs Member -->
        @endforeach
      </div>

    </div>
  </section><!-- End Chefs Section -->
  {{ $chefs->links() }}
@endsection