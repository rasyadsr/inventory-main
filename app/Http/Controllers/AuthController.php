<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }

    public function loginStore(Request $request)
    {
        
    }

    public function register()
    {
        return view('auth.register');
    }

    public function registerStore(Request $request)
    {
        $data = $request->all();
        $data['full_name'] = $request->input('first_name') . ' ' . $request->input('last_name');
        $data['password'] = Hash::make($request->input('password'));

        try {
            $response = User::create($data);
            echo '<pre>'; print_r($response); echo '</pre>';die('<br/><br/>' . __FILE__ . ' baris ' . __LINE__);
        } catch (\Throwable $th) {
           echo '<pre>'; print_r($th->getMessage()); echo '</pre>';die('<br/><br/>' . __FILE__ . ' baris ' . __LINE__);
        }
    }

    public function logout(Request $request)
    {
        
    }
}
