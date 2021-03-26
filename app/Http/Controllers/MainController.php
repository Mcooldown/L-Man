<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function viewHome()
    {
        return view('pages.main.home');
    }

    public function viewDashboard(){
        return view('pages.main.index_dashboard');
    }
}
