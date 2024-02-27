<!DOCTYPE html>
<html>
    @include('admin.layouts.head')
	@stack('css')
<body>
	

	@include('admin.layouts.header')
	@include('admin.layouts.right-sidebar')


	

	@include('admin.layouts.left-side-bar')
	{{-- @include('admin.layouts.loader') --}}


	<div class="main-container">
		<div class="pd-ltr-20">
			@yield('content')
		</div>
	</div>
	<!-- js -->
	@include('admin.layouts.script')
	@stack('js')
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
						Are you sure to delete this item?
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
</body>
</html>