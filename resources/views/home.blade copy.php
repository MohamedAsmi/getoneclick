<!DOCTYPE html>
<html lang="en">
@include('layouts.head')

<body>
  @include('layouts.header')
  <main id="main" data-aos="fade-up">
    @yield('content')
  </main><!-- End #main -->

  <div id="modal" class="modal fade " tabindex="-1" role="dialog" aria-hidden="true"></div>

	<div id="delete-modal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-dialog modal-sm">
			<div class="modal-content">
				<div class="modal-header">
					<h6 class="modal-title"></h6>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">X</button>
					
				</div>
				<form class="form-horizontal" id="ajax-form" method="DELETE" >
					<div class="modal-body">
						<div id="message-area"></div>
						@csrf
						Are you sure that if you delete all related data will be deleted?
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-outline-secondary" data-dismiss="modal">
							Close
						</button>
						<button type="submit" class="btn btn-danger" data-loading-text="Deleting...">DELETE</button>
					</div>

				</form>
			</div>
		</div>
	</div>

  @include('layouts.footer')
  {{-- <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
      class="bi bi-arrow-up-short"></i></a> --}}
  @include('layouts.script')
</body>

</html>