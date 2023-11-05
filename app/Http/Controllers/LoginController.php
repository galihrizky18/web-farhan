<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function authenticateLogin(Request $request){

        $validate = $request->validate([
            'username' => 'required',
            'password' => 'required',
        ],[
            'username.required' => 'Username tidak boleh kosong',
            'password.required' => 'Password tidak boleh kosong',
        ]
        );

        if(Auth::attempt($validate)){
            $request->session()->regenerate();
            return redirect()->intended('/admin');
        }

        return redirect()->route('login')->with('failLogin', 'Login Failed');
    }

    public function storeUser(Request $request){
        $validate = $request->validate([
            'username' => 'required',
            'password' => 'required',
            'email' => 'required|email',
            'noHp' => 'required',
        ],[
            'username.required' => 'Username tidak boleh kosong',
            'password.required' => 'Password tidak boleh kosong',
            'noHp.required' => 'No Hp tidak boleh kosong',
            'email.required' => 'Email tidak boleh kosong',
            'email.email' => 'Email Harus Berformat Email',
        ]);

        $user = new User();
        $user->username = $validate['username'];
        $user->email = $validate['email'];
        $user->noHp = $validate['noHp'];
        $user->password =bcrypt($validate['password']);
        $user->save();

        return redirect('/')->with('successCreateData', 'Berhasil menambah Data');

    }


    public function logout(){
        Auth::logout();
        return redirect('/');
    }
}
