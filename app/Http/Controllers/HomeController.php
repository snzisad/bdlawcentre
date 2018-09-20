<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Training;
use App\Slideimage;
use App\Practice;
use App\Client;
use App\Feedback;
use App\Lawer;
use App\Link;
use App\Membership;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $trainings = Training::orderBy("id", "desc")->get();
        $slideimages = Slideimage::orderBy("id", "desc")->get();
        $practices = Practice::orderBy("title", "asc")->get();
        $lawers = Lawer::orderBy("id", "asc")->get();
        $clients = Client::orderBy("id", "desc")->get();
        $feedback = Feedback::orderBy("id", "desc")->get();
        $membership = Membership::orderBy("id", "desc")->get();
        $links = Link::orderBy("id", "desc")->get();

        return view('home')->with(compact("trainings", "slideimages", "practices", "lawers", "clients", "feedback", "membership", "links"));
    }
}
