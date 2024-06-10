<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Hash;
use Session;
use App\Models\tub;
use Illuminate\Support\Facades\Auth;

class tubController extends Controller
{

    public function index()
    {
        return view('tub.view');
    }
}