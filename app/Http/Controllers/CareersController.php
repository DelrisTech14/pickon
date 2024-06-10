<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Hash;
use Session;
use App\Models\careers;
use Illuminate\Support\Facades\Auth;

class careersController extends Controller
{

    public function index()
    {
        return view('careers.view');
    }
}