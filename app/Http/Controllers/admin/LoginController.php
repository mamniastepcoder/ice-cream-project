<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;


class LoginController extends Controller
{
     public function register()
   {
    return view('admin.auth.registration');
    
   }
    public function registerInsert(Request $request)
    {
       
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|max:255|unique:users,email', 
            'password' => 'required|string|min:8|confirmed',
        ]);
 
        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password); 
        $user->save();
        return redirect()->route('login')->with('success', 'Registered successfully, please login.');
    }
     public function index()
    {
        return view('admin.auth.login');
    }
     public function login(Request $request)
    {
        
        $request->validate([
            'email' => 'required|string', 
            'password' => 'required|string|min:6', 
        ]);

        
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password], $request->remember)) {
            
            return redirect()->route('dashboard');
        } else {
            
            return back()->withErrors([
                'email' => 'These credentials do not match our records.',
            ]);
        }
    }
    public function logout(Request $request)
    {
       Auth::logout();
       $request->session()->invalidate();
       return redirect()->route('login');
   }
}
