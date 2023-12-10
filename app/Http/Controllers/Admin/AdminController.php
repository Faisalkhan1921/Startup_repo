<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    //
    public function destroy(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        $notification = array(
            'message' => 'Logged out Successfully', 
            'alert-type' => 'success'
        );

        return redirect()->route('login')->with($notification);
       
    }

    public function profile()
    {
        $id = Auth::id();
        $iddata = User::find($id);
        return view('admin.admin_profile_view',compact('iddata'));

    }

    public function editprofile()
    {
        $id = Auth::id();
        $iddata = User::find($id);
        return view('admin.admin_profile_edit',compact('iddata'));
    }

    public function StoreProfile(Request $request){
        $id = Auth::user()->id;
        $data = User::find($id);
        $data->name = $request->name;
        $data->email = $request->email;
        // $data->username = $request->username;

        if ($request->file('image')) {
           $file = $request->file('image');

           $filename = date('YmdHi').$file->getClientOriginalName();
           $file->move(public_path('upload/admin_images'),$filename);
           $data['image'] = $filename;
        }
        $data->save();

        $notification = array(
            'message' => 'Admin Profile Updated Successfully', 
            'alert-type' => 'success'
        );

        return redirect()->route('admin.profile')->with($notification);
    }// End Method

    public function ChangePassword()
    {
        return view('admin.change_password_view');
    }

    public function UpdatePassword(Request $request){

        $validateData = $request->validate([
            'oldpassword' => 'required',
            'newpassword' => 'required',
            'confirm_password' => 'required|same:newpassword',

        ]);

        $hashedPassword = Auth::user()->password;
        if (Hash::check($request->oldpassword,$hashedPassword )) {
            $users = User::find(Auth::id());
            $users->password = bcrypt($request->newpassword);
            $users->save();

            $notification = array(
                'message' => 'Password Updated Successfully', 
                'alert-type' => 'success'
            );
    
            return redirect()->back()->with($notification);
        } else{
            $notification = array(
                'message' => 'Old Password is not Match', 
                'alert-type' => 'warning'
            );
    
            return redirect()->back()->with($notification);
        }

    }// End Method

}
