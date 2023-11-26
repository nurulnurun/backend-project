<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Brand;
use Illuminate\Support\Facades\Validator;

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

    public function brands_delete($id)
    {
        $brands_delete = Brand::find($id);
        if($brands_delete)
        {
            $brands_delete->delete();
        }

        return redirect()->route('Brand.List');
    }

    public function brand_post(Request $brandPost)
    {
        // dd($brandPost->all());

        $val=Validator::make($brandPost->all(),
        [
            'brand_id'=>'required|min:7',
            'brand_name'=>'required',
            'brand_status'=>'required|max:30',
            'brand_description'=>'required|max:100',
        ]);

        if($val->fails())
        {
            return redirect()->route('Create.New.Brand')->withErrors($val);
        }

        $fileName = null;
        if($brandPost->hasFile('brand_image'))
        {
            $file = $brandPost->file('brand_image');
            $fileName = date('Ymdhis').'.'.$file->getClientOriginalExtension();

            $file->storeAs('/uploads', $fileName);
        }

        Brand::create([
            'brand_id'=> $brandPost->brand_id,
            'brand_name'=>$brandPost->brand_name,
            'brand_status'=>$brandPost->brand_status,
            'brand_image'=>$fileName,
            'brand_description'=>$brandPost->brand_description
        ]);
            return redirect()->route('Brand.List');

    }
}
