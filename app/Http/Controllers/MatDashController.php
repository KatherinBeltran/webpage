<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\MatSector;

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

        return view('reporte-mat', compact('matData', 'lastTwoYearsData'));
    }
}
