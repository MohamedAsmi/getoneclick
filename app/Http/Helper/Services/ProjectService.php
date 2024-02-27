<?php

namespace App\Http\Helper\Services;

use App\Models\Category;
use App\Models\Challans; // Replace 'YourModel' with the actual model name
use App\Models\Page;
use App\Models\Project;
use App\Models\Upload;
use App\Models\User;
use App\Models\Video;
use Yajra\DataTables\DataTables;
class ProjectService
{
    public function getAll()
    {
        
        $Challans =  Project::all();
        $i = 1;
        return DataTables::of($Challans)
        ->addColumn('category', function ($model) {
            return Category::name($model->cat_id);
        })
        ->addColumn('page', function ($model) {
            return page::name($model->page_id);
        })
        ->addColumn('status', function ($model) {
            return Project::status($model->status);
        })
        ->addColumn('actions', function ($model) {
            if(auth()->user()->is_admin == 1 ){
                $action = '<div class="d-flex">
                <a href="javascript:void(0)" class="load-modal mr-3" title="Edit" data-url='.  route('project.edit', ['project' => $model->id]).'>
                
                    <i class="fa fa-edit"></i> 
            </a>
            
            <a title="Delete" class="text-danger
            text-lg d-block delete"
            data-url="'.route('project.destroy',['project' => $model->id]).'" data-reload="true">
                <i class="fa fa-trash"></i> 
        </a></div>';
            }else{
                $action = '<div class="d-flex"><a title="Edit" class="text-success
                text-lg  d-block mr-3" href="'. route('project.edit', ['project' => $model->id]).'" class="mb-2">
                    <i class="fa fa-edit"></i> 
            </a>';
            }
            return $action;
                    
        })
        ->rawColumns(['id','page','date','actions'])
        ->addIndexColumn()
        ->make(true);
    }
}
