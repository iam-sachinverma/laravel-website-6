<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Session;
use Auth;
use App\Admin;
use Hash;
use Image;

class AdminController extends Controller
{
    public function dashboard(){
        Session::put('page','dashboard');
        return view('admin.admin_dashboard');
    }

    public function settings(){
        Session::put('page','settings');
        return view('admin.admin_settings');
    }


    public function login(Request $request){
        if($request->isMethod('post')){
            $data = $request->all();
            //echo "<pre>"; print_r($data); die;
            $rules = [
                'email' => 'required|email|max:255',
                'password' => 'required',
            ];

            $customMessages = [
                 'email.required' => 'Email Filed is Empty',
                 'email.email' => 'Enter Valid Email',
                 'password.required' => 'Password Filed is Empty',
            ];

            $this->validate($request,$rules,$customMessages);

            if(Auth::guard('admin')->attempt(['email'=>$data['email'],'password'=>$data['password']])){
                return redirect('/admin/dashboard');
            }else{
                Session::flash('error_message','Invalid Email or Password');
                return redirect()->back();
            }
        }
        //echo $password = Hash::make('12345678'); die;
        return view('admin.admin_login');
    }

    public function logout(){
        Auth::guard('admin')->logout();
        return redirect('/admin');
    }

    public function chkCurrentPassword(Request $request){
        $data = $request->all();
        if(Hash::check($data['current_pwd'],Auth::guard('admin')->user()->password)){
            echo "true";    
        }else{
            echo "false";
        }
    }

    public function updateCurrentPassword(Request $request){
        if($request->isMethod('post')){
            $data = $request->all();
            // check if password is correct
            if(Hash::check($data['current_pwd'],Auth::guard('admin')->user()->password)){
            // check if new and confirm match
               if($data['new_pwd']==$data['confirm_pwd']){
                   Admin::where('id',Auth::guard('admin')->user()->id)->update(['password'=>bcrypt($data ['new_pwd'])]);
                   Session::flash('success_message','Password Successfully Updated');
               }else{
                Session::flash('error_message','New password and Confirm Password not match');
               }       
            }else{
                Session::flash('error_message','Your current password is incorrect'); 
            }
            return redirect()->back();

        }
    }

    public function updateAdminDetails(Request $request){
        Session::put('page','update-admin-details');
        if($request->isMethod('post')){
            $data = $request->all();
            $rules = [
                'admin_name' => 'required|regex:/^[\pL\s\-]+$/u',
                'admin_mobile' => 'required|numeric',
            ];
            $customMessages = [
                'admin_name.required' => 'Name is required',
                'admin_name.alpha' => 'Valid Name is required',
                'admin_mobile.required' => 'Mobile is required',
                'admin_mobile.numeric' => 'Valid Mobile is required',
            ];
            $this->validate($request,$rules,$customMessages);

            //update admin details
            Admin::where('email',Auth::guard('admin')->user()->email)->update(['name'=>$data['admin_name'],'mobile'=>$data['admin_mobile']]);
            session::flash('success_message','Admin Details Updated Successfully');
            return redirect()->back();
        }
        
        return view('admin.update_admin_details');
    }

}
