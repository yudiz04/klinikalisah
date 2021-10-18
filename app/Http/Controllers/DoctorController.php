<?php

namespace App\Http\Controllers;

use App\Models\Specialist;
use App\Models\Doctor;
use Illuminate\Http\Request;

class DoctorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $doctor = Doctor::all();
        return view('doctor.index', compact('doctor'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $specialist = Specialist::all();
        return view('doctor.add', compact('specialist'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'subject'=>'required',
            'name'=>'required'
        ],
        [
            'subject.required'=>'harus diisi',
            'name.required'=>'harus diisi'
        ]);

        Doctor::create([
            'specialist_id'=>$request->specialist,
            'name'=>$request->name,
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Doctor  $doctor
     * @return \Illuminate\Http\Response
     */
    public function show(Doctor $doctor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Doctor  $doctor
     * @return \Illuminate\Http\Response
     */
    public function edit(Doctor $doctor)
    {
        $specialist = Specialist::all();
        return view('doctor.edit', compact('doctor', 'specialist'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Doctor  $doctor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Doctor $doctor)
    {
        $request->validate([
            'subject'=>'required',
            'name'=>'required'
        ],
        [
            'subject.required'=>'harus diisi',
            'name.required'=>'harus diisi'
        ]);

        Doctor::where('id', $doctor->id)->update([
            'specialist_id'=>$request->specialist,
            'name'=>$request->name,
        ]);

        return redirect('/doctor')->with('status', 'berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Doctor  $doctor
     * @return \Illuminate\Http\Response
     */
    public function destroy(Doctor $doctor)
    {
        Doctor::destroy('id', $doctor->id);
        return redirect('/doctor')->with('status', 'berhasil dihapus');
    }
}
