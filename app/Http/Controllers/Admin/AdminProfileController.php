<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class AdminProfileController extends Controller
{
    public function index()
    {
        return view('admin.profile.index');
    }

    public function edit(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'password' => 'nullable|string|min:8',
            'password_confirmation' => 'nullable|same:password',
            'avatar' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:4096',
        ]);

        $admin = Admin::where('id', Auth::guard('admin')->user()->id)->first();
        $admin->name = $request->name;
        $admin->email = $request->email;

        $admin->password = $request->password ? bcrypt($request->password) : $admin->password;

        if ($request->hasFile('avatar')) {

            $final_name = 'admin_' . time() . '.' . $request->avatar->getClientOriginalExtension();

            if ($admin->avatar && file_exists(public_path('uploads/' . $admin->avatar))) {
                unlink(public_path('uploads/' . $admin->avatar));
            }

            $request->avatar->move(public_path('uploads'), $final_name);

            $admin->avatar = $final_name;
        }

        $admin->save();

        return redirect()->back()->with('success', 'Profil módosítás sikeresen megtörtént!');
    }
}
