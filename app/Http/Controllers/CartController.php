<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Hash;
use Session;
use App\Models\cart;
use Illuminate\Support\Facades\Auth;

class cartController extends Controller
{

    public function index()
    {
        return view('cart.view');
    }
}