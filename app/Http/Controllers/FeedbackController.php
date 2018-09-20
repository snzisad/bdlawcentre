<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Feedback;
use Illuminate\Support\Facades\Storage;

class FeedbackController extends Controller
{
    public function index(){
        $allfeedback = Feedback::orderBy("id", "desc")->get();

        return view('adminpanel.feedback')->with(compact("allfeedback"));
    }

    public function addFeedback(Request $request){
        $this->validate($request, [
            "client" => "required",
            "occupation" => "required",
            "feedback" => "required",
        ]);

        Feedback::create($request->all());

        return redirect()->back()->withErrors([
            "message" => "Feedback added successfully"
        ]);
    }

    public function updateFeedback(Request $request){
        $this->validate($request, [
            "client" => "required",
            "occupation" => "required",
            "feedback" => "required",
        ]);

        Feedback::where("id", $request->id)->update([
            "client" => $request->client,
            "occupation" => $request->occupation,
            "feedback" => $request->feedback,
        ]); 

        return redirect()->back()->withErrors([
            "message" => "Feedback updated successfully"
        ]);
    }

    public function removeFeedback($id){
        Feedback::destroy($id);

        return redirect()->back()->withErrors([
            "message" => "Feedback deleted successfully"
        ]);
    }
    
}
