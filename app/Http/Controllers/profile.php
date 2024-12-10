<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class profile extends Controller
{
    //Amdin profile
    public function index()
    {
        $admindata = User::find(Auth::user()->id);
        return view('admin.profile.index', compact('admindata'));
    }

    public function update(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'address' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'age' => 'required',
            'image' => 'image', // Add validation rules for image upload
        ]);

        $user = User::find(Auth::user()->id);
        $user->update($data);

        // Handle file upload if image is present
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images'), $imageName);
            $user->image = $imageName;
            $user->save();
        }

        if (Auth::user()->role == "patient") {
            return redirect(route('user.indexuser'));
        } else {
            return redirect(route('admin.profile.index'));
        }
    }

    //User profile 

    public function indexuser()
    {
        $userdata = User::find(Auth::user()->id);
        return view('user.profile', compact('userdata'));
    }

    public function updateuser(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'address' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'age' => 'required',
            'image' => 'image', // Add validation rules for image upload
        ]);

        $userprofile = User::find(Auth::user()->id);
        $userprofile->update($data);

        // Handle file upload if image is present
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images'), $imageName);
            $userprofile->image = $imageName;
            $userprofile->save();
        }

        return redirect(route('user.profile'));
    }
    //Doctor profile
    public function indexdoctor()
    {
        $doctordata = User::find(Auth::user()->id);
        return view('doctor.profile', compact('doctordata'));
    }

    public function updatedoctor(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'image' => 'image', // Add validation rules for image upload
        ]);

        $doctorprofile = User::find(Auth::user()->id);
        $doctorprofile->update($data);

        // Handle file upload if image is present
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images'), $imageName);
            $doctorprofile->image = $imageName;
            $doctorprofile->save();
        }

        return redirect(route('doctor.profile'));
    }

}
