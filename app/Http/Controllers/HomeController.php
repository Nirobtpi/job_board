<?php

namespace App\Http\Controllers;

use App\Models\job\Customjob;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // $user=Auth::user()->id;
        $jobs=Customjob::get()->take(5);
        $totaljob=Customjob::count();
        return view('home', compact('jobs','totaljob'));
    }
}
