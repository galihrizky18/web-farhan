<?php

namespace App\Http\Controllers;

use App\Models\AbsensiKaryawan;
use App\Models\Karyawan;
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
        $dataKaryawan = Karyawan::where('id_karyawan', $userCurrent->id_karyawan)->first() ;

        $userCurrent->username = $validateData['username'];
        $userCurrent->save();

        $dataKaryawan->id_karyawan = $userCurrent['id_karyawan'];
        $dataKaryawan->nama_karyawan = $dataKaryawan['nama_karyawan'];
        $dataKaryawan->email = $validateData['email'];
        $dataKaryawan->no_hp = $validateData['noHp'];
        $dataKaryawan->save();
    
        return redirect()->back()->with('berhasilUpdate', 'Data Berhasil Diupdate');
    }
    
}
