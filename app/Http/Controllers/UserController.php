<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;
use Cookie;


class UserController extends Controller
{
    public function index()
    {
        $data = DB::table('tb_treatments')->whereIn('treatment_id', [6,15,27,29])->get();
        return view('landing/index', ['treatments'=>$data]);
    }
    public function login()
    {
        return view('landing/login');
    }
    public function register()
    {
        return view('landing/register');
    }
    public function register_action(Request $request)
    {
        $request->validate([
            'firstname' => 'required',
            'lastname' => 'required',
            'username' => 'required|unique:tb_user',
            'email' => 'required',
            'phone_number' => 'required',
            'registration_num' => '',
            'password' => 'required',
            'password_confirm' => 'required|same:password',
        ]);

        $user = new User([
            'firstname' => $request->firstname,
            'lastname' => $request->lastname,
            'username' => $request->username,
            'email' => $request->email,
            'phone_number' => $request->phone_number,
            'registration_num' => $request->registration_num,
            'password' => Hash::make($request->password),
        ]);
        $user->save();
        Alert::success('Registered Successfully','Please Login');

        return redirect()->route('login');
    }
    public function login_action(Request $request)
    {
        $input = $request->all();
        $valid = $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);
        if (Auth()->attempt(array('username' => $input['username'], 'password' => $input['password']))) {
            if(auth()->user()->user_type == '1'){
                if ($request->has('rememberme')){
                    Cookie::queue('usrnme',$request->username,1440);
                    Cookie::queue('psword',$request->password,1440);
                }
                return redirect('admin/dashboard');
            }elseif(auth()->user()->user_type == '2'){
                if ($request->has('rememberme')){
                    Cookie::queue('usrnme',$request->username,1440);
                    Cookie::queue('psword',$request->password,1440);
                }
                return redirect('dentist/dashboard');
            }else{
                if ($request->has('rememberme')){
                    Cookie::queue('usrnme',$request->username,1440);
                    Cookie::queue('psword',$request->password,1440);
                }
                return redirect()->intended('dental/home');
            }
           
        }
        return back()->withErrors([
            'password' => 'Wrong username or password',
        ]);
    }
    // public function dental()
    // {
    //     return view('userpage/homepage');
    // }
    
    public function password()
    {
        return view('landing/password');
    }

    public function password_action(Request $request)
    {
        $request->validate([
            'old_password' => 'required|current_password',
            'new_password' => 'required|confirmed',
        ]);
        $user = User::find(Auth::id());
        $user->password = Hash::make($request->new_password);
        $user->save();
        $request->session()->regenerate();
        return back()->with('success', 'Password changed!');
    }
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('login');
    }
}
