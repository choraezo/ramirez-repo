<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function submit(Request $request)
{
    $request->validate([
        'first_name' => 'required',
        'email'      => 'required|email',
        'message'    => 'required',
    ]);


    return back()->with('success', 'Message sent! We will get back to you soon.');
}
}
