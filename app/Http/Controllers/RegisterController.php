<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index()
    {
        $data = ['title' => 'Mendaftar'];
        return view('web.register.index', $data);
    }

    public function store(Request $request)
    {
        $validData = $request->validate([
            'nik' => 'required|numeric|digits:16',
            'name' => 'required',
            'username' => 'required|unique:dd_users|min:5|max:15',
            'address' => 'required',
            'zip_code' => 'required|numeric|digits:5',
            'phone' => 'required|numeric',
            'email' => 'required|email|unique:dd_users',
            'password' => 'required|min:6|max:255',
            'ktp' => 'required|image|file|max:300',
        ]);

        $validData['password'] = Hash::make($validData['password']);
        $request->file('ktp')->store('uploads/images');

        User::create($validData);

        return redirect('/login')->with('success', 'Registrasi berhasil, silahkan masuk ke akun anda.');
    }
}
