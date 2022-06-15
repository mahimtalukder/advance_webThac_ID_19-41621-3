<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Http\Requests\StoreAdminRequest;
use App\Http\Requests\UpdateAdminRequest;
use Illuminate\Http\Request;
use Session;

class AdminController extends Controller
{
  public function dashboard(){
      return view('admin.dashboard');
  }

  public function viewProfile(){
    return view('admin.viewProfile');
  }

  public function editProfile(){
    return view('admin.editProfile');
  }

  public function editProfileSubmitted(Request $request){
      $rules=[
        "name"=>"required|max:20",
        'email'=>'required|email',
    ];
    $messages = [
        'required'=>"Please fill this fild",
        'name.max' => "Name can not exceed 20 characters",
        'email.email' => "Wrong formet",
    ];
    $this->validate($request, $rules, $messages );

    $admin_info = session()->get('admin');

    $admin = Admin::where('username', $admin_info['username']);
    $admin->update(['name' => $request->name, 'email' => $request->email]);
    

    $admin_info['name'] = $request->name;
    $admin_info['email'] = $request->email;

    session()->put('admin',$admin_info);

    return view('admin.editProfile')->with('success_msg', "Information Updated");
  }
}
