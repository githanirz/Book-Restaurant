@extends('layouts.main')
@section('title', 'Daftar Role')
@section('navRole', 'active')

@section('content')
<section id="chefs" class="chefs section-bg">
  <div class="container" data-aos="fade-up">
    <section id="menu" class="menu">
    <div class="section-header">

    <h2>Our Role Chef</h2>
    <p>Check Our <span>Foody Role Chef</span></p>
  </div>

      <ul class="nav nav-tabs d-flex justify-content-center" data-aos="fade-up" data-aos-delay="200">

        <li class="nav-item">
          <a class="nav-link" >
            <h4>{{$roles->nama}}</h4>
          </a>
        </li><!-- End tab nav item -->

        </ul>
    </section>
        <div class="row gy-4">
          @foreach ($chefs as $data)
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
            <div class="chef-member">
              <div class="member-img">
                <img src="/img/{{ $data->gambar }}" class="img-fluid" alt="">

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
</section>
{{ $chefs->links() }}
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
  @endsection

  