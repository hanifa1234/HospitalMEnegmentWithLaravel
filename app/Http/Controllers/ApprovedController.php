<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Appointment;

class ApprovedController extends Controller
{
    //
    public function approved($id){
        $appointments = Appointment::find($id);
        $appointments->status = 'Approved';
        $appointments->save();
        return redirect()->back();
    }
}
