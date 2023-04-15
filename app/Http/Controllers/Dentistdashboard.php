<?php

namespace App\Http\Controllers;
use App\Models\AppointmentModel;
use App\Models\User;
use App\Models\PersonalInfoModel;
use App\Models\Treatments;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;


class Dentistdashboard extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = auth()->user();
        // $confirm = AppointmentModel::where('status', 2)->count();
        $dentist = User::where('user_type',2)->count();
        $patients = AppointmentModel::where('select_doctor',$user->id)->count();
        $data = Treatments::whereIn('treatment_id', [26, 29, 15, 7])->get();
        $appointments = AppointmentModel::with('treatment')->get();

        
        $appointment = AppointmentModel::where('select_doctor',$user->id)->whereIn('status',[1,2,3])->with('user')->get();
        $confirm = AppointmentModel::where('select_doctor',$user->id)->whereIn('status',[1,2,3])->with('user')->count();
        $treatment = Treatments::with('appointments')->get();
        
        $user = User::with('appointment')->get();
        return view('dentist/dashboard', ['treatments'=>$data], compact('appointment','user', 'treatment','appointments','patients','dentist','confirm'));
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
