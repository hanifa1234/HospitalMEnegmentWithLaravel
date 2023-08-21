<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Appointment;

class ShowAppointmentController extends Controller
{
    //
    public function ShowAppointment(){
        $appointmentsData = Appointment::all();

        return view('admin.ShowAppointment', compact('appointmentsData'));
    }
}
