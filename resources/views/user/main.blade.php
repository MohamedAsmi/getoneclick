<!DOCTYPE html>
<html lang="en">
@include('user.layouts.head')

<body>
  @include('user.layouts.header')

  <main id="main" data-aos="fade-up">
    @yield('content')
  </main>

  @include('user.layouts.script')
</body>

</html>