<?php

namespace App\Http\Controllers;

use App\Gallery;
use Illuminate\Http\Request;
use File;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $galleries=Gallery::orderBy('id','DESC')->get();
        return view('backend.gallery.index', compact('galleries'));
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
      $this->validate($request, [
     'name' => 'required',
     'photo' => 'required',
      ]);


      $path = 'Allphotos/photos';
   File::makeDirectory($path, 0777, true, true);

   $gallery = new Gallery;

   $gallery->name = $request->name;





   if($request->photo != null)
   {

       $imageName = time().'.'.$request->photo->getClientOriginalExtension();
       $request->photo->move($path, $imageName);
       $gallery->photo = $path.'/'.$imageName;
   }else
   {
       $gallery->photo = '-';
   }

// dd($request->category_id);
$gallery->save();
// dd($request->category_id);
$request->session()->flash('alert-success', ' Successfully Uploaded!');
return redirect()->action('GalleryController@index');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function show(Gallery $gallery)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $gallery=Gallery::findOrFail($id);
      $galleries=Gallery::orderBy('id','DESC')->get();
      return view('backend.gallery.edit', compact('galleries', 'gallery'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Gallery $gallery)
    {
      $this->validate($request, [
     'name' => 'required',
      ]);

 $gallery->update($request->all());
      $path = 'Allphotos/photos';
   File::makeDirectory($path, 0777, true, true);



   $gallery->name = $request->name;





   if($request->photo != null)
   {

       $imageName = time().'.'.$request->photo->getClientOriginalExtension();
       $request->photo->move($path, $imageName);
       $gallery->photo = $path.'/'.$imageName;
   }else
   {
       $gallery->photo = '-';
   }

// dd($request->category_id);
$gallery->save();
// dd($request->category_id);
$request->session()->flash('alert-success', ' Successfully Uploaded!');
return redirect()->action('GalleryController@index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function destroy(Gallery $gallery)
    {
        $gallery->delete();
        return redirect()->back();
    }
}
