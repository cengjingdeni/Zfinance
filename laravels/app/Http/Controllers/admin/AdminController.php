<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use App\Http\Requests;

class AdminController extends Controller
{
    //
    public function show(){
        return view('admin.admin.show');
    }
    public function aaa(){
        return view('admin.admin.aaa');
    }
    public function demo(){
        return view('admin.admin.demo');
    }
    public function form(){
        return view('admin.admin.form');
    }
    public function table(){
        return view('admin.admin.table');
    }
    public function nav(){
        return view('admin.admin.nav');
    }
    public function auxiliar(){
        return view('admin.admin.auxiliar');
    }
}
