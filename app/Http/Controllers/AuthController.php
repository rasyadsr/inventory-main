<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    protected $redirectTo = '/asset';

    public function login()
    {
        return view('auth.login');
    }

    public function loginStore(Request $request)
    {
        $credentials = $this->validate($request, [
            'email'    => ['required', 'email'],
            'password' => ['required']
        ]);  

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
 
            return redirect()->intended('/');
        }
 
        return back()->withErrors([
            'credentials' => 'Invalid email or password',
        ]);
    }

    public function register()
    {
        return view('auth.register');
    }

    public function registerStore(Request $request)
    {
        $data = $request->validate([
            'nama_depan'     => ['required'],
            'nama_belakang'  => ['required'],
            'email'          => ['email', 'unique:users'],
            'gender'         => ['required'],
            'resume'         => ['file', 'nullable'],
            'description'    => ['nullable'],
            'password'       => ['required', 'confirmed'],
        ]);
   
        try {

            $data['full_name'] = $request->input('nama_depan') . ' ' . $request->input('nama_belakang');
            $data['password']  = Hash::make($request->input('password'));
            $data['resume']    = $request->file('resume') ? $request->file('resume')->store('user-resume') : '';
            $response = User::create($data);

            return response()->redirectTo('/login')->with('status', 'Berhasil Registrasi!');

        } catch (\Throwable $th) {

           return response()->json([
                'status' => 'failed',
                'data'   => null,
                'message'=> 'Terjadi kesalahan'
           ]);
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();
 
        $request->session()->invalidate();
     
        $request->session()->regenerateToken();
     
        return redirect('/');
    }
}
