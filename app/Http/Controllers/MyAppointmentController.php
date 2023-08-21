<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Appointment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class MyAppointmentController extends Controller
{
    //
     function myAppointment(){
        $data = Appointment::all();

        if (Auth::id()) {
            # code...
            $user_id=Auth::user()->id;
            $appoint = Appointment::where('user_id',$user_id)->get();
            return view('user.my-appointment',compact('appoint'));
        }else{
            return redirect()->back();
        }
    }

    public function cancel_appointment($id){
        $data = Appointment::find($id);
        $data->delete();
        return redirect()->back();
    }
}
