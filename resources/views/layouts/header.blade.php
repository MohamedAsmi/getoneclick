<!-- ======= Header ======= -->
<header id="header" class="d-flex align-items-center">
  <div class="container d-flex align-items-center justify-content-between">

    <h1 class="logo"><a href="index.html"><img class="img-fluid loading" src="{{asset('assets/images/log.jpg')}}"
          width="106" height="32" title="Bark Logo" alt="Bark Logo" data-was-processed="true"></a></h1>
    <!-- Uncomment below if you prefer to use an image logo -->
    <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt=""></a>-->

    <nav id="navbar" class="navbar">
      <ul>

        @if(Auth::user())

        @if(Auth::user()->is_admin == 1)

        <li class="dropdown"><a href="#"><span>{{Auth::user()->name}}</span> <i class="bi bi-chevron-down"></i></a>
          <ul>
            <li><a href="{{route('admin.index')}}">Dashboard</a></li>
            <li>
              <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                  {{ __('Logout') }}
              </a>
              <form action="{{ route('logout') }}" method="POST" id="logout-form" hidden>
                  @csrf
                  <button type="submit" class="ml-4 l-4">Logout</button>
              </form>
          </li>
          </ul>
      <nav id="navbar" class="navbar">
        <ul>
          
          
          <li><a class="nav-link scrollto " href="#hero">Login</a></li>
          <li class="nav-link ">
            
            <a class="btn btn-primary btn-rounded  d-inline-flex seller-create-button header-become-pro p-1 text-white" href="{{route('professional.index')}}" >
                <div class="avatar mr-2 d-inline-flex">
                    <img src="https://d18jakcjgoan9.cloudfront.net/s/img/images/material-icons/icon-becomepro-header.png!d=2M4f26" alt="" width="24" height="24" class="loading" data-was-processed="true">
                </div>
                <span style="padding-right: 10px;" class="long">Join as a Professional </span>
            </a>
        </li>
       
        @endif
        @else
        <li><a class="nav-link scrollto " href="#hero">Login</a></li>
        <li class="nav-link ">

          <a class="btn btn-primary btn-rounded  d-inline-flex seller-create-button header-become-pro p-1 text-white"
            href="{{route('professional.index')}}">
            <div class="avatar mr-2 d-inline-flex">
              <img
                src="https://d18jakcjgoan9.cloudfront.net/s/img/images/material-icons/icon-becomepro-header.png!d=2M4f26"
                alt="" width="24" height="24" class="loading" data-was-processed="true">
            </div>
            <span class="long">Join as a Professional</span>
            <span class="short">Join as a Pro</span>
          </a>
        </li>
        @endif

      </ul>
      <i class="bi bi-list mobile-nav-toggle"></i>
    </nav><!-- .navbar -->

  </div>
</header><!-- End Header -->