<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Client;
use Validator;
use File;
use App\Helpers\helper as Helper;



class CareerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    { 
        $clients = Client::all();
        return view('admin.pages.carrer.index', compact('clients'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.carrer.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        $validated = $request->validate([
            'name' => 'required',
            'image' => 'required',
            'status' => 'required',
        ]);

        $files = $request->file('image');
        $destinationPath = public_path('/upload/client');       
        $profileImage = uniqid() . "." . $files->getClientOriginalExtension();
        $files->move($destinationPath, $profileImage);

    	$client = New Client;
    	$client->name            = $request->name;
        $client->logo            = $profileImage;
        $client->status          = $request->status;
    	
    	
        if($client->save())
        {
            return redirect()->route('career.index')->with('success','Successfully Submit');
        }
        else
        {
            return redirect()->route('career.index')->with('error','Form Not Submit');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return redirect()->route('career.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {   
        
        if($client = Client::findOrFail($id))
        {
            return view('admin.pages.carrer.edit',compact('client'));
        }
        else
        {
            return redirect()->route('career.index');
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function Carrerupdate(Request $request, $id)
    {
        $validated = $request->validate([
            'name' => 'required',
            'status' => 'required',
        ]);

        if($files = $request->file('image')){
            $destinationPath = public_path('/upload/client');       
            $profileImage = uniqid() . "." . $files->getClientOriginalExtension();
            $files->move($destinationPath, $profileImage);
        }else{
            $profileImage = $request->prelogo;
        }

    	$client = Client::find($id);
    	$client->name            = $request->name;
        $client->logo            = $profileImage;
        $client->status          = $request->status;
    	
    	
        if($client->save())
        {
            return redirect()->route('career.index')->with('success','Successfully Submit');
        }
        else
        {
            return redirect()->route('career.index')->with('error','Form Not Submit');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function CarrerDelete($id)
    {
        if(Client::findOrFail($id)->delete())
        {
            return redirect()->route('career.index')->with('success','Successfully Deleted');
        }
        else
        {
            return redirect()->route('career.index')->with('error','Not Deleted');
        }
    }




}
