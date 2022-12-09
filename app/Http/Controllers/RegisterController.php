<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function register (){
        $data['title']='Register';
        return view('/register', $data);
    }
    public function store(Request $request)
    {

        // dd($request);

        $validatedData = $request->validate([
        'email' => 'required|email|unique:users',
        'nama' => 'required|max:255',
        'password' => 'required|min:5|max:255',
        'repassword' => 'required|min:5|max:255|same:password'
        ]);

        $validatedData['password'] = bcrypt($validatedData['password']);

        User::create( $validatedData);

        $request = session();
        $request->flash('success', 'Registration berhasil! Silahkan login');

        return redirect('/login');
        // $user = new user([
        //     'email'=> $request->email,
        //     'nama' => $request->nama,
        //     'password'=> Hash::make($request->email)
        // ]);
        // $user->save();
        // return redirect()->route('login')->with('success', 'Registration Success. Please Lggin!');

    }
}
