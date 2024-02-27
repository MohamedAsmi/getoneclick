<!DOCTYPE html>
<html lang="en">

@include('layouts.dashboard.head')

<body>
    <!-- Spinner Start -->

    @include('layouts.dashboard.header')

    @yield('section')
  
    {{-- @include('layouts.dashboard.footer') --}}
</body>
@include('layouts.dashboard.script')

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
</html>