<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Http\Requests\StoreEmployeeRequest;
use App\Http\Requests\UpdateEmployeeRequest;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreEmployeeRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreEmployeeRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function show(Employee $employee)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function edit(Employee $employee)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateEmployeeRequest  $request
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateEmployeeRequest $request, Employee $employee)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function destroy(Employee $employee)
    {
        //
    }




    public function employeeSignIn(){
        return view('employee.signIn');
    }
    public function employeeSignInSubmitted(Request $request){
        $rules=[
            "username"=>"required",
            'password'=>'required|min:6|regex:/^.*(?=.{3,})(?=.*[a-zA-Z])(?=.*[0-9])(?=.*[\d\x])(?=.*[!$#%@]).*$/'
        ];
        $messages = [
            'required'=>"Please fill this fild",
            'password.min' => 'Minimum 5 Character',
            'password.regex' => 'Formet not needed'
        ];
        $this->validate($request, $rules, $messages );

        $employee = Employee::where('username', $request->username)->where('password',  $request->password)->first();

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
            'password.regex' => 'Formet not needed'
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
