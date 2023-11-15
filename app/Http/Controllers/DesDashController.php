<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DesDashController extends Controller
{
    public function __construct()
    {
        $this->middleware('can:des-dash.index')->only('index');
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Código para desercion
        $promediosDesercion = DB::table('desercion')
            ->select('año', DB::raw('AVG(desercion_transicion) as avg_transicion'), 
                                DB::raw('AVG(desercion_primaria) as avg_primaria'),
                                DB::raw('AVG(desercion_secundaria) as avg_secundaria'),
                                DB::raw('AVG(desercion_media) as avg_media'))
            ->groupBy('año')
            ->get();

        $chartDataDesercion = [];
        foreach ($promediosDesercion as $item) {
            $chartDataDesercion[] = [
                'año' => $item->año,
                'promedio' => ($item->avg_transicion + $item->avg_primaria + $item->avg_secundaria + $item->avg_media) / 4,
            ];
        }

        // Obtén los datos de la base de datos
        $datosDesercion = DB::table('desercion')->get();

        return view('reporte-des', compact('chartDataDesercion', 'datosDesercion'));
    }
}