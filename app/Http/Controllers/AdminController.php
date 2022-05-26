<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Doctor;
use App\Models\Appointment;
class AdminController extends Controller
{
    public function addview(){
        return view('admin.add_doctor');
}

public function show_appointments(){
    $appointments = Appointment::all();
    return view('admin.showappointments', compact('appointments',$appointments));
}
public function approved($id){
    $data = Appointment::find($id);
    $data->status = "approved";
    $data->save();
    return redirect()->back();

}
public function cancel($id){
    $data = Appointment::find($id);
    $data->status = "Cancelled";
    $data->save();
    return redirect()->back();

}
public function showdoctor(){
    $doctors = Doctor::all();
    return view('admin.showdoctor', compact('doctors',$doctors));
}
public function updatedoctor($id){
    $data = Doctor::find($id);
    return view('admin.updatedoctor',compact('data',$data));

}
public function deletedoctor($id){
    $data = Doctor::find($id);
    $data->delete();
    $data->save();
    return redirect()->back();

}
public function editdoctor(Request $request,$id){
    $doctor = Doctor::find($id);
    $this->validate($request, [
        'name' => 'required',
        'phone' => 'required',
        'speciality' => 'required',
        'room' => 'required'
    ]);
    $doctor->name = $request->name;
    $doctor->phone = $request->phone;
    $doctor->speciality = $request->speciality;
    $doctor->room = $request->room;

    if(request()->hasFile('file')){
    $image = $request->file('file');
    $imagename = time().'.'.$image->getClientOriginalExtension();
    $request->file->move('doctorimage',$imagename);
    $doctor->image = $imagename;
    }

    $doctor->save();
    return redirect()->back()->with('message','Doctor Details Updated Successfully');

}
public function adddoctor(){
    return view('admin.adddoctor');
}

public function datadoctor(Request $request){
    $doctor = new Doctor;
    $image = $request->file;
    $imagename = time() . '.' . $image->getClientOriginalExtension();
    $request->file->move('doctorimage',$imagename);
    $doctor->image = $imagename;
    $doctor->fname = $request->fname;
    $doctor->lname = $request->lname;
    $doctor->phone = $request->phone;
    $doctor->speciality = $request->speciality;
    $doctor->room = $request->room;
    $doctor->save();

    return redirect()->route('home')->with('message','Doctor Added Successfully');
}

}
