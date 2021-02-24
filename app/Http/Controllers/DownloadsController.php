<?php

namespace App\Http\Controllers;

use App\Downloads;
use App\Software;
use Illuminate\Http\Request;

class DownloadsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Downloads $downloads)
    {
        //
        return view('downloads', ['downloads' => $downloads->paginate(10)]);
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
    public function store(Request $request, Software $software, $id)
    {
        //
        $today = date('Y-m-d');
        
        

        Downloads::create([

        'name' => $request['name'],
        'email' => $request['email'],
        'software_name' => $request['software'],
        'software_version' => $request['version'],
        'downloadded' => $today,
        ]);

        return redirect("downloads/view/$id");
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Downloads  $downloads
     * @return \Illuminate\Http\Response
     */
    public function show(Downloads $downloads, Software $software, $id)
    {
        //

       return view('download-view', ['software' => $software->where('api_key', $id)->get()]);

        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Downloads  $downloads
     * @return \Illuminate\Http\Response
     */
    public function edit(Downloads $downloads)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Downloads  $downloads
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Downloads $downloads)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Downloads  $downloads
     * @return \Illuminate\Http\Response
     */
    public function destroy(Downloads $downloads, $id)
    {
        //
        Downloads::where('id', $id)->delete();

        return redirect('/downloads')->withStatus('Suscessfully Delete');
    }
}
