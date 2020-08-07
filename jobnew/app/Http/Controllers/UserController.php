<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Mail;
use Session;
use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        return view('admin.users.index')
            ->with('users',User::orderBy('created_at','desc')->paginate(5));
    }
    public function destroy($id){
        User::findOrFail($id)->delete();
        Session::flash('success','User deleted successfully');
        return redirect()->back();
    }
    public function message(Request $request){
        $to_name = 'GS GROUP ADMIN';
        $to_email = 'theinfinity.in@gmail.com';
        $name = $request->name;
        $mobile = $request->mobile;
        $body = $request->message;
        $data = array('name'=>$name, "body" => $body,"mobile"=>$mobile);

        Mail::send('emails.new', $data, function($message) use ($to_name, $to_email) {
            $message->to($to_email, $to_name)
                ->subject('New Enquiry');
            $message->from('mousufca@gmail.com','MOUSUF C A');
        });
    }
}
