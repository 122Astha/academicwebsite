<?php

namespace App\Http\Controllers;

use App\Models\Siteinformation;
use Illuminate\Http\Request;

class SiteinformationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $siteinformation=Siteinformation::paginate(8);
       return view('admin.siteinformation.index',compact('siteinformation'));
   }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('admin.siteinformation.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $request->validate(([
            'site_key'=>'required',
            'site_details'=>'required',
            'status'=>'required',

        ]));

        $siteinformation=new siteinformation([
            'site_key'=>$request->get('site_key'),
            'site_details'=>$request->get('site_details'),
            'status'=>$request->get('status'),
        ]);
        $siteinformation->save();
        return redirect()->route('siteinformation.index')->with('success','siteinformation added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Siteinformation  $siteinformation
     * @return \Illuminate\Http\Response
     */
    public function show(siteinformation $siteinformation)
    {
          return view('admin.siteinformation.show',compact('siteinformation'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Siteinformation  $siteinformation
     * @return \Illuminate\Http\Response
     */
    public function edit(siteinformation $siteinformation)
    {
         return view('admin.siteinformation.edit',compact('siteinformation'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Siteinformation  $siteinformation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, siteinformation $siteinformation)
    {
        $request->validate([
              'site_key'=>'required',
               'site_details'=>'required',
                  'status'=>'required',

        ]);
        $siteinformation->update($request->all());
        return redirect()->route('siteinformation.index')->with('update','siteinformation updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Siteinformation  $siteinformation
     * @return \Illuminate\Http\Response
     */
    public function destroy(siteinformation $siteinformation)
    {
         $siteinformation->delete();
        return redirect('siteinformation')->with('delete', 'Deleted successfully');
    }

}
