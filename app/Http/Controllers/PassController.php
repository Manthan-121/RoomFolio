<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PassController extends Controller
{
    // Display a listing of the passes
    public function index()
    {
        $passes = DB::table('tbl_vis_pass')
            ->join('tbl_categories', 'tbl_vis_pass.cat_id', '=', 'tbl_categories.cat_id')
            ->select('tbl_vis_pass.*', 'tbl_categories.cat_name as category_name')
            ->orderBy('created_at', 'desc')
            ->get();
        return view('pass.passindex', compact('passes'));
    }

    // Show the form for creating a new pass
    public function create()
    {
        $categories = DB::table('tbl_categories')->get(); // Fetch categories if needed
        $visitors = DB::table('tbl_visitor')->get(); // Fetch visitors if needed
        return view('pass.addpass', compact('categories', 'visitors'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'pass_cat' => 'required',
            'pass_name' => 'required|string|max:255',
            'pass_mobile' => 'required|digits:10',
            'pass_email' => 'required|email|max:255',
            'pass_address' => 'nullable|string',
            'pass_description' => 'nullable|string',
            'pass_start_date' => 'required|date',
            'pass_end_date' => 'required|date|after_or_equal:pass_start_date',
            'pass_img' => 'required|image|mimes:jpg,png,jpeg|max:2048',
        ]);

        // Handle image upload
        if ($request->hasFile('pass_img')) {
            $originalExtension = $request->file('pass_img')->getClientOriginalExtension();
            $imageName = $request->pass_name . '_' . uniqid() . '.' . $originalExtension;
            $imagePath = $request->file('pass_img')->storeAs('images/pass_img', $imageName, 'public');
            $data['pass_img'] = $imagePath;
        }


        // Insert the validated data into the database
        DB::table('tbl_vis_pass')->insert([
            'cat_id' => $validated['pass_cat'],
            'pass_img' => $imageName,
            'pass_start_date' => $validated['pass_start_date'],
            'pass_end_date' => $validated['pass_end_date'],
            'pass_description' => $validated['pass_description'],
            'pass_name' => $validated['pass_name'],
            'pass_address' => $validated['pass_address'],
            'pass_mobile' => $validated['pass_mobile'],
            'pass_email' => $validated['pass_email'],
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        return redirect()->route('pass.index')->with('success', 'Pass added successfully!');
    }


    public function showPass($id){
        $pass = DB::table('tbl_vis_pass')->where('pass_id', $id)->first(); // Fetch categories if needed

        $cetegory = DB::table('tbl_categories')->where('cat_id', $pass->cat_id)->first(); // Fetch categories if needed
        return view('pass.idcard', compact('pass', 'cetegory'));
    }
}
