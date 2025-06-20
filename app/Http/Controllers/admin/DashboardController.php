<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function showForm(){
        return view('admin.dashboard');
    }
    public function dashboard(){}

}
