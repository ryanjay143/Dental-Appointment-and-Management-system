<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Treatments;
use App\Models\AppointmentModel;
use App\Models\PersonalInfoModel; 
use App\Models\DentistPro;
use App\Models\Tambal;
use App\Models\MedicalDrugs;
use App\Models\Medication;
use App\Models\Prescription;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\DB;
use DateTime;
use App\Models\Schedule;

class DentistController extends Controller
{
   
    public function list()
    {
        $user = User::where('user_type', 2)->get();
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
        $user = auth()->user();
        $firstname=$user->firstname;
        $medical = MedicalDrugs::where('doctorName',$user->firstname)->get();
        $tambal = MedicalDrugs::where('doctorName',$user->firstname)->get();
        $showTreatment = Prescription::where('DoctorName',$user->firstname)->get();
        $total = Prescription::where('DoctorName',$user->firstname)->sum('price');
        $treatment = Treatments::all();
        $treatments= DB::table('tb_treatments')->get();
        $dentist = DB::table('tb_user')->where('user_type', 2)->get();
        $appointment = AppointmentModel::find($id);
        $drugs = Medication::all();
        $date = new DateTime();
        return view('dentist/showApp',compact('dentist','treatment','treatments', 'showTreatment','total','drugs','tambal','medical'))->with('appointment',$appointment)->with('date',$date->format("Y-m-d"));
    }
   
    public function edit($id)
    {
       
        $dentist = User::find($id);
        return view('admin/dentistEdit',['dental'=> $dentist]);
    }

    public function schedule()
    {
        return view('dentist.schedule');
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
        $user=auth()->user();

        $tambal= new Tambal;
       
        $appointment = AppointmentModel::with('treatment')->find($id);
        $treatment = Treatments::with('appointments')->get();
        $appointment->update($request->only(['status']));
        $tambal->doctorName = $user->firstname;
        $tambal->patientName = $request->medicationName;
        $tambal->services = $request->service;
        // $tambal->price = $request->price;
        $tambal->remarks = $request->remarks;
        $tambal->total = $request->total;
        // $tambal->medication = $request->products;

        $tambal->save();
        DB::table('prescription_payments')->where('DoctorName',$user->firstname)->delete();
        DB::table('medical_drugs')->where('doctorName',$user->firstname)->delete();
        Alert::success('Saved Successfully');
        return redirect()->route('dentist.dashboard',compact('appointment','treatment'));
    }
   
    public function destroy($id)
    {
        User::destroy($id);
        return redirect()->route('dentist.list')->with('danger', 'Dentist Deleted successfully.');

    }
    public function addtreatment(Request $request, $id)
    {
        $user=auth()->user();
        $treatment = Treatments::find($id);

        $prescript = new Prescription;

        $prescript->DoctorName = $user->firstname;
        $prescript->PatientName = $request->patientName;
        $prescript->Service = $treatment->name;
        $prescript->price = $treatment->price;

        $prescript->save();
        return redirect()->back();
    }

    public function adddrugs(Request $request, $id)
    {
        $user=auth()->user();
        $drug = Medication::find($id);

        $medication = new MedicalDrugs;
        $medication->doctorName = $user->firstname;
        $medication->PatientName = $request->patientName;
        $medication->products =$drug->name;
        $medication->description =$drug->desc;
        $medication->quantity = $request->quantity;

        $medication->save();
      
        return redirect()->back();
    }

    public function myPatient($id)
    {
        $pinfo =  AppointmentModel::with('user')->find($id);
        $app =  AppointmentModel::with('treatment')->get();
        $user = User::with('pinfo')->get();
        return view('dentist/viewPatient',compact('user','app'))->with('pinfo',$pinfo);
    }
    public function deleteService($id)
    {
        $data=Prescription::find($id);
        $data->delete();
        Alert::success('Deleted Successfully');
        return redirect()->back();
    }

    public function deleteMedical($id) 
    {
        $data = MedicalDrugs::find($id);
        $data->delete();
        Alert::success('Deleted Successfully');
        return redirect()->back();
    }
    
    public function print()
    {
        $date = new DateTime();
       
        return view ('dentist/printPrescription')->with('date',$date->format("m-d-Y"));
    }

    public function calendar()
    {
        $events = [];
        $dentist = Auth::user();
        $schedules = Schedule::where('doctor_id', $dentist->id)->get();
    
        foreach ($schedules as $schedule) {
            $events[] = [
                'title' => 'Unavailable Schedule',
                'start' => $schedule->start_date . 'T' . $schedule->start_time,
                'end' => $schedule->end_date . 'T' . $schedule->end_time,
            ];
        }
    
        return view('dentist.calendar', compact('events'));
    }
    

    public function dentist_schedule(Request $request)
    {
       
        $schedule = new Schedule();
        $schedule->doctor_id = $request->doctor_id;
        $schedule->start_date =$request->start_date;
        $schedule->start_time = $request->start_time;
        $schedule->end_date = $request->end_date;
        $schedule->end_time = $request->end_time;
        $schedule->unavailability = $request->has('unavailability');
        $schedule->save();

        Alert::success('Schedule created successfully.');


       

        return view('dentist.schedule');
    }

    public function paymentInfo()
    {
        $user=auth()->user();
        $unpaid = Tambal::where('doctorName',$user->firstname)->where('status',0)->get();
        $paid = Tambal::where('doctorName',$user->firstname)->where('status',1)->get();
        return view('dentist.paymentInfo',compact('unpaid','paid'));
    }

    public function dentalReports()
    {
        $user=auth()->user();
        $paid = Tambal::where('doctorName',$user->firstname)->where('status',1)->get();
        $totalEarnings = Tambal::where('doctorName',$user->firstname)->where('status',1)->sum('total');
        return view('dentist.reports',compact('paid','totalEarnings'));
    }
}
