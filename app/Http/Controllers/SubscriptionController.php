<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SubscriptionMail;

class SubscriptionController extends Controller
{
    public function showForm()
    {
        return view('Subscription.view');
    }

    public function sendEmail(Request $request)
    {
        // set_time_limit(300);
        $request->validate([
            'email' => 'required|email',
        ]);
        // print_r($request->only(['email']));die;
        
        $details = $request->only(['email']);
            Mail::to('yashprajapati2k@gmail.com')->send(new SubscriptionMail($details));
            return back()->with('success', 'Email sent successfully!');
       
        
    }
}
