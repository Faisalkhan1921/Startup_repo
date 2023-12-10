<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Vendor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminVendorController extends Controller
{
    //

    public function index()
    {
        $vendor = Vendor::all();
        $id = Auth::id();
        $iddata = User::find($id);
        return view('adminven.index',compact('vendor','iddata'));
    }
}
