<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
class AdminAuthController extends Controller
{
     // Show the login form
     public function showLoginForm()
     {
         return view('login');
     }

     // Handle login
    public function login(Request $request)
    {
        // Validate the request
        $request->validate([
            'ad_email' => 'required|email',
            'ad_password' => 'required',
        ]);


        $admin = DB::table('tbl_admin')->where('ad_email', $request->ad_email)->first();

        if ($admin && Hash ::check($request->ad_password, $admin->ad_password)) {

            Session::put('admin_id', $admin->ad_id);

            return redirect()->intended('/');
        }

        return back()->withErrors([
            'ad_email' => 'The provided credentials do not match our records.',
        ]);
    }

    // Handle logout
    public function logout(Request $request)
    {
        Session::forget('admin_id');
        return redirect()->route('login');
    }
}
