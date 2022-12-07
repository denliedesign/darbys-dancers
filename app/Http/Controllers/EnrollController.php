<?php

namespace App\Http\Controllers;

use App\Mail\EnrollMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class EnrollController extends Controller
{

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('/');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = request()->validate([
            'contact_me_by_fax_only' => 'max:0',
            'my_name' => 'max:0',
            'my_title' => 'max:0',
            'studioName' => 'required',
            'firstName' => 'required',
            'lastName' => 'required',
            'membership' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'message' => 'required',
        ]);

        Mail::to('customdenlie@gmail.com')->send(new EnrollMail($data));

        return redirect('/')->with('message', 'Thanks for your message. We\'ll be in touch.');
    }
}
