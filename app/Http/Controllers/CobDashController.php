<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CobDashController extends Controller
{
    public function __construct()
    {
        $this->middleware('can:cob-dash.index')->only('index');
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Código para cob_neta
        $promediosNeta = DB::table('cob_neta')
            ->select('año', DB::raw('AVG(cobertura_neta_transicion) as avg_transicion'), 
                                DB::raw('AVG(cobertura_neta_primaria) as avg_primaria'),
                                DB::raw('AVG(cobertura_neta_secundaria) as avg_secundaria'),
                                DB::raw('AVG(cobertura_neta_media) as avg_media'),
                                DB::raw('AVG(cobertura_neta_basica) as avg_basica'))
            ->where('nombre_etc', 'SOACHA')
            ->groupBy('año')
            ->get();

        $chartDataNeta = [];
        foreach ($promediosNeta as $item) {
            $chartDataNeta[] = [
                'año' => $item->año,
                'promedio' => ($item->avg_transicion + $item->avg_primaria + $item->avg_secundaria + $item->avg_media + $item->avg_basica) / 5,
            ];
        }

        $datosNeta = DB::table('cob_neta')
            ->select('año', 'cobertura_neta_transicion', 'cobertura_neta_primaria', 'cobertura_neta_secundaria', 'cobertura_neta_media', 'cobertura_neta_basica')
            ->where('nombre_etc', 'SOACHA')
            ->orderBy('año', 'desc')
            ->take(2)
            ->get();

        // Código para cob_bruta
        $promediosBruta = DB::table('cob_bruta')
            ->select('año', DB::raw('AVG(cobertura_bruta_transicion) as avg_transicion'), 
                                DB::raw('AVG(cobertura_bruta_primaria) as avg_primaria'),
                                DB::raw('AVG(cobertura_bruta_secundaria) as avg_secundaria'),
                                DB::raw('AVG(cobertura_bruta_media) as avg_media'),
                                DB::raw('AVG(cobertura_bruta_basica) as avg_basica'))
            ->where('nombre_etc', 'SOACHA')
            ->groupBy('año')
            ->get();

        $chartDataBruta = [];
        foreach ($promediosBruta as $item) {
            $chartDataBruta[] = [
                'año' => $item->año,
                'promedio' => ($item->avg_transicion + $item->avg_primaria + $item->avg_secundaria + $item->avg_media + $item->avg_basica) / 5,
            ];
        }

        $datosBruta = DB::table('cob_bruta')
            ->select('año', 'cobertura_bruta_transicion', 'cobertura_bruta_primaria', 'cobertura_bruta_secundaria', 'cobertura_bruta_media', 'cobertura_bruta_basica')
            ->where('nombre_etc', 'SOACHA')
            ->orderBy('año', 'desc')
            ->take(2)
            ->get();

        // Pasa los datos a la vista
        return view('reporte-cob')->with([
            'chartDataNeta' => json_encode($chartDataNeta),
            'datosNeta' => $datosNeta,
            'chartDataBruta' => json_encode($chartDataBruta),
            'datosBruta' => $datosBruta,
        ]);
    }
}