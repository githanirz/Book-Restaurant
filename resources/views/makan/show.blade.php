@extends('layouts.main')
@section('title','Daftar Blog')
@section('navBlog', 'active')

@section('content')
<div class="row mt-3">
    <div class="col-lg-8">
        <img src="/img/{{ $blog->gambar }}" style="width: 500px" class="card-img-top mb-4"
        alt="...">
        <br>
            <h5 class="card-title">{{ $blog->title}}</h5>
            <br>
            <p class="card-text">{{ $blog->body }}</p>
  </div>
</div>

</div>
@endsection