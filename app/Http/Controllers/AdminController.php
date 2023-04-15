<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Treatments;
use App\Models\AppointmentModel;
use App\Models\PersonalInfoModel;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Cookie;
use RealRashid\SweetAlert\Facades\Alert;

class AdminController extends Controller
{
    public function dashboard()
    {
        $dentistpro = User::where('user_type',2)->get();
        $patients = PersonalInfoModel::count();
        $dentist = User::where('user_type',2)->count();
        $pending = AppointmentModel::where('status',0)->count();
        $appointments = AppointmentModel::with('treatment')->get();
        $treatment = Treatments::with('appointments')->get();
        $appointment = AppointmentModel::whereIn('status', [1,2,3])->with('user')->get();
        $user = User::with('appointment')->get();
        return view('admin/dashboard',['dentistpro'=>$dentistpro], compact('appointment','user', 'treatment','appointments','patients','dentist','pending'));
    } 
    public function appointments()
    {
        return view('admin/appointment');
    }
    public function profile()
    {
        $id = Auth::user()->id;
        $adminData = User::find($id);
        return view('admin/profile',compact('adminData'));
    }
    public function dentalpatients()
    {
        $Pinfo= PersonalInfoModel::all();
        return view('dentist/patient',['pinfo'=>$Pinfo]);
    }
   public function editProfile() 
   {
        $id = Auth::user()->id;
        $editData = User::find($id);
        return view('admin/profileEdit',compact('editData'));
   }
   
   public function adminUpdateProfile(Request $request) 
   {
        $id = Auth::user()->id;
        $data = User::find($id);
        $data->firstname = $request->firstname;
        $data->lastname = $request->lastname;
        $data->username = $request->username;
        $data->email = $request->email;
        $data->phone_number = $request->phone_number;

        if($request->file('photo')) {
            $file = $request->file('photo');
            $filename = date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('upload/admin_profile'),$filename);
            $data['photo'] = $filename;
        }
        $data->save();
        Alert::success('AdminUser Updated Successfully');
        return redirect()->route('admin.profile');
   }
   public function showApp($id)
   {
    $dentist = DB::table('tb_user')->where('user_type', 2)->get();
    $appointment = AppointmentModel::find($id);
    return view('admin/showApp',compact('dentist'))->with('appointment',$appointment);
   }
   public function update(Request $request, $id) 
   {
    $appointment = AppointmentModel::find($id);
    $input = $request->all();
    $appointment->update($input);
    Alert::success('Saved Successfully');
    return redirect()->route('admin.dashboard');
   }
}
