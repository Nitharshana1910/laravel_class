<?php

namespace App\Http\Controllers;
use App\Models\Phone;

use Illuminate\Http\Request;

class PhoneController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $phones = Phone::all();
        return view('phone.index',['phones'=> $phones]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('phone.create');

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
        $phone = new Phone();

        $phone->phone_no = $request->phone_no;
  
        $phone->save();
        return redirect()->route('phones.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $phone = Phone::find($id);
        return view('phone.show',compact('phone'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $phone = Phone::find($id);
        //return the view and pass in to the var we perviously created
        return view('phone.edit',['phone'=> $phone]);
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
        //
        $phone = Phone::find($id);
       $phone->phone_no = $request->input('phone_no');

       $phone->save();
       return redirect()->route('phones.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $phone = Phone::find($id);

        $phone->delete();

        return redirect()->route('phones.index');
    }
}
