<?php

namespace App\Http\Controllers;

use App\Mail\InquireMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class InquireController extends Controller
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
            'firstName' => 'required',
            'lastName' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'city' => 'required',
            'state' => 'required',
            'zip' => 'required',
            'availability' => 'required',
            'message' => 'required',
        ]);

        Mail::to('customdenlie@gmail.com')->send(new InquireMail($data));

        return redirect('/')->with('message', 'Thanks for your message. We\'ll be in touch.');
    }

}
