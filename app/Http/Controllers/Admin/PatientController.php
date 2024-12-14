<?php

namespace App\Http\Controllers\Admin;

use App\Models\Patient;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class PatientController extends Controller
{
    public function __construct(){
        if (!Auth::check()) {
            redirect()->route('login')->send();
        }
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $patients=Patient::where('patient_restore_status',1)->get();
        return view('admin.patients.patients',compact('patients'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.patients.add-patient');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'patient_first_name'=>'required',
            'patient_username'=>'required|regex:/^[a-zA-Z0-9]+$/|unique:patients',
            'patient_email'=>'required|unique:patients',
            'patient_password'=>'required',
            'patient_confirm_password'=>'required|same:patient_password',
            'patient_date_of_birth'=>'required',
            'patient_gender'=>'required',
            'patient_department'=>'required',
            'patient_blood_group'=>'required',
            'patient_disease'=>'required',
            'patient_address'=>'required',
            'patient_phone'=>'required|regex:/^[0-9]+$/|max:10',
            // 'patient_phone'=>'required|regex:/^[0-9]{10}+$/',
        ],[
            'patient_first_name.required'=>'Please enter patient first name',
            'patient_username.required'=>'Please enter patient username',
            'patient_username.regex'=>'Username must contain only between A-Z , a-z , 0-9 and without spaces or special characters',
            'patient_email.required'=>'Please enter patient email',
            'patient_email.unique'=>'This patient email has already been taken',
            'patient_password.required'=>'Please enter patient password',
            'patient_confirm_password.required'=>'Please enter patient confirm password',
            'patient_confirm_password.same'=>'Confirm password must match password',
            'patient_date_of_birth.required'=>'Please enter patient date of birth',
            'patient_gender.required'=>'Please enter patient gender',
            'patient_department.required'=>'Please enter patient department',
            'patient_blood_group.required'=>'Please enter patient blood group',
            'patient_disease.required'=>'Please enter patient disease/disorder/sickness ',
            'patient_address.required'=>'Please enter patient address',
            'patient_phone.required'=>'Please enter patient phone number',
            'patient_phone.regex'=>'Phone number invalide format',
            'patient_phone.max'=>'Phone number cannot exceed 10 digits',
        ]);

        Patient::insert([
            'patient_first_name'=>$request->patient_first_name,
            'patient_last_name'=>$request->patient_last_name,
            'patient_username'=>$request->patient_username,
            'patient_email'=>$request->patient_email,
            'patient_password'=>Hash::make($request->patient_password),
            'patient_date_of_birth'=>$request->patient_date_of_birth,
            'patient_serial_number'=>'ADP-' . str_pad(Patient::max('patient_id') + 1, 5, '0', STR_PAD_LEFT),
            'patient_gender'=>$request->patient_gender,
            'patient_department'=>$request->patient_department,
            'patient_blood_group'=>$request->patient_blood_group,
            'patient_disease'=>$request->patient_disease,
            'patient_address'=>$request->patient_address,
            'patient_city'=>$request->patient_city,
            'patient_phone'=>$request->patient_phone,
            'patient_status'=>$request->patient_status,
            'patient_slug'=>Str::slug(uniqid('ADP ').'-'.$request->patient_first_name.'-'.$request->patient_last_name.'-'.time()),
            'patient_creator'=>Auth::user()->name,
            'created_at'=>Carbon::now()->toDateTimeString(),
        ]);

        if($request){
            notyf()->position('x', 'center')->position('y', 'top')->duration(5000)->success('Success ! Patient Added Successfully.');
            return redirect()->route('patients');
        }else{
            notyf()->position('x', 'center')->position('y', 'top')->duration(10000)->error('Opps ! Somthing Wrong. Please Try Again.');
            return redirect()->route('patients-add');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show($patient_slug)
    {
        $viewPatient=Patient::where('patient_slug',$patient_slug)->first();
        return view('admin.patients.view-patient',compact('viewPatient'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('admin.patients.edit-patient');
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
