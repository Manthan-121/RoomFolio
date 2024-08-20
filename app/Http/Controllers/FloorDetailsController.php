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
            ->select('tbl_floor_details.*', 'tbl_apartment.*')
            ->get();
        return view('floordtl', compact('floors'));
        // return $floors;
    }
    public function addFloorDetails()
    {
        $apartments = DB::table('tbl_apartment')->get();
        return view('addfloor', compact('apartments'));
    }


    public function storeFloorDetails(Request $request)
    {
        $request->validate([
            'ap_id' => 'required|exists:tbl_apartment,ap_id',
            'floor_no' => 'required|integer',
            'flat_no' => 'required|string',
            'floor_ownor' => 'required|string|max:255',
            'floor_ownor_img' => 'required|mimes:png,jpg,jpeg|max:2024',
        ]);

        if($request->hasFile('floor_ownor_img')){
            $filename = $request->file('floor_ownor_img')->hashName();
            $path = $request->file('floor_ownor_img')->store('images/floor_owner/','public'); // store image in folder
            DB::table('tbl_floor_details')->insert([
                'ap_id' => $request->input('ap_id'),
                'floor_no' => $request->input('floor_no'),
                'flate_no' => $request->input('flat_no'),
                'floor_ownor' => $request->input('floor_ownor'),
                'floor_ownor_img' => $filename,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
            return redirect()->route('FloorDetails')->with('success','Floor Details created successfully');
        }
        return back();
        // Prepare data for insertion
        // $file = $request->file('floor_ownor_img');
        // dd($file);


    }
}
