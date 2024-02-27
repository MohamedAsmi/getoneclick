<div id="spinner"
class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
<div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
  <span class="sr-only">Loading...</span>
</div>
</div>
<!-- Spinner End -->




<!-- Navbar Start -->
<nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top p-0 px-4 px-lg-5">
<a href="index.html" class="navbar-brand d-flex align-items-center">
  <img src='{{asset('assets/images/log.jpg')}}' alt='logo' width="10%" />
</a>
<button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
  <span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse" id="navbarCollapse">
  <div class="navbar-nav ms-auto py-4 py-lg-0">
    @auth
    @if(Auth::user()->is_admin == 1)
    <li class="nav-item">
      <div class="user-info-dropdown">
          <div class="dropdown">
              <a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown">
                  <span class="user-icon">
                      <img src="{{asset('assets/vendors/images/photo1.jpg')}}" alt="" class="img-fluid rounded-circle" style="height: 50px;margin-top: 10px;">
                  </span>
                  <span class="user-name">{{Auth::user()->name}}</span>
              </a>
              <div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
                  <a class="dropdown-item" href="{{route('profile.index')}}"><i class="dw dw-user1"></i> Profile</a>
                  <a class="dropdown-item" href="profile.html"><i class="dw dw-settings2"></i> Setting</a>
                  <a class="dropdown-item" href="faq.html"><i class="dw dw-help"></i> Help</a>
                  <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="dw dw-logout"></i> Log Out</a>
                 
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
              </div>
          </div>
      </div>
    </li>
    @else
    <li class="nav-item">
      <a class="nav-link active" aria-current="page" href="#">Dashboard</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{route('leads.index')}}">Leads</a>
    </li>
    
    <li class="nav-item">
      <a class="nav-link " href="#">Settings</a>
    </li>
    <li class="nav-item">
      <a class="nav-link " href="#">Help</a>
    </li>
    <li class="nav-item">
      <div class="user-info-dropdown">
          <div class="dropdown">
              <a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown">
                  <span class="user-icon">
                      <img src="{{asset('assets/vendors/images/photo1.jpg')}}" alt="" class="img-fluid rounded-circle" style="height: 50px;margin-top: 10px;">
                  </span>
                  <span class="user-name">{{Auth::user()->name}}</span>
              </a>
              <div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
                  <a class="dropdown-item" href="{{route('user-profile.index')}}"><i class="dw dw-user1"></i> Profile</a>
                  <a class="dropdown-item" href="profile.html"><i class="dw dw-settings2"></i> Setting</a>
                  <a class="dropdown-item" href="faq.html"><i class="dw dw-help"></i> Help</a>
                  <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="dw dw-logout"></i> Log Out</a>
                 
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
              </div>
          </div>
      </div>
    </li>
    @endif
@else
    <li class="nav-item">
        <a class="nav-link" href="{{ route('login') }}">Login</a>
    </li>
    <li class="nav-item">
        <a class="mt-3 btn-pro btn btn-primary" href="{{ route('register') }}"><i class="fa fa-user"></i> Join as a Professional</a>
    </li>
@endauth
 

    {{-- <div class="nav-item dropdown">
      <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
      <div class="dropdown-menu rounded-0 rounded-bottom m-0">
        <a href="feature.html" class="dropdown-item">Feature</a>
        <a href="quote.html" class="dropdown-item">Free Quote</a>
        <a href="team.html" class="dropdown-item">Our Team</a>
        <a href="testimonial.html" class="dropdown-item">Testimonial</a>
        <a href="404.html" class="dropdown-item">404 Page</a>
      </div>
    </div> --}}
    {{-- <a href="contact.html" class="nav-item nav-link">Contact</a> --}}
  </div>
 
</div>
</nav>
<!-- Navbar End -->