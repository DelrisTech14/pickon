<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Hash;
use Session;
use App\Models\card;
use Illuminate\Support\Facades\Auth;

class cardController extends Controller
{

    public function index()
    {
        return view('card.view');
    }
}