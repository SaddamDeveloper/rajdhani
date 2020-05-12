<?php

namespace App\Http\Controllers;

use App\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $events = Event::orderBy('id','DESC')->get();

     return view('backend.event.index', compact('events'));
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
     //  $this->validate($request, [
     // 'name' => 'required',
     //  ]);

      $this->validate($request,[
        'event_heading'=>'required',
        'event_date'=>'required',
        'event_month'=>'required',
        'event_year'=>'required',
        'event_description'=>'required',
        'event_time'=>'required',
        'event_location'=>'required',
      ]);
      $events = new Event;


       // $events->event_heading = $request->input('event_heading');

       $events->event_heading = $request->input('event_heading');
       $events->event_date = $request->input('event_date');
       $events->event_month = $request->input('event_month');
       $events->event_year = $request->input('event_year');
       $events->event_description = $request->input('event_description');
       $events->event_time = $request->input('event_time');
       $events->event_location = $request->input('event_location');
       $events->save();
// dd($request->category_id);
$request->session()->flash('alert-success', ' Successfully  Upload!');

       return redirect()->action('EventController@index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function show(Event $event)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $event = Event::findOrFail($id);
      $events = Event::orderBy('id','DESC')->get();


     return view('backend.event.edit', compact('event', 'events'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Event $event)
    {
      $event->Update($request->all());
    return redirect()->action('EventController@index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function destroy(Event $event)
    {
      $event->delete();
      return redirect()->back();
    }
}
