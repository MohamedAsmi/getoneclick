<?php

namespace App\Http\Helper\Services;

use App\Models\Challans; // Replace 'YourModel' with the actual model name
use App\Models\Page;
use App\Models\Upload;
use App\Models\User;
use App\Models\Video;
use Yajra\DataTables\DataTables;
class VideoService
{
    public function getAll()
    {
        
        $Challans =  Video::all();
        $i = 1;
        return DataTables::of($Challans)
        ->addColumn('id', function ($model) use (&$i)  {
            return $i++;      
        })
        ->addColumn('page', function ($model){
            $page = Page::find($model->page_id);
            return $page->name ?? ' ';      
        })
        ->addColumn('date', function ($model){
            return date('d-m-Y',strtotime($model->created_at));      
        })
        ->addColumn('status', function ($model){
            return Video::status($model->status);      
        })
        ->addColumn('actions', function ($model) {
            if(auth()->user()->is_admin == 1 ){
                $action = '<div class="d-flex"><a href="javascript:void(0)" class="load-modal mr-3" title="Edit" data-url='. route('video.edit', ['video' => $model->id]).'>

                    <i class="fa fa-edit"></i> 
            </a>
            <a title="Delete" class="text-danger
            text-lg d-block delete"
            data-url="'.route('video.destroy',['video' => $model->id]).'" data-reload="true">
                <i class="fa fa-trash"></i> 
        </a></div>';
            }else{
                $action = '<div class="d-flex"><a title="Edit" class="text-success
                text-lg  d-block mr-3" href="'. route('video.edit', ['video' => $model->id]).'" class="mb-2">
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
