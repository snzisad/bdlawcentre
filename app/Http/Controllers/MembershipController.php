<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Membership;
use Illuminate\Support\Facades\Storage;

class MembershipController extends Controller
{
    public function index(){
        $allmembership = Membership::orderBy("id", "desc")->get();

        return view('adminpanel.membership')->with(compact("allmembership"));
    }

    public function addMembership(Request $request){
        $this->validate($request, [
            "name" => "required",
            "picture" => "required|mimes: jpg,jpeg,png",
        ]);

        //get uploaded banner
        $picture = $request->picture;

        $data = Membership::create($request->all());

        $filename = $data->id.".".$picture->extension();

        $picture->storeAs('public/membership',$filename);

        Membership::where("id", $data->id)->update([
            "picture" => $filename
        ]);

        return redirect()->back()->withErrors([
            "message" => "Membership added successfully"
        ]);
    }

    public function updateMembership(Request $request){
        $this->validate($request, [
            "id" => "required",
            "name" => "required",
            "picture" => "mimes: jpg,jpeg,png",
        ]);

        $id = $request->id;

        //if user upload another picture
        if($request->picture){

            //get the existing picture
            $data = Membership::where("id", $id)->first();

            //remove from server
             Storage::delete('public/membership/'.$data->picture);  

            //get the uploaded picture
             $data = $request->picture;

             //set new name
             $filename = $id.".".$data->extension();

             //upload this new one to the server
             $data->storeAs('public/membership',$filename); 


             //update into database
            Membership::where("id", $id)->update([
                "name" => $request->name,
                "picture" => $filename
            ]);   
        }
        else{
            Membership::where("id", $id)->update([
                "name" => $request->name,
            ]); 
        }

        return redirect()->back()->withErrors([
            "message" => "Membership information updated successfully"
        ]);
    }

    public function removeMembership($id){
        $data = Membership::where("id", $id)->first();

        Storage::delete('public/membership/'.$data->picture);

        Membership::destroy($id);

        return redirect()->back()->withErrors([
            "message" => "Membership deleted successfully"
        ]);
    }
    
}
