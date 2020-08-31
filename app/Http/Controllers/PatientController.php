<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PatientController extends Controller
{
    public function newPatient(){
        $data = array();
        $data['menu_active']= 4;
        $data['title']="New Patient";
        return view('front.pages.patient.newPatient',$data);
    }

    public function schedules(){
        $data = array();
        $data['menu_active']= 4;
        $data['title']="Schedules";
        return view('front.pages.patient.schedules',$data);
    }
}
