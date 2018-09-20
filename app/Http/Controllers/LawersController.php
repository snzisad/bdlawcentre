<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Lawer;
use Illuminate\Support\Facades\Storage;

class LawersController extends Controller
{
    public function index(){
        $lawers = Lawer::orderBy("id", "desc")->get();

        return view('adminpanel.lawers')->with(compact("lawers"));
    }

    public function addLawer(Request $request){
        $this->validate($request, [
            "name" => "required",
            "occupation" => "required",
            "picture" => "required|mimes: jpg,jpeg,png",
        ]);

        //get uploaded banner
        $picture = $request->picture;

        $data = Lawer::create($request->all());

        $filename = $data->id.".".$picture->extension();

        $picture->storeAs('public/lawer',$filename);

        Lawer::where("id", $data->id)->update([
            "picture" => $filename
        ]);

        return redirect()->back()->withErrors([
            "message" => "Lawer added successfully"
        ]);
    }

    public function updateLawer(Request $request){
        $this->validate($request, [
            "id" => "required",
            "name" => "required",
            "occupation" => "required",
            "picture" => "mimes: jpg,jpeg,png",
        ]);

        $id = $request->id;

        //if user upload another picture
        if($request->picture){

            //get the existing picture
            $data = Lawer::where("id", $id)->first();

            //remove from server
             Storage::delete('public/lawer/'.$data->picture);  

            //get the uploaded picture
             $data = $request->picture;

             //set new name
             $filename = $id.".".$data->extension();

             //upload this new one to the server
             $data->storeAs('public/lawer',$filename); 


             //update into database
            Lawer::where("id", $id)->update([
                "name" => $request->name,
                "occupation" => $request->occupation,
                "picture" => $filename
            ]);   
        }
        else{
            Lawer::where("id", $id)->update([
                "name" => $request->name,
                "occupation" => $request->occupation,
            ]); 
        }

        return redirect()->back()->withErrors([
            "message" => "Lawer information updated successfully"
        ]);
    }

    public function removeLawer($id){
        $data = Lawer::where("id", $id)->first();

        Storage::delete('public/lawer/'.$data->picture);

        Lawer::destroy($id);

        return redirect()->back()->withErrors([
            "message" => "Lawer deleted successfully"
        ]);
    }
    
}
