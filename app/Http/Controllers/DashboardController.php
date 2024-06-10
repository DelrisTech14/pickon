<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Hash;
use Session;
use App\Models\dashboard;
use Illuminate\Support\Facades\Auth;

class dashboardController extends Controller
{

    public function index()
    {
        return view('dashboard.view');
    }
}