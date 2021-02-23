<?php

namespace App\Http\Controllers;

use App\Software;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;
use Symfony\Component\Process\Process;
use Illuminate\Support\Facades\File;

class SoftwareController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Software $software)
    {
        //
        return view('software',[
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

        return view('software-add');
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

        $validatedData = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'description' => ['required', 'string',  'max:255', ],
            'version' => ['required', 'numeric', 'between:0,99.99' ],
            'url' => ['required', 'string',  'max:555' ],
            'file' => ['required','mimes:pdf,xlx,csv',' max:8048'],
            ]);

            Software::create([
                'software_name' => $request['name'],
                'software_description' => $request['description'],
                'software_version' => $request['version'],
                'software_download_url' => $request['url'],
            ]);

           
            $fileName = time().'.'.$request->file->extension();  
   
            $request->file->move(public_path('uploads'), $fileName);
           


        return redirect('/software');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Software  $software
     * @return \Illuminate\Http\Response
     */
    public function show(Software $software)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Software  $software
     * @return \Illuminate\Http\Response
     */
    public function edit(Software $software)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Software  $software
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Software $software)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Software  $software
     * @return \Illuminate\Http\Response
     */
    public function destroy(Software $software)
    {
        //
    }
}
