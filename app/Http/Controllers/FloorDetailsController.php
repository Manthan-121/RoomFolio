<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

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

        if ($request->hasFile('floor_ownor_img')) {
            $ufilename = $request->file('floor_ownor_img');
            $filename = $request->input('floor_ownor') . '-' . uniqid() . '.' . $ufilename->getClientOriginalExtension();
            $path = $request->file('floor_ownor_img')->storeAs('images/floor_owner', $filename, 'public'); // store image in folder
            DB::table('tbl_floor_details')->insert([
                'ap_id' => $request->input('ap_id'),
                'floor_no' => $request->input('floor_no'),
                'flate_no' => $request->input('flat_no'),
                'floor_ownor' => $request->input('floor_ownor'),
                'floor_ownor_img' => $filename,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
            return redirect()->route('FloorDetails')->with('success', 'Floor Details created successfully');
        }
        return back();
        // Prepare data for insertion
        // $file = $request->file('floor_ownor_img');
        // dd($file);
    }

    public function editFloorDetails($id = null)
    {
        $floors = DB::table('tbl_floor_details')
            ->where('floor_id', $id)
            ->get();
        $apartments = DB::table('tbl_apartment')->get();

        // $data = [$floors,$apartments];
        return view('editfloordtl', compact('floors', 'apartments'));
        // return view('editfloordtl')->with('floors',$floors)->with('appartments',$apartments);
        // return $data;
    }

    public function updateFloorDetails(Request $request, $id)
    {

        $request->validate([
            'ap_id' => 'required|exists:tbl_apartment,ap_id',
            'floor_no' => 'required|integer',
            'flat_no' => 'required|string',
            'floor_ownor' => 'required|string|max:255',
            'floor_ownor_img' => 'nullable|mimes:png,jpg,jpeg|max:2024',
        ]);

        if ($request->hasfile('floor_ownor_img')) {
            $ufilename = $request->file('floor_ownor_img');
            $filename = $request->input('floor_ownor') . '-' . uniqid() . '.' . $ufilename->getClientOriginalExtension();
            // Check if an old image exists and delete it
            $oldFilename = $request->input('hdn_floor_ownor_img');
            if ($oldFilename && Storage::disk('public')->exists('images/floor_owner/' . $oldFilename)) {
                Storage::disk('public')->delete('images/floor_owner/' . $oldFilename);
            }
            $path = $request->file('floor_ownor_img')->storeAs('images/floor_owner', $filename, 'public'); // store image in folder
        } else {
            $filename = $request->input('hdn_floor_ownor_img');
        }
        DB::table('tbl_floor_details')->where('floor_id', $id)->update([
            'ap_id' => $request->input('ap_id'),
            'floor_no' => $request->input('floor_no'),
            'flate_no' => $request->input('flat_no'),
            'floor_ownor' => $request->input('floor_ownor'),
            'floor_ownor_img' => $filename,
            'updated_at' => now(),
        ]);
        return redirect()->route('FloorDetails')->with('edt-success', 'Floor Details updated successfully');
        // return $filename;
    }
    public function deleteFloorDetails($id)
    {
        // Find the floor detail by ID
        $floor = DB::table('tbl_floor_details')->where('floor_id', $id)->first();

        // Check if the image exists and delete it
        if ($floor->floor_ownor_img) {
            Storage::disk('public')->delete('images/floor_owner/' . $floor->floor_ownor_img);
            DB::table('tbl_floor_details')->where('floor_id', $id)->delete();
            return redirect()->route('FloorDetails')->with('del-success', 'Floor Details deleted successfully.');
        }else{
            return "Some thing is wrong";
        }
        // Delete the floor detail record

    }
}
