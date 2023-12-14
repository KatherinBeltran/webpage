<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pi;

class PiSecGobiernoDashController extends Controller
{
    public function __construct()
    {
        $this->middleware('can:pi-sec-gobierno-dash.index')->only('index');
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $consecutivo136 = Pi::where('consecutivo_de_la_meta', 136)->first();

        // Multiply the value by 100
        $consecutivo136->eficiencia_2023_avance_financiero_2023 *= 100;
        $consecutivo136->efectividad_2023 *= 100;
        $consecutivo136->eficiencia_acumulada_avance_fisico *= 100;

        $consecutivo137 = Pi::where('consecutivo_de_la_meta', 137)->first();
        // Multiply the value by 100
        $consecutivo137->eficiencia_2023_avance_financiero_2023 *= 100;
        $consecutivo137->efectividad_2023 *= 100;
        $consecutivo137->eficiencia_acumulada_avance_fisico *= 100;

        $consecutivo138 = Pi::where('consecutivo_de_la_meta', 138)->first();
        // Multiply the value by 100
        $consecutivo138->eficiencia_2023_avance_financiero_2023 *= 100;
        $consecutivo138->efectividad_2023 *= 100;
        $consecutivo138->eficiencia_acumulada_avance_fisico *= 100;
        
        $consecutivo139 = Pi::where('consecutivo_de_la_meta', 139)->first();
        // Multiply the value by 100
        $consecutivo139->eficiencia_2023_avance_financiero_2023 *= 100;
        $consecutivo139->efectividad_2023 *= 100;
        $consecutivo139->eficiencia_acumulada_avance_fisico *= 100;

        $consecutivo140 = Pi::where('consecutivo_de_la_meta', 140)->first();
        // Multiply the value by 100
        $consecutivo140->eficiencia_2023_avance_financiero_2023 *= 100;
        $consecutivo140->efectividad_2023 *= 100;
        $consecutivo140->eficiencia_acumulada_avance_fisico *= 100;

        $consecutivo163 = Pi::where('consecutivo_de_la_meta', 163)->first();
        // Multiply the value by 100
        $consecutivo163->eficiencia_2023_avance_financiero_2023 *= 100;
        $consecutivo163->efectividad_2023 *= 100;
        $consecutivo163->eficiencia_acumulada_avance_fisico *= 100;

        $consecutivo164 = Pi::where('consecutivo_de_la_meta', 164)->first();
        // Multiply the value by 100
        $consecutivo164->eficiencia_2023_avance_financiero_2023 *= 100;
        $consecutivo164->efectividad_2023 *= 100;
        $consecutivo164->eficiencia_acumulada_avance_fisico *= 100;

        $consecutivo165 = Pi::where('consecutivo_de_la_meta', 165)->first();
        // Multiply the value by 100
        $consecutivo165->eficiencia_2023_avance_financiero_2023 *= 100;
        $consecutivo165->efectividad_2023 *= 100;
        $consecutivo165->eficiencia_acumulada_avance_fisico *= 100;

        $consecutivo166 = Pi::where('consecutivo_de_la_meta', 166)->first();
        // Multiply the value by 100
        $consecutivo166->eficiencia_2023_avance_financiero_2023 *= 100;
        $consecutivo166->efectividad_2023 *= 100;
        $consecutivo166->eficiencia_acumulada_avance_fisico *= 100;

        $consecutivo167 = Pi::where('consecutivo_de_la_meta', 167)->first();
        // Multiply the value by 100
        $consecutivo167->eficiencia_2023_avance_financiero_2023 *= 100;
        $consecutivo167->efectividad_2023 *= 100;
        $consecutivo167->eficiencia_acumulada_avance_fisico *= 100;

        $consecutivo168 = Pi::where('consecutivo_de_la_meta', 168)->first();
        // Multiply the value by 100
        $consecutivo168->eficiencia_2023_avance_financiero_2023 *= 100;
        $consecutivo168->efectividad_2023 *= 100;
        $consecutivo168->eficiencia_acumulada_avance_fisico *= 100;

        $consecutivo169 = Pi::where('consecutivo_de_la_meta', 169)->first();
        // Multiply the value by 100
        $consecutivo169->eficiencia_2023_avance_financiero_2023 *= 100;
        $consecutivo169->efectividad_2023 *= 100;
        $consecutivo169->eficiencia_acumulada_avance_fisico *= 100;

        $consecutivo170 = Pi::where('consecutivo_de_la_meta', 170)->first();
        // Multiply the value by 100
        $consecutivo170->eficiencia_2023_avance_financiero_2023 *= 100;
        $consecutivo170->efectividad_2023 *= 100;
        $consecutivo170->eficiencia_acumulada_avance_fisico *= 100;

        $consecutivo171 = Pi::where('consecutivo_de_la_meta', 171)->first();
        // Multiply the value by 100
        $consecutivo171->eficiencia_2023_avance_financiero_2023 *= 100;
        $consecutivo171->efectividad_2023 *= 100;
        $consecutivo171->eficiencia_acumulada_avance_fisico *= 100;

        $consecutivo172 = Pi::where('consecutivo_de_la_meta', 172)->first();
        // Multiply the value by 100
        $consecutivo172->eficiencia_2023_avance_financiero_2023 *= 100;
        $consecutivo172->efectividad_2023 *= 100;
        $consecutivo172->eficiencia_acumulada_avance_fisico *= 100;

        $consecutivo173 = Pi::where('consecutivo_de_la_meta', 173)->first();
        // Multiply the value by 100
        $consecutivo173->eficiencia_2023_avance_financiero_2023 *= 100;
        $consecutivo173->efectividad_2023 *= 100;
        $consecutivo173->eficiencia_acumulada_avance_fisico *= 100;

        $consecutivo174 = Pi::where('consecutivo_de_la_meta', 174)->first();
        // Multiply the value by 100
        $consecutivo174->eficiencia_2023_avance_financiero_2023 *= 100;
        $consecutivo174->efectividad_2023 *= 100;
        $consecutivo174->eficiencia_acumulada_avance_fisico *= 100;

        $consecutivo175 = Pi::where('consecutivo_de_la_meta', 175)->first();
        // Multiply the value by 100
        $consecutivo175->eficiencia_2023_avance_financiero_2023 *= 100;
        $consecutivo175->efectividad_2023 *= 100;
        $consecutivo175->eficiencia_acumulada_avance_fisico *= 100;

        $consecutivo176 = Pi::where('consecutivo_de_la_meta', 176)->first();
        // Multiply the value by 100
        $consecutivo176->eficiencia_2023_avance_financiero_2023 *= 100;
        $consecutivo176->efectividad_2023 *= 100;
        $consecutivo176->eficiencia_acumulada_avance_fisico *= 100;

        $consecutivo177 = Pi::where('consecutivo_de_la_meta', 177)->first();
        // Multiply the value by 100
        $consecutivo177->eficiencia_2023_avance_financiero_2023 *= 100;
        $consecutivo177->efectividad_2023 *= 100;
        $consecutivo177->eficiencia_acumulada_avance_fisico *= 100;

        $consecutivo178 = Pi::where('consecutivo_de_la_meta', 178)->first();
        // Multiply the value by 100
        $consecutivo178->eficiencia_2023_avance_financiero_2023 *= 100;
        $consecutivo178->efectividad_2023 *= 100;
        $consecutivo178->eficiencia_acumulada_avance_fisico *= 100;

        $consecutivo179 = Pi::where('consecutivo_de_la_meta', 179)->first();
        // Multiply the value by 100
        $consecutivo179->eficiencia_2023_avance_financiero_2023 *= 100;
        $consecutivo179->efectividad_2023 *= 100;
        $consecutivo179->eficiencia_acumulada_avance_fisico *= 100;

        // Calculate the average for the specified column and round it to the nearest integer
         $averageEficiencia = round(Pi::avg('eficiencia_2023_avance_financiero_2023') * 100);
         $averageEficiencia1 = round(Pi::avg('efectividad_2023') * 100);
         $averageEficiencia2 = round(Pi::avg('eficiencia_acumulada_avance_fisico') * 100);

         $totalCompromisos = Pi::sum('total_compromisos_2023');
         $totalCompromisos1 = Pi::sum('total_obligaciones');

        return view('reporte-pi-sec-gobierno', ['consecutivo136' => $consecutivo136, 'consecutivo137' => $consecutivo137, 'consecutivo138' => $consecutivo138, 'consecutivo139' => $consecutivo139, 'consecutivo140' => $consecutivo140, 'consecutivo163' => $consecutivo163, 'consecutivo164' => $consecutivo164, 'consecutivo165' => $consecutivo165, 'consecutivo166' => $consecutivo166, 'consecutivo167' => $consecutivo167, 'consecutivo168' => $consecutivo168, 'consecutivo169' => $consecutivo169, 'consecutivo170' => $consecutivo170, 'consecutivo171' => $consecutivo171, 'consecutivo172' => $consecutivo172, 'consecutivo173' => $consecutivo173, 'consecutivo174' => $consecutivo174, 'consecutivo175' => $consecutivo175, 'consecutivo176' => $consecutivo176, 'consecutivo177' => $consecutivo177, 'consecutivo178' => $consecutivo178, 'consecutivo179' => $consecutivo179, 'averageEficiencia' =>  $averageEficiencia, 'averageEficiencia1' =>  $averageEficiencia1, 'averageEficiencia2' =>  $averageEficiencia2, 'totalCompromisos' =>  $totalCompromisos, 'totalCompromisos1' =>  $totalCompromisos1]);
    }
}