<?php

namespace App\Http\Controllers;

use App\Software;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;
use Symfony\Component\Process\Process;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

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
            'software' => $software->paginate(10),
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

        $api_key = Str::random(60);

        $validatedData = $request->validate([
            'name' => 'required', 'string', 'max:255',
            'description' => 'required', 'string',  'max:255', 
            'version' => 'required', 'numeric', 'between:0,99.99' ,
            'url' => 'required', 'string',  'max:555' ,
        
            ]);

            Software::create([
                'api_key' => $api_key,
                'software_name' => $request['name'],
                'software_description' => $request['description'],
                'software_version' => $request['version'],
                'software_download_url' => $request['url'],
            ]);
        

        return redirect('/software')->withStatus('Successfully Created');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Software  $software
     * @return \Illuminate\Http\Response
     */
    public function show(Software $software, $id)
    {
        //

        return view('software-view', ['software' => $software->where('api_key',$id)->get()]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Software  $software
     * @return \Illuminate\Http\Response
     */
    public function edit(Software $software, $id)
    {
        //
        return view('software-edit', ['software' => $software->where('api_key',$id)->get()]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Software  $software
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Software $software, $id)
    {
        //

        $validatedData = $request->validate([
            'name' => 'required', 'string', 'max:255',
            'description' => 'required', 'string',  'max:255', 
            'version' => 'required', 'numeric', 'between:0,99.99' ,
            'url' => 'required', 'string',  'max:555' ,
        
            ]);

            Software::where('api_key',$id)
                ->update([
                'software_name' => $request['name'],
                'software_description' => $request['description'],
                'software_version' => $request['version'],
                'software_download_url' => $request['url'],
            ]);

        return redirect('software')->withStatus('Update Successful');
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
