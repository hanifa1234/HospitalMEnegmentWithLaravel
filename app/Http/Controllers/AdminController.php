<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
// use App\Models\Doctor;

class AdminController extends Controller
{
    //

    public function addDoctors()
    {
        return view('admin.add_doctor');
    }




}
