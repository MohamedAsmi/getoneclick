
<div class="modal-dialog">
    <div class="modal-content modal-md">
        <form class="form-horizontal" id="ajax-form" method="POST" action="{{route('categories.update',['category' => $category->id])}}"
        data-table="category_table" enctype="multipart/form-data" data-file="true">
        @csrf
        @method('PUT') 
        <div class="modal-header">
            <h4 class="modal-title" id="myLargeModalLabel">Edit Catogory</h4>
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        </div>
        <div class="modal-body">
            <div id="message-area"></div>
           
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Catogory Name</label>
                    <input type="hidden" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="id" value="{{$category->id}}">
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Catogory Name" name="name" value="{{$category->name}}">
                    
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Choose image</label>
                    <input type="file" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Choose Image" name="path">
                    @if($category->path)
                        <label for="">Current Image Path: {{ $category->path }}</label>
                    @else
                        <label for="">No Image Uploaded Yet</label>
                    @endif
                </div>
                <div class="mb-3" id="type-video">
                    
                </div>
         
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Staus</label>
                    <select name="status" id="status" class="form-control">
                        <option value="" hidden>Choose One</option>
                        <option value="1" @if($category->status == 1) selected @endif>ACTIVE</option>
                        <option value="2" @if($category->status == 2) selected @endif >DEACTIVE</option>
                    </select>
                </div>

        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-dark" data-loading-text="Saving...">save</button>
        </div>
    </form>

    </div>
</div>


