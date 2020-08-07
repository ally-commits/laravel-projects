<?php

namespace App\Http\Controllers;
use App\Degree;
use App\Pg;
use App\Pu;
use App\Sslc;
use App\User;
use Session;
use App\State;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function index(){
        $states = State::pluck('state','id');
        return view('admin.users.profile')
            ->with('user',Auth::user())
            ->with('states',$states);
    }
    public function update(Request $request){
        $this->validate($request,[
            'name'=>'required',
            'email'=>'required|email',
            'state_id'=>'required',
            'city'=>'required',
            'address'=>'required',
            'dob'=>'required|date',
            'profile_image'=>'max:50'
        ]);

        $user = Auth::user();
        if($file = $request->file('profile_image')){
            $profile_image = time().$file->getClientOriginalName();
            $file->move('uploads/profiles/',$profile_image);
            $user->profile->profile_image = 'uploads/profiles/'.$profile_image;
        }
        $user->name = $request->name;
        $user->email = $request->email;
        $user->profile->facebook = $request->facebook;
        $user->profile->linkdin = $request->linkdin;
        $user->profile->instagram = $request->instagram;
        $user->profile->dob = $request->dob;
        $user->profile->address = $request->address;
        $user->profile->city = $request->city;
        if($request->has('password')){
            $user->password = bcrypt($request->password);
        }
        $user->save();
        $user->profile->save();
        Session::flash('success','Account updated successfully');
        return redirect()->back();
    }
    public function education(){
        return view('admin.users.education.index');
    }

//    sslc

    public function view($id){
        $user = User::findOrFail($id);
        return view('admin.users.view')->with('user',$user);
    }

    public function addsslc(Request $request){
        $this->validate($request,[
            'college_name'=>'required',
            'year'=>'numeric|required|between:2000,2025',
            'percentage'=>'numeric|required|between:10,100'
        ]);
        $inputs = $request->all();
        $inputs['profile_id'] = Auth::user()->profile->id;
        Sslc::create($inputs);
        Session::flash('success','SSLC Details added successfully');
        return redirect()->back();
    }
    public function updatesslc(Request $request){
        $this->validate($request,[
            'college_name'=>'required',
            'year'=>'numeric|required|between:2000,2025',
            'percentage'=>'numeric|required|between:10,100'
        ]);
        $user = Auth::user();
        $user->profile->sslcdata->college_name = $request->college_name;
        $user->profile->sslcdata->year = $request->year;
        $user->profile->sslcdata->percentage = $request->percentage;
        $user->profile->sslcdata->save();
        Session::flash('success','SSLC details successfully');
        return redirect()->back();
    }

//    pu


    public function addpu(Request $request){
        $this->validate($request,[
            'college_name'=>'required',
            'year'=>'numeric|required|between:2000,2025',
            'percentage'=>'numeric|required|between:10,100'
        ]);
        $inputs = $request->all();
        $inputs['profile_id'] = Auth::user()->profile->id;
        Pu::create($inputs);
        Session::flash('success','PU Details added successfully');
        return redirect()->back();
    }
    public function updatepu(Request $request){
        $this->validate($request,[
            'college_name'=>'required',
            'year'=>'numeric|required|between:2000,2025',
            'percentage'=>'numeric|required|between:10,100'
        ]);
        $user = Auth::user();
        $user->profile->pudata->college_name = $request->college_name;
        $user->profile->pudata->year = $request->year;
        $user->profile->pudata->percentage = $request->percentage;
        $user->profile->pudata->save();
        Session::flash('success','PU details successfully');
        return redirect()->back();
    }

//    degree

    public function adddegree(Request $request){
        $this->validate($request,[
            'college_name'=>'required',
            'year'=>'numeric|required|between:2000,2025',
            'percentage'=>'numeric|required|between:10,100'
        ]);
        $inputs = $request->all();
        $inputs['profile_id'] = Auth::user()->profile->id;
        Degree::create($inputs);
        Session::flash('success','DEGREE Details added successfully');
        return redirect()->back();
    }
    public function updatedegree(Request $request){
        $this->validate($request,[
            'college_name'=>'required',
            'year'=>'numeric|required|between:2000,2025',
            'percentage'=>'numeric|required|between:10,100'
        ]);
        $user = Auth::user();
        $user->profile->degreedata->college_name = $request->college_name;
        $user->profile->degreedata->year = $request->year;
        $user->profile->degreedata->percentage = $request->percentage;
        $user->profile->degreedata->save();
        Session::flash('success','DEGREE details successfully');
        return redirect()->back();
    }

//    pg

    public function addpg(Request $request){
        $this->validate($request,[
            'college_name'=>'required',
            'year'=>'numeric|required|between:2000,2025',
            'percentage'=>'numeric|required|between:10,100'
        ]);
        $inputs = $request->all();
        $inputs['profile_id'] = Auth::user()->profile->id;
        Pg::create($inputs);
        Session::flash('success','PG Details added successfully');
        return redirect()->back();
    }
    public function updatepg(Request $request){
        $this->validate($request,[
            'college_name'=>'required',
            'year'=>'numeric|required|between:2000,2025',
            'percentage'=>'numeric|required|between:10,100'
        ]);
        $user = Auth::user();
        $user->profile->pgdata->college_name = $request->college_name;
        $user->profile->pgdata->year = $request->year;
        $user->profile->pgdata->percentage = $request->percentage;
        $user->profile->pgdata->save();
        Session::flash('success','PG details successfully');
        return redirect()->back();
    }

}
