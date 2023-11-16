<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Brand;

class BrandController extends Controller
{
    public function brandList()
    {
        $brands = Brand::paginate(3);
        return view('Backend.Pages.Brands.BrandsList', compact('brands'));
    }

    public function create_new_brand()
    {
        return view('Backend.Pages.Brands.CreateBrand');
    }

    public function brand_post(Request $brandPost)
    {
        // dd($brandPost->all());

        Brand::create([
            'brand_id'=> $brandPost->brand_id,
            'brand_name'=>$brandPost->brand_name,
            'brand_status'=>$brandPost->brand_status,
            'upload_image'=>$brandPost->upload_image,
            'brand_description'=>$brandPost->brand_description
        ]);
            return redirect()->route('Brand.List');

    }
}
