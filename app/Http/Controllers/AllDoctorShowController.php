<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Doctor;

class AllDoctorShowController extends Controller
{
    //
    public function AllDoctorShow()
    {

        $doctor = Doctor::all();
        return view('admin.AllDoctorShow', compact('doctor'));
    }
    #deleted
    public function deletedDoctor($id)
    {
        $data = Doctor::find($id);
        $data->delete();
        return redirect()->back();
    }
    #upload
    public function uploadDoctor($id)
    {
        $doctor = Doctor::find($id);
        return view('admin.update_doctor',compact('doctor'));
    }

    public function editDoctor(Request $req, $id){
            $data = Doctor::find($id);
            $data->name = $req->name;
            $data->phone = $req->phone;
            $data->room = $req->room;
            $data->speciality = $req->speciality;

            $image = $req->file;
            $imageName = time().'.'. $image->getClientoriginalExtension();
            $req->file->move('doctorimage',$imageName);
            $data->image = $imageName;

            $data->save();
            return redirect()->back()->with('message', 'Doctor details update Successfully');
    }
}
