<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $role = Auth::user()->level;
        if ($role == "super admin") {
            return redirect()->route('superadmin_dashboard');
        } else if ($role == "administrator") {
            return redirect()->route('admin_dashboard');
        } else {
            return redirect()->to('logout');
        }
    }
}
