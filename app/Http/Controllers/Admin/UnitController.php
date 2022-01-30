<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Unit;

class UnitController extends Controller
{
    protected $units;
    protected $unit;
    public function addUnit(){

        return view('Admin.unit.add-unit');
    }

    public function newUnit(Request $request){

        Unit::newUnit($request);
        return redirect()->back()->with('message','Unit Saved Successfully');

    }
    public function manageUnit(){
        $this->units = Unit::orderBy('id','DESC')->get();
        return view('Admin.unit.manage-unit',['units' =>$this->units]);

    }
    public function editUnit($id){
        return view('Admin.unit.edit-unit',['unit' =>Unit::find($id)]);

    }
    public function updateUnit(Request $request){
        Unit::updateUnit($request);
        Unit::find($request->unit_id);
        return redirect('/manage-unit')->with('message','Unit Updated Successfully');

    }
    public function deleteUnit(Request $request,$id){
        $this->unit = Unit::find($id);
        if (file_exists($this->unit->image)){
            unlink($this->unit->image);
        }
        $this->unit->delete();
        return redirect()->back()->with('message','Unit Deleted Successfully');

    }

}
