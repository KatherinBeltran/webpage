<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\MatSector;
use App\Models\MatEtnico;
use App\Models\EstVenezolano;

class MatDashController extends Controller
{
    public function __construct()
    {
        $this->middleware('can:mat-dash.index')->only('index');
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Gráfico de líneas (primer gráfico)
        $matData = MatSector::select('año', DB::raw('SUM(oficial) as oficial_sum'), DB::raw('SUM(contratada) as contratada_sum'), DB::raw('SUM(privada) as privada_sum'))
            ->groupBy('año')
            ->orderBy('año')
            ->get();

        // Gráfico de barras agrupadas (segundo gráfico)
        $lastTwoYearsData = MatSector::where('año', '>=', now()->year - 1)
            ->select('año', 'oficial', 'contratada', 'privada')
            ->get()
            ->groupBy('año');
        
        // Tercer gráfico (barras agrupadas por etnias)
        $lastFiveYearsDataEtnias = MatEtnico::whereIn('año', range(now()->year - 4, now()->year))
            ->whereIn('etnia', ['indigena', 'negritudes'])
            ->select('año', 'etnia', DB::raw('SUM(valor) as valor_sum'))
            ->groupBy('año', 'etnia')
            ->orderBy('año')
            ->get();

        // Gráfico de líneas (cuarto gráfico)
        $matData1 = EstVenezolano::select('año', DB::raw('SUM(oficial) as oficial_sum'), DB::raw('SUM(contratada) as contratada_sum'), DB::raw('SUM(privada) as privada_sum'))
            ->groupBy('año')
            ->orderBy('año')
            ->get();

        // Gráfico de barras agrupadas (quinto gráfico)
        $lastTwoYearsData1 = EstVenezolano::where('año', '>=', now()->year - 1)
            ->select('año', 'oficial', 'contratada', 'privada')
            ->get()
            ->groupBy('año');

        return view('reporte-mat', compact('matData', 'lastTwoYearsData', 'lastFiveYearsDataEtnias', 'matData1', 'lastTwoYearsData1'));
    }
}
