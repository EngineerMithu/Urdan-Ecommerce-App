<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Http\Request;

class SubCategoryController extends Controller
{
    protected $subCategories;
    protected $subCategory;

    public function addSubCategory(){
        return view('Admin.sub-category.add-category', ['categories' => Category::orderBy('id','DESC')->get()]);

    }
    public function newSubCategory(Request $request){
//
        SubCategory::newSubCategory($request);
        return redirect()->back()->with('message','Sub Category Saved Successfully');

    }

    public function manageSubCategory(){
        $this->subCategories = SubCategory::orderBy('id','DESC')->get();
        return view('Admin.sub-category.manage-category',['subCategories' =>$this->subCategories]);

    }
    public function editSubCategory($id){
        return view('Admin.sub-category.edit-category',['subCategory' =>subCategory::find($id)]);

    }
    public function updateSubCategory(Request $request){
        SubCategory::updateSubCategory($request);
        Category::find($request->category_id);
        return redirect('/manage-subCategory')->with('message','Sub Category Updated Successfully');

    }
    public function deleteSubCategory(Request $request,$id){
        $this->SubCategory = SubCategory::find($id);
        if (file_exists($this->SubCategory->image)){
            unlink($this->SubCategory->image);
        }
        $this->SubCategory->delete();
        return redirect()->back()->with('message','Sub Category Deleted Successfully');

    }
}
