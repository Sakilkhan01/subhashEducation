<?php


namespace App\Http\Controllers\admin;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Video;
use DB,Str;

class GalleryVideoController extends Controller
{

    public function index()
    {
    	$video = Video::orderBy('id', 'desc')->get();
    	return view('admin.pages.gallery_video.index',compact('video'));
    }
    

    public function create()
    {
    	return view('admin.pages.gallery_video.create');
    }

    public function store(Request $request)
    {
        
        $this->validate($request, [
            'title' => 'required',
            'youtube_link' => 'required',
        ]);
        $replaced = Str::replace('watch?v=', 'embed/', $request->youtube_link);
    	$user = Video::create(['title' => $request->title,'youtube_link' => $replaced,'status' => 1]);
        return redirect()->route('video.index');
    }

    public function view($id)
    {
        $video = Video::findOrfail($id);
    	return view('admin.pages.gallery_video.view', compact('video'));
    }

    public function edit($id)
    {
        $video = Video::findOrfail($id);
    	return view('admin.pages.gallery_video.edit', compact('video'));
    }

    public function update(Request $request,$id)
    {
        $this->validate($request, [
            'title' => 'required',
            'youtube_link' => 'required',
        ]);

        $replaced = Str::replace('watch?v=', 'embed/', $request->youtube_link);

        $obj = Video::find($id);
        $obj->youtube_link = $replaced;
        $obj->status = $request->status;
        $obj->title = $request->title;
        $obj->save();
        return redirect()->route('video.index');
    }

    public function delete($id)
    {
        Video::find($id)->delete();
        return redirect()->route('video.index');
    }


    public function FrontPage()
    {
        $video = Video::where('status', 1)->get();
        return view('front.pages.about.videogallery', compact('video'));
    }

}
