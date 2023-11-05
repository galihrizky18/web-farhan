<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function dashboard(){
        
        $userCurrent = Auth::user();

        return view('dashboard', compact('userCurrent'));
    }

    public function profile(){

        $userCurrent = Auth::user();

        return view('profil', compact('userCurrent'));
    }
}
