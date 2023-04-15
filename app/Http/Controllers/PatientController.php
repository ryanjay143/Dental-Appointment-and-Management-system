<?php

namespace App\Http\Controllers;
use App\Models\PersonalInfoModel;
use App\Models\User;
use App\Models\AppointmentModel;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class PatientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pinfo = PersonalInfoModel::with('user')->get();
        $user = User::with('pinfo')->get();
        return view('admin/patient',compact('pinfo', 'user'));
    }

    public function user()
    {
        $user = User::whereIn('user_type',[0,2])->get();
        return view('admin/users',['users'=>$user]);
    }

    public function viewUser($id)
    {
        $users = User::find($id);
        return view('admin/viewUsers')->with('users',$users);
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
        
        $pinfo = PersonalInfoModel::with('user')->get()->find($id);
        $user = User::with('pinfo')->get();
        return view('admin/viewPatient',compact('user'))->with('pinfo',$pinfo);
    
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
        AppointmentModel::destroy($id);
        Alert::success('Deleted Successfully');
        return redirect()->back();
    }
}
