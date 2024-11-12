<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use Illuminate\Http\Request;
use App\Models\Doctor;
use Notification;
use App\Notifications\MyfirstNotification;

class AdminController extends Controller
{
    public function addview(){
        return view('admin.add_doctor') ;
    }

    public function sendemail(Request $request,$id){
        $doctor = Appointment::find($id);
        $details = [
            'greeting'=> $request->greeting,
            'body'=>$request->body,
            'actiontxt'=>$request->actiontext,
            'actionurl'=>$request->actionurl,
            'endpart'=>$request->endpart


        ];

        Notification::send($doctor, new MyfirstNotification($details));
        return redirect()->back()->with('message','Email sent successfully');
    }

    public function snd_mail(Request $request,$id){
        $doctor = Appointment::find($id);
        return view('admin.snd_mail',compact('doctor')) ;
    }
    public function upload(Request $request){
        $doctor = new doctor;
        $image  = $request->file ;
        $imagename = time().'.'.$image->getClientOriginalExtension();

        $request->file->move('doctorimage',$imagename);
        $doctor->image = $imagename;
        $doctor->name = $request->name;
        $doctor->room = $request->room;
        $doctor->sperciality = $request->sperciality;
        $doctor->phone = $request->phone;
        $doctor->save();
        return redirect()->back()->with('message','Doctor Added Successfully');
    }
    public function editdoc(Request $request , $id) {
        $data = Doctor::find($id);
        $data->name = $request->name;
        $data->room = $request->room;
        $data->phone = $request->phone;
        $data->sperciality = $request->speciality;
        $image = $request->file;
        $imagename = time().'.'.$image->getClientOriginalExtension();
        $request->file->move('doctorimage',$imagename);
        $data->image = $imagename;
        $data->save();
        return redirect()->back()->with('message','Doctor Added Successfully');


    }
}
