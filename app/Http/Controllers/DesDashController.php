<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Eficiencium;

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


        // Obtener los datos de la base de datos para la "Población por fuera"
        $chartDataDiferencia = DB::table('fue_sistema')
            ->select('año', 
                DB::raw('SUM(CASE WHEN sector = "Población 5 a 16 años" THEN desercion ELSE 0 END) as poblacion'),
                DB::raw('SUM(CASE WHEN sector = "Matrícula 5 a 16 años" THEN desercion ELSE 0 END) as matricula')
            )
            ->groupBy('año')
            ->get();

        $chartDataDiferencia = $chartDataDiferencia->map(function ($data) {
            return [
                'año' => $data->año,
                'diferencia' => abs($data->poblacion - $data->matricula),
            ];
        });

        // Obtén los datos de la base de datos, por ejemplo:
        $datosEficiencia = Eficiencium::select('año', 'sector', 'desertor')
        ->orderBy('año')
        ->get();

        return view('reporte-des', compact('chartDataDesercion', 'datosDesercion', 'chartDataDiferencia', 'datosEficiencia'));
    }
}