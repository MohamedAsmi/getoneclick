@extends('main')

@section('section')

<!-- Carousel Start -->
<div class="container-fluid p-0 pb-5">
  <div class="owl-carousel header-carousel position-relative">
    @if($videos)
    @foreach($videos as $video)
    <div class="owl-carousel-item position-relative">
      <img class="img-fluid" src="{{ asset('assets/admin/uploads/' . $video->path) }}" alt="">
    </div>
    @endforeach
    @endif

  </div>
</div>
<!-- Carousel End -->

<div id="myCarousel" class="carousel slide col-md-12" data-bs-ride="carousel">
  <div class="carousel-inner w-100">
    @if(count($categories) > 0)
    @foreach ($categories->chunk(5) as $category)
    <div class="carousel-item {{ $loop->first ? ' active' : '' }}">
      @foreach ($category as $item)
      <div class="col-md-3">
        <div class="card card-body">
          <img class="img-fluid" src="{{ asset('assets/admin/category/'.$item->path.'') }}">
          <p class="caption">{{ $item->name }}</p>
        </div>
      </div>
      @endforeach
    </div>
    @endforeach
    @endif



  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

@if(count($categories) > 0)
<section id="discover mb-4 pb-4">
  <div class="container">
    <h1 class="discover-heading">Discover</h1>
    <ul class="service-list">
      <li class="service-item d-flex">
        <div class="service-icon icon-home rounded-circle">
          <i class="fas fa-home"></i>
        </div>
        <div class="service-text">Home & Garden</div>
      </li>
      <li class="service-item d-flex">
        <div class="service-icon icon-heart rounded-circle">
          <i class="fas fa-heart"></i>
        </div>
        <div class="service-text">Health & Wellbeing</div>
      </li>
      <li class="service-item d-flex">
        <div class="service-icon icon-gift rounded-circle">
          <i class="fas fa-gift"></i>
        </div>
        <div class="service-text">Weddings & Events</div>
      </li>
      <li class="service-item d-flex">
        <div class="service-icon icon-briefcase rounded-circle">
          <i class="fas fa-briefcase"></i>
        </div>
        <div class="service-text">Business Services</div>
      </li>
      <li class="service-item d-flex">
        <div class="service-icon icon-book rounded-circle">
          <i class="fas fa-book"></i>
        </div>
        <div class="service-text">Lessons & Training</div>
      </li>
      <li class="service-item d-flex">
        <div class="service-icon icon-ellipsis rounded-circle">
          <i class="fas fa-ellipsis-h"></i>
        </div>
        <div class="service-text">Other services</div>
      </li>
    </ul>
  </div>
</section>

@if(count($categories) > 0)
@foreach($categories as $category)
<div class="col-md-11 mt-4 mx-auto pt-4">

  <div class="row">
    <div class="d-flex col-12 justify-content-between pt-5 pb-2">
      <h4 class="discover-section-title">{{$category->name}}</h4>
      <a href="#" class="align-self-center text-light-grey">
        View All
      </a>
    </div>
  </div>
  <div class="row flex-nowrap overflow-auto scroll-touch pb-5">
    @php $count = 0 @endphp

    @foreach ($category->projects as $project)

    <div class="col-8 col-md-4">
      <div class="disc-item d-flex flex-column" data-category-id="179">
        <div class="img-fluid discover-image-wrapper" data-remotable="Available online">
          <img class="br-top img-fluid object-fit-cover lazy loaded" alt="Gardening" width="400" height="260"
            title="Gardening" src="{{ asset('assets/admin/projects/'.$project->path.'') }}" data-was-processed="true">
        </div>
        <p class="disc-title p-3 br-bottom mb-0">{{ $project->title }}</p>
      </div>
    </div>

    @php $count++ @endphp

    @if ($count == 3)
    @break
    @endif

    @endforeach
  </div>

</div>
@endforeach
@endif
@endif









<!-- Back to Top -->
<a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i class="bi bi-arrow-up"></i></a>
@include('layouts.dashboard.testimonial')

@endsection
