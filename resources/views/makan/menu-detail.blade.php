@extends('layouts.main')
@section('title', 'Daftar Menu')
@section('navMenu', 'active')

@section('content')
    <!-- ======= Menu Section ======= -->
    <section id="menu" class="menu">
        <div class="container" data-aos="fade-up">
  
          <div class="section-header">
            <h2>Our Menu</h2>
            <p>Check Our <span>Foody Menu</span></p>
          </div>
  
          <ul class="nav nav-tabs d-flex justify-content-center" data-aos="fade-up" data-aos-delay="200">
         
            <li class="nav-item">
              <a class="nav-link " href="" data-bs-toggle="tab" data-bs-target="#menu-starters">
                <h4>{{$kategoris->nama}}</h4>
              </a>
            </li><!-- End tab nav item -->
 

          </ul>

          <div class="tab-content" data-aos="fade-up" data-aos-delay="300">

            <div class="tab-pane fade active show" id="menu-starters">
  
              <div class="tab-header text-center">
                <p>Menu</p>
                <h3>Starters</h3>
              </div>
  
              <div class="row gy-5">
                @foreach ($menus as $data)
                <div class="col-lg-4 menu-item">
                  <a href="{{ asset('img/' . $data->gambar) }}" class="glightbox"><img src="{{ asset('img/' . $data->gambar) }}" class="menu-img img-fluid" alt=""></a>
                  <h4>{{ $data->nama }}</h4>
                  <p class="ingredients">
                    {{ $data->deskripsi }}
                  </p>
                  <br>
                  <h5>
                  <figcaption class="blockquote-footer">
                    {{ $data->kategori->nama}}
                  </figcaption>
                  </h5>
                  <p class="price">
                    {{ $data->harga }}
                  </p>
                  
                </div>
                @endforeach
              </div>
            </div><!-- End Starter Menu Content -->
  
          </div>
         
        </div>
      </section><!-- End Menu Section -->
      {{ $menus->links() }}

@endsection