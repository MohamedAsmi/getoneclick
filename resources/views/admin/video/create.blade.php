<div class="modal-dialog">
    <div class="modal-content modal-md">
        <form class="form-horizontal" id="ajax-form" method="POST" action="{{route('video.store')}}"
        data-table="video_table" enctype="multipart/form-data" data-file="true">
        @csrf
        <div class="modal-header">
            <h4 class="modal-title" id="myLargeModalLabel">Add New Video</h4>
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        </div>
        <div class="modal-body">
            <div id="message-area"></div>
           
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Video Name</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Video Name" name="name">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Choose Page</label>
                    <select name="page_id" id="page_id" class="form-control">
                        <option value="" hidden>Choose One</option>
                        @foreach ($pages as $page)
                            <option value="{{$page->id}}">{{$page->name}}</option>
                        @endforeach
                      
                       
                    </select>
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Choose Type</label>
                    <select name="type" id="type" class="form-control">
                        <option value="" hidden>Choose Type</option>
                        <option value="1">Slider</option>
                        <option value="2">Video</option>
                    </select>
                </div>
                <div class="mb-3" id="type-video">
                    
                </div>
                
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Staus</label>
                    <select name="status" id="status" class="form-control">
                        <option value="" hidden>Choose One</option>
                        <option value="1">ACTIVE</option>
                        <option value="1">DEACTIVE</option>
                    </select>
                </div>

        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-dark" data-loading-text="Uploading...">Upload</button>
        </div>
    </form>

    </div>
</div>
</div>

<script>
    $(document).ready(function() {
        $('#type').change(function() {
            var type = $('#type-video');
            type.empty();
            if($(this).val() == 2 ){
                type.html('<label for="exampleInputEmail1" class="form-label">Choose Video</label><div class="custom-file"><input type="file" name="imagearray[]" class="custom-file-input" id="validatedInputGroupCustomFile" required><label class="custom-file-label" for="validatedInputGroupCustomFile">Choose file...</label></div>');
            }else if ($(this).val() == 1){
                type.html('<label for="exampleInputEmail1" class="form-label">Choose Images</label><div class="custom-file"><input type="file" name="imagearray[]" class="custom-file-input" id="validatedInputGroupCustomFile" required multiple><label class="custom-file-label" for="validatedInputGroupCustomFile">Choose file...</label></div>');
            }
            
        });
    });
</script>