<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;

class CategoriesController extends Controller
{
    public function categoriesList()
    {
        $category = Category::paginate(3);
        return view('Backend.Pages.Categories.CategoriesList', compact('category'));
    }

    public function create_new_category()
    {
        return view('Backend.Pages.Categories.CreateCategory');
    }

    public function category_post(Request $categoryPost)
    {
        //dd($categoryPost->all());

        Category::create([
            'category_id'=>$categoryPost->category_id,
            'category_name'=>$categoryPost->category_name,
            'category_description'=>$categoryPost->category_description
        ]);

        return redirect()->route('Categories.List');
    }
}
