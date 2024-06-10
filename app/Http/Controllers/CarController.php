<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Hash;
use Session;
use App\Models\car;
use Illuminate\Support\Facades\Auth;

class carController extends Controller
{

    public function index()
    {
        return view('car.view');
    }
}