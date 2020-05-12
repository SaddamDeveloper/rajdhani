<?php

namespace App\Http\Controllers;

use App\News;
use Illuminate\Http\Request;
use File;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $news = News::orderBy('id','DESC')->get();

     return view('backend.news.index', compact('news'));
   }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

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
           'heading' => 'required',
           'details' => 'required',
           'date' => 'required',
           'photo' => 'required',
            ]);


            $path = 'Allphotos/photos';
         File::makeDirectory($path, 0777, true, true);

         $news = new News;

         $news->heading = $request->heading;
         $news->details = $request->details;
         $news->date = $request->date;
         $news->photo = $request->photo;


         if($request->photo != null)
         {

             $imageName = time().'.'.$request->photo->getClientOriginalExtension();
             $request->photo->move($path, $imageName);
             $news->photo = $path.'/'.$imageName;
         }else
         {
             $news->photo = '-';
         }


      // dd($request->category_id);
      $news->save();
       // dd($request->$news);
      $request->session()->flash('alert-success', 'News Successfully Uploaded!');

         return redirect()->action('NewsController@index');

          }
    /**
     * Display the specified resource.
     *
     * @param  \App\News  $news
     * @return \Illuminate\Http\Response
     */
    public function show(News $news)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\News  $news
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $news = News::findOrFail($id);
      $news = News::orderBy('id','DESC')->get();

     return view('backend.news.edit', compact('news'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\News  $news
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, News $news)
    {

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\News  $news
     * @return \Illuminate\Http\Response
     */
    public function destroy(News $news)
    {
        $news->delete();
        return redirect()->back();
    }
}
