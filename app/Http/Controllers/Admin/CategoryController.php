<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Category;
use App\Section;
use Session;
use Image;
class CategoryController extends Controller
{
   public function index(){
    $categories = Category::with(['section','parentcategory'])->get();
    $sections = Section::get();
    return view('admin.categories.index')->with(compact(['categories','sections']));
   }

    public function updateCategoryStatus(Request $request){
        if($request->ajax()){
            $data = $request->all();
            if($data['status']=="Active"){
                $status = 0;
            } else{
                $status = 1;
            }
            Category::where('id',$data['cat_id'])->update(['status'=>$status]);
            return response()->json(['status'=>$status,'cat_id'=>$data['cat_id']]);
        }

    }

  public function addCategory(Request $request){
$data = $request->all();

//Category Validation
$rules = [
    'name' => 'required|regex:/^[\pL\s-]+$/u',
    'section_id' => 'required',
    'url' => 'required'
];

$customMessages = [
    'name.required' => 'Name is required',
    'name.regex' => 'Valid Name required',
    'section.required' => 'Section is required',
    'url.required' => 'URL required',
];

$this->validate($request,$rules,$customMessages); 
 //Upload Image
 if($request->hasFIle('image')){
    $image_tmp = $request->file('image');
if($image_tmp->isValid()){
    //Get Image Extension
    $extension = $image_tmp->getClientOriginalExtension();
    //Generalte New Image Name
    $imageName = rand(111,99999).'.'.$extension;
    $imagePath = 'images/categories/'.$imageName;
    //Upload Image
    // Image::make($image_tmp)->resize(300,400)->save($imagePath);
    Image::make($image_tmp)->save($imagePath);
   
}
 }

$category = New Category;
$category->parent_id = $data['parent_id'];
$category->section_id = $data['section_id'];
$category->name = $data['name'];
$category->discount = $data['discount'];
$category->url = $data['url'];
$category->description = $data['description'];
$category->meta_title = $data['meta_title'];
$category->meta_description = $data['meta_description'];
$category->meta_keywords = $data['meta_keywords'];
$category->status = 1;
$category->image = $imageName;
//  echo "<pre>"; print_r($category); die; 
$category->save();

session::flash('success_message','Category added successfully');
return redirect()->back();
  }


  public function appendCategoryLevel(Request $request){
      if($request->ajax()){
          $data = $request->all();
    $getCategories = Category::with('subcategories')->where(['section_id'=>$data['section_id'],'parent_id'=>0,'status'=>1])->get();
    $getCategories = json_decode(json_encode($getCategories),true);
 return view('admin.categories.append-categories')->with(compact('getCategories'));
      }
  }

  public function edit($id){

    $categoryData = Category::where('id', $id)->first();
    $getCategories = Category::with('subcategories')->where(['parent_id'=>0,'section_id'=>$categoryData['section_id']])->get();
    $getCategories = json_decode(json_encode($getCategories), true);
    $sections = Section::get();  
        // echo "<pre>"; print_r($getCategories); die; 
      return view('admin.categories.edit-categories')->with(compact(['categoryData','sections','getCategories']));
  }

  public function editCategory(Request $request){

    $this->validate($request, [
        'name' => ['required'],
    ]);

    //Upload Image
 if($request->hasFIle('image')){
    $image_tmp = $request->file('image');
if($image_tmp->isValid()){
    //Get Image Extension
    $extension = $image_tmp->getClientOriginalExtension();
    //Generate New Image Name
    $imageName = rand(111,99999).'.'.$extension;
    $imagePath = 'images/categories/'.$imageName;
    //Upload Image
    // Image::make($image_tmp)->resize(300,400)->save($imagePath);
    Image::make($image_tmp)->save($imagePath);
  
}
 }
    $category = Category::findOrFail($request->category_id);
    $category->parent_id = $request->parent_id;
    $category->section_id = $request->section_id;
    $category->name = $request->name;
    $category->discount = $request->discount;
    $category->url = $request->url;
    $category->description = $request->description;
    $category->meta_title = $request->meta_title;
    $category->meta_description = $request->meta_description;
    $category->meta_keywords = $request->meta_keywords;
    $category->image = $imageName;
    // echo "<pre>"; print_r($category); die; 
    if ($category->save()) {
        session::flash('success_message','Category updated successfully');
        return redirect()->back();
    }

  }

  public function deleteCategoryImage($id){
      //Get Category Image

      $categoryImage = Category::select('image')->where('id',$id)->first();
        //   echo "<pre>"; print_r($categoryImage); die; 

    //Get Category Image Path
    $categoryImagePath = 'images/categories/';

    //Delete Category Image from folder if exists

    if(file_exists($categoryImagePath.$categoryImage->image)){
        unlink($categoryImagePath.$categoryImage->image);
    }

    //Delete Category Image from Categories Table
    Category::where('id',$id)->update(['image'=>'']); 
    return redirect()->back()->with('success_message', 'Category image deleted successfully!');
  }

  public function deleteCategory($id){
      //Delete Category
      Category::where('id',$id)->delete();
      return redirect()->back()->with('success_message', 'Category deleted successfully!');
 
  }
}