<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\Support\Facades\DB;

class DoctorController extends Controller
{
    public function index()
    {
        $doctors = User::where('role','doctor')->get();
        $ascendingOrders = DB::table('users')->orderBy('id', 'asc')->get();
        return view('admin.doctor.index', compact('doctors','ascendingOrders'));
    }
    public function create()
    {
        return view('admin.doctor.create');
    }
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'email' => 'required|nullable',
            'address' => 'required',
            'phone' => 'nullable',
            'password' => ['required', 'confirmed', Rules\Password::default()],
            'specialist' => 'required',
        ]);

        $data['role'] = 'doctor';

        $data['password'] = Hash::make($data['password']);

        User::create($data);

        return redirect(route('admin.doctor.index'))->with('success', 'Doctor created successfully');
    }

    public function edit($id)
    {
        $doctors = User::find($id);
        return view('admin.doctor.edit', compact('doctors'));
    }
    public function update(Request $request, $id)
    {
        $data = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'address' => 'required',
            'phone' => 'nullable',
            'specialist' => 'required',
        ]);
        
        $doctor = User::find($id);
        $doctor->update($data);
        return redirect(route('admin.doctor.index'));
    }
    public function delete($id)
    {
        $doctor = User::findOrFail($id);
        $doctor->delete();
        return redirect(route('admin.doctor.index'))->with('success', 'doctor deleted successfully');
    }
}
   