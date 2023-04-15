<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Treatments;
use App\Models\User;
use App\Models\Cart;
use App\Models\AppointmentModel;
use App\Models\PersonalInfoModel;
use App\Models\Category;
use App\Models\Products;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;


class UserpageController extends Controller
{
    public function dental()
    {
        $user = auth()->user();
        $cart = cart::where('firstname',$user->firstname)->count();
        $countApp = AppointmentModel::where('user_id',$user->id)->count();
        $data = DB::table('tb_treatments')
        ->whereIn('treatment_id', [6,15,27,29])->get();
        return view('userpage/homepage',compact('countApp','cart'), ['treatments'=>$data]);
    }
    
    public function profile()
    {
        $user = auth()->user();
        $cart = cart::where('firstname',$user->firstname)->count();
        $id = Auth::user()->id;
        $patientData = User::find($id);
        return view('userpage/profile',compact('patientData','cart'));
    }
    public function editProfile()
    {
        $user = auth()->user();
        $cart = cart::where('firstname',$user->firstname)->count();
        $id = Auth::user()->id;
        $patientEdit = User::find($id);
        return view('userpage/updateProfile',compact('patientEdit','cart'));
    }
    public function updateProfile(Request $request)
    {
        $id = Auth::user()->id;
        $patient = User::find($id);
        $patient->firstname = $request->firstname;
        $patient->lastname = $request->lastname;
        $patient->username = $request->username;
        $patient->email = $request->email;
        $patient->phone_number = $request->phone_number;

        if ($request->file('photo')) {
            $file = $request->file('photo');
            $filename = date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('upload/patient_profile'),$filename);
            $patient['photo'] = $filename;
        }
        $patient->save();
        Alert::success('Update Profile Success');
        return redirect()->route('profile');
    }
    
    public function about()
    {
        $data = DB::table('tb_treatments')
        ->whereIn('treatment_id', [6,15,27,29])->get();
        return view('landing/about', ['treatments'=>$data]);
    }
    public function services()
    {
        $treatments = DB::table('tb_treatments')->orderBy('treatment_id', 'asc')->paginate(8);
        return view('landing/service',compact('treatments'));
        
    }
    public function contact()
    {
        return view('landing/contact');
    }
    public function appointment()
    {
        return view('landing/appointment');
    }
    public function patienceInformation()
    {
        return view('landing/pInformation');
    }
    public function pInfo(Request $info) 
    {
        if(Auth::id())
        {
            $info->validate([
                'Personal_information' => 'unique:tb_p_info',
                'month' => 'required',
                'day' => 'required',
                'year' => 'required',
                'location' => 'required',
                'state' => 'required',
                'zip_code' => 'required',
                'status' => 'required',
                'gender' => 'required',
                'E_firstname' => 'required',
                'E_lastname' => 'required',
                'relationship' => 'required',
                'E_contact_num' => 'required',
                'weight' => 'required',
                'height' => 'required',
            ]);
    
            $p_info = new PersonalInfoModel([
                'Personal_information' => Auth::user()->id,
                'month' => $info->month,
                'day' => $info->day,
                'year' => $info->year,
                'location' => $info->location,
                'state' => $info->state,
                'zip_code' => $info->zip_code,
                'status' => $info->status,
                'gender' => $info->gender,
                'E_firstname' => $info->E_firstname,
                'E_lastname' => $info->E_lastname,
                'relationship' => $info->relationship,
                'E_contact_num' => $info->E_contact_num,
                'weight' => $info->weight,
                'height' => $info->height,
            ]);
    
            $p_info->save();
            Alert::success('Personal Information Success');
            return redirect()->route('home');
        }
        else 
        {
            return redirect()->route('login');
        }
       
    }
    public function products()
    {
        $products = Products::with('category')->orderBy('id','asc')->paginate(8);
        $categories = Category::with('products')->get();
        return view('landing/products',compact('products', 'categories'));
    }
    public function viewProduct($id)
    {
        $category = Category::with('products')->get();
        $products = Products::with('category')->get()->find($id);
        return view('landing/viewProduct', compact('products'))->with('category',$category);
    }
    public function dentalServices()
    {
        $user = auth()->user();
        $cart = cart::where('firstname',$user->firstname)->count();
        $treatments = DB::table('tb_treatments')->orderBy('treatment_id', 'asc')->paginate(4);
        return view('userpage/userService',compact('treatments','cart'));
    }
    public function dentalAbout()
    {
        $user = auth()->user();
        $cart = cart::where('firstname',$user->firstname)->count();
        $data = DB::table('tb_treatments')
        ->whereIn('treatment_id', [6,15,27,29])->get();
        return view('userpage/userAbout',compact('cart'), ['treatments'=>$data]);
    }
    public function dentalContact()
    {
        $user = auth()->user();
        $cart = cart::where('firstname',$user->firstname)->count();
        return view('userpage/userContact',compact('cart'));
    }
    public function pInformation()
    {
        if(Auth::id())
        {
            $user = auth()->user();
            $cart = cart::where('firstname',$user->firstname)->count();
            return view('userpage/userInfo',compact('cart'));
        }
        else 
        {
            return redirect()->route('login');
        }
       
    }
    public function setAppointment(Request $app)
    {
        $app->validate([
            
            'date' => 'required',
            'time' => 'required',
            'treatment_id' => 'required',
            'message' => '',

        ]);
        
        $appointment = new AppointmentModel([
            'user_id' => Auth::user()->id,
            'treatment_id' => $app->treatment_id,
            'date' => $app->date,
            'time' => $app->time,
            'message' => $app->message,
         
        ]);
        $appointment->save();
        Alert::success('Appointment Success');
        return redirect()->route('appointmentTable');
    }
    public function dentalApp()
    {
        if(Auth::id())
        {
            $user = auth()->user();
            $cart = cart::where('firstname',$user->firstname)->count();
            $treatments= DB::table('tb_treatments')->get();
            return view('userpage/userApp',compact('treatments','cart'));
        }
        else
        {
            return redirect()->route('login');
        }
       
    }
    
    public function dentalProduct()
    {
        $user = auth()->user();
        $cart = cart::where('firstname',$user->firstname)->count();
        $products = Products::with('category')->orderBy('id','asc')->paginate(8);
        $categories = Category::with('products')->get();
        return view('userpage/userProducts',compact('products', 'categories','cart'));
    }

    public function showProduct($id)
    {
        $user = auth()->user();
        $cart = cart::where('firstname',$user->firstname)->count();
        $category = Category::with('products')->get();
        $products = Products::with('category')->get()->find($id);
        return view('userpage/viewProduct', compact('products','cart'))->with('category',$category);
    }

    public function viewCategory1()
    {
        return view('landing/viewCategory');
    }
    public function dentist()
    {
        $dentists = DB::table('tb_user')->where('user_type', 2)->get();
        return view('landing/dentist',['dentists'=>$dentists]);
    }
    public function userdentist() 
    {
        $user = auth()->user();
        $cart = cart::where('firstname',$user->firstname)->count();
        $dentists = DB::table('tb_user')->where('user_type', 2)->get();
        return view('userpage/userDentist',compact('cart'),['dentists'=>$dentists]);
    }
    public function appointmentTable()
    {
        $user = auth()->user();
        $cart = cart::where('firstname',$user->firstname)->count();
        $appointment = AppointmentModel::with('user')->whereIn('status',[0,1,2])->where('user_id',$user->id)->get();
        $treatment = Treatments::with('appointments')->get();
        return view('userpage/appointmentTable',compact('appointment','treatment','cart'));
    }

    public function done()
    {
        $user = auth()->user();
        $cart = cart::where('firstname',$user->firstname)->count();
        $appointment = AppointmentModel::with('user')->where('status', 3)->where('user_id',$user->id)->get();
        $treatment = Treatments::with('appointments')->get();
        return view('userpage/doneAppointment',compact('appointment','treatment','cart'));
    }

    public function showcart()
    {
        if(Auth::id())
        {
            $user = auth()->user();
            $viewCart=cart::where('firstname',$user->firstname)->get();
            $cart = cart::where('firstname',$user->firstname)->count();
            return view('userpage/viewCart',compact('cart','viewCart'));
        }
        else 
        {
            return redirect()->route('login');
        }
        
    }

    public function deleteCart($id)
    {
        $data=cart::find($id);
        $data->delete();
        Alert::success('Delete Cart Successfully');
        return redirect()->back();
    }
    
}
