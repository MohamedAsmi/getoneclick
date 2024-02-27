<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\BaseController;
use App\Http\Helper\Mapper\CategoryMapper;
use App\Http\Helper\Services\CategoryService;
use App\Models\Category;
use App\Http\Requests\StoreCategoryRequest;
use App\Http\Requests\UpdateCategoryRequest;
use App\Models\Page;
use Illuminate\Http\Request;

class CategoryController extends BaseController
{
    /**
     * Display a listing of the resource.
     */
    protected $service;

    public function __construct(CategoryService $service)
    {
        $this->middleware('auth');
        $this->service = $service;
    }

    public function list(Request $request)
    {

        return $this->service->getAll($request);
    }

    public function index()
    {
        return view('admin.categories.index');

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $pages =Page::all();

        return view('admin.categories.create',compact('pages'));
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCategoryRequest $request)
    {
        $file = $request->file('path');

            // Generate a unique file name
        $fileOriginalName = $file->getClientOriginalName();
        $fileName = time() . '_' . $fileOriginalName;

        // Move the file to the appropriate directory
        $file->move(public_path('assets/admin/category/'), $fileName);

        // Map data using the VideoMapper class
        $mappedData = CategoryMapper::map($request, $fileName);

        // Save the mapped data
        $mappedData->save();
        
        return self::response('success', 'Successfully Saved!');

    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        $category = Category::find($category->id);
        return view('admin.categories.edit',compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCategoryRequest $request, Category $category)
    {
        // dd($request);
        $file = $request->file('path');
        $fileName = null;
        if($file){
            $fileOriginalName = $file->getClientOriginalName();
            $fileName = time() . '_' . $fileOriginalName;
    
            // Move the file to the appropriate directory
            $file->move(public_path('assets/admin/category/'), $fileName);
    
            // Map data using the VideoMapper class
           
        }
        $mappedData = CategoryMapper::map($request, $fileName,true);
    
        // Save the mapped data
        $mappedData->save();
      
        return self::response('success', 'Successfully Saved!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        $category = Category::find($category->id);
        $category->delete();
        return self::response('success', 'Successfully Deleted!');
    }
}
