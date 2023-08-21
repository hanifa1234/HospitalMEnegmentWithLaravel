<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Doctor;
use App\Models\Appointment;
use App\Notifications\SandMailNotification;
use Illuminate\Notifications\Notification;


class EmaliViewController extends Controller
{
    //
    public function EmaliView($id){
        $data = Appointment::find($id);
        return view('admin.EmaliView',compact('data'));
    }

    public function sandEmail(Request $req, $id){
        $data = Appointment::find($id);
           $details=[
                'greeting' => $req->greeting,
                'body' => $req->body,
                'actiontext' => $req->actiontext,
                'actionUrl' => $req->actionUrl,
                'endPart' => $req->endPart
           ];

        //    Notification::send($data,
        //    new SandMailNotification($details));
        //     return redirect()->back();
    }
}
