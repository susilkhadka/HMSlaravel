<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\Doctor;
use App\Models\User;
use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PagesController extends Controller
{
    public function index()
    {
        $doctors = User::where('role', 'doctor')->limit(3)->get();
        $blogs = Blog::limit(3)->get();
        return view('welcome', compact('doctors', 'blogs'));
    }
    public function userprofile()
    {
        $user = User::findOrFail(auth()->user()->id);
        $appointment = Appointment::where('patient_id', Auth()->User()->id)->count();
        return view('user.user-dashboard', compact('user', 'appointment'));
    }

    public function doctorprofile()
    {
        $user = Auth::user(); 
        $appointments = Appointment::where('patient_id', Auth()->User()->id)->count();
        return view('doctor.doctorprofile', compact('user','appointments'));
    }

    //Nav bar 
    public function doctors()
    {
        $doctors = User::where('role', 'doctor')->get();
        return view('doctors', compact('doctors'));
    }

    public function viewdoctor($id)
    {
        $doctor = User::find($id);
        return view('viewdoctor', compact('doctor'));
    }
    public function about()
    {
        return view('about');
    }
    public function blog()
    {
        $blog = Blog::all();
        return view('blog', compact('blog'));
    }
    public function contact()
    {
        return view('contact');
    }

    public function blogview($id)
    {
        $blogs = blog::find($id);
        return view('blogview', compact('blogs'));
    }
}
