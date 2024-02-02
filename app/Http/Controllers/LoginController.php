<?php

namespace App\Http\Controllers;

use App\Models\login;
use App\Models\User; 

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function register()
    {
        return view('login.register');
    }


    public function inputRegister(Request $request)
    {
        $request->validate([
            'username' => 'required|min:3|max:25',
            'password' => 'required|min:3',
            'email' => 'required|unique:users,email',
            // 'nohp' => 'required|min:8|max:13|unique:users,nohp',
            'nama_lengkap' => 'required',
            'alamat' => 'required',
        ],[
            'username.required' => 'Kolom username harus di isi',
            'password.required' => 'Kolom password harus di isi',
            'email.required' => 'email ini harus di isi!',
            'email.unique' => 'email ini telah ada!',
            // 'nohp.required' => 'no handphone ini harus di isi!',
            // 'nohp.unique' => 'no handphone ini telah ada!',
            'nama_lengkap.required' => 'Kolom nama lengkap harus di isi',
            'alamat.required' => 'Kolom alamat harus di isi',
        ]);
        // tambah data ke db bagian table users
        User::create([
            'username' => $request->username,
            'password' => Hash::make($request->password), //request password itu adalah password
            'email' => $request->email,
            'nama_lengkap' => $request->nama_lengkap,
            'alamat' => $request->alamat,
        ]);
        return redirect('/login')->with('successRegister', 'Anda telah berhasil membuat akun!'); //mereturn / lewat / , bukan lewat name yang diberikan
    }

    public function login()
    {
        return view('login.login');
    }


    public function auth(Request $request)
    {
        $request->validate([
            'username' => 'required|min:3|max:25',
            'password' => 'required',
        ],[
            'username.exists' => "This username doesn't exists",
            'username.required' => 'Kolom username harus di isi',
            'password.required' => 'Kolom password harus di isi',
        ]);


        $user = $request->only('username', 'password');
        if (Auth::attempt($user)) {
            return redirect()->route('uji_kom.home')->with('succesLogin', "Success login!"); //membuka file index dengan name nya ("ditambahkan dengan route")
        } else {
            // dd('salah');
            return redirect('/')->with('failedLogin', "Gagal login, periksa dan coba lagi!");
        }
    }


    public function logout()
    {
        // menghapus history login
        Auth::logout();
        // mengarahkan ke halaman login lagi
        return redirect('/login')->with('successLogout', 'Berhasil logout dari account!');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(login $login)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(login $login)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, login $login)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(login $login)
    {
        //
    }
}
