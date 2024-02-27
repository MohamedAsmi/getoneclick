<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\BaseController;
use App\Http\Helper\Mapper\ProjectMapper;
use App\Http\Helper\Services\ProjectService;
use App\Models\Project;
use App\Http\Requests\StoreProjectRequest;
use App\Http\Requests\UpdateProjectRequest;
use App\Models\Category;
use App\Models\Page;
use Illuminate\Http\Request;

class ProjectController extends BaseController
{
    /**
     * Display a listing of the resource.
     */
    protected $service;

    public function __construct(ProjectService $service)
    {
        $this->middleware('auth');
        $this->service = $service;
    }

    public function index()
    {
        return view('admin.projects.index');

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
        $categories =Category::all();

        return view('admin.projects.create',compact('pages','categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProjectRequest $request)
    {
        $files = $request->file('image');


        $fileOriginalName = $files->getClientOriginalName();
        $fileName = time() . '_' . $fileOriginalName;

        // Move the file to the appropriate directory
        $files->move(public_path('assets/admin/projects/'), $fileName);

        // Map data using the VideoMapper class
        $mappedData = ProjectMapper::map($request, $fileName);

        // Save the mapped data
        $mappedData->save();
        return self::response('success', 'Successfully Saved!');
        
    }

    /**
     * Display the specified resource.
     */
    public function show(Project $project)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Project $project)
    {
        $project = Project::find($project->id);
        $pages =Page::all();
        $categories =Category::all();
        return view('admin.projects.edit',compact('project','pages','categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProjectRequest $request, Project $project)
    {
        $file = $request->file('image');
        $fileName = null;
        // dd($request);
        if($file){

            $fileOriginalName = $file->getClientOriginalName();
            $fileName = time() . '_' . $fileOriginalName;

            // Move the file to the appropriate directory
            $file->move(public_path('assets/admin/projects/'), $fileName);
        }
        // Map data using the VideoMapper class
        $mappedData = ProjectMapper::map($request, $fileName,true);
// dd($mappedData);
        // Save the mapped data
        $mappedData->save();
        return self::response('success', 'Successfully Saved!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Project $project)
    {
        $project = Project::find($project->id);
        $project->delete();
        return self::response('success', 'Successfully Deleted!');
    }
}
