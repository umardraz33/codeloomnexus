<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function show(){
        $user = Auth::user();
        return view('admin.user.user-profile', compact('user'));
    }

    public function update(Request $request){

        $user = Auth::user();

        if ($request->hasFile('profile_image')) {
            $profileImageName = 'profile_' . $user->id . '_' . time() . '.' . $request->file('profile_image')->getClientOriginalExtension();
            $request->file('profile_image')->move('admin/assets/img/profiles', $profileImageName);
            $user->profile_image = $profileImageName;
        }
        // Check if a new project image is provided
        if ($request->hasFile('cover_picture')) {
            $coverPictureName = 'cover_' . $user->id . '_' . time() . '.' . $request->file('cover_picture')->getClientOriginalExtension();
            $request->file('cover_picture')->move('admin/assets/img/profiles', $coverPictureName);
            $user->cover_picture = $coverPictureName;
        }

        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone = $request->phone_number;
        $user->address = $request->address;

        $user->save();

        return redirect()->back();
    }
}
