<?php

namespace App\Http\Controllers\Admin;

use Carbon\Carbon;
use App\Models\Patients;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class PatientsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $patients = Patients::orderBy('patient_id', 'DESC')->paginate(5);
        // dd($patients);
        return view('patients', compact('patients'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $patient_creator = Auth::User()->name;

        $insert=Patients::insertGetId([
            'patient_name' => $request->name,
            'patient_email' => $request->email,
            'patient_dob' => $request->date_of_birth,
            'patient_gender' => $request->gender,
            'patient_department' => $request->department,
            'patient_blood_group' => $request->blood_group,
            'patient_address' => $request->address,
            // 'patient_image' => $imageName,
            // 'patient_creator' => auth()->user()->name,
            'patient_creator' => $patient_creator,
            'created_at' => Carbon::now()->toDateTimeString(),
        ]);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '-' . uniqid() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('uploads/patient'), $imageName);

            Patients::where('patient_id', $insert)->update([
                'patient_image' => $imageName,
            ]);
        }

        // return view('patients');
        // return redirect()->back();
        return redirect()->route('patients');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
