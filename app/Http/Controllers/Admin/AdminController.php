<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Auth;
use Hash;
use App\Admin;
use Image;
use Illuminate\Http\Request;
use Session;
class AdminController extends Controller
{

public function dashboard(){
    return view('admin.dashboard');
}

public function login(Request $request){
    if($request->isMethod('post')){
        $data = $request->all();
        // echo "<pre>"; print_r($data); die;

        $validateData = $request->validate([
            'email' => 'required|max:255|email',
            'password' => 'required',
        ]);

        // custom messages
        // $rules = [
        //     'email' => 'required|max:255|email',
        //     'password' => 'required',
        // ];

        // $customMessages = [
        //     'email.required' => 'Email address is required',
        //     'email.email' => 'Valid Email is required',
        //     'password.required' => 'Password is required',
        // ];

        //  $this->validate($request,$rules,$customMessages);
        //  custom messages 
        if(Auth::guard('admin')->attempt(['email'=> $data['email'], 'password'=>$data['password']])){
return redirect('admin/dashboard');
        } else{
            Session::flash('error_message', 'Invalid Email or Password');
            return redirect()->back();
        }
    }
    return view('admin.login');
}

public function settings(){
    $adminDetails = Admin::where('id', Auth::guard('admin')->user()->id)->first();
    // Auth::guard('admin')->user()->id;
    // echo "<pre>"; print_r(Auth::guard('admin')->user()); die;
    return view('admin.settings')->with(compact('adminDetails'));
}


public function checkCurrentPassword(Request $request){
    $data = $request->all();
    // echo "<pre>"; print_r($data); die;
    // echo Auth::guard('admin')->user()->password; die;
    if(Hash::check($data['currentpassword'], Auth::guard('admin')->user()->password)){
        echo "true";
    } else{
        echo "false";
    }
}

public function changePassword(Request $request){
    if($request->isMethod('post')){
        $data = $request->all();
        //check if current password is correct 
        if(Hash::check($data['currentpassword'],Auth::guard('admin')->user()->password)){
            //check if new password matches confirm password
            if($data['newpassword']==$data['confirmpassword']){
                Admin::where('id',Auth::guard('admin')->user()->id)->update(['password'=>bcrypt($data['newpassword'])]);
                Session::flash('success_message', 'Your password has been updated successfully');
            } else{
                Session::flash('error_message', 'Your password does not match');
            }
            echo "true";
        } else{
           Session::flash('error_message', 'Your current password is incorrect');
          
        } 
        return redirect()->back();
    }
}

public function updateAdminDetails(Request $request){
    if($request->isMethod('post')){
        $data = $request->all();
        $rules = [
            'name' => 'required|regex:/^[\pL\s-]+$/u',
            'mobile' => 'required|numeric',
            'image' => 'image'
        ];

        $customMessages = [
            'name.required' => 'Name is required',
            'name.regex' => 'Valid Name required',
            'mobile.required' => 'Mobile is required',
            'mobile.numeric' => 'Valid Mobile required',
        ];

        $this->validate($request,$rules,$customMessages);
        //Update Admin Details
if($request->hasFIle('image')){
    $image_tmp = $request->file('image');
if($image_tmp->isValid()){
    //Get Image Extension
    $extension = $image_tmp->getClientOriginalExtension();
    //Generalte New Image Name
    $imageName = rand(111,99999).'.'.$extension;
    $imagePath = 'images/admin/'.$imageName;
    //Upload Image
    // Image::make($image_tmp)->resize(300,400)->save($imagePath);
    Image::make($image_tmp)->save($imagePath);
} else if(!empty($data['currentimage'])){
    $imageName = $data['currentimage'];
} else {
    $imageName = "";
}
}
        Admin::where('email',Auth::guard('admin')->user()->email)
        ->update(['name'=>$data['name'],'mobile'=>$data['mobile'], 'image'=>$imageName]);
        session::flash('success_message','Admin Details Updated Successfully');
        return redirect()->back();
    }

    $adminDetails = Admin::where('id', Auth::guard('admin')->user()->id)->first();
    return view('admin.update-admin-details')->with(compact('adminDetails'));
}
public function logout(){
    Auth::guard('admin')->logout();
    return redirect('/admin');
}
}
