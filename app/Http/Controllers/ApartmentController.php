<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ApartmentController extends Controller
{
    public function showApartment()
    {
        $apartments = DB::table('tbl_apartment')->get();
        return view('apartment', compact('apartments'));
        // return view('apartment');
    }

    public function addApartment()
    {
        return view('apartadd');
    }

    public function storeApartment(Request $request)
    {
        $request->validate([
            'ap_name' => 'required|string|max:255',
            'ap_remark' => 'required|string',
            'ap_tot_floor' => 'required|integer',
        ]);
        DB::table('tbl_apartment')->insert([
            'ap_name' => $request->ap_name,
            'ap_remark' => $request->ap_remark,
            'ap_tot_floor' => $request->ap_tot_floor,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        return redirect()->route('apartment')->with('success', 'Apartment created successfully.');
        // return $request->ap_name;
    }

    public function editApartment($id = null)
    {
        if ($id == null) {
            return redirect()->route('apartment');
        } else {
            $apartment = DB::table('tbl_apartment')->where('ap_id', $id)->first();
            return view('editapart', compact('apartment'));
        }
    }

    public function updateApartment(Request $request, $id)
    {
        $request->validate([
            'ap_name' => 'required|string|max:255',
            'ap_remark' => 'required|string',
            'ap_tot_floor' => 'required|integer',
        ]);

        DB::table('tbl_apartment')->where('ap_id', $id)->update([
            'ap_name' => $request->ap_name,
            'ap_remark' => $request->ap_remark,
            'ap_tot_floor' => $request->ap_tot_floor,
            'updated_at' => now(),
        ]);

        return redirect()->route('apartment')->with('edt-success', 'Apartment updated successfully.');
    }
    public function deleteApartment($id)
    {
        DB::table('tbl_apartment')->where('ap_id', $id)->delete();
        return redirect()->route('apartment')->with('del-success', 'Apartment deleted successfully.');
    }

    public function exit(Request $request)
    {
        DB::table('tbl_visitor')->where('vis_id', $request->vid)
            ->update([
                'vis_exit_time' => now()->format('H:i:s'),
                'vis_exit_date' => now()->format('Y-m-d'),
            ]);
        return redirect()->route('visitors.index')->with('exit-success', 'Visitor exit successfully.');
    }
}
