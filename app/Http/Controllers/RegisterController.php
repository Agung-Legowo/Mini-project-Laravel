<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Session;

class RegisterController extends Controller
{
    public function register()
    {
    	return view('register');
    }

    public function actionregister(Request $request)
    {
    	$user = User::create([
    		'email' => $request->email,
    		'username' => $request->username,
    		'password' => Hash::make($request->password),
    		'role' => $request->role,
    		'active' => 1
    	]);

    Session::flash('message', 'Register Berhasil. Akun anda sudah aktif silahkan login menggunakan username dan password');
    			return redirect('register');
    }
}