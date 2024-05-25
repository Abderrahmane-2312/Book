<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function index(){
        return view('auth.login');
    }

    public function login(Request $request) {
 
        $credentials = $request->only('email', 'password');

        if (Auth::guard('admin')->attempt($credentials)) {
            // Authentication passed for admin
            return redirect()->intended('books.index'); 
        }

        // Authentication failed, redirect back with error
        return redirect()->back()->withInput($request->only('email'))->withErrors([
            'error_email' => 'These credentials do not match our records.',
        ]);
    }

    public function logout()
    {
        Auth::guard('admins')->logout();

        return redirect()->route('books.index');
    }

    public function signup()
    {
        return view('auth.signup'); //Form 
    }

    public function store(Request $request,  Admin $admin)
    {
        /* 
        Validation
        // */
        // $request->validate([
        //     'username' => 'required',
        //     'email' => 'required|email|unique:users',
        //     'password' => 'required|confirmed|min:8',
        // ]);
        //    dd( $request->all()) ;

        // Remove _token from the data
        $dataWithoutToken = collect($request->all())->except('_token')->toArray();
        // Create a new Book instance
        $admin = Admin::create($dataWithoutToken);
        // Now you can save the book
        $admin->save();
        return  redirect()->route('books.index');
    }
}
