<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function contact(){
        $data = array();
        $data['menu_active']= 6;
        $data['title']="Contact";
        return view('front.pages.contact',$data);
    }
}
