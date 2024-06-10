<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Hash;
use Session;
use App\Models\support;
use Illuminate\Support\Facades\Auth;

class supportController extends Controller
{

    public function index()
    {
        return view('support.view');
    }
}