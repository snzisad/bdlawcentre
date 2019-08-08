<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Link;
use Illuminate\Support\Facades\Storage;

class LinkController extends Controller
{
    public function index(){
        $links = Link::orderBy("id", "desc")->get();

        return view('adminpanel.links')->with(compact("links"));
    }

    public function addLink(Request $request){
        $this->validate($request, [
            "link" => "required",
        ]);

        Link::create($request->all());

        return redirect()->back()->withErrors([
            "message" => "Link added successfully"
        ]);
    }

    public function updateLink(Request $request){
        $this->validate($request, [
            "link" => "required",
        ]);

        Link::where("id", $request->id)->update([
            "link" => $request->link,
        ]); 

        return redirect()->back()->withErrors([
            "message" => "Link updated successfully"
        ]);
    }

    public function removeLink($id){
        Link::destroy($id);

        return redirect()->back()->withErrors([
            "message" => "Link deleted successfully"
        ]);
    }
    
}
