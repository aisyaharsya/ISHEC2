<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login (){
        $data['title']='Login';
        return view('/login', $data);
    }

    public function authenticate(Request $request){
        $credentials= $request->validate([
            'email'=>'required|email',
            'password'=>'required'
        ]);
        $email = $request->email;
        $password = $request->password;

        // if (Auth::attempt($credentials)){
        //     $request->session()->regenerate();
        //     return redirect()->intended('/')->with('success', 'berhasil');
        // }
        if (Auth::attempt(array('email' => $email, 'password' => $password, 'level' => 0))) {
            $request->session()->regenerate();
            return redirect('/ad');
        }else if (Auth::attempt(array('email' => $email, 'password' => $password, 'level' => 1))) {
            $request->session()->regenerate();
            return redirect('/doc');}
        else if (Auth::attempt(array('email' => $email, 'password' => $password, 'level' => 2))) {
            $request->session()->regenerate();
            return redirect('/');
        }

        return back()->with('error', 'Email atau password salah')->with('email',$email);
    }

    public function logout(Request $request){
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }


}
