@extends('layouts.main')
@section('title', 'Daftar Role')
@section('navRole', 'active')

@section('content')

<div class="section-header">
    <h2>Our Role Chef</h2>
    <p>Check Our <span>Foody Role Chef</span></p>
  </div>

<div class="row gy-5">
    @foreach ($roles as $data)
    <ul class="list-group list-group-flush " ><a href="{{$data->nama}}"><span>{{ $data->nama }}</span> </a>
      </ul>

  @endforeach
</div>
{{ $roles->links() }}
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

  