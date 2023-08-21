<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Appointment;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class AppointmentController extends Controller
{
    //
    public function appointment(Request $req){
            $data = new appointment;
            $data->name = $req->name;
            $data->email = $req->email;
            $data->phone = $req->number;
            $data->doctor = $req->doctor;
            $data->data = $req->data;
            $data->message = $req->message ;
            $data->status = 'In Progress';
            // dd($data);
            if (Auth::id()) {
                # code...
            $data->user_id = Auth::User()->id;

            }
            $data->save();

            return redirect()->back()->with('message', ' Appointment Requst Sucessfull. we will contract with u soon.');
    }
}
