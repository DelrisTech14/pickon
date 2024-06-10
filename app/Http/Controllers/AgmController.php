<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Hash;
use Session;
use App\Models\agm;
use Illuminate\Support\Facades\Auth;

class agmController extends Controller
{

    public function index()
    {
        return view('agm.view');
    }
}