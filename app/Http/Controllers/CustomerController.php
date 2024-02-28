<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class CustomerController extends Controller
{
    public function index(){
        return view('frontend.login');
    }

    public function registerUser(){
        return view('frontend.register');
    }

    public function userStore(Request $request){
        $request->validate([
            'name' => 'required|string|max:100',
            'phone' => 'required|string|max:50',
            'address' => 'required|string|max:150',
            'email' => 'required|email|max:50',
            'password' => 'required|min:8'
        ]);
            // dd($request);
        Customer::create([
            'name' => $request->name,
            'phone' => $request->phone,
            'address' => $request->address,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);

        // $credentials = $request->only('email', 'password');
        // Auth::attempt($credentials);
        // $request->session()->regenerate();
        return redirect()->route('customer_login_form')
        ->withSuccess('You have successfully registered');
    }



    public function login(Request $request ){
        // dd($request->all()) ;
        if(Auth::guard('customer')->attempt(['email'=>$request->email,
        "password"=>$request->password])){
            return redirect('/');
        } else {
            return redirect()->route('customer.login');
        }
    }


    public function dashboard(){
        return view('backend.customer.dashboard');
    }


    public function destroy (Request $request)
    {
        
        Auth::guard('customer')->logout();
        

        // $request->session()->invalidate();

        // $request->session()->regenerateToken();

        return redirect('/');
    }
}
