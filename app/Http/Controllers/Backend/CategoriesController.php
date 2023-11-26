<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Support\Facades\Validator;

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
    public function category_delete($id)
    {
        $category_delete=Category::find($id);
        if($category_delete)
        {
            $category_delete->delete();
        }

        return redirect()->route('Categories.List');

    }

    public function category_post(Request $categoryPost)
    {
        //dd($categoryPost->all());

        $val=Validator::make($categoryPost->all(),
        [
            'category_id'=>'required|min:7',
            'category_name'=>'required',
            'category_description'=>'required|max:100',
        ]);

        if($val->fails())
        {
            return redirect()->route('Create.New.Category')->withErrors($val);
        }

        Category::create([
            'category_id'=>$categoryPost->category_id,
            'category_name'=>$categoryPost->category_name,
            'category_description'=>$categoryPost->category_description
        ]);

        return redirect()->route('Categories.List');
    }
}
