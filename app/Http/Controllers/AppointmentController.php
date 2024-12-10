<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AppointmentController extends Controller
{
    public function index($status)
    {

        $appointments = Appointment::where('status',$status)->get();
        $ascendingOrders = DB::table('appointments')->orderBy('id', 'asc')->get();
        return view ('admin.appointment.index',compact('appointments','ascendingOrders'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'doctor_id' => 'required',
            'appointment_date' => 'required',
            'message' => 'nullable',
        ]);
        $data['patient_id'] = auth()->id();

        Appointment::create($data);
        return back()->with('success','Appointment Added Successfully');
    }

    public function status($id,$status)
    {
        $appointment = Appointment::find($id);
        $appointment->status = $status;
        $appointment->save();
        return back()->with('success','Appointment is marked as '.$status);
    }
    public function delete($id)
    {
        $appointment = Appointment::findOrFail($id);
        $appointment->delete();
        return redirect(route('admin.appointment.index'))->with('success', 'appointment deleted successfully');
    }


    //userAppointment
    public function myappointment()
    {
        $appointments = Appointment::where('patient_id',auth()->id())->get();
        return view ('admin.Appointment.my',compact('appointments'));
    }

    public function deleteappointment($id)
    {
        $app = Appointment::findOrFail($id);
        $app->delete();
        return redirect(route('admin.appointment.my',))->with('success', 'appointment deleted successfully');
    }

    //Doctor Appointment
    public function doctorappointment()
    {
        $appointments = Appointment::where('doctor_id',auth()->id())->get();
        return view ('admin.Appointment.doc',compact('appointments'));
    }

    public function deletedoctor($id)
    {
        $app = Appointment::findOrFail($id);
        $app->delete();
        return redirect()->route('admin.appointment.doc')->with('success', 'Appointment deleted successfully');
    }
   


}
