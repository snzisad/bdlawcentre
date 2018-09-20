<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Paymentmethod;
use Illuminate\Support\Facades\Storage;

class PaymentMethodController extends Controller
{
    public function index(){
        $paymentmethods = Paymentmethod::orderBy("id", "desc")->get();

        return view('adminpanel.paymentmethod')->with(compact("paymentmethods"));
    }

    public function addPaymentmethod(Request $request){
        $this->validate($request, [
            "name" => "required",
            "picture" => "required|mimes: jpg,jpeg,png",
        ]);

        //get uploaded banner
        $picture = $request->picture;

        $data = Paymentmethod::create($request->all());

        $filename = $data->id.".".$picture->extension();

        $picture->storeAs('public/paymentmethod',$filename);

        Paymentmethod::where("id", $data->id)->update([
            "picture" => $filename
        ]);

        return redirect()->back()->withErrors([
            "message" => "Paymentmethod added successfully"
        ]);
    }

    public function updatePaymentmethod(Request $request){
        $this->validate($request, [
            "id" => "required",
            "name" => "required",
            "picture" => "mimes: jpg,jpeg,png",
        ]);

        $id = $request->id;

        //if user upload another picture
        if($request->picture){

            //get the existing picture
            $data = Paymentmethod::where("id", $id)->first();

            //remove from server
             Storage::delete('public/paymentmethod/'.$data->picture);  

            //get the uploaded picture
             $data = $request->picture;

             //set new name
             $filename = $id.".".$data->extension();

             //upload this new one to the server
             $data->storeAs('public/paymentmethod',$filename); 


             //update into database
            Paymentmethod::where("id", $id)->update([
                "name" => $request->name,
                "picture" => $filename
            ]);   
        }
        else{
            Paymentmethod::where("id", $id)->update([
                "name" => $request->name,
            ]); 
        }

        return redirect()->back()->withErrors([
            "message" => "Paymentmethod updated successfully"
        ]);
    }

    public function removePaymentmethod($id){
        $data = Paymentmethod::where("id", $id)->first();

        Storage::delete('public/paymentmethod/'.$data->picture);

        Paymentmethod::destroy($id);

        return redirect()->back()->withErrors([
            "message" => "Paymentmethod deleted successfully"
        ]);
    }
    
}
