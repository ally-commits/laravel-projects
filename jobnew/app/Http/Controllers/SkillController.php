<?php

namespace App\Http\Controllers;
use Session;
use App\Skill;
use Illuminate\Http\Request;

class SkillController extends Controller
{
    public function index(){
        return view('admin.skills.index')
            ->with('skills',Skill::orderBy('created_at','desc')->paginate(6));
    }
    public function store(Request $request){
        $this->validate($request,[
            'skill'=>'required|unique:skills'
        ]) ;
        Skill::create($request->all());
        Session::flash('success','Skill addedd successfully');
        return redirect()->back();
    }
}
