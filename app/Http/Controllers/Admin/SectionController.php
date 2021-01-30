<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Section;
use Session;
use Illuminate\Http\Request;

class SectionController extends Controller
{
    public function index(){

        $sections = Section::get();
        return view('admin.sections.index')->with(compact('sections'));
    }

    public function addSection(Request $request){
     
        $data = $request->all();
        $section = new Section;
        $section->name = $data['name'];
        $section->status = 1;
        $section->save();
        $message = "Section added successfully";
        session::flash('success_message',$message);
    return redirect()->back();
}

public function editSection(Request $request){
 
    $section = Section::findOrFail($request->section_id);
    $section->name = $request->name;
    $message = "Section updated successfully";

if ($section->save()) {
    session::flash('success_message',$message);
    return redirect()->back();
}
}

    public function updateSectionStatus(Request $request){
        if($request->ajax()){
            $data = $request->all();
            if($data['status']=="Active"){
                $status = 0;
            } else{
                $status = 1;
            }
           Section::where('id',$data['section_id'])->update(['status'=>$status]);
            return response()->json(['status'=>$status,'section_id'=>$data['section_id']]);
        }

    }

    public function deleteSection($id){
        //Delete Section
       Section::where('id',$id)->delete();
        return redirect()->back()->with('success_message', 'Section deleted successfully!');
   
    }
}
