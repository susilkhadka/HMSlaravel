<?php

namespace App\Http\Controllers;

use App\Models\booking;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BookingController extends Controller
{
    public function index($status)
    {
        $bookings = booking::where('status',$status)->get();
        $ascendingOrders = DB::table('bookings')->orderBy('id', 'asc')->get();
        return view('admin.booking.index', compact('bookings','ascendingOrders'));
    }
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'phone' => 'required',
            'date' => 'required',
            'email' =>'required',
            'message' =>'nullable'
            
        ]);
        booking::create($data);
        return back()->with('success','Booking Added Successfully');
    }
    public function status($id,$status)
    {
        $bookings = booking::find($id);
        $bookings->status = $status;
        $bookings->save();
        return back()->with('success','Booking is marked as '.$status);
    }
    public function delete($id)
    {
        $bookings = booking::findOrFail($id);
        $bookings->delete();
        return redirect(route('admin.booking.index'))->with('success', 'booking deleted successfully');
    }
    
}
