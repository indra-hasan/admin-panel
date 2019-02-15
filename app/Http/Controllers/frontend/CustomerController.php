<?php

namespace App\Http\Controllers\frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Customer;

class CustomerController extends Controller
{
    public function __construct() {

    }

    public function getLogin() {
        return view('frontend.customer.login');
    }

    public function postLogin(Request $request){
        
        $this->validate($request, [
            'email' => 'required',
            'password' => 'required'
        ]);
       
        if(guardCustomer()->attempt(['email'=>$request->email,'password'=>$request->password])) {
            return redirect(url('dashboard'));
        } 
    
    }

    public function getRegister() {
        return view('frontend.customer.register');
    }

    public function postRegister(Request $request) {
        $this->validate($request, [
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email|unique:customers',
            'password' => 'required|min:8|confirmed'
        ]);
        $data=[
            'first_name'=> $request->first_name,
            'last_name'=> $request->last_name,
            'email'=> $request->email,
            'password'=> bcrypt($request->password)
        ];    
        //Insert New 
        Customer::create($data);  
        
        return redirect('/customer/login')->withInfo("Your account has been created");
    }

    function getLogout(){
        guardCustomer()->logout();
        return redirect(url('customer/login'));
    }
}
