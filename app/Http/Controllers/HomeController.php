<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if ( Auth::user()->role == "admin"){
            $tittle = 'Dashboard';
            return view('admin.dashboard', compact('tittle'));
        } elseif (Auth::user()->role == "pemohon"){
            return view('pemohon.dashboard');
        } elseif (Auth::user()->role == "verifikator berkas"){
            return view('berkas.dashboard');
        } elseif (Auth::user()->role == "verifikator lapangan"){
            return view('lapangan.dashboard');
        } elseif (Auth::user()->role == "pemberi rekomendasi"){
            return view('rekomendasi.dashboard');
    } else {
        return view('auth.login2');
    }
}
}
