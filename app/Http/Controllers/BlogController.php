<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function blogs(){
        $data = array();
        $data['menu_active']= 5;
        $data['title']="Blog";
        return view('front.pages.blog.blogs',$data);
    }
    public function blogDetails(){
        $data = array();
        $data['menu_active']= 5;
        $data['title']="Blog Details";
        return view('front.pages.blog.blogDetails',$data);
    }
}
