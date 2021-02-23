<?php

namespace App\Http\Controllers;

use App\welcome;
use Illuminate\Http\Request;
use App\Software;

class WelcomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Software $software)
    {
        //

        return view('welcome',[
            'software' => $software->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\welcome  $welcome
     * @return \Illuminate\Http\Response
     */
    public function show(welcome $welcome)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\welcome  $welcome
     * @return \Illuminate\Http\Response
     */
    public function edit(welcome $welcome)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\welcome  $welcome
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, welcome $welcome)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\welcome  $welcome
     * @return \Illuminate\Http\Response
     */
    public function destroy(welcome $welcome)
    {
        //
    }
}
