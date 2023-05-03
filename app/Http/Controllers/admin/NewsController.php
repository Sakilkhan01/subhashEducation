<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Validator;
use File;
use App\Helpers\helper as Helper;
use App\Models\News;



class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function frontPage(){
        $news = News::where('status', 1)->orderBy('id', 'desc')->get();
    	return view('front.pages.news', compact('news'));
    }

    public function index()
    { 
        $news = News::orderBy('id', 'desc')->get();
        return view('admin.pages.news.index', compact('news'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.news.create');
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
            'title' => 'required',
            'description' => 'required',
        ]);


    	$obj = new News;
    	$obj->title            = $request->title;
        $obj->description     = $request->description;
        $obj->status          = $request->status;
    	
        if($obj->save())
        {
            return redirect()->route('news.list')->with('success','News insert successfully');
        }
        else
        {
            return redirect()->route('news.list')->with('error','News not submit');
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
        $news = News::findOrfail($id);
        return view('admin.pages.news.view', compact('news'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {   
        $news = News::findOrfail($id);
        return view('admin.pages.news.edit', compact('news'));    
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'title' => 'required',
            'description' => 'required',
        ]);


        $obj = News::find($id);
        $obj->title            = $request->title;
        $obj->description     = $request->description;
        $obj->status          = $request->status;
        
        if($obj->save())
        {
            return redirect()->route('news.list')->with('success','News insert successfully');
        }
        else
        {
            return redirect()->route('news.list')->with('error','News not submit');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        if(News::findOrFail($id)->delete())
        {
            return redirect()->route('news.list')->with('success','Successfully Deleted');
        }
        else
        {
            return redirect()->route('news.list')->with('error','Not Deleted');
        }
    }




}
