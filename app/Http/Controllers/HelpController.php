<?php

namespace App\Http\Controllers;

use App\HelpDesk;
use Illuminate\Http\Request;

class HelpController extends Controller
{
    public function saveHelpInfo(Request $request){
        $this->validate($request, [
            'user_name' => 'required|string',
            'user_email' => 'required|email|max:50',
            'phone' => 'required|string',
            'message' => 'required|string',
        ]);

        $result = HelpDesk::create($request->all());

        if($result){
            return redirect()->back()->withErrors(["message"=>"Your requested submitted successfully"]);
        }
        else{
            return redirect()->back()->withErrors("Something went wrong. Please try again");
        }
    }

    public function showList(){
        $results = HelpDesk::orderby('id', 'desc')->get();
        return view('adminpanel.helplist')->with(compact("results"));
    }

    public function remove($id){
        $result = HelpDesk::where('id', $id)->delete();

        if($result){
            return redirect()->back()->withErrors(["message"=>"Operation Successfull"]);
        }
        else{
            return redirect()->back()->withErrors("Something went wrong. Please try again");
        }
    }
}
