<div class="modal-dialog">
    <div class="modal-content modal-md">
        <form class="form-horizontal" id="ajax-form" method="POST"
            action="{{route('project.update',['project' => $project->id])}}" data-table="project_table"
            enctype="multipart/form-data" data-file="true">
            @csrf
            @method('PUT') 
            <div class="modal-header">
                <h4 class="modal-title" id="myLargeModalLabel">Edit Project</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body">
                <div id="message-area"></div>

                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Project Title</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Project Title" name="title" value="{{$project->title}}">
                    <input type="hidden" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="id" value="{{$project->id}}">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Project Description</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                        placeholder="Enter Project Title" name="description" value="{{$project->description}}">
                </div>

                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Choose Image</label>
                    <div class="custom-file mb-2">
                        <input type="file" name="image" class="custom-file-input " id="validatedInputGroupCustomFile">
                        <label class="custom-file-label" for="validatedInputGroupCustomFile">Choose file...</label>
                    </div>
                    @if($project->path)
                    <label for="">Current Image Path: {{ $project->path }}</label>
                    @else
                    <label for="">No Image Uploaded Yet</label>
                    @endif
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Choose Page</label>
                    <select name="page_id" id="page_id" class="form-control">
                        <option value="" hidden>Choose One</option>
                        @foreach ($pages as $page)
                        <option value="{{$page->id}}" @if($page->id == $project->page_id) selected
                            @endif>{{$page->name}}</option>
                        @endforeach


                    </select>
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Choose Type</label>
                    <select name="cat_id" id="cat_id" class="form-control">
                        <option value="" hidden>Choose Category</option>
                        @foreach ($categories as $category)
                        <option value="{{$category->id}}" @if($category->id == $project->cat_id) selected
                            @endif>{{$category->name}}</option>
                        @endforeach
                    </select>
                </div>

                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Staus</label>
                    <select name="status" id="status" class="form-control">
                        <option value="" hidden>Choose One</option>
                        <option value="1" @if($project->status == 1) selected @endif>ACTIVE</option>
                        <option value="2" @if($project->status == 2) selected @endif >DEACTIVE</option>
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