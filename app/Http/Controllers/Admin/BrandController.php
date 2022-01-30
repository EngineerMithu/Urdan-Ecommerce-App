<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Brand;

class BrandController extends Controller
{
    protected $brands;
    protected $brand;

    public function addBrand(){

        return view('Admin.brand.add-brand');

    }
    public function newBrand(Request $request){

        Brand::newBrand($request);
        return redirect()->back()->with('message','Brand Saved Successfully');

    }
    public function manageBrand(){
        $this->brands = Brand::orderBy('id','DESC')->get();
        return view('Admin.brand.manage-brand',['brands' =>$this->brands]);

    }
    public function editBrand($id){
        return view('Admin.brand.edit-brand',['brand' =>Brand::find($id)]);

    }
    public function updateBrand(Request $request){
        Brand::updateBrand($request);
        Brand::find($request->brand_id);
        return redirect('/manage-brand')->with('message','Brand Updated Successfully');

    }
    public function deleteBrand(Request $request,$id){
        $this->brand = Brand::find($id);
        if (file_exists($this->brand->image)){
            unlink($this->brand->image);
        }
        $this->brand->delete();
        return redirect()->back()->with('message','Brand Deleted Successfully');

    }
}
