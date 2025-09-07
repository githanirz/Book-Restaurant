@extends('layouts.main')
@section('title', 'Daftar Blog')
@section('navBlog', 'active')

@section('content')

   <!-- ======= Blogs Section ======= -->
   <section id="chefs" class="chefs section-bg">
    <div class="container" data-aos="fade-up">

      <div class="section-header">
        <h2>BLOG</h2>
        <p>Find <span>Tips And Trick In Our Restaurant</span></p>
      </div>

      <div class="row gy-4">
        @foreach ($blogs as $data)
        <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
          <div class="chef-member">
            <div class="member-img">
              <img src="/img/{{ $data->gambar }}" class="img-fluid" alt="">
            </div>
            <div class="member-info">
              <h4>{{$data->title}}</h4>
              <p>{{$data->body}}</p>
            </div>
            <a href="/blog/{{ $data->id }}" class="btn btn-primary">More</a>
          </div>
        </div><!-- End Chefs Member -->
        @endforeach
      </div>

    </div>
  </section><!-- End Chefs Section -->
  {{ $blogs->links() }}
@endsection