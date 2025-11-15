<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
# 1. Import model User agar dapat digunakan di dalam controller.
use App\Models\User;

class ProfileController extends Controller
{
    public function index()
    {
        $mahasiswa = user::first();
        $hours = date('H');
        $salam =match(true){
            $hours >= 5 && $hours <12 => "Good Morning",
            $hours >= 12 && $hours <5 => "Good Afternoon",
            $hours >= 5 && $hours <18 => "Good Evening",
            default => "Good Night",
        };
        $accesTime = date("H:i:s");
        # 2. Ambil satu data mahasiswa dari model User menggunakan fungsi first().
        $mahasiswa = User::first();
        
        # 3. Kirim data ke view profile menggunakan fungsi compact().
        return view('dashboard', compact('mahasiswa','salam','accesTime'));
    }
}