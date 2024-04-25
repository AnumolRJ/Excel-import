<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Mail\EnquiryMail;
use Illuminate\Support\Facades\Mail;


class MailController extends Controller
{

    public function index(Request $request)
    {
        return $request;
        //example@mail.com - mail to address

    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('emails.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Mail::to('anumol@bigseasolutions.com')->send(new EnquiryMail($request));
       
        return redirect()->back()->with('message', 'Mail Send Successfull!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
