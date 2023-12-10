<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PiDashController extends Controller
{
    public function __construct()
    {
        $this->middleware('can:pi-dash.index')->only('index');
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view ('reporte-pi');
    }
}