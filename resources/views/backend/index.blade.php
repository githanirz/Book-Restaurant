@extends('backend.layouts.main')
@section('title', 'Dasboard')
@section('navHome','active')

@section('content')
<div class="pagetitle">
    <h1>Dashboard</h1>
  </div><!-- End Page Title -->
  <section class="section dashboard">
    <div class="row">

      <!-- Left side columns -->
      <div class="col-lg-12">
        <div class="row">

          <!-- Sales Card -->
          <div class="col-xxl-4 col-md-6">
            <div class="card info-card sales-card">

              <div class="card-body">
                <h1 class="card-title">Welcome To My Dasboard </h1>
              </div>

            </div>
          </div><!-- End Sales Card -->



        </div>
      </div>
    </div>
  </section>
@endsection