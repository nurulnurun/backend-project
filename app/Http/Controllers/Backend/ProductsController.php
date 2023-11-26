<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Brand;
use Illuminate\Support\Facades\Validator;

class ProductsController extends Controller
{
    public function products_list()
    {
        $products = Product::with('brand')->paginate(3);
        return view('Backend.Pages.Products.ProductsList', compact('products'));
    }

    public function create_new_product()
    {
        $brands = Brand::all();
        return view('Backend.Pages.Products.CreateProducts', compact('brands'));
    }

    public function products_edit($id)
    {
        $product_edit = Product::find($id);

        $brands = Brand::all();
        return view('Backend.Pages.Products.ProductsEdit', compact('product_edit', 'brands'));
    }

    public function products_delete($id)
    {
        $products_delete = Product::find($id);
        if($products_delete)
        {
            $products_delete->delete();
        }

        return redirect()->route('Products.List');
    }

    public function products_update(Request $productsPost, $id)
    {
        $products_update = Product::find($id);

        if($products_update)
        {
            $fileName = $products_update->product_gallery;
            if($productsPost->hasFile('product_gallery'))
        {
            $file =$productsPost->file('product_gallery');
            $fileName = date('Ymdhis').'.'.$file->getClientOriginalExtension();

            $file->storeAs('/uploads', $fileName);
        }

        $products_update->update([
            'product_id'=>$productsPost->product_id,
            'product_name'=>$productsPost->product_name,
            'brand_id'=>$productsPost->brand_id,
            'product_gallery'=>$fileName,
            'product_price'=>$productsPost->product_price,
            'product_stock'=>$productsPost->product_stock,
            'product_status'=>$productsPost->product_status
        ]);

        return redirect()->route('Products.List');

        }
    }

    public function product_post(Request $productsPost)
    {
        // dd($productsPost->all());

        // $val=Validator::make($productsPost->all(),
        // [
        //     ''
        // ]);

        $fileName = null;
        if($productsPost->hasFile('product_gallery'))
        {
            $file =$productsPost->file('product_gallery');
            $fileName = date('Ymdhis').'.'.$file->getClientOriginalExtension();

            $file->storeAs('/uploads', $fileName);
        }

        Product::create([
            'product_id'=>$productsPost->product_id,
            'product_name'=>$productsPost->product_name,
            'brand_id'=>$productsPost->brand_id,
            'product_gallery'=>$fileName,
            'product_price'=>$productsPost->product_price,
            'product_stock'=>$productsPost->product_stock,
            'product_status'=>$productsPost->product_status
        ]);

        return redirect()->route('Products.List');


    }

}
