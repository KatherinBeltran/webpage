<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\MatSector;
use App\Models\MatEtnico;
use App\Models\EstVenezolano;
use App\Models\Extraedad;

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

        // Segundo gráfico (barras agrupadas)
        $lastTwoYearsData = MatSector::where('año', '>=', now()->year - 1)
            ->select('año', 'oficial', 'contratada', 'privada')
            ->get()
            ->groupBy('año');
        
        $barChartData = [];
        
        foreach ($lastTwoYearsData as $year => $dataOfYear) {
            $sumOficial = $dataOfYear->sum('oficial');
            $sumContratada = $dataOfYear->sum('contratada');
            $sumPrivada = $dataOfYear->sum('privada');
        
            $barChartData[] = [
                'label' => $year,
                'data' => [$sumOficial, $sumContratada, $sumPrivada],
            ];
        }
        
        // Tercer gráfico (barras agrupadas por etnias)
        $lastFiveYearsDataEtnias = MatEtnico::whereIn('año', range(now()->year - 4, now()->year))
            ->whereIn('etnia', ['indigena', 'negritudes'])
            ->select('año', 'etnia', DB::raw('SUM(matricula) as matricula_sum'))
            ->groupBy('año', 'etnia')
            ->orderBy('año')
            ->get();

        // Cuarto gráfico (anillos trayectoria)
        $matriculaPorGrado = DB::table('tra_grado')
            ->select('año', 'grado', DB::raw('SUM(matricula) as matricula_sum'))
            ->groupBy('año', 'grado')
            ->orderBy('año')
            ->get();
        
        $data = [];

        foreach ($matriculaPorGrado as $registro) {
            $año = $registro->año;
            $grado = $registro->grado;
            $matriculaSum = $registro->matricula_sum;
        
            if (!isset($data[$año])) {
                $data[$año] = [];
            }
        
            $data[$año][$grado] = $matriculaSum;
        }
            
        // Gráfico de líneas (quinto gráfico)
        $matData1 = EstVenezolano::select('año', DB::raw('SUM(oficial) as oficial_sum'), DB::raw('SUM(contratada) as contratada_sum'), DB::raw('SUM(privada) as privada_sum'))
            ->groupBy('año')
            ->orderBy('año')
            ->get();

        // Sexto gráfico (barras agrupadas)
        $lastTwoYearsData1 = EstVenezolano::where('año', '>=', now()->year - 1)
            ->select('año', 'oficial', 'contratada', 'privada')
            ->get()
            ->groupBy('año');
        
        $barChartData1 = [];
        
        foreach ($lastTwoYearsData1 as $year => $dataOfYear) {
            $sumOficial = $dataOfYear->sum('oficial');
            $sumContratada = $dataOfYear->sum('contratada');
            $sumPrivada = $dataOfYear->sum('privada');
        
            $barChartData1[] = [
                'label' => $year,
                'data' => [$sumOficial, $sumContratada, $sumPrivada],
            ];
        }

        // Gráfico circular (septimo gráfico)
        $edadesPorGrado = [
            'Transicion' => [8, 9, 10, 11, 12, 13],
            'Primero' => range(9, 20),
            'Segundo' => range(10, 20),
            'Tercero' => range(11, 20),
            'Cuarto' => range(12, 20),
            'Quinto' => range(13, 20),
            'Sexto' => range(14, 20),
            'Septimo' => range(15, 20),
            'Octavo' => range(16, 20),
            'Noveno' => range(17, 20),
            'Decimo' => range(18, 20),
            'Once' => range(19, 20),
        ];
    
        $data1 = [];
    
        foreach ($edadesPorGrado as $grado => $edades) {
            $totalMatriculaGrado = Extraedad::whereIn('grado', [$grado])->sum('matricula');
            $totalMatriculaExtraedad = Extraedad::whereIn('grado', [$grado])->whereBetween('edad', [$edades[0], $edades[count($edades)-1]])->sum('matricula');
    
            $porcentaje = ($totalMatriculaGrado != 0) ? ($totalMatriculaExtraedad / $totalMatriculaGrado) * 100 : 0;
    
            $data1[] = [
                'grado' => $grado,
                'total_matricula_extraedad' => $totalMatriculaExtraedad,
                'porcentaje' => $porcentaje,
            ];
        }

        // Gráfico de barras apiladas (octavo gráfico)
        $data2 = DB::table('pob_discapacidad')
        ->select('sector', 'discapacidad', DB::raw('SUM(matricula) as total'))
        ->groupBy('sector', 'discapacidad')
        ->get();

        return view('reporte-mat', compact('matData', 'barChartData', 'lastFiveYearsDataEtnias', 'data', 'matData1', 'barChartData1', 'data1', 'data2'));
    }
}