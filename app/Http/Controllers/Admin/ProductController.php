<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Category;
use App\Models\SubCategory;
use App\Models\Unit;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\SubImage;

class ProductController extends Controller
{
    protected $subCategories;
    protected $product;
    protected $products;
    public function addProduct(){

        return view('Admin.product.add-product',[
            'categories' => Category::all(),
            'subCategories' => SubCategory::all(),
            'brands' => Brand::all(),
            'units' => Unit::all(),
        ]);
    }
    public function getSubCategoryId ($id){

        $this->subCategories = SubCategory::where('category_id', $id)->get();
        return json_encode($this->subCategories);
    }
    public function newProduct(Request $request){
        $this->product = Product::newProduct($request);
        SubImage::newSubImage($request, $this->product);
        return redirect()->back()->with('message','Product Created Successfully');
    }



    public function manageProduct(){
        $this->products = Product::orderBy('id','DESC')->get();
        return view('Admin.product.manage-product',['products' =>$this->products]);
    }

    public function deleteProduct($id){
        $this->product = Product::find($id);
        if (file_exists($this->product->image)){
            unlink($this->product->image);
        }
        $this->product->delete();
        return redirect()->back()->with('message','Product Deleted Successfully');
    }

    public function editProduct($id){
        return view('Admin.product.edit-product',['product' =>Product::find($id)]);
    }

    public function updateProduct(Request $request){
        Product::updateProduct($request);
        Product::find($request->product_id);
        return redirect('/manage-product')->with('message','Product Updated Successfully');
    }

}
