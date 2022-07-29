<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;


class ProfileController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function ProfileView()
    {
        $id = Auth::user()->id;
        $user = User::find($id);

        return view('backend.user.view_profile', compact('user'));
    }

    public function ProfileEdit()
    {
        $id = Auth::user()->id;
        $editData = User::find($id);
        return view('backend.user.edit_profile', compact('editData'));
    }

    public function ProfileStore(Request $request)
    {
        $data = User::find(Auth::user()->id);
        $data->name = $request->name;
        $data->email = $request->email;
        $data->mobile = $request->mobile;
        $data->address = $request->address;
        $data->gender = $request->gender;

        if ($request->file('image')) {
            $file = $request->file('image');
            @unlink(public_path('upload/user_images/' . $data->image));
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('upload/user_images'), $filename);
            $data['image'] = $filename;
        }

        $data->save();

        $notification = array(
            'message' => 'Profil anda berhasil diperbarui!',
            'alert-type' => 'success'
        );

        return redirect()->route('profile.view')->with($notification);
    }

    public function PasswordView()
    {
        return view('backend.user.edit_password');
    }

    public function PasswordUpdate(Request $request)
    {
        $validatedData = $request->validate([
            'oldpassword' => 'required',
            'password' => 'required|confirmed',
        ]);

        $hashedPassword = Auth::user()->password;
        if (Hash::check($request->oldpassword, $hashedPassword)) {
            $user = User::find(Auth::id());
            $user->password = Hash::make($request->password);
            $user->save();
            Auth::logout();
            $notification = array(
                'message' => 'Password anda berhasil diubah, silahkan login kembali!',
                'alert-type' => 'success'
            );

            return redirect()->route('login')->with($notification);
        } else {

            $notification = array(
                'message' => 'Password yang anda masukkan tidak cocok!',
                'alert-type' => 'error'
            );

            return redirect()->back()->with($notification);
        }
    }
}
