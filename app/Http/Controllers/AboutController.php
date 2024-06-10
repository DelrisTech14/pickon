<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Hash;
use Session;
use App\Models\about;
use Illuminate\Support\Facades\Auth;

class aboutController extends Controller
{

    public function index()
    {
        return view('about.view');
    }
}