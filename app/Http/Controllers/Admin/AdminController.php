<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\Models\User;
use Image;

class AdminController extends Controller
{
    public function logout(){
        Auth::logout();
        return Redirect()->route('login');
    }
    public function profile_view($id){
        $user = User::findOrFail($id);
        return view('backend.user_profile.profile_view',compact('user'));
    }
    public function general_profile_update(Request $request,$id){
        $data = User::find($id);
        $data->name = $request->name;
        $data->email = $request->email;
        $data->phone = $request->phone;

        if ($request->file('profile_photo_path')) {
            $file = $request->file('profile_photo_path');
            // unlink(public_path('upload/user_images/'.$data->profile_photo_path));
            $filename = date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('upload/user_images'),$filename);
            $data['profile_photo_path'] = $filename;

        }
        $data->save();

        return Redirect()->back();


    }
}
