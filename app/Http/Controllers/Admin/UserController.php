<?php

namespace App\Http\Controllers\Admin;

use Carbon\Carbon;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users=User::get();
        // dd($users);
        return view('admin.user.all-user',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.user.add-user');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'username'=>'required|regex:/^[a-zA-Z0-9-_]+$/|unique:users',
            'email'=>'required|unique:users',
            'password'=>'required',
            'confirm_password'=>'required|same:password',
            'date_of_birth'=>'required',
            'gender'=>'required',
            'role'=>'required',
            'blood_group'=>'required',
            'address'=>'required',
            'phone'=>'required|regex:/^[0-9]+$/|max:10',
            // 'phone'=>'required|regex:/^[0-9]{10}+$/',
        ],[
            'name.required'=>'Please enter user name',
            'username.required'=>'Please enter user username',
            'username.regex'=>'Username must contain only between A-Z , a-z , 0-9 , - , _ and without spaces or special characters',
            'email.required'=>'Please enter user email',
            'email.unique'=>'This user email has already been taken',
            'password.required'=>'Please enter user password',
            'confirm_password.required'=>'Please enter user confirm password',
            'confirm_password.same'=>'Confirm password must match password',
            'date_of_birth.required'=>'Please enter user date of birth',
            'gender.required'=>'Please enter user gender',
            'role.required'=>'Please enter user role',
            'blood_group.required'=>'Please enter user blood group',
            'address.required'=>'Please enter user address',
            'phone.required'=>'Please enter user phone number',
            'phone.regex'=>'Phone number invalide format',
            'phone.max'=>'Phone number cannot exceed 10 digits',
        ]);

        User::insert([
            'name'=>$request->name,
            'username'=>$request->username,
            'email'=>$request->email,
            'password'=>Hash::make($request->password),
            'date_of_birth'=>$request->date_of_birth,
            'serial_number'=>'AD-' . str_pad(User::max('id') + 1, 5, '0', STR_PAD_LEFT),
            'gender'=>$request->gender,
            'role'=>$request->role,
            'blood_group'=>$request->blood_group,
            'address'=>$request->address,
            'city'=>$request->city,
            'phone'=>$request->phone,
            'slug'=>Str::slug(uniqid('AD-').'-'.$request->name.time()),
            'creator'=>Auth::user()->name,
            'created_at'=>Carbon::now()->toDateTimeString(),
        ]);

        if($request){
            notyf()->position('x', 'center')->position('y', 'top')->duration(10000)->success('Successfully User Added');
            return redirect()->route('user');
        }else{
            notyf()->position('x', 'center')->position('y', 'top')->duration(15000)->error('Opps ! Somthing Wrong. Please Try Again');
            return redirect()->route('user-add');
        }
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
