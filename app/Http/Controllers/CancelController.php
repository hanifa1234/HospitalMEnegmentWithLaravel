<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Appointment;

class CancelController extends Controller
{
    //
   public function Cancel($id){
    $appointment = Appointment::find($id);
    $appointment->status = 'cancelled';
    $appointment->save();
    return redirect()->back();
   }
}
