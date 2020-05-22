<?php

namespace App\Http\Controllers\backend;
use App\Http\Requests\AddCategoryRequest;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    function GetCategory()
    {
        return view("backend.category.category");
    }

    function GetEditCategory()
    {
        return view("backend.category.editcategory");
    }
    
    function PostCategory(AddCategoryRequest $request)
    {
    
    }
}
