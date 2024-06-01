<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('auth.auth',[
            'title' => 'Victoria | Login'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $credentials = $request->validate([
            'username' => 'required|string',
            'password' => 'required|string'
        ]);
        
        if (Auth::attempt($credentials)) {
            if (Auth::user()->role == "admin") {
                // admin
                return redirect('/admin/appointment');
            } else 
            if (Auth::user()->role == "doctor") {
                // doctor
                return redirect('/doctor/appointment');
            } else {
                return redirect('/');
            }
        } else {
            return redirect('/admin/login')->with('error', 'Username atau password salah');
        }
    }
    
    public function destroy()
    {
        Auth::logout();
        return redirect('/login');
    }
}
