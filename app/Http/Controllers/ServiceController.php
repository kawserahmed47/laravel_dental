<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function allServices(){

        $data = array();
        $data['menu_active']= 3;
        $data['title']="Services";
        return view('front.pages.services.allServices',$data);

    }

    public function serviceDetails(){
        $data = array();
        $data['menu_active']= 3;
        $data['title']="Services";
        return view('front.pages.services.serviceDetails',$data);

    }
}
