<?php

namespace App\Http\Controllers;

use App\Models\Patient;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;


class PatientController extends Controller
{
    public function index()
    {
        $patients = User::where('role', 'patient')->get();
        $ascendingOrders = DB::table('users')->orderBy('id', 'asc')->get();
        return view('admin.patient.index', compact('patients','ascendingOrders'));
    }

    public function create()
    {
        return view('admin.patient.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'address' => 'required',
            'age' => 'nullable|integer',
            'email' => 'required|email|unique:users',
            'phone' => 'required|integer|unique:users',
            'gender' => 'nullable',
        ]);

        $data['password'] = Hash::make('1234567890');
        $data['role'] = 'patient';

        User::create($data);

        return redirect(route('admin.patient.index'))->with('success', 'Patient created successfully');
    }

    public function update(Request $request, $id)
    {
        $data = $request->validate([
            'name' => 'required',
            'address' => 'required',
            'age' => 'nullable|integer',
            'email' => 'required',
            'phone' => 'required',
            'gender' => 'nullable',
        ]);

        $patients = User::find($id);
        $patients->update($data);
        return redirect(route('admin.patient.index'));
    }

    public function edit($id)
    {
        $patients = User::find($id);
        return view('admin.patient.edit', compact('patients'));
    }

    public function delete($id)
    {
        $patient = User::findOrFail($id);
        $patient->delete();
        return redirect(route('admin.patient.index'))->with('success', 'Patient deleted successfully');
    }
}
