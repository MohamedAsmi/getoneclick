<!DOCTYPE html>
<html lang="en">

@include('layouts.dashboard.head')

<body>
    <!-- Spinner Start -->

    @include('layouts.dashboard.header')

    @yield('section')
  
    @include('layouts.dashboard.footer')
</body>
@include('layouts.dashboard.script')


</html>