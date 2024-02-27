<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\BaseController;
use App\Http\Controllers\Controller;
use App\Http\Helper\Mapper\VideoMapper;
use App\Http\Helper\Services\VideoService;
use App\Models\Video;
use App\Http\Requests\StoreVideoRequest;
use App\Http\Requests\UpdateVideoRequest;
use App\Models\Page;
use Illuminate\Http\Request;

class VideoController extends BaseController
{
    /**
     * Display a listing of the resource.
     */
     // public function __construct()
    // {
    //     $this->middleware('auth');
    // }
    protected $service;

    public function __construct(VideoService $service)
    {
        $this->middleware('auth');
        $this->service = $service;
    }
    public function index()
    {
        return view('admin.video.index');
    }

    public function list(Request $request)
    {
        // dd($request);
        return $this->service->getAll($request);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $pages =Page::all();

        return view('admin.video.create',compact('pages'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreVideoRequest $request)
    {
        $files = $request->file('imagearray');

        // Iterate through each file
        foreach ($files as $file) {
            // Generate a unique file name
            $fileOriginalName = $file->getClientOriginalName();
            $fileName = time() . '_' . $fileOriginalName;
    
            // Move the file to the appropriate directory
            $file->move(public_path('assets/admin/uploads/'), $fileName);
    
            // Map data using the VideoMapper class
            $mappedData = VideoMapper::map($request, $fileName);
    
            // Save the mapped data
            $mappedData->save();
        }
    
        return self::response('success', 'Successfully Saved!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Video $video)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Video $video)
    {
        $video = Video::find($video->id);
        $pages =Page::all();

        return view('admin.video.edit',compact('video','pages'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateVideoRequest $request, Video $video)
    {
        $file = $request->file('image');
        $fileName = null;

        if($file){
            // Generate a unique file name
            $fileOriginalName = $file->getClientOriginalName();
            $fileName = time() . '_' . $fileOriginalName;

            // Move the file to the appropriate directory
            $file->move(public_path('assets/admin/uploads/'), $fileName);
        }
        // Map data using the VideoMapper class
        $mappedData = VideoMapper::map($request, $fileName,true);

        // Save the mapped data
        $mappedData->save();
        
    
        return self::response('success', 'Successfully Saved!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Video $video)
    {
        $video = Video::find($video->id);
        $video->delete();
        return self::response('success', 'Successfully Deleted!');
        
    }
}
