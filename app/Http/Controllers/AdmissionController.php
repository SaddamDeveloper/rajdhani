<?php

namespace App\Http\Controllers;

use App\Admission;
use Illuminate\Http\Request;
use File;

class AdmissionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $admissions = Admission::orderBy('id', 'DESC')->paginate(5);
      return view('backend.admission.index',  compact('admissions'));
    }



    public function admission(Request $request)
    {
      $this->validate($request, [
     'name' => 'required|max:120',
     'class' => 'required',
     'g_name' => 'required|max:120',
     'phone' => 'required|min:10|numeric',
      'email'=>'required|email|unique:users,email',
     'location' => 'required|max:150',
     'photo' => 'required|mimes:pdf|max:10000',
      ]);


      $path = 'Allphotos/application_form';
   File::makeDirectory($path, 0777, true, true);

   $admission = new Admission;

   $admission->name = $request->name;
   $admission->class = $request->class;
   $admission->g_name = $request->g_name;
   $admission->phone = $request->phone;
   $admission->email = $request->email;
   $admission->location = $request->location;



   if($request->photo != null)
   {

       $imageName = time().'.'.$request->photo->getClientOriginalExtension();
       $request->photo->move($path, $imageName);
       $admission->photo = $path.'/'.$imageName;
   }else
   {
       $admission->photo = '-';
   }

// dd($request->category_id);
$admission->save();
// dd($request->category_id);
$request->session()->flash('alert-success', ' Application Successfully send! Thank you!');
return redirect('/');
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Admission  $admission
     * @return \Illuminate\Http\Response
     */
    public function show(Admission $admission)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Admission  $admission
     * @return \Illuminate\Http\Response
     */
    public function edit(Admission $admission)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Admission  $admission
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Admission $admission)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Admission  $admission
     * @return \Illuminate\Http\Response
     */
    public function destroy(Admission $admission)
    {
        $admission->delete();
        return redirect()->back();
    }
}
