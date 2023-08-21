<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Doctor;


class UploadController extends Controller
{
    //
    public function uploadDoctor(Request $req)
    {

        $doctor = new Doctor;

        $image = $req->file;
        $imagesname = time() . "." . $image->getClientoriginalExtension();
        $req->file->move('doctorimage', $imagesname);
        $doctor->image = $imagesname;

        $doctor->name = $req->name;
        $doctor->phone = $req->number;
        $doctor->speciality = $req->speciality;
        $doctor->room = $req->room;
        $doctor->save();
        return redirect()->back()->with('message','Doctor add Successfully');
    }
}
