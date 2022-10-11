<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
   public function get_signup()
    {

       
        return view('auth.register');
    }
    public function signup(Request $request)
    {
        //dd($request->all());
        $validateData=$request->validate([
          'name'=>'required|min:3',
          'role_id'=>'required',
          'email'=>'required|email',
          'password'=>'required|min:8|confirmed'
        ]);
        $validateData['password']=Hash::make($request->password);
        $user=User::create($validateData);
        Auth::login($user);

            return redirect('/home');
        
       
    }
    public function get_signin()
    {
      
        return view('auth.login');
    }
    public function signin(Request $request)
    {
      $validateData=$request->validate([
        'email'=>'required|email',
        'password'=>'required|min:8'
      ]);
      $email=$validateData['email'];
      $password=$validateData['password'];
     // dd($password);
     if(Auth::attempt(['email' => $email, 'password' => $password]))
      {
        
       
            return redirect('/home');
        
      }else
      {
       //dd($password);
       return redirect()->back()->with('error','Invalid Credentials');
      }
    }
    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}
