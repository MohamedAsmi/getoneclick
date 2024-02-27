<?php

namespace App\Http\Helper\Services;

use App\Models\Category;
use Yajra\DataTables\DataTables;
class CategoryService
{
    public function getAll()
    {
        
        $model =  Category::all();
        $i = 1;
        return DataTables::of($model)
        ->addColumn('status', function ($model) {
            return Category::status($model->status);
        })
        ->addColumn('actions', function ($model) {
            if(auth()->user()->is_admin == 1 ){
                $action = '<div class="d-flex"> <a href="javascript:void(0)" class="load-modal mr-3" title="Edit" data-url='. route('categories.edit', ['category' => $model->id]).'>
                    <i class="fa fa-edit"></i> 
            </a>
            <a title="Delete" class="text-danger
            text-lg d-block delete"
            data-url="'.route('categories.destroy',['category' => $model->id]).'" data-reload="true">
           
                <i class="fa fa-trash"></i> 
        </a></div>';
            }else{
                $action = '<div class="d-flex"><a href="javascript:void(0) " class="load-modal mr-3" title="Edit" data-url='. route('categories.edit', ['category' => $model->id]).'>
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
