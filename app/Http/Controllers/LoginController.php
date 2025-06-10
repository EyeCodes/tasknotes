<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Redis;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;
class LoginController extends Controller
{
    public function index(){
        $users = User::all();
        return view('auth/login');
    }
    public function regform(){
        return view('auth/register');

    }
    public function register(Request $request){
        $request -> validate([
            'name' =>'required|string|max:255',
            'email'=> 'required|email|unique:users,email',
            'password' => 'required|min:8|confirmed',
        ]);

        $qry = User::insert([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password)
            ]);

                return redirect('/');
    }

    public function login(Request $request){
        
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
    
        $credentials = $request->only('email', 'password');
    
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
    
            return redirect(route('add.task'));
        }
    
        return back()->withErrors([
            'email' => 'Invalid credentials.',
        ])->onlyInput('email');

    }   

    public function logout(Request $request)
{
    Auth::logout();

    $request->session()->invalidate();
    $request->session()->regenerateToken();
    Session::flush();
    return redirect()->route('login.form');
}

}

