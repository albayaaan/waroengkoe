<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index()
    {
        return view('auth.register');
    }

    public function register(Request $request)
    {
        $data =  $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required',
            'role' => 'required'
        ]);

        $data['password'] = Hash::make($request->password);

        User::create($data);
        return redirect('/login')->with('success', 'Register Berhasil. Silahkan Login menggunakan email dan password.');
    }
}
