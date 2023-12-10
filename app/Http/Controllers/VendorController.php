<?php

namespace App\Http\Controllers;

use App\Models\Vendor;
use Illuminate\Http\Request;

class VendorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('vendor.index');
    }

    public function store(Request $request)
    {
        Vendor::insert([
            'uname' => $request->uname,
            'dept_name' => $request->dept_name,
            'dept_address' => $request->dept_address,
            'st_address' => $request->st_address,
            'p_code' => $request->p_code,
            'email' => $request->email,
            'phone' => $request->phone,
            'password' => $request->password,
            'lts_code' => $request->countryCode . ' ' . $request->lts_code,
            
        ]);
        return redirect()->back()->with('message','Vendor Registered Successfully');
    }

}
