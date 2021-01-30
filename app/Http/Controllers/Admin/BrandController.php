<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Session;
use App\Brand;

class BrandController extends Controller
{
    public function brands(){
        $brands = Brand::get();
        return view('admin.brands.index')->with(compact('brands'));
    }

    public function addBrand(Request $request){
     
            $data = $request->all();
            $brand = new Brand;
            $brand->name = $data['name'];
            $brand->status = 1;
            $brand->save();
            $message = "Brand added successfully";
            session::flash('success_message',$message);
        return redirect()->back();
    }

    public function editBrand(Request $request){
     
        $brand = Brand::findOrFail($request->brand_id);
        $brand->name = $request->name;
        $message = "Brand updated successfully";

    if ($brand->save()) {
        session::flash('success_message',$message);
        return redirect()->back();
    }
}
    public function updateBrandStatus(Request $request){
        if($request->ajax()){
            $data = $request->all();
            if($data['status']=="Active"){
                $status = 0;
            } else{
                $status = 1;
            }
           Brand::where('id',$data['brand_id'])->update(['status'=>$status]);
            return response()->json(['status'=>$status,'brand_id'=>$data['brand_id']]);
        }
  
    }

    public function deleteBrand($id){
        //Delete Brand
       Brand::where('id',$id)->delete();
        return redirect()->back()->with('success_message', 'Brand deleted successfully!');
   
    }
}
