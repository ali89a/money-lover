<?php

namespace App\Http\Controllers\API;

use App\Models\Category;
use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;
use App\Http\Resources\CategoryResource;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\API\BaseController as BaseController;

class CategoryController extends BaseController
{

    public function index()
    {
        $categories = Category::all();
        return $this->sendResponse(CategoryResource::collection($categories), 'Categories retrieved successfully.');
    }
   
    public function store(Request $request)
    {
        $input = $request->all();
   
        $validator = Validator::make($input, [
            'name' => 'required'
        ]);
        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors());       
        }
   
        $category = Category::create($input);
   
        return $this->sendResponse(new CategoryResource($category), 'Category created successfully.');
    }
    public function show($id)
    {
        $category = Category::find($id);
  
        if (is_null($category)) {
            return $this->sendError('Category not found.');
        }
   
        return $this->sendResponse(new CategoryResource($category), 'Category retrieved successfully.');
    }
   
    public function update(Request $request, Category $category)
    {
       

        $input = $request->all();
   
        $validator = Validator::make($input, [
            'name' => 'required'
        ]);
   
        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors());       
        }
   
        $category->name = $input['name'];
        $category->save();
   
        return $this->sendResponse(new CategoryResource($category), 'Category updated successfully.');
    

    }

    public function destroy(Category $category)
    {
        $category->delete();
   
        return $this->sendResponse([], 'Category deleted successfully.');

    }
}
