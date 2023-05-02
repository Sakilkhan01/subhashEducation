<?php


namespace App\Http\Controllers\admin;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\imageTitle;
use App\Models\galleryImage;
use DB;
use App\Helpers\helper;

class GalleryImageController extends Controller
{


    /**
     * Listing Of images gallery
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    	$images = imageTitle::withCount(['gallery'])->orderBy('id', 'desc')->get();
    	return view('admin.pages.gallery_img.index',compact('images'));
    }
    
    
    public function create()
    {
    	return view('admin.pages.gallery_img.create');
    }


    /**
     * Upload image function
     *
     * @return \Illuminate\Http\Response
     */
    public function upload(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'image' => 'required|array',
            'image.*' => 'mimes:jpeg,png',
        ]);
       
        if ($request->hasFile('image')) {
            $files = $request->file('image');
            $obj = new imageTitle;
            $obj->title = $request->title;
            $obj->slug = helper::slug($request);
            $obj->status = 1;
            $obj->save();
            foreach($files as $img) {
                $filename= rand(0, 99999).'.'.$img->extension();  
                $img->move(public_path('upload'), $filename);
                
                    DB::table('gallery_image')->insert(
                        array(
                               'image_title_id'     =>   $obj->id, 
                               'status'   =>   1,
                               'image'    => $filename,
                        )
                   );
            }
            return redirect()->route('image.index');
        }
    }


    public function view($id){
    	$images = imageTitle::with(['gallery'])->where('id', $id)->get();
    	return view('admin.pages.gallery_img.view',compact('images'));
    }

    public function edit($id){
    	$images = imageTitle::with(['gallery'])->where('id', $id)->get();
    	return view('admin.pages.gallery_img.edit',compact('images'));
    }

    /**
     * Remove Image function
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $title = imageTitle::find($id);
        $title->delete();

        $obj = galleryImage::where('image_title_id', $id)->get();

        if($obj){
            foreach($obj as $v){
                $path = public_path('upload/').$v->image;
                if (file_exists($path)) {
                    unlink($path);
                }  
                galleryImage::where('image',$v->image)->delete();
            }
        }
        return redirect()->back();
    }

    public function titleUpdate(Request $request){
        $this->validate($request, [
            'title' => 'required',
        ]);

        $obj = imageTitle::find($request->id);
        $obj->title =$request->title;
        $obj->status =$request->status;
        $obj->slug = helper::slug($request);
        $obj->save();
        return redirect()->back();
    }
    
    public function deleteOne($id){
        
        $obj = galleryImage::where('id', $id)->first();
        
        $path = public_path('upload/').$obj->image;
        if (file_exists($path)) {
            unlink($path);
        }  
        galleryImage::where('image',$obj->image)->delete();
        return redirect()->back();
    }

    public function uploadOne(Request $request)
    {
        $obj = galleryImage::where('id', $request->id)->first();
        
        $path = public_path('upload/').$obj->image;
        if (file_exists($path)) {
            unlink($path);
        }  
        
        $img = galleryImage::find($request->id);

        $files = $request->file('file');
        $filename= rand(0, 99999).'.'.$files->extension();  
        $files->move(public_path('upload'), $filename); 
        $img->image = $filename;
        $img->save();
        return response()->json(['message' => 'success']);

    }

    public function FrontPage()
    {
       
        $images = imageTitle::withCount(['getImages'])->with(['getImages'])->where('status', 1)->orderBy('id', 'desc')->get();
        // dd( $images[0]->getImages);
        return view('front.pages.gallery.images',compact('images'));
    }

    public function galleryView($slug)
    {   
        
        $images = DB::table('image_title')
        ->leftJoin('gallery_image', 'image_title.id', '=', 'gallery_image.image_title_id')
        ->where('image_title.slug', $slug)
        ->get();

        if(!$images->isEmpty()){
            return view('front.pages.gallery.view-images',compact('images'));
        }else{
            return redirect('gallery');
        }
    }


}
