  <!-- JavaScript Libraries -->
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
  <script src="{{asset('assets/main/lib/wow/wow.min.js')}}"></script>
  <script src="{{asset('assets/main/lib/easing/easing.min.js')}}"></script>
  <script src="{{asset('assets/main/lib/waypoints/waypoints.min.js')}}"></script>
  <script src="{{asset('assets/main/lib/counterup/counterup.min.js')}}"></script>
  <script src="{{asset('assets/main/lib/owlcarousel/owl.carousel.min.js')}}"></script>
  <script src="{{asset('assets/main/lib/isotope/isotope.pkgd.min.js')}}"></script>
  <script src="{{asset('assets/main/lib/lightbox/js/lightbox.min.js')}}"></script>
  <script src="{{asset('assets/common.js')}}"></script>

  <!-- Template Javascript -->
  <script src="{{asset('assets/main/js/main.js')}}"></script>
  <script src="https://js.stripe.com/v3/"></script>
  <script>

    $('.carousel .carousel-item').each(function () {
  var minPerSlide = 4;
  var next = $(this).next();
  if (!next.length) {
  next = $(this).siblings(':first');
  }
  next.children(':first-child').clone().appendTo($(this));
  
  for (var i = 0; i < minPerSlide; i++) { next=next.next(); if (!next.length) { next=$(this).siblings(':first'); } next.children(':first-child').clone().appendTo($(this)); } });
  </script>