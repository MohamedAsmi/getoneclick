@extends('home')
@section('content')
<link rel="stylesheet" href="{{asset('assets/dashbord/vendor/owlcarousel/owl.carousel.min.css')}}">
<link rel="stylesheet" href="{{asset('assets/dashbord/vendor/owlcarousel/owl.theme.default.min.css')}}">
<link rel="stylesheet" href="{{asset('assets/dashbord/css/swiper-bundle.min.css')}}" />
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="{{asset('assets/css/dashboard.css')}}">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
  integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

<style>
  /* carousel_styles */
  .category-title {
    font-size: 24px;
    font-weight: bold;
    margin-bottom: 20px;
    margin-top: 20px;
    padding-left: 30px;
  }

  .carousel-item img {
    border-radius: 16px;
    margin-left: 5px;
    margin-right: 5px;

  }

  .carousel-item img:hover {
    opacity: 0.7;
  }

  .section-separator {
    margin-top: 32px;
    margin-bottom: 32px;
    border-bottom: 1px solid #ccc;
  }

  .carousel-inner {
    display: flex;
    flex-wrap: nowrap;
    overflow: hidden;
    /* padding-right: 50px; */
    /* padding-left: 50px; */
  }

  .carousel-control-prev,
  .carousel-control-next {
    width: auto;
    top: 50%;
    transform: translateY(-50%);
    z-index: 2;
    /* Adjusted z-index to ensure visibility */
  }

  .carousel-control-prev {
    left: -10px;
    filter: invert(100%);
  }

  .carousel-control-next {
    right: -10px;
    filter: invert(100%);
  }

  .image-set {
    justify-content: center;
  }


  /* media banner styles */

  .media-banner {
    height: 150px;
    background-color: #fafafaff;
    align-items: center
  }

  /* dicovery styles */

  .service-icon {
    font-size: 24px;
    border-radius: 50%;
    width: 64px;
    height: 64px;
    display: flex;
    align-items: center;
    justify-content: center;
    margin-bottom: 10px;
  }

  .service-text {
    font-size: 16px;
    color: #495057;
    margin-top: 8px;
  }

  .discover-heading {
    font-size: 48px;
    font-weight: 600;
    text-align: center;
    color: #000;
    margin-bottom: 40px;
  }

  .service-item {
    align-items: center;
    flex-direction: column;
  }

  .service-list {
    display: flex;
    justify-content: center;
    list-style: none;
    padding: 0;
    margin: 0;
  }

  .service-list li {
    margin: 0 20px;
  }

  .icon-home {
    background-color: #e3f2fd;
    color: #2196f3;
  }

  .icon-heart {
    background-color: #e8f5e9;
    color: #4caf50;
  }

  .icon-gift {
    background-color: #ffebee;
    color: #f44336;
  }

  .icon-briefcase {
    background-color: #e3f2fd;
    color: #2196f3;
  }

  .icon-book {
    background-color: #f3e5f5;
    color: #9c27b0;
  }

  .icon-ellipsis {
    background-color: #e0e0e0;
    color: #9e9e9e;
  }

  /* testimonials styles */
  .testimonial-section {
    text-align: center;
    padding: 100px 0;
  }

  .testimonial-quote {
    font-size: 1.5rem;
    color: #007bff;
    margin-bottom: 30px;
  }

  .testimonial-author {
    font-size: 1.25rem;
    font-weight: bold;
  }

  .testimonial-carousel .carousel-indicators {
    position: static;
    margin-top: 20px;
  }

  .testimonial-carousel .carousel-indicators li {
    background-color: #007bff;
    width: 10px;
    height: 10px;
    border-radius: 100%;
    display: inline-block;
  }

  .testimonial-carousel .carousel-indicators .active {
    background-color: #495057;
  }

  .testimonial-carousel .carousel-item {
    padding: 0;
  }

  .testimonial-carousel .carousel-item img {
    border-radius: 50%;
    width: 80px;
    height: 80px;
    object-fit: cover;
    display: inline-block;
    margin: 0 10px;
  }

  .testimonial-section {
    text-align: center;
    padding: 100px 0;
  }

  .testimonial-carousel .carousel-inner {
    display: flex;
    flex-wrap: nowrap;
    /* Display items in a single row */
    overflow-x: auto;
    /* Enable horizontal scrolling */
    justify-content: center;
  }

  .testimonial-carousel .carousel-item {
    padding: 0;
    display: flex;
    flex-direction: column;
    align-items: center;
    margin-right: 10px;
    /* Add some right margin for spacing */
  }

  /* Add margin to the last item to avoid overflow */
  .testimonial-carousel .carousel-item:last-child {
    margin-right: 0;
  }

  .testimonial-carousel .carousel-item img {
    border-radius: 50%;
    width: 80px;
    height: 80px;
    object-fit: cover;
    margin: 0 10px;
  }

  .testimonial-carousel .carousel-item img.main-image {
    width: 100px;
    height: 100px;
  }

  .testimonial-quote,
  .testimonial-author {
    display: none;
  }

  .review {
    margin-top: 50px;
  }

  .review_message h3 {
    margin: 0;
  }

  .reviewer_name h5 {
    margin: 10px 0;
  }

  .testimonial-carousel .carousel-indicators {
    position: static;
    margin-top: 20px;
    visibility: hidden;
  }

  .testimonial-carousel .carousel-indicators li {
    background-color: #007bff;
    width: 10px;
    height: 10px;
    border-radius: 100%;
    display: inline-block;
  }

  .testimonial-carousel .carousel-indicators .active {
    background-color: #495057;
  }

  .custom-carousel {
    width: 100%;
    overflow: hidden;
    position: relative;
  }

  .custom-carousel .carousel-inner {
    width: 100%;
  }

  .custom-carousel .carousel-item {
    position: relative;
    text-align: center;
  }

  .custom-carousel .carousel-item img {
    width: 100%;
    max-height: 100vh;
    object-fit: cover;
    max-width: 100%;
  }

  .custom-carousel .carousel-control-prev,
  .custom-carousel .carousel-control-next {
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    font-size: 2rem;
  }
</style>

<body class="sticky-header">

  <div id="preloader"></div>
  <div class="wrapper" id="wrapper">
    <!--=====================================-->

    <div class="rt-header-menu mean-container position-relative" id="meanmenu">
      <div class="mean-bar">
        <a href="index.html">
          <img src='{{asset(' assets/dashbord/img/logo-2.png')}}' alt='logo' width="50%" class='img-fluid' />
        </a>
        <div class="mean-bar--right">
          <div class="actions search">
            <a href="#template-search" class="item-icon" title="Search">
              <i class="fas fa-search"></i>
            </a>
          </div>
          <div class="actions user">
            <a href="account.html"><i class="flaticon-user"></i></a>
          </div>
          <span class="sidebarBtn">
            <span class="bar"></span>
            <span class="bar"></span>
            <span class="bar"></span>
            <span class="bar"></span>
          </span>
        </div>
      </div>
      <div class="rt-slide-nav">
        <div class="offscreen-navigation">
          <nav class="menu-main-primary-container">
            <ul class="menu">
              <li class="list menu-item-parent">
                <a class="animation" href="index.html">Apple TV+</a>
              </li>
              <li class="list menu-item-parent">
                <a class="animation" href="index.html">MLS Season Pass</a>
              </li>

            </ul>
          </nav>
        </div>
      </div>
    </div>
    <!--=====================================-->

    <div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">


        @if($videos)
        @foreach($videos as $index => $video)
        <div class="carousel-item{{ $index === 0 ? ' active' : '' }}">
          <div class="videoSlider">
            @if($video->type == 2)
            <video width="100%" class="elVideo" loop="loop" autoplay playsinline muted
              src="{{ asset('asset/admin/uploads/' . $video->path) }}" id='video-slider-{{ $index + 1 }}'></video>
            @elseif($video->type == 1)
            <img width="100%" class="elVideo" src="{{ asset('asset/admin/uploads/' . $video->path) }}"
              alt="Image {{ $index + 1 }}">
            @endif
          </div>
        </div>
        @endforeach
        @else
        <div class="carousel-item active">
          <div class="videoSlider">
            <video width="100%" class="elVideo" loop="loop" autoplay playsinline muted
              src="{{ asset('asset/admin/uploads/img.jpg') }}" id='video-slider-1'></video>

          </div>
        </div>
        @endif
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>

    <!--=====================================-->
    <!--=====================================-->

    <section id="carousel">
      <div class="container-fluid mt-4">
        <div id="featureFilmsCarousel" class="carousel slide" data-bs-ride="carousel">
          <!-- Move the prev button outside the carousel-inner -->
          <button class="carousel-control-prev" type="button" data-bs-target="#featureFilmsCarousel"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <div class="carousel-inner">
            <!-- First set of 5 images -->
            @if(count($categories) > 0)
            @foreach ($categories->chunk(5) as $category)
            <div class="carousel-item{{ $loop->first ? ' active' : '' }}">
              <div class="d-flex image-set">
                @foreach ($category as $item)
                <img src="{{ asset('assets/admin/category/'.$item->path.'') }}" alt="{{ $item->name }}">
                @endforeach
              </div>
            </div>
            @endforeach
            @endif
            <!-- Add more carousel-item divs here for additional sets of 5 images -->
          </div>
          <!-- Move the next button outside the carousel-inner -->
          <button class="carousel-control-next" type="button" data-bs-target="#featureFilmsCarousel"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>

        <!-- <div class="section-separator"></div> -->

        <!-- Additional Carousels can be added here with the same structure -->
      </div>
    </section>

    <!--=====================================-->
    <!--=====================================-->

    <div class="media-banner d-flex">
      <div class="container-fluid">
        <div class="row">
          <div class="px-3 offset-md-1 col-md-2">
            <img alt="BBC" title="BBC"
              data-src="https://d18jakcjgoan9.cloudfront.net/s/img/frontend-v2/directory/press-logos/bbc.png!d=9gOhO"
              data-srcset="https://d18jakcjgoan9.cloudfront.net/s/img/frontend-v2/directory/press-logos/bbc.png!d=9gOhO 1x, https://d18jakcjgoan9.cloudfront.net/s/img/frontend-v2/directory/press-logos/bbc.png!d=dZYfdp 2x"
              class="lazy loaded"
              srcset="https://d18jakcjgoan9.cloudfront.net/s/img/frontend-v2/directory/press-logos/bbc.png!d=9gOhO 1x, https://d18jakcjgoan9.cloudfront.net/s/img/frontend-v2/directory/press-logos/bbc.png!d=dZYfdp 2x"
              src="https://d18jakcjgoan9.cloudfront.net/s/img/frontend-v2/directory/press-logos/bbc.png!d=9gOhO"
              data-was-processed="true">
          </div>
          <div class="px-3 col-md-2">
            <img alt="Daily Mail" title="Daily Mail"
              data-src="https://d18jakcjgoan9.cloudfront.net/s/img/frontend-v2/directory/press-logos/daily-mail.png!d=D6ZU1"
              data-srcset="https://d18jakcjgoan9.cloudfront.net/s/img/frontend-v2/directory/press-logos/daily-mail.png!d=D6ZU1 1x, https://d18jakcjgoan9.cloudfront.net/s/img/frontend-v2/directory/press-logos/daily-mail.png!d=n0mf4k 2x"
              class="lazy loaded"
              srcset="https://d18jakcjgoan9.cloudfront.net/s/img/frontend-v2/directory/press-logos/daily-mail.png!d=D6ZU1 1x, https://d18jakcjgoan9.cloudfront.net/s/img/frontend-v2/directory/press-logos/daily-mail.png!d=n0mf4k 2x"
              src="https://d18jakcjgoan9.cloudfront.net/s/img/frontend-v2/directory/press-logos/daily-mail.png!d=D6ZU1"
              data-was-processed="true">
          </div>
          <div class="px-3 col-md-2">
            <img alt="The Guardian" title="The Guardian"
              data-src="https://d18jakcjgoan9.cloudfront.net/s/img/frontend-v2/directory/press-logos/the-guardian.png!d=yKyi0"
              data-srcset="https://d18jakcjgoan9.cloudfront.net/s/img/frontend-v2/directory/press-logos/the-guardian.png!d=yKyi0 1x, https://d18jakcjgoan9.cloudfront.net/s/img/frontend-v2/directory/press-logos/the-guardian.png!d=lBXSzR 2x"
              class="lazy loaded"
              srcset="https://d18jakcjgoan9.cloudfront.net/s/img/frontend-v2/directory/press-logos/the-guardian.png!d=yKyi0 1x, https://d18jakcjgoan9.cloudfront.net/s/img/frontend-v2/directory/press-logos/the-guardian.png!d=lBXSzR 2x"
              src="https://d18jakcjgoan9.cloudfront.net/s/img/frontend-v2/directory/press-logos/the-guardian.png!d=yKyi0"
              data-was-processed="true">
          </div>
          <div class="px-3 col-md-2">
            <img alt="Harpers Bazaar" title="Harpers Bazaar"
              data-src="https://d18jakcjgoan9.cloudfront.net/s/img/frontend-v2/directory/press-logos/harpers-bazaar.png!d=o8Yf3"
              data-srcset="https://d18jakcjgoan9.cloudfront.net/s/img/frontend-v2/directory/press-logos/harpers-bazaar.png!d=o8Yf3 1x, https://d18jakcjgoan9.cloudfront.net/s/img/frontend-v2/directory/press-logos/harpers-bazaar.png!d=2PAf2y 2x"
              class="lazy loaded"
              srcset="https://d18jakcjgoan9.cloudfront.net/s/img/frontend-v2/directory/press-logos/harpers-bazaar.png!d=o8Yf3 1x, https://d18jakcjgoan9.cloudfront.net/s/img/frontend-v2/directory/press-logos/harpers-bazaar.png!d=2PAf2y 2x"
              src="https://d18jakcjgoan9.cloudfront.net/s/img/frontend-v2/directory/press-logos/harpers-bazaar.png!d=o8Yf3"
              data-was-processed="true">
          </div>
          <div class="px-3 col-md-2">
            <img alt="Cosmopolitan" title="Cosmopolitan"
              data-src="https://d18jakcjgoan9.cloudfront.net/s/img/frontend-v2/directory/press-logos/cosmopolitan.png!d=bebTX"
              data-srcset="https://d18jakcjgoan9.cloudfront.net/s/img/frontend-v2/directory/press-logos/cosmopolitan.png!d=bebTX 1x, https://d18jakcjgoan9.cloudfront.net/s/img/frontend-v2/directory/press-logos/cosmopolitan.png!d=dMwUdN 2x"
              class="lazy loaded"
              srcset="https://d18jakcjgoan9.cloudfront.net/s/img/frontend-v2/directory/press-logos/cosmopolitan.png!d=bebTX 1x, https://d18jakcjgoan9.cloudfront.net/s/img/frontend-v2/directory/press-logos/cosmopolitan.png!d=dMwUdN 2x"
              src="https://d18jakcjgoan9.cloudfront.net/s/img/frontend-v2/directory/press-logos/cosmopolitan.png!d=bebTX"
              data-was-processed="true">
          </div>
          <div class="offset-md-1"></div>
        </div>
      </div>
    </div>

    <!--=====================================-->
    <!--=====================================-->

    <section id="discover">
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

    <!--=====================================-->
    <!--=====================================-->
    <section id="carousel">
      <div class="container-fluid mt-4">
        <div class="row">
          <div class="col">
            <div class="category-title">Home and Garden</div>
          </div>
        </div>
        <div id="featureFilmsCarousel2" class="carousel slide" data-bs-ride="carousel">
          <!-- Move the prev button outside the carousel-inner -->
          <button class="carousel-control-prev" type="button" data-bs-target="#featureFilmsCarousel2"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <div class="carousel-inner">
            <!-- First set of 5 images -->
            @if(count($projects) > 0)
            @foreach ($projects->chunk(5) as $project)

            <div class="carousel-item{{ $loop->first ? ' active' : '' }}">
              <div class="d-flex image-set">
                @foreach ($project as $item)
                  @if ($item->cat_id == 1)
                    <img src="{{ asset('assets/admin/projects/'.$item->path.'') }}" alt="{{ $item->name }}">
                  @endif
                @endforeach
              </div>
            </div>
            @endforeach
            @endif
            <!-- Add more carousel-item divs here for additional sets of 5 images -->
          </div>
          <!-- Move the next button outside the carousel-inner -->
          <button class="carousel-control-next" type="button" data-bs-target="#featureFilmsCarousel2"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>

        <!-- <div class="section-separator"></div> -->

        <!-- Additional Carousels can be added here with the same structure -->
      </div>
    </section>



    <!--=====================================-->
    <!--=====================================-->
    <section id="carousel">
      <div class="container-fluid mt-4">
        <div class="row">
          <div class="col">
            <div class="category-title">Health & Wellbeing</div>
          </div>
        </div>
        <div id="featureFilmsCarousel3" class="carousel slide" data-bs-ride="carousel">
          <!-- Move the prev button outside the carousel-inner -->
          <button class="carousel-control-prev" type="button" data-bs-target="#featureFilmsCarousel3"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <div class="carousel-inner">
            <!-- First set of 5 images -->
            @if(count($projects) > 0)
            @foreach ($projects->chunk(5) as $project)

            <div class="carousel-item{{ $loop->first ? ' active' : '' }}">
              <div class="d-flex image-set">
                @foreach ($project as $item)
                  @if ($item->cat_id == 2)
                    <img src="{{ asset('assets/admin/projects/'.$item->path.'') }}" alt="{{ $item->name }}">
                  @endif
                @endforeach
              </div>
            </div>
            @endforeach
            @endif
            <!-- Add more carousel-item divs here for additional sets of 5 images -->
          </div>
          <!-- Move the next button outside the carousel-inner -->
          <button class="carousel-control-next" type="button" data-bs-target="#featureFilmsCarousel3"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>

        <!-- <div class="section-separator"></div> -->

        <!-- Additional Carousels can be added here with the same structure -->
      </div>
    </section>



    <!--=====================================-->
    <!--=====================================-->
    <section id="carousel">
      <div class="container-fluid mt-4">
        <div class="row">
          <div class="col">
            <div class="category-title">Weddings & Events</div>
          </div>
        </div>
        <div id="featureFilmsCarousel4" class="carousel slide" data-bs-ride="carousel">
          <!-- Move the prev button outside the carousel-inner -->
          <button class="carousel-control-prev" type="button" data-bs-target="#featureFilmsCarousel4"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <div class="carousel-inner">
            <!-- First set of 5 images -->
            @if(count($projects) > 0)
            @foreach ($projects->chunk(5) as $project)

            <div class="carousel-item{{ $loop->first ? ' active' : '' }}">
              <div class="d-flex image-set">
                @foreach ($project as $item)
                  @if ($item->cat_id == 3)
                    <img src="{{ asset('assets/admin/projects/'.$item->path.'') }}" alt="{{ $item->name }}">
                  @endif
                @endforeach
              </div>
            </div>
            @endforeach
            @endif
            <!-- Add more carousel-item divs here for additional sets of 5 images -->
          </div>
          <!-- Move the next button outside the carousel-inner -->
          <button class="carousel-control-next" type="button" data-bs-target="#featureFilmsCarousel4"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>

        <!-- <div class="section-separator"></div> -->

        <!-- Additional Carousels can be added here with the same structure -->
      </div>
    </section>




    <!--=====================================-->
    <!--=====================================-->
    <section id="carousel">
      <div class="container-fluid mt-4">
        <div class="row">
          <div class="col">
            <div class="category-title">Business Services</div>
          </div>
        </div>
        <div id="featureFilmsCarousel4" class="carousel slide" data-bs-ride="carousel">
          <!-- Move the prev button outside the carousel-inner -->
          <button class="carousel-control-prev" type="button" data-bs-target="#featureFilmsCarousel4"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <div class="carousel-inner">
            <!-- First set of 5 images -->
            @if(count($projects) > 0)
            @foreach ($projects->chunk(5) as $project)

            <div class="carousel-item{{ $loop->first ? ' active' : '' }}">
              <div class="d-flex image-set">
                @foreach ($project as $item)
                  @if ($item->cat_id == 4)
                    <img src="{{ asset('assets/admin/projects/'.$item->path.'') }}" alt="{{ $item->name }}">
                  @endif
                @endforeach
              </div>
            </div>
            @endforeach
            @endif
            <!-- Add more carousel-item divs here for additional sets of 5 images -->
          </div>
          <!-- Move the next button outside the carousel-inner -->
          <button class="carousel-control-next" type="button" data-bs-target="#featureFilmsCarousel4"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>

        <!-- <div class="section-separator"></div> -->

        <!-- Additional Carousels can be added here with the same structure -->
      </div>
    </section>


    <!--=====================================-->
    <!--=====================================-->

    <div class="testimonial-section">
      <div id="testimonialCarousel" class="carousel slide testimonial-carousel" data-bs-ride="carousel"
        data-bs-interval="2000">
        <div class="carousel-inner">
          <!-- Testimonial 1 -->
          <div class="carousel-item" id="testimonial-1">
            <img src="https://placehold.co/80x80?text=1" class="img-fluid" alt="Profile picture 1" />
            <input type="hidden" class="testimonial-data"
              data-quote="I have used Bark twice now for two completely different services and I’ve had a fantastic experience both times!"
              data-author="Jayne">
          </div>
          <!-- Testimonial 2 -->
          <div class="carousel-item" id="testimonial-2">
            <img src="https://placehold.co/80x80?text=2" class="img-fluid" alt="Profile picture 2" />
            <input type="hidden" class="testimonial-data"
              data-quote="One of the most honest experiences I've had on the web, ever! I recommend Bark for searching for business professionals."
              data-author="Barend">
          </div>
          <!-- Testimonial 3 -->
          <div class="carousel-item" id="testimonial-3">
            <img src="https://placehold.co/80x80?text=3" class="img-fluid" alt="Profile picture 3" />
            <input type="hidden" class="testimonial-data"
              data-quote="Excellent service. They responded much faster than I had anticipated and I was left with a wide range of offers. Brilliant work, Bark!"
              data-author="Sunny">
          </div>
          <!-- Placeholder for the middle item, initially hidden -->
          <div class="carousel-item middle-image active" id="testimonial-placeholder">
            <img src="https://placehold.co/100x100" class="img-fluid main-image" alt="Profile picture placeholder" />
            <input type="hidden" class="testimonial-data" data-quote="" data-author="">
          </div>
          <!-- Testimonial 4 -->
          <div class="carousel-item" id="testimonial-4">
            <img src="https://placehold.co/80x80?text=4" class="img-fluid" alt="Profile picture 4" />
            <input type="hidden" class="testimonial-data"
              data-quote="Both companies that I responded to have been interactive and tended to my concerns and needs, and both were friendly and professional."
              data-author="Susan">
          </div>
          <!-- Testimonial 5 -->
          <div class="carousel-item" id="testimonial-5">
            <img src="https://placehold.co/80x80?text=5" class="img-fluid" alt="Profile picture 5" />
            <input type="hidden" class="testimonial-data"
              data-quote="Very quickly, had 4 replies. The guy from SJ driveways and landscapes was very efficient and friendly and the work was completed in a short time."
              data-author="Mr C Heaps">
          </div>
          <!-- Testimonial 6 -->
          <div class="carousel-item" id="testimonial-6">
            <img src="https://placehold.co/80x80?text=6" class="img-fluid" alt="Profile picture 6" />
            <input type="hidden" class="testimonial-data"
              data-quote="I found using Bark amazing. Posted a request and had 5 contacts within 30 minutes. Excellent service."
              data-author="Aidan">
          </div>
        </div>
        <div class="review row">
          <div class="review_message offset-md-2 col-md-8">
            <h3></h3>
          </div>
          <div class="reviewer_name col-md-8 offset-md-2">
            <h5></h5>
          </div>
        </div>
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#testimonialCarousel" data-bs-slide-to="0" class="active"
            aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#testimonialCarousel" data-bs-slide-to="1"
            aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#testimonialCarousel" data-bs-slide-to="2"
            aria-label="Slide 3"></button>
          <button type="button" data-bs-target="#testimonialCarousel" data-bs-slide-to="3"
            aria-label="Slide 4"></button>
          <button type="button" data-bs-target="#testimonialCarousel" data-bs-slide-to="4"
            aria-label="Slide 5"></button>
          <button type="button" data-bs-target="#testimonialCarousel" data-bs-slide-to="5"
            aria-label="Slide 6"></button>
          <!-- The placeholder doesn't have an indicator -->
        </div>
      </div>
    </div>

    <!--=====================================-->
    <!--=====================================-->





    <section id="media-banner" class="py-5">
      <div class="full-width-wrapper-vw body-min-width bg-light-grey py-5 bg-grey">
        <div class="container-fluid">
          <div class="row">
            <div class="px-3 offset-md-1 col-md-2">
              <img alt="BBC" title="BBC"
                data-src="https://d18jakcjgoan9.cloudfront.net/s/img/frontend-v2/directory/press-logos/bbc.png!d=9gOhO"
                data-srcset="https://d18jakcjgoan9.cloudfront.net/s/img/frontend-v2/directory/press-logos/bbc.png!d=9gOhO 1x, https://d18jakcjgoan9.cloudfront.net/s/img/frontend-v2/directory/press-logos/bbc.png!d=dZYfdp 2x"
                class="lazy loaded"
                srcset="https://d18jakcjgoan9.cloudfront.net/s/img/frontend-v2/directory/press-logos/bbc.png!d=9gOhO 1x, https://d18jakcjgoan9.cloudfront.net/s/img/frontend-v2/directory/press-logos/bbc.png!d=dZYfdp 2x"
                src="https://d18jakcjgoan9.cloudfront.net/s/img/frontend-v2/directory/press-logos/bbc.png!d=9gOhO"
                data-was-processed="true">
            </div>
            <div class="px-3 col-md-2">
              <img alt="Daily Mail" title="Daily Mail"
                data-src="https://d18jakcjgoan9.cloudfront.net/s/img/frontend-v2/directory/press-logos/daily-mail.png!d=D6ZU1"
                data-srcset="https://d18jakcjgoan9.cloudfront.net/s/img/frontend-v2/directory/press-logos/daily-mail.png!d=D6ZU1 1x, https://d18jakcjgoan9.cloudfront.net/s/img/frontend-v2/directory/press-logos/daily-mail.png!d=n0mf4k 2x"
                class="lazy loaded"
                srcset="https://d18jakcjgoan9.cloudfront.net/s/img/frontend-v2/directory/press-logos/daily-mail.png!d=D6ZU1 1x, https://d18jakcjgoan9.cloudfront.net/s/img/frontend-v2/directory/press-logos/daily-mail.png!d=n0mf4k 2x"
                src="https://d18jakcjgoan9.cloudfront.net/s/img/frontend-v2/directory/press-logos/daily-mail.png!d=D6ZU1"
                data-was-processed="true">
            </div>
            <div class="px-3 col-md-2">
              <img alt="The Guardian" title="The Guardian"
                data-src="https://d18jakcjgoan9.cloudfront.net/s/img/frontend-v2/directory/press-logos/the-guardian.png!d=yKyi0"
                data-srcset="https://d18jakcjgoan9.cloudfront.net/s/img/frontend-v2/directory/press-logos/the-guardian.png!d=yKyi0 1x, https://d18jakcjgoan9.cloudfront.net/s/img/frontend-v2/directory/press-logos/the-guardian.png!d=lBXSzR 2x"
                class="lazy loaded"
                srcset="https://d18jakcjgoan9.cloudfront.net/s/img/frontend-v2/directory/press-logos/the-guardian.png!d=yKyi0 1x, https://d18jakcjgoan9.cloudfront.net/s/img/frontend-v2/directory/press-logos/the-guardian.png!d=lBXSzR 2x"
                src="https://d18jakcjgoan9.cloudfront.net/s/img/frontend-v2/directory/press-logos/the-guardian.png!d=yKyi0"
                data-was-processed="true">
            </div>
            <div class="px-3 col-md-2">
              <img alt="Harpers Bazaar" title="Harpers Bazaar"
                data-src="https://d18jakcjgoan9.cloudfront.net/s/img/frontend-v2/directory/press-logos/harpers-bazaar.png!d=o8Yf3"
                data-srcset="https://d18jakcjgoan9.cloudfront.net/s/img/frontend-v2/directory/press-logos/harpers-bazaar.png!d=o8Yf3 1x, https://d18jakcjgoan9.cloudfront.net/s/img/frontend-v2/directory/press-logos/harpers-bazaar.png!d=2PAf2y 2x"
                class="lazy loaded"
                srcset="https://d18jakcjgoan9.cloudfront.net/s/img/frontend-v2/directory/press-logos/harpers-bazaar.png!d=o8Yf3 1x, https://d18jakcjgoan9.cloudfront.net/s/img/frontend-v2/directory/press-logos/harpers-bazaar.png!d=2PAf2y 2x"
                src="https://d18jakcjgoan9.cloudfront.net/s/img/frontend-v2/directory/press-logos/harpers-bazaar.png!d=o8Yf3"
                data-was-processed="true">
            </div>
            <div class="px-3 col-md-2">
              <img alt="Cosmopolitan" title="Cosmopolitan"
                data-src="https://d18jakcjgoan9.cloudfront.net/s/img/frontend-v2/directory/press-logos/cosmopolitan.png!d=bebTX"
                data-srcset="https://d18jakcjgoan9.cloudfront.net/s/img/frontend-v2/directory/press-logos/cosmopolitan.png!d=bebTX 1x, https://d18jakcjgoan9.cloudfront.net/s/img/frontend-v2/directory/press-logos/cosmopolitan.png!d=dMwUdN 2x"
                class="lazy loaded"
                srcset="https://d18jakcjgoan9.cloudfront.net/s/img/frontend-v2/directory/press-logos/cosmopolitan.png!d=bebTX 1x, https://d18jakcjgoan9.cloudfront.net/s/img/frontend-v2/directory/press-logos/cosmopolitan.png!d=dMwUdN 2x"
                src="https://d18jakcjgoan9.cloudfront.net/s/img/frontend-v2/directory/press-logos/cosmopolitan.png!d=bebTX"
                data-was-processed="true">
            </div>
            <div class="offset-md-1"></div>
          </div>
        </div>
      </div>
    </section>




    </footer>
    <a href="javascript:void(0)" id="back-to-top">
      <i class="fas fa-angle-double-up"></i>
    </a>
  </div>
  <div id="template-search" class="template-search">
    <button type="button" class="close">×</button>
    <form class="search-form">
      <input type="search" value="" placeholder="Search" />
      <button type="submit" class="search-btn btn-ghost style-1">
        <i class="flaticon-search"></i>
      </button>
    </form>
  </div>

</body>
<script>
  $(".custom-carousel").owlCarousel({
      autoWidth: true,
      loop: true,
      autoplay: true,
      });
      $(document).ready(function () {
      $(".custom-carousel .item").click(function () {
      $(".custom-carousel .item").not($(this)).removeClass("active");
      $(this).toggleClass("active");
      });
  });

<script src="https://code.jquery.com/jquery-3.6.0.slim.min.js" integrity="sha256-u7e5khyithlIdTpu22PHhENmPcRdFiHRjhAuHcs05RI=" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

<!-- <script src="{{asset('assets/dashbord/js/jquery-3.6.0.min.js')}}"></script> -->
<script src="{{asset('assets/dashbord/js/popper.min.js')}}"></script>
<!-- <script src="{{asset('assets/dashbord/js/bootstrap.min.js')}}"></script> -->
<script src="{{asset('assets/dashbord/js/wow.min.js')}}"></script>
<script src="{{asset('assets/dashbord/vendor/owlcarousel/owl.carousel.min.js')}}"></script>
<script src="{{asset('assets/dashbord/js/swiper-bundle.min.js')}}"></script>
<script src="{{asset('assets/dashbord/js/jquery.appear.min.js')}}"></script>
<script src="{{asset('assets/dashbord/js/jquery.magnific-popup.min.js')}}"></script>
<script src="{{asset('assets/dashbord/js/jquery.nice-select.min.js')}}"></script>
<script src="{{asset('assets/dashbord/js/parallaxie.js')}}"></script>
<script src="{{asset('assets/dashbord/js/tween-max.js')}}"></script>
<script src="{{asset('assets/dashbord/js/appear.min.js')}}"></script>
<script src="{{asset('assets/dashbord/js/isotope.pkgd.min.js')}}"></script>
<script src="{{asset('assets/dashbord/js/imagesloaded.pkgd.min.js')}}"></script>
<script src="{{asset('assets/dashbord/vendor/noUiSlider/nouislider.min.js')}}"></script>
<script src="{{asset('assets/dashbord/vendor/noUiSlider/wNumb.js')}}"></script>
<script src="{{asset('assets/dashbord/js/validator.min.js')}}"></script>
<script src="{{asset('assets/dashbord/js/pannellum.js')}}"></script>
<script src="{{asset('assets/dashbord/js/jquery.zoom.min.js')}}"></script>
<script src="{{asset('assets/dashbord/js/main.js')}}"></script>

<script>
  document.addEventListener('DOMContentLoaded', function() {
    const carouselInner = document.querySelector('.testimonial-carousel .carousel-inner');
    const reviewMessage = document.querySelector('.review_message h3');
    const reviewerName = document.querySelector('.reviewer_name h5');
    const totalImages = document.querySelectorAll('.testimonial-carousel .carousel-item').length - 1;
    let middleIndex = Math.floor(totalImages / 2);

    function updateMiddleImage() {
      middleIndex = (middleIndex + 1) % totalImages;

      const middleImage = document.querySelector('.carousel-item.middle-image img');
      middleImage.src = `https://placehold.co/100x100?text=${middleIndex + 1}`;

      const testimonialData = document.getElementById(`testimonial-${middleIndex + 1}`);
      reviewMessage.innerText = testimonialData.querySelector('.testimonial-data').getAttribute('data-quote');
      reviewerName.innerText = testimonialData.querySelector('.testimonial-data').getAttribute('data-author');
    }

    // Set interval for automatic update
    setInterval(updateMiddleImage, 2000);

    // Call the function once on page load
    updateMiddleImage();
  });
</script>
@endsection