<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FloorDetailsController extends Controller
{
    public function showFloorDetails()
    {
        $floors = DB::table('tbl_floor_details')
                    ->join('tbl_apartment', 'tbl_floor_details.ap_id', '=', 'tbl_apartment.ap_id')
                    ->select('tbl_floor_details.*', 'tbl_apartment.ap_name',)
                    ->get();
        return view('floordtl', compact('floors'));
    }
    public function addFloorDetails()
    {
        $apartments = DB::table('tbl_apartment')->get();
        return view('addfloor', compact('apartments'));
    }
}
