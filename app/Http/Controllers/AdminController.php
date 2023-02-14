<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function index()
    {
        $tittle = 'Dashboard';
        return view('admin.dashboard', compact('tittle'));
    }

    public function user()
    {
        $data = User::all();
        $tittle = 'User Management';
        return view('admin.user', compact('tittle', 'data'));
    }

    public function tambahadmin(Request $request)
    {
        // // dd($request->all());
        // User::create($request->all());
        // return redirect()->route('user-management')->with('success', 'Data di tambahkan');
        $this->validate($request, [
            'name' => 'required',
            'username' => 'required|unique:users,username',
            'password' => 'required|min:8',
            'no_hp' => 'required|min:12',
            'role' => 'required',
            'status_users' => 'required',
        ]);
        $request->merge(['password' => Hash::make($request->input('password'))]);

        $user = User::create([
            'name' => $request->name,
            'username' => $request->username,
            'password' => Hash::make($request->password),
            'no_hp' => $request->no_hp,
            'role' => $request->role,
            'status_users' => $request->status_users,
        ]);

        if ($user) {
            return redirect()->route('user-management')->with('success', 'Data berhasil di tambahkan');
        } else {
            return redirect()->route('user-management')->with('failed', 'Data gagal di tambahkan');
        }
        
    }

}

