<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IctAdminController extends Controller
{
    public function IctAdminAuthCheck()
    {
        $admin_id = Session::get('ictadmin_id');
        if ($admin_id) {
            return view('ictadmin.home.homeContent');
        } else {
            return Redirect::to('/')->send();
        }
    }

    public function index()
    {
        $this->IctAdminAuthCheck();
        return view('admin.home.homeContent');
    }

    public function getIctAdminAuthCheck(){
        $ictAdmin_id = IctAdmin_id::all();

        if ($ictadmin_id) {
            return view ('IctAdmin.Index');
        } else {
            return Redirect::to('/index')->send();
        }
    }

    public function getPostIctAdmin(){
        $ictAdminPost_id = ictAdminPost_id::all();

        if ($ictpostadmin_id) {
            return view ('IctPost Admin.home');
        } else {
            return Redirect::to('/home')->sendall();
        }
    }

    public function logout()
    {
//        Session::put('admin_name', null);
//        Session::put('admin_id', null);
          Session::put('ictadmin_id', null);
        Session::flush();
        return Redirect::to('/');
    }
}

