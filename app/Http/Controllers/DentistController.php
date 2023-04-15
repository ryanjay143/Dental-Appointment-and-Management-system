<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\AppointmentModel;
use App\Models\DentistPro;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\DB;

class DentistController extends Controller
{
   
    public function list()
    {
      
        $user = User::with('dentistpro')->where('user_type', 2)->get();
        return view('admin/dentistList', compact('user'));
    }

   
    public function account()
    {
        $user = User::where('user_type', 2)->get();
        return view('admin/account',['account'=>$user]);
    }

   
    public function registered(Request $request)
    {
        // $requestData = $request->all();
        // $fileName = time().$request->file('photo')->getClientOriginalName();
        // $path = $request->file('photo')->storeAs('images', $fileName, 'public');
        // $requestData["photo"] = '/storage/'.$path;
        // User::create($requestData); 
        // return redirect()->route('create.account')->with('success', 'Dentist Registration successfully.');

        $request->validate([
            'firstname' => 'required',
            'lastname' => 'required',
            'username' => 'required|unique:tb_user',
            'email' => 'required',
            'phone_number' => 'required',
            'user_type' => '',
            'dentist_pro' => 'required',
            'password' => 'required',
            'password_confirm' => 'required|same:password',
        ]);

        $user = new User([
            'firstname' => $request->firstname,
            'lastname' => $request->lastname,
            'username' => $request->username,
            'email' => $request->email,
            'user_type' => $request->user_type,
            'dentist_pro' => $request->dentist_pro,
            'phone_number' => $request->phone_number,
            'password' => Hash::make($request->password),
        ]);

        $user->save();
        Alert::success('Dentist Registration Successfully');
        return redirect()->route('create.account');
    }

   
    public function show($id)
    {
        $dentist = User::find($id);
        return view('admin/dentistView')->with('dental', $dentist);
    }

    public function showPatient($id)
    {
        $dentist = DB::table('tb_user')->where('user_type', 2)->get();
        $appointment = AppointmentModel::find($id);
        return view('dentist/showApp',compact('dentist'))->with('appointment',$appointment);
    }
   
    public function edit($id)
    {
       
        $dentist = User::find($id);
        return view('admin/dentistEdit',['dental'=> $dentist]);
    }

   
    public function update(Request $request, $id)
    {
        $dentist = User::find($id);
        $input = $request->all();
        $dentist->update($input);
        Alert::success('Dentist Updated successfully');
        return redirect()->route('dentist.list');
    }

    public function updateStatus(Request $request, $id) 
    {
        $appointment = AppointmentModel::find($id);
        $input = $request->all();
        $appointment->update($input);
        Alert::success('Saved Successfully');
        return redirect()->route('dentist.dashboard');
    }
   
    public function destroy($id)
    {
        User::destroy($id);
        return redirect()->route('dentist.list')->with('danger', 'Dentist Deleted successfully.');

    }
}
