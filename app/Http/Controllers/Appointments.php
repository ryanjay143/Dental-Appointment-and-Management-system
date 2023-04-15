<?php

namespace App\Http\Controllers;
use App\Models\AppointmentModel;
use App\Models\User;
use App\Models\Treatments;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\DB;

class Appointments extends Controller
{
   
    public function index()
    {
        $appointments = AppointmentModel::with('treatment')->get();
        $treatment = Treatments::with('appointments')->get();
        $appointment = AppointmentModel::where('status', 0)->with('user')->get();
        $user = User::with('appointment')->get();
        return view('admin/appointment', compact('appointment','user', 'treatment','appointments'));
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
    
    public function show($id)
    {
       $dentist = DB::table('tb_user')->where('user_type', 2)->get();
       $appointment = AppointmentModel::find($id);
       return view('admin/viewApp',compact('dentist'))->with('appointment',$appointment);
    }

    
    public function edit($id)
    {
        //
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
        $appointment = AppointmentModel::find($id);
        $input = $request->all();
        $appointment->update($input);
        Alert::success('Saved Successfully');
        return redirect()->route('appointment');
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
    }
}
