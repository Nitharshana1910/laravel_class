<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Staff;
// use Illuminate\Support\Facades\Validator;
// use DateTime;


class StaffController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $staffs = Staff::all();
        return view('staff.index',['staffs'=> $staffs]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('staff.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //create new staff object
        $staff = new Staff();

        $validated = $request->validate([
            'dob' => 'required|date|before:-18 years',
        ]);

            $staff->first_name = $request->first_name;
            $staff->last_name = $request->last_name;
            $staff->gender = $request->gender;
            $staff->grade = $request->grade;
            $staff->address = $request->address;
            $subject=json_encode($request['subject']);
            $staff->subject = $subject;
            $staff->email_address = $request->email_address;
            $staff->mobile_no = $request->mobile_no;
            $staff->dob = $request->dob;
    
            if($image = $request->file('photo')){
            $imageDestinationPath = 'uploads/';
                $postImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
                $image->move($imageDestinationPath, $postImage);
                $staff['photo'] = "$postImage";
            }else{
                $staff['photo'] = "user.jpg";
            }
    
            $staff->save();
            return redirect()->route('staffs.index');
       

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
        $staff = Staff::find($id);
    
        return view('staff.show',compact('staff'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $staff = Staff::find($id);
         //return the view and pass in to the var we perviously created
         return view('staff.edit',['staff'=> $staff]);
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

        $staff = Staff::find($id);

        $staff->first_name = $request->input('first_name');
        $staff->last_name = $request->input('last_name');
        $staff->gender = $request->input('gender');
        $staff->grade = $request->input('grade');
        $staff->address = $request->input('address');
        $subject=json_encode($request->input('subject'));
        $staff->subject = $subject;
        $staff->email_address = $request->input('email_address');
        $staff->mobile_no = $request->input('mobile_no');
        $staff->dob = $request->input('dob');

        
        if ($image = $request->file('photo')){;
            $imageDestinationPath = 'uploads/';
            $postImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($imageDestinationPath, $postImage);
            $staff['photo'] = "$postImage";
        }else{
            unset($staff['photo']);
        }

        $staff->update();
        return redirect()->route('staffs.index');
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
        $staff = Staff::find($id);

        $staff->delete();

        return redirect()->route('staffs.index');
    }
}
