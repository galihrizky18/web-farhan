<?php

namespace App\Http\Controllers;

use App\Models\AbsensiKaryawan;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function dashboard(){
        
        $userCurrent = Auth::user();
        $dataAbsen = AbsensiKaryawan::all();

        return view('dashboard', compact('userCurrent', 'dataAbsen'));
    }

    public function profile(){

        $userCurrent = Auth::user();

        return view('profil', compact('userCurrent'));
    }

    public function updateProfile(Request $request){
        $validateData = $request->validate([
            'username' => 'required',
            'email' => 'required',
            'noHp' => 'required',
        ], [
            'username.required' => 'Username tidak boleh kosong',
            'email.required' => 'Email tidak boleh kosong',
            'noHp.required' => 'No Hp tidak boleh kosong',
        ]);
    
        $userCurrent = User::find(Auth::user()->id);
    
        $userCurrent->username = $validateData['username'];
        $userCurrent->email = $validateData['email'];
        $userCurrent->noHp = $validateData['noHp'];
        $userCurrent->save();
    
        return redirect()->back()->with('berhasilUpdate', 'Data Berhasil Diupdate');
    }
    
}
