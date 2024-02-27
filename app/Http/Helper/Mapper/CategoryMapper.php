<?php 
namespace App\Http\Helper\Mapper;

use App\Models\Category;
use Google\Service\ServiceControl\Auth;

class CategoryMapper{

    public static function map($request, $filename = null, $isUpdate = false): Category
    {
        if ($isUpdate) {
            $existingCategory = Category::find($request->id);
            $category = $existingCategory ?? new Category();
        } else {
            $category = new Category();
        }
    
        // Update the properties based on the request and filename
        $category->name = $request->name??$category->name;
        $category->path = $filename ?? $category->path; // Set to existing path if no new file is provided
        $category->status = $request->status ?? $category->status;
    
        return $category;
    }
}