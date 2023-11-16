<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Pae;

class PaeDashController extends Controller
{
    public function __construct()
    {
        $this->middleware('can:pae-dash.index')->only('index');
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Obtener datos para la primera gráfica (por institución)
        $dataInstituciones = Pae::select('institucion', 'mes', \DB::raw('SUM(registro) as total'))
            ->groupBy('institucion', 'mes')
            ->get();

        // Obtener datos para la segunda gráfica (por sede)
        $dataSedes = Pae::select('sede', 'mes', \DB::raw('SUM(registro) as total'))
            ->groupBy('sede', 'mes')
            ->get();

        return view('reporte-pae', compact('dataInstituciones', 'dataSedes'));
    }
}
