<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use Illuminate\Http\Request;
use App\Models\Specialist;

class HomeController extends Controller
{
    public function index()
    {
        $specialist = Specialist::get()->count();
        $doctor = Doctor::get()->count();
        // dd($specialist);
        return view('backend.index', compact('specialist', 'doctor'));
    }
}
