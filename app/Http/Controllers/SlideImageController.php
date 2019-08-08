<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Slideimage;
use Illuminate\Support\Facades\Storage;

class SlideImageController extends Controller
{
	public function index(){
		$images = Slideimage::orderBy("id", "desc")->get();

    	return view('adminpanel.slideimage')->with(compact("images"));
	}

    public function uploadImageSlide(Request $request){
    	$this->validate($request, [
    		"title" => "required",
    		"description" => "required",
    		"banner" => "required|mimes: jpg,jpeg,png",
    	]);
    	//get uploaded banner
    	$banner = $request->banner;

    	$upload = Slideimage::create($request->all());

    	$filename = $upload->id.".".$banner->extension();

        $banner->storeAs('public/banner',$filename);

        Slideimage::where("id", $upload->id)->update([
        	"banner" => $filename
        ]);

        return redirect()->back()->withErrors([
        	"message" => "Banner uploaded successfully"
        ]);
    }

    public function updateImageSlide(Request $request){
        $this->validate($request, [
            "id" => "required",
            "title" => "required",
            "description" => "required",
            "banner" => "mimes: jpg,jpeg,png",
        ]);

        $id = $request->id;

        //if user upload another banner image
        if($request->banner){

            //get the existing banner
            $banner = Slideimage::where("id", $id)->first();

            //remove from server
             Storage::delete('public/banner/'.$banner->banner);  

            //get the uploaded banner
             $banner = $request->banner;

             //set new name
             $filename = $id.".".$banner->extension();

             //upload this new one to the server
             $banner->storeAs('public/banner',$filename); 


             //update into database
            Slideimage::where("id", $id)->update([
                "title" => $request->title,
                "description" => $request->description,
                "banner" => $filename
            ]);   
        }
        else{
            Slideimage::where("id", $id)->update([
                "title" => $request->title,
                "description" => $request->description
            ]); 
        }

        return redirect()->back()->withErrors([
            "message" => "Banner updated successfully"
        ]);
    }

    public function removeBanner($id){
    	$banner = Slideimage::where("id", $id)->first();

        Storage::delete('public/banner/'.$banner->banner);

        Slideimage::destroy($id);

    	return redirect("imageslide")->withErrors([
    		"message" => "Banner removed successfully"
    	]);
    }
}
