<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return view('user.index');
    }

    public function facilities()
    {
        return view('user.facilities');
    }

    public function information()
    {
        return view('user.information');
    }
    public function doctor()
    {
        $doctors = Doctor::with(['user', 'specialis'])->get();
        return view('user.doctor',[
            'doctors' => $doctors
        ]);
    }

    public function pharmacy()
    {
        return view('user.pharmacy');
    }

    public function location()
    {
        return view('user.location');
    }

    public function profile()
    {
        return view('user.profile');
    }


}
