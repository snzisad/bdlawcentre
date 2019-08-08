<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Practice;
use Illuminate\Support\Facades\Storage;

class PracticeController extends Controller
{
	public function index(){
		$practices = Practice::orderBy("title", "asc")->get();

    	return view('adminpanel.practice')->with(compact("practices"));
	}

    public function addPractice(Request $request){
    	$this->validate($request, [
    		"title" => "required",
    		"description" => "required",
    		"picture" => "required|mimes: jpg,jpeg,png",
    	]);
    	//get uploaded banner
    	$picture = $request->picture;

    	$data = Practice::create($request->all());

    	$filename = $data->id.".".$picture->extension();

        $picture->storeAs('public/practice',$filename);

        Practice::where("id", $data->id)->update([
        	"picture" => $filename
        ]);

        return redirect()->back()->withErrors([
        	"message" => "Practice added successfully"
        ]);
    }

    public function updatePractice(Request $request){
        $this->validate($request, [
            "id" => "required",
            "title" => "required",
            "description" => "required",
            "picture" => "mimes: jpg,jpeg,png",
        ]);

        $id = $request->id;

        //if user upload another picture
        if($request->picture){

            //get the existing picture
            $data = Practice::where("id", $id)->first();

            //remove from server
             Storage::delete('public/practice/'.$data->picture);  

            //get the uploaded banner
             $data = $request->picture;

             //set new name
             $filename = $id.".".$data->extension();

             //upload this new one to the server
             $data->storeAs('public/practice',$filename); 


             //update into database
            Practice::where("id", $id)->update([
                "title" => $request->title,
                "description" => $request->description,
                "picture" => $filename
            ]);   
        }
        else{
            Practice::where("id", $id)->update([
                "title" => $request->title,
                "description" => $request->description
            ]); 
        }

        return redirect()->back()->withErrors([
            "message" => "Practice updated successfully"
        ]);
    }

    public function removePractice($id){
    	$data = Practice::where("id", $id)->first();

        Storage::delete('public/practice/'.$data->picture);

        Practice::destroy($id);

    	return redirect()->back()->withErrors([
    		"message" => "Practice removed successfully"
    	]);
    }
    
}
