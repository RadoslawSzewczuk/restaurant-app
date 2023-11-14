<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Controller;
use App\Http\Resources\Api\v1\CategoryApiResource;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryApiController extends Controller
{
    public function index()
    {
        $parent_categories = Category::where('parent_id', null)->get();

        return CategoryApiResource::collection( $parent_categories );
    }
}
