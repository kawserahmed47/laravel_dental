<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function drProfile(){
        $data = array();
        $data['menu_active']= 2;
        $data['title']="Dr Profile";
        return view('front.pages.about.drProfile',$data);
    }

    public function team(){
        $data = array();
        $data['menu_active']= 2;
        $data['title']="Team";
        return view('front.pages.about.team',$data);
    }

    public function gallery(){
        $data = array();
        $data['menu_active']= 2;
        $data['title']="Gallery";
        return view('front.pages.about.gallery',$data);
    }
}
