<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Training;
use Illuminate\Support\Facades\Storage;

class TrainingController extends Controller
{
	public function index(){
		$trainings = Training::orderBy("id", "desc")->get();

    	return view('adminpanel.training')->with(compact("trainings"));
	}

    public function addTraining(Request $request){
    	$this->validate($request, [
    		"title" => "required|max:255",
    		"description" => "required",
    		"picture" => "required|mimes: jpg,jpeg,png",
    	]);
    	//get uploaded picture
    	$picture = $request->picture;

    	$upload = Training::create($request->all());

    	$filename = $upload->id.".".$picture->extension();

        $picture->storeAs('public/training',$filename);

        Training::where("id", $upload->id)->update([
        	"picture" => $filename
        ]);

        return redirect()->back()->withErrors([
        	"message" => "Training added successfully"
        ]);
    }

    public function updateTraining(Request $request){
        $this->validate($request, [
            "id" => "required",
            "title" => "required|max:255",
            "description" => "required",
            "picture" => "mimes: jpg,jpeg,png",
        ]);

        $id = $request->id;

        //if user upload another picture image
        if($request->picture){

            //get the existing picture
            $picture = Training::where("id", $id)->first();

            //remove from server
             Storage::delete('public/training/'.$picture->picture);  

            //get the uploaded picture
             $picture = $request->picture;

             //set new name
             $filename = $id.".".$picture->extension();

             //upload this new one to the server
             $picture->storeAs('public/training',$filename); 


             //update into database
            Training::where("id", $id)->update([
                "title" => $request->title,
                "description" => $request->description,
                "picture" => $filename
            ]);   
        }
        else{
            Training::where("id", $id)->update([
                "title" => $request->title,
                "description" => $request->description
            ]); 
        }

        return redirect()->back()->withErrors([
            "message" => "Training updated successfully"
        ]);
    }

    public function removeTraining($id){
    	$picture = Training::where("id", $id)->first();

        Storage::delete('public/training/'.$picture->picture);

        Training::destroy($id);

    	return redirect()->back()->withErrors([
    		"message" => "Training removed successfully"
    	]);
    }
}
