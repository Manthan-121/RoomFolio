<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class VisitorController extends Controller
{
    public function index()
    {
        $visitors = DB::table('tbl_visitor')->get();
        return view('visitors.index', compact('visitors'));
    }

    public function create()
    {
        return view('visitors.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'vis_name' => 'required|string|max:255',
            'vis_mobile' => 'required|string|max:15',
            'vis_email' => 'nullable|email|max:255',
            'ap_id' => 'required|exists:tbl_apartment,ap_id',
            'floor_id' => 'required|exists:tbl_floor_details,floor_id',
            'vis_whom_to_meet' => 'required|string|max:255',
            'vis_reason' => 'required|string|max:255',
            'vis_entry_date' => 'nullable|date',
            'vis_entry_time' => 'nullable|date_format:H:i',
            'vis_exit_date' => 'nullable|date',
            'vis_exit_time' => 'nullable|date_format:H:i',
        ]);

        DB::table('tbl_visitor')->insert([
            'vis_name' => $request->vis_name,
            'vis_mobile' => $request->vis_mobile,
            'vis_email' => $request->vis_email,
            'ap_id' => $request->ap_id,
            'floor_id' => $request->floor_id,
            'vis_whom_to_meet' => $request->vis_whom_to_meet,
            'vis_reason' => $request->vis_reason,
            'vis_entry_date' => $request->vis_entry_date,
            'vis_entry_time' => $request->vis_entry_time,
            'vis_exit_date' => $request->vis_exit_date,
            'vis_exit_time' => $request->vis_exit_time,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        return redirect()->route('visitors.index')->with('success', 'Visitor created successfully.');
    }

    public function edit($id)
    {
        $visitor = DB::table('tbl_visitor')->where('vis_id', $id)->first();
        return view('visitors.edit', compact('visitor'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'vis_name' => 'required|string|max:255',
            'vis_mobile' => 'required|string|max:15',
            'vis_email' => 'nullable|email|max:255',
            'ap_id' => 'required|exists:tbl_apartment,ap_id',
            'floor_id' => 'required|exists:tbl_floor_details,floor_id',
            'vis_whom_to_meet' => 'required|string|max:255',
            'vis_reason' => 'required|string|max:255',
            'vis_entry_date' => 'nullable|date',
            'vis_entry_time' => 'nullable|date_format:H:i',
            'vis_exit_date' => 'nullable|date',
            'vis_exit_time' => 'nullable|date_format:H:i',
        ]);

        DB::table('tbl_visitor')->where('vis_id', $id)->update([
            'vis_name' => $request->vis_name,
            'vis_mobile' => $request->vis_mobile,
            'vis_email' => $request->vis_email,
            'ap_id' => $request->ap_id,
            'floor_id' => $request->floor_id,
            'vis_whom_to_meet' => $request->vis_whom_to_meet,
            'vis_reason' => $request->vis_reason,
            'vis_entry_date' => $request->vis_entry_date,
            'vis_entry_time' => $request->vis_entry_time,
            'vis_exit_date' => $request->vis_exit_date,
            'vis_exit_time' => $request->vis_exit_time,
            'updated_at' => now(),
        ]);

        return redirect()->route('visitors.index')->with('success', 'Visitor updated successfully.');
    }

    public function destroy($id)
    {
        DB::table('tbl_visitor')->where('vis_id', $id)->delete();
        return redirect()->route('visitors.index')->with('success', 'Visitor deleted successfully.');
    }
}
