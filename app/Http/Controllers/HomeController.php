<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pi;

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

        $totalCompromisos = Pi::sum('total_compromisos_2023');
         $totalCompromisos1 = Pi::sum('total_obligaciones');
        return view('home',['totalCompromisos' =>  $totalCompromisos, 'totalCompromisos1' =>  $totalCompromisos1]);
    }
}
