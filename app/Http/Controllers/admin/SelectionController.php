<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\SelectionCorner;
use Session,File;

class SelectionController extends Controller
{
    public function index()
    {
        $selection = SelectionCorner::all();
        return view('admin.pages.Selection.index', compact('selection'));
    }
    public function create()
    {
        return view('admin.pages.Selection.create');
    }
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'address' => 'required',
            'year' => 'required',
        ]);

        $img = '';

        if ($request->hasFile('image')) {
            $files = $request->file('image');
            $filename = time().'.'.$files->extension();  
            $files->move(public_path('upload/selection'), $filename);
            $img = $filename;
        }
        $obj = new SelectionCorner();
        $obj->name = $request->name;
        $obj->image = $img;
        $obj->address = $request->address;
        $obj->year = $request->year;
        $obj->status = $request->status;
        if($obj->save()){
            return redirect()->back()->with('success', 'New recored insert successfully.');
        }
        else{
            return redirect()->back()->with('error', 'Ops!, Record not insert');
        }
    }

    public function edit($id)
    {
        $selection = SelectionCorner::findOrfail($id);
        return view('admin.pages.Selection.view', compact('selection'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'address' => 'required',
            'year' => 'required',
        ]);
        $img = '';
        if ($request->hasFile('image')) {
            $image_path = public_path('upload/selection/'.$request->preImg);
              if(File::exists($image_path)) {
                File::delete($image_path);
              }

            $files = $request->file('image');
            $filename = time().'.'.$files->extension();  
            $files->move(public_path('upload/selection'), $filename);
            $img = $filename;
        }else{
            $img = $request->preImg;
        }

        $obj = SelectionCorner::find($id);
        $obj->name = $request->name;
        $obj->image = $img;
        $obj->address = $request->address;
        $obj->year = $request->year;
        $obj->status = $request->status;
        if($obj->update()){
            return redirect()->back()->with('success', 'New recored insert successfully.');
        }
        else{
            return redirect()->back()->with('error', 'Ops!, Record not insert');
        }

    }

    public function delete($id)
    {
         $imagePath = SelectionCorner::select('image')->where('id', $id)->first();
         $filePath = public_path('upload/selection/'.$imagePath->image);
            if (file_exists($filePath)) {
                    unlink($filePath);
                    SelectionCorner::where('id', $id)->delete();
            }else{
             SelectionCorner::where('id', $id)->delete();
            }
        return redirect()->back();
    }
    public function frontPage()
    {
        $selection = SelectionCorner::where('status', 1)->select('name','image','year','address')->get();
        return view('front.pages.selection', compact('selection'));
    }

}
