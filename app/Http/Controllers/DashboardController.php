<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function patientindex()
    {
        $patient = User::where('role', 'patient')->count();
        $doctor = User::where('role', 'doctor')->count();
        $appointment = Appointment::whereNotIn('status', ['delete'])->count();
        $apdates = Appointment::orderBy('appointment_date','asc')->groupBy('appointment_date')->pluck('appointment_date');
        $apcounts = [];
        foreach($apdates as $apdate)
        {
            $data = Appointment::where('appointment_date',$apdate)->count();
            array_push($apcounts,$data);
        }
        $apdates = json_decode($apdates);
        return view('dashboard', compact('patient', 'doctor', 'appointment','apdates','apcounts'));
    }

    public function userdashboard()
    {
        $appointment = Appointment::where('patient_id', Auth()->id())->count();
        return view('user.user-dashboard', compact('appointment'));
    }
    public function doctordashboard()
    {
        $appointment = Appointment::where('doctor_id', Auth()->id())->count();
        return view('doctor.doctorprofile',compact('appointment'));
    }

}
