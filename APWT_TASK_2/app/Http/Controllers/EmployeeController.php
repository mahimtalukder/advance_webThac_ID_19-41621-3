<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Http\Requests\StoreEmployeeRequest;
use App\Http\Requests\UpdateEmployeeRequest;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    
    public function employeeSignIn(){
        return view('employee.signIn');
    }
    public function employeeSignInSubmitted(Request $request){
        $rules=[
            "username"=>"required",
            'password'=>'required|min:6'
        ];
        $messages = [
            'required'=>"Please fill this fild",
            'password.min' => 'Minimum 5 Character',
        ];
        $this->validate($request, $rules, $messages );

        $employee = Employee::whereRaw("BINARY username = '$request->username'")->whereRaw("BINARY password = '$request->password'")->first();

        if(!empty($employee)){
            return view('employee.signIn')->with('message', "Sign In success");
        }
        else{
            return view('employee.signIn')->with('error_message', "Information not found");
        }

        
    }

    public function employeeCreateSuccess(){
        return view('employee.signIn')->with('message', "Account created successfully");;
    }

    public function employeeCreate(){
        return view('employee.createAccount');
    }

    public function employeeCreateSubmitted(Request $request){
        $rules=[
            "username"=>"required",
            "name"=>"required|min:5|max:20",
            'email'=>'required|email',
            'password'=>'required|min:6|regex:/^.*(?=.{3,})(?=.*[a-zA-Z])(?=.*[0-9])(?=.*[\d\x])(?=.*[!$#%@]).*$/'
        ];
        $messages = [
            'required'=>"Please fill this fild",
            'email.email' => "Wrong formet",
            'password.min' => 'Minimum 5 Character',
            'password.regex' => 'Must contain at least one number and one uppercase and lowercase letter and one $ or # or % or @'
        ];
        $this->validate($request, $rules, $messages );

        $employee = new  Employee();
        $employee->username = $request->username;
        $employee->name = $request->name;
        $employee->email = $request->email;
        $employee->password = $request->password;
        $employee->save();

        return redirect()->route('employeeCreateSuccess');
    }
}
