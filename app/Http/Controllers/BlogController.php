<?php

namespace App\Http\Controllers;

use App\Blog;
use Illuminate\Http\Request;
use Str;
use Carbon\Carbon;
use DB;
use Intervention\Image\Facades\Image;
use Auth;
use File;
class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogs = Blog::limit(6)->get();
        return view('backend.blog.index', compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.blog.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'description' =>  'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);

        $blog = new Blog;
        $blog->title = $request->input('title');
        $blog->description = $request->input('description');
        $blog->slug = Str::slug($request->input('title'));
        $blog->author = Auth::user()->name;
        if($request->hasfile('image'))
        {
            $image = $request->file('image');
            $destination = base_path().'/public/blog/';
            $image_extension = $image->getClientOriginalExtension();
            $image_name = md5(date('now').time()).".".$image_extension;
            $original_path = $destination.$image_name;
            Image::make($image)->save($original_path);
            $thumb_path = base_path().'/public/blog/thumb/'.$image_name;
            Image::make($image)
            ->resize(300, 400)
            ->save($thumb_path);
        }
        $blog->image = $image_name;

        $save = $blog->save();
        if($save){
            return back()->with('message', 'Blog Successfully Added!');
        }else{
            return back()->with('error', 'Something went Wrong!');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function show($blog)
    {
        try {
            $id = decrypt($blog);
        }catch(DecryptException $e) {
            return redirect()->back();
        }
        $blog = Blog::where('id',$id)->first();
        return view('backend.blog.show', compact('blog'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $blog)
    {
        try {
            $id = decrypt($blog);
        }catch(DecryptException $e) {
            return redirect()->back();
        }
        $blog = Blog::where('id', $id)->first();
        return view('backend.blog.edit', compact('blog'));
    }


    public function statusBlog( $postId, $statusId){
        try {
            $id = decrypt($postId);
            $sId = decrypt($statusId);
        }catch(DecryptException $e) {
            return redirect()->back();
        }
        $post_update = DB::table('blogs')
            ->where('id', $id)
            ->update([
                'status' => $sId,
                'updated_at' => Carbon::now()->setTimezone('Asia/Kolkata')->toDateTimeString()
            ]);

            if($post_update){
                return redirect()->back()->with('message','Blog Updated Successfully');
            }else{
                 return redirect()->back()->with('error','Something Went Wrong Please Try Again');
            } 
    }

    public function blogUpdate(Request $request){
        $this->validate($request, [
            'title' => 'required',
            'description' =>  'required'
        ]);

        $blog = Blog::find($request->input('blog_id'));
        $blog->title = $request->input('title');
        $blog->description = $request->input('description');
        if($request->hasfile('image'))
        {   
            $this->validate($request, [
                'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);

            $image = $request->file('image');
            $destination = base_path().'/public/blog/';
            $image_extension = $image->getClientOriginalExtension();
            $image_name = md5(date('now').time()).".".$image_extension;
            $original_path = $destination.$image_name;
            Image::make($image)->save($original_path);
            $thumb_path = base_path().'/public/blog/thumb/'.$image_name;
            Image::make($image)
            ->resize(300, 400)
            ->save($thumb_path);

            // Check wheather image is in DB
            if($blog->image){
                // DELETE
                $image_path_thumb = "/public/blog/thumb/".$blog->image;  
                $image_path_original = "/public/blog/".$blog->image;  
                if(File::exists($image_path_thumb)) {
                    File::delete($image_path_thumb);
                }
                if(File::exists($image_path_original)){
                    File::delete($image_path_original);
                }

                //Update
                $image_update = DB::table('blogs')
                ->where('id', $request->input('blog_id'))
                ->update([
                    'image' => $image_name,
                    'updated_at' => Carbon::now()->setTimezone('Asia/Kolkata')->toDateTimeString()
                ]); 

                if($image_update){
                    return redirect()->back()->with('message','Blog Updated Successfully!');
                }else{
                    return redirect()->back()->with('error','Something Went Wrong Please Try Again');
                } 
            }else{
                $image_update = DB::table('blogs')
                ->where('id', $request->input('blog_id'))
                ->update([
                    'image' => $image_name,
                    'updated_at' => Carbon::now()->setTimezone('Asia/Kolkata')->toDateTimeString()
                ]);   
               if($image_update){
                       return redirect()->back()->with('message','Blog Updated Successfully!');
                   }else{
                       return redirect()->back()->with('error','Something Went Wrong Please Try Again');
                   } 
            }
        }
        $update = $blog->save();
        if($update){
            return back()->with('message', 'Blog Successfully Updated!');
        }else{
            return back()->with('error', 'Something went Wrong!');
        }
    }
}
