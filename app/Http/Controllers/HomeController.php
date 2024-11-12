<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use App\Models\User;
use App\Models\Appointment;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;



class HomeController extends Controller
{
    public function redirect () {
        if (Auth::id()) {
            if (Auth::user()->usertype == "0") {
                $doctor = Doctor::all();  // Fetch doctors from the database
                return view('user.home', compact('doctor'));  // Pass the $doctor variable
            } else {
                return view('admin.home');
            }
        } else {
            return redirect()->back();
        }
    }

    public function index() {
        if (Auth::id()) {
            return redirect('home');
        } else {
            $doctor = Doctor::all();  // Fetch doctors from the database
            return view('user.home', compact('doctor'));  // Pass the $doctor variable
        }
    }
    public function MyAppoinment() {
        if(Auth::id()){
            $user_id = Auth::user()->id;
            $appoint = Appointment::where('id',$user_id)->get();
            return view('user.my_appointment',compact('appoint'));
        }
        else{
            return redirect()->back();
            }

    }

    public function about(){
        return view('user.about');
    }

    public function doctors(){
        $doctor = Doctor::all();
        return view('user.doctors',compact('doctor'));
    }

    public function cancel_appoint($id) {
        $data = Appointment::find($id);
        $data->delete();
        return redirect()->back();

    }
    public function updatdoc($id) {
        $data = Doctor::find($id);
        return view('admin.updatdoc',compact('data'));

    }

    public function delet_doct($id) {
        $data = Doctor::find($id);
        $data->delete();
        return redirect()->back();

    }
    public function show_apointments() {
        $data = Appointment::all();
        return view('admin.appointments',compact('data'));

    }
    public function show_doctors() {
        $data = Doctor::all();
        return view('admin.show_doctors',compact('data'));

    }
    public function appruve($id) {
        $data = Appointment::find($id);
        $data->status='approved';
        $data->save();
        return redirect()->back();

    }

    public function section(REQUEST $request){

        $date = new appointment;
        $date->name = $request->name;
        $date->phone = $request->phone;
        $date->email = $request->email ;
        $date->doctor = $request->doctor;
        $date->date = $request->date;
        $date->message = $request->message;
        $date->status = 'in progress';
        if(Auth::id()){
            $date->user_id = Auth::user()->id;

        }

        $date->save();
        return redirect()->back()->with('message','appoinment request added success');


    }

}

