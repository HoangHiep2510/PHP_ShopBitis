<?php

namespace App\Http\Controllers;
use DB;
use Session;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        return view('pages/admin_login');
    }
    public function admin_index(){
        return view('admin/home_admin');
    }
    public function admin_home(Request $request)
    {
        $email = $request -> admin_email;
        $pass = $request -> admin_password;

        $result = DB::table('tbl_admin') 
        -> where('admin_email',$email) 
        -> where('admin_password',$pass) 
        -> first() ;
        if($result)
        {
            Session::put('ad_email',$request -> admin_email);
            return Redirect('admin');
        }
        else
        {
            Session::put('message','Bạn nhập sai Email hoặc password');
            return Redirect('admin/login');
        }
    }
}
