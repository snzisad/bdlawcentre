<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Information;

class InformationController extends Controller
{
    public function index(){
        $info = Information::orderBy('id', 'desc')->first();

        return view("adminpanel.information")->with(compact("info"));
    }

    public function saveInformation(Request $request){
    	$this->validate($request, [
    		"title" => "required",
    		"moto" => "required",
    		"address" => "required",
    		"email" => "required",
    		"facebook" => "required",
    		"whatsapp" => "required",
    		"skype" => "required",
    		"viber" => "required",
    		"imo" => "required",
    		"youtube" => "required",
    		"twitter" => "required",
    		"linkedin" => "required",
    		"gplus" => "required",
    		"instagram" => "required",
    		"pinterest" => "required",
    	]);

    	Information::create($request->all());

        if($request->logo){
            $request->logo->storeAs("public/logo","logo.png");
        }

    	return redirect()->back()->withErrors([
    		"message" => "Information Saved Successfully"
    	]);
    }
}
