<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function __construct(){
        if (!Auth::check()) {
            redirect()->route('login')->send();
        }
    }

    public function index(){
        return view('admin.dashboard.index');
    }

    public function profile(){
        return view('admin.profile.profile');
    }

    public function logout(){
        Auth::logout();
        return redirect('/');
    }
}
