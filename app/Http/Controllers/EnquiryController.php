<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;

// use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Mail;
// use App\Mail\SendQuery;

class EnquiryController extends Controller
{
    public function showForm()
    {
        return view('enquiry.view');
    }

    public function sendEmail(Request $request)
    {
        set_time_limit(300);

        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'number' => 'required|string',
            'product' => 'required|string',
            'query' => 'required|string',
        ]);

        $details = $request->only(['name', 'email', 'number', 'product', 'query']);

            
            
            Mail::to('peconpower58@gmail.com')->send(new ContactMail($details));

    // return response()->json(['message' => 'Email sent successfully.'], 200);
     return back()->with('success', 'Email sent successfully!');
       
        
    }
}
