<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;

class DashController extends Controller
{
    public function index()
    {
        $totApart = DB::table("tbl_apartment")->count();
        $totFlatRegi = DB::table("tbl_floor_details")->count();
        $totCategory = DB::table("tbl_categories")->count();
        $totPass = DB::table("tbl_vis_pass")->count();
        $totVisitor = DB::table("tbl_visitor")->count();
        $tottodayEntry = DB::table("tbl_visitor")->whereDate('created_at', today())->count();
        $tottodayExit = DB::table("tbl_visitor")->whereDate('vis_exit_date', today())->count();


        return view('home',compact('totApart','totFlatRegi','totCategory','totPass','totVisitor','tottodayEntry','tottodayExit'));
    }
}
