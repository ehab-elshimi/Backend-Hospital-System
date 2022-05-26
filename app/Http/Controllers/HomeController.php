<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Doctor;
use App\Models\Appointment;
use Illuminate\Support\Facades\Auth;
class HomeController extends Controller
{                
    public function redirect(){
        $doctor = Doctor::all();
        if(Auth::id()){
            if(Auth::user()->usertype=='1'){
                return view('admin.home');
            }
            else
            {
                $doctors = Doctor::all();
                return view('user.home',compact('doctors',$doctors));
            }
        }
        else
        {
            return redirect()->back();
        }
    }
    public function index(){

        if(Auth::id())
        {
            return redirect('home');
        }
        else
        {
        $doctors = Doctor::all();
        return view('user.home',compact('doctors',$doctors));
        }
    }
    public function appointment(Request $request){
        $data = new Appointment;
        $data->name = $request->name;
        $data->email = $request->email;
        $data->date = $request->date;
        $data->phone = $request->phone;
        $data->doctor = $request->doctor;        
        $data->message = $request->message;
        $data->status = "In progress";
        if(Auth::id()){
        $data->user_id = Auth::user()->id;
        }
        $data->save();
        return redirect()->back()->with('message','Appointment Request Successful . we will contact with you soon!');
    }
    public function myAppointment()
    {
            if(Auth::id()){
                $userid = Auth::user()->id;
                $appointment = Appointment::where('user_id',$userid)->get();
                return view('user.my_appointment',compact('appointment',$appointment));
            }
            else
            {
                return redirect()->back();
            }

        // return view('user.my_appointment');
    }

    public function cancel_appointment($id){
        $data = Appointment::findOrFail($id);
        $data->delete();
        return redirect()->back();
    }
}
 