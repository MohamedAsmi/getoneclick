<?php 
namespace App\Http\Helper\Mapper;

use App\Models\Project;
use App\Models\Upload;
use App\Models\Video;
use Google\Service\ServiceControl\Auth;

class ProjectMapper{

    public static function map($request,$filename=null, $isUpdate = false): Project
    {
        if ($isUpdate) {
            $existingProject = Project::find($request->id);
            $project = $existingProject ?? new Project();
        } else {
            $project = new Project();
        }
        
        $project->title = $request->title ?? $project->title;
        $project->description = $request->description ?? $project->title;
        $project->page_id = $request->page_id ?? $project->title;
        $project->path = $filename ?? $project->path;
        $project->cat_id = $request->cat_id ?? $project->title;
        $project->status = $request->status ?? $project->title;
        return $project;
    }
}