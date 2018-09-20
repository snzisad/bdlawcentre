<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Client;
use Illuminate\Support\Facades\Storage;

class ClientController extends Controller
{
    public function index(){
        $clients = Client::orderBy("id", "desc")->get();

        return view('adminpanel.clients')->with(compact("clients"));
    }

    public function addClient(Request $request){
        $this->validate($request, [
            "name" => "required",
            "picture" => "required|mimes: jpg,jpeg,png",
        ]);

        //get uploaded banner
        $picture = $request->picture;

        $data = Client::create($request->all());

        $filename = $data->id.".".$picture->extension();

        $picture->storeAs('public/client',$filename);

        Client::where("id", $data->id)->update([
            "picture" => $filename
        ]);

        return redirect()->back()->withErrors([
            "message" => "Client added successfully"
        ]);
    }

    public function updateClient(Request $request){
        $this->validate($request, [
            "id" => "required",
            "name" => "required",
            "picture" => "mimes: jpg,jpeg,png",
        ]);

        $id = $request->id;

        //if user upload another picture
        if($request->picture){

            //get the existing picture
            $data = Client::where("id", $id)->first();

            //remove from server
             Storage::delete('public/client/'.$data->picture);  

            //get the uploaded picture
             $data = $request->picture;

             //set new name
             $filename = $id.".".$data->extension();

             //upload this new one to the server
             $data->storeAs('public/client',$filename); 


             //update into database
            Client::where("id", $id)->update([
                "name" => $request->name,
                "picture" => $filename
            ]);   
        }
        else{
            Client::where("id", $id)->update([
                "name" => $request->name,
            ]); 
        }

        return redirect()->back()->withErrors([
            "message" => "Client information updated successfully"
        ]);
    }

    public function removeClient($id){
        $data = Client::where("id", $id)->first();

        Storage::delete('public/client/'.$data->picture);

        Client::destroy($id);

        return redirect()->back()->withErrors([
            "message" => "Client deleted successfully"
        ]);
    }
    
}
