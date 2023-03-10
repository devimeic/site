<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PemohonController extends Controller
{
    public function index()
    {
        $tittle = 'Dashboard';
        return view('pemohon.dashboard', compact('tittle'));
    }

    public function pengajuan()
    {
        $tittle = 'Pengajuan';
        return view('pemohon.pengajuan', compact('tittle'));
    }

    public function riwayat()
    {
        $tittle = 'Riwayat Pengajuan';
        return view('pemohon.riwayat', compact('tittle'));
    }
}
