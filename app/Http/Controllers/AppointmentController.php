<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use DB;

class AppointmentController extends Controller
{
    public function insertAppointment(Request $request){
        $time = time();
        $data = array();
        $data['fname']=$request->fname;
        $data['lname']=$request->lname;
        $data['phone']=$request->phone;
        $data['email']=$request->email;
        $data['gender']=$request->gender;
        $data['age']=$request->age;
        $data['s_date']=$request->s_date;
        $data['s_time']=$request->s_time;
        $data['status']=0;
        $data['created_at']=date("Y-m-d H:i:s",$time);

        $query=DB::table('appointments')->insert($data);

        if($query){
           // Toastr::success('Save successfully.','Success',["positionClass" => "toast-top-right"]);
            Session::flash('success','Appointments Recorded Successful !!!');
            return redirect()->back();
        }

    }
    public function appointmentList(){
        $data= array();
        $data['appointments']=DB::table('appointments')->orderBy('s_date', 'ASC')->orderBy('s_time', 'ASC')->get();
        return view('back.pages.appointments',$data);
    }
}
