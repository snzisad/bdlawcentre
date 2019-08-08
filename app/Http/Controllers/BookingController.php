<?php

namespace App\Http\Controllers;

use App\Booking;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function saveBookingInfo(Request $request){
        $this->validate($request, [
            'user_name' => 'required|string',
            'user_email' => 'required|email|max:50',
            'phone' => 'required|string',
            'visit_date' => 'required|date',
            'message' => 'required|string',
        ]);

        $result = Booking::create($request->all());

        if($result){
            return redirect()->back()->withErrors(["message"=>"Your requested submitted successfully"]);
        }
        else{
            return redirect()->back()->withErrors("Some thing went wrong. Please try again");
        }
    }

    public function showList(){
        $results = Booking::orderby('visit_date', 'asc')->get();
        return view('adminpanel.bookinglist')->with(compact("results"));
    }

    public function remove($id){
        $result = Booking::where('id', $id)->delete();

        if($result){
            return redirect()->back()->withErrors(["message"=>"Operation Successfull"]);
        }
        else{
            return redirect()->back()->withErrors("Something went wrong. Please try again");
        }
    }
}
