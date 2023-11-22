<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AfiVacunacion;

class AfiVacDashController extends Controller
{
    public function __construct()
    {
        $this->middleware('can:afivac-dash.index')->only('index');
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dataAseguramiento = AfiVacunacion::where('indicadores_pts', 'Cobertura Aseguramiento (%)')
            ->get();

        // Obtener datos para una gráfica (Cobertura de vacunación con BCG en nacidos vivos)
        $dataBCG = AfiVacunacion::where('indicadores_pts', 'Cobertura de vacunación con BCG en nacidos vivos')
            ->get();

        //Obtener datos para una gráfica (Cobertura de vacunación con DPT Tercera dosis en menores de 1 año)
        $dataDPT = AfiVacunacion::where('indicadores_pts', 'Cobertura de vacunación con DPT Tercera dosis en menores de 1 año')
            ->get();

        //Obtener datos para una gráfica (Cobertura de vacunación con anti Polio Tercera dosis en menores de 1 año)
        $dataAntiPolio = AfiVacunacion::where('indicadores_pts', 'Cobertura de vacunación con anti Polio Tercera dosis en menores de 1 año')
            ->get();

        //Obtener datos para una gráfica (Cobertura de vacunación contra triple viral en niños y niñas de 1 año)
        $dataTripleViral = AfiVacunacion::where('indicadores_pts', 'Cobertura de vacunación contra triple viral en niños y niñas de 1 año')
            ->get();

        //Obtener datos para una gráfica (Cobertura de vacunación con DPT segundo refuerzo niños de 5 años)
        $dataDPTRefuerzo = AfiVacunacion::where('indicadores_pts', 'Cobertura de vacunación con DPT segundo refuerzo niños de 5 años')
            ->get();

        //Obtener datos para una gráfica (Cobertura de vacunación contra triple viral segundo refuerzo en niños y niñas de 5 años)
        $dataTripleViralRefuerzo = AfiVacunacion::where('indicadores_pts', 'Cobertura de vacunación contra triple viral segundo refuerzo en niños y niñas de 5 años')
            ->get();

        return view('reporte-afivac', compact('dataAseguramiento', 'dataBCG', 'dataDPT', 'dataAntiPolio', 'dataTripleViral', 'dataDPTRefuerzo', 'dataTripleViralRefuerzo'));
    }
}