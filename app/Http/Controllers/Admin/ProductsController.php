<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Product;
use App\ProductsAttribute;
use App\ProductsImage;
use App\Section;
use App\Category;
use App\Brand;
use Image;
use Session;
class ProductsController extends Controller
{
    public function products(){
        $products = Product::with(['category'=>function($query){
            $query->select('id','name');
        },'section'=>function($query){
            $query->select('id','name');
        }])->get();
        // $products = json_decode(json_encode($products), true);
        // echo "<pre>"; print_r($products); die;
        return view('admin.products.index')->with(compact('products')); 
    }

    public function updateProductStatus(Request $request){
        if($request->ajax()){
            $data = $request->all();
            if($data['status']=="Active"){
                $status = 0;
            } else{
                $status = 1;
            }
           Product::where('id',$data['product_id'])->update(['status'=>$status]);
            return response()->json(['status'=>$status,'product_id'=>$data['product_id']]);
        }
  
    }

public function addEditProduct(Request $request, $id=null){
        if($id==""){
        $title = "Add Products";
        $product = New Product;
        $productData = array();
        $message = "Product added successfully";
        } else{
        $title = "Edit Products";
        $productData = Product::where('id', $id)->first();
        $product = Product::find($id);
        $message = "Product updated successfully";
    }

                    if($request->isMethod('post')){
                        $data = $request->all();
                        // echo "<pre>"; print_r($data); die;

                        //Products Validation
                $rules = [
                    'name' => 'required|regex:/^[\pL\s-]+$/u',
                    'code' => 'required|regex:/^[\w-]*$/',
                    'category_id' => 'required',
                    'price' => 'required|numeric',
                ];

                $customMessages = [
                    'name.required' => 'Name is required',
                    'name.regex' => 'Valid Name required',
                    'code.required' => 'Code is required',
                    'code.regex' => 'Valid Code required',
                    'category_id.required' => 'Category is required',
                    'price.required' => 'Price is required',
                    'price.numeric' => 'Price must be a number',
                ];

                $this->validate($request,$rules,$customMessages); 
//Save Product details
if(empty($data['is_featured'])){
    $is_featured = "No";
} else{
    $is_featured = "Yes";
}

if(empty($data['image'])){
    $data['image'] = "";
}

//Upload Product Images
if($request->hasFile('image')){
    $image_tmp = $request->file('image');
    if($image_tmp->isValid()){
        // Upload Images after resizing
        $image_name = $image_tmp->getClientOriginalName();
        $extension = $image_tmp->getClientOriginalExtension();
        $imageName = $image_name.'-'.rand(111,99999).'.'.$extension;
        $large_image_path = 'images/products/large/'.$imageName;
        $medium_image_path = 'images/products/medium/'.$imageName;
        $small_image_path = 'images/products/small/'.$imageName;

        Image::make($image_tmp)->save($large_image_path);
        Image::make($image_tmp)->resize(520,600)->save($medium_image_path);
        Image::make($image_tmp)->resize(260,300)->save($small_image_path);
        $product->image = $imageName;
     
    }
}
$categoryDetails = Category::find($data['category_id']);
// echo "<pre>"; print_r($categoryDetails); die;
$product->section_id = $categoryDetails['section_id'];
$product->category_id = $data['category_id'];
$product->brand_id = $data['brand_id'];
$product->name = $data['name'];
$product->price = $data['price'];
$product->code = $data['code'];
$product->description = $data['description'];
$product->discount = $data['discount'];
$product->meta_title = $data['meta_title'];
$product->meta_description = $data['meta_description'];
$product->meta_keywords = $data['meta_keywords'];
$product->category_id = $data['category_id'];
$product->is_featured = $is_featured;
$product->status = 1;
$product->save();

session::flash('success_message', $message);
return redirect('admin/products'); 
                    }


   
    $fabricArray = array('Cotton','Polyester','Wool');
    $sleeveArray = array('Full Sleeve','Main Sleeve','Short SLeeve','Sleeveless');
    $fitArray = array('Regular','Slim');
    $occassionArray = array('Casual','Formal');

    //Sections with Categories and subcategories
    $categories = Section::with('categories')->get();
    // $categories = json_decode(json_encode($categories),true);
    //    echo "<pre>"; print_r($categories); die;

    //Get Brands
    $brands = Brand::where('status',1)->get();
    $brands = json_decode(json_encode($brands),true);

 return view('admin.products.add_edit_product')->with(compact(['title','productData','categories','brands']));
}


    public function deleteProduct($id){
        //Delete Category
        Product::where('id',$id)->delete();
        return redirect()->back()->with('success_message', 'Product deleted successfully!');
   
    }

    public function deleteProductImage($id){
        //Get Product Image
  
        $productImage = Product::select('image')->where('id',$id)->first();
          //   echo "<pre>"; print_r($ProductImage); die; 
  
      //Get Product Image Path
      $smallImagePath = 'images/products/small/';
      $mediumImagePath = 'images/products/medium/';
      $largeImagePath = 'images/products/large/';
  
      //Delete Product Image from small image folder if exists
      if(file_exists($smallImagePath.$productImage->image)){
          unlink($smallImagePath.$productImage->image);
      }

       //Delete Product Image from medium image folder if exists
       if(file_exists($mediumImagePath.$productImage->image)){
        unlink($mediumImagePath.$productImage->image);
    }

     //Delete Product Image from large image folder if exists
     if(file_exists($largeImagePath.$productImage->image)){
        unlink($largeImagePath.$productImage->image);
    }
  
      //Delete Product Image from database   
      Product::where('id',$id)->update(['image'=>'']); 
      return redirect()->back()->with('success_message', 'Product image deleted successfully!');
    }

    public function addAttributes(Request $request, $id){

        if($request->isMethod('post')){
            $data = $request->all();
            //   echo "<pre>"; print_r($data); die;
            foreach($data['price'] as $key => $value){
                if(!empty($value)){

                    //Check if price already Data already exists
                    $attrCountPrice = ProductsAttribute::where(['price'=>$value])->count();
                    if($attrCountPrice>0){
                        $message = "Price already exists, please add another price";
                        session::flash('error_message', $message);
                        return redirect()->back(); 
                    }

                    $attribute = new ProductsAttribute;
                    $attribute->product_id = $id;
                    $attribute->price = $value;
                    $attribute->stock = $data['stock'][$key];
                    $attribute->status = 1;
                    $attribute->save();

                }
            }

            $message = "Product attribute has been as successfully";
            session::flash('success_message', $message);
            return redirect()->back(); 
        }
        $productData = Product::with('attributes')->find($id);
        return view('admin.products.add-attributes')->with(compact('productData'));
    }

    public function editAttributes(Request $request, $id){
        if($request->isMethod('post')){
            $data = $request->all();
                    //   echo "<pre>"; print_r($data); die;
                      foreach ($data['attrId'] as $key => $attr){
                          if(!empty($attr)){
                              ProductsAttribute::where(['id'=>$data['attrId'][$key]])->update(['price'=>$data['price'][$key],'stock'=>$data['stock'][$key]]);
                          }
                      }
        }
    }

    public function updateAttributeStatus(Request $request){
        if($request->ajax()){
            $data = $request->all();
            if($data['status']=="Active"){
                $status = 0;
            } else{
                $status = 1;
            }
           ProductsAttribute::where('id',$data['attribute_id'])->update(['status'=>$status]);
            return response()->json(['status'=>$status,'attribute_id'=>$data['attribute_id']]);
        }

    }

    public function deleteAttribute($id){
        //Delete Attribute
        ProductsAttribute::where('id',$id)->delete();
        return redirect()->back()->with('success_message', 'Attribute deleted successfully!');
   
    }

    public function addImages(Request $request, $id=null){
        if($request->isMethod('post')){
            $data = $request->all();
            if($request->hasFile('image')){
                $images = $request->file('image');
                foreach($images as $key => $image){
                    $productImage = new ProductsImage;
                    $image_tmp = Image::make($image);
                  $extension = $image->getClientOriginalExtension();
                  $imageName = rand(111,99999).time().'.'.$extension;
                  $large_image_path = 'images/products/large/'.$imageName;
                  $medium_image_path = 'images/products/medium/'.$imageName;
                  $small_image_path = 'images/products/small/'.$imageName;
          
                  Image::make($image_tmp)->save($large_image_path);
                  Image::make($image_tmp)->resize(520,600)->save($medium_image_path);
                  Image::make($image_tmp)->resize(260,300)->save($small_image_path);
                  $productImage->image = $imageName;
                  $productImage->product_id = $id;
                  $productImage->status = 1;
                  $productImage->save();

                }
                $message = "Product image added successfully";
                session::flash('success_message',$message);
                return redirect()->back();
            }
        };

        $productData = Product::with('images')->where('id',$id)->first();
            $productData = json_decode(json_encode($productData), true);
        // echo "<pre>"; print_r($productData); die;

        return view('admin.products.add-edit-image')->with(compact('productData'));
    }

    public function deleteAlternateImage($id){

        //Get Product Image

      $productImage = ProductsImage::select('image')->where('id',$id)->first();
      //   echo "<pre>"; print_r($productImage); die; 

   //Get Product Image Path
   $smallImagePath = 'images/products/small/';
   $mediumImagePath = 'images/products/medium/';
   $largeImagePath = 'images/products/large/';

   //Delete Product Image from small image folder if exists
   if(file_exists($smallImagePath.$productImage->image)){
       unlink($smallImagePath.$productImage->image);
   }

    //Delete Product Image from medium image folder if exists
    if(file_exists($mediumImagePath.$productImage->image)){
     unlink($mediumImagePath.$productImage->image);
 }

  //Delete Product Image from large image folder if exists
  if(file_exists($largeImagePath.$productImage->image)){
     unlink($largeImagePath.$productImage->image);
 }
        //Delete Image from table 
        ProductsImage::where('id',$id)->delete();
        return redirect()->back()->with('success_message', 'Image deleted successfully!');
   
    }

    public function updateAlternateImageStatus(Request $request){
        if($request->ajax()){
            $data = $request->all();
            if($data['status']=="Active"){
                $status = 0;
            } else{
                $status = 1;
            }
           ProductsImage::where('id',$data['image_id'])->update(['status'=>$status]);
            return response()->json(['status'=>$status,'image_id'=>$data['image_id']]);
        }

    }
}
