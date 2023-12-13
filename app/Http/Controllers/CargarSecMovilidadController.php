<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Excel;
use App\Models\Pi;

class CargarSecMovilidadController extends Controller
{
    public function __construct()
    {
        $this->middleware('can:cargar-sec-movilidad.index')->only('index');
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('cargar-sec-movilidad');
    }

    public function importar(Request $request)
    {
        if ($request->hasFile('fileDatos')) {
            $path = $request->file('fileDatos')->getRealPath();

            // Carga el archivo Excel y obtén un array de todas las hojas
            $excel = Excel::toArray([], $path);

            // Itera sobre cada hoja y la procesa
            foreach ($excel as $index => $hoja) {
                // Obtiene el nombre de la hoja proporcionando la ruta del archivo Excel
                $nombreHoja = $this->getNombreHoja($index, $path);

                // Llama a la función correspondiente para manejar la hoja
                $this->importarHoja($nombreHoja, $hoja);
            }
        }

        return back();
    }

    private function importarHoja($nombreHoja, $hoja)
    {
        set_time_limit(0); // 0 significa sin límite de tiempo de ejecución
        
        // Define un mapeo entre el nombre de la hoja y la función correspondiente
        $funciones = [
            'PI' => 'importarHojaPi'
            // ... Agrega más hojas según sea necesario
        ];

        // Busca el nombre de la hoja en el conjunto de nombres conocidos
        foreach ($funciones as $nombreConocido => $funcion) {
            if (stripos($nombreHoja, $nombreConocido) !== false) {
                // Llama a la función correspondiente para manejar la hoja
                $this->{$funcion}($hoja);
                return;
            }
        }
    }

    private function getNombreHoja($index, $excelFilePath)
    {
        // Carga todas las hojas del archivo Excel
        $excelReader = \PhpOffice\PhpSpreadsheet\IOFactory::createReader('Xlsx');
        $excel = $excelReader->load($excelFilePath);

        // Obtiene el nombre de todas las hojas en el archivo Excel
        $nombresHojas = $excel->getSheetNames();
        $excel->disconnectWorksheets(); 
        
        // Verifica si el índice existe en el arreglo y devuelve el nombre de la hoja
        return $nombresHojas[$index] ?? null;
    }

    private function importarHojaPi($hoja)
    {
        if (!empty($hoja) && is_array($hoja)) {
            // Itera sobre los datos desde la segunda fila (omitir la fila de encabezados)
            for ($i = 1; $i < count($hoja); $i++) {
                $indicador_de_bienestar = $hoja[$i][0];
                $consecutivo_de_la_meta = $hoja[$i][1];
                $meta = $hoja[$i][2];
                $entidad_responsable = $hoja[$i][3];
                $indicador = $hoja[$i][4];
                $tipo_de_meta = $hoja[$i][5];
                $total_compromisos_2023 = $hoja[$i][6];
                $total_obligaciones = $hoja[$i][7];
                $eficiencia_2023_avance_financiero_2023 = $hoja[$i][8];
                $efectividad_2023 = $hoja[$i][9];
                $eficiencia_acumulada_avance_fisico = $hoja[$i][10];

                // Busca si ya existe una fila con el mismo valor en 'fruta' y 'fruta_codigo'
                $datoExistente = Pi::where('indicador_de_bienestar', $indicador_de_bienestar)->where('consecutivo_de_la_meta', $consecutivo_de_la_meta)->first();

                if ($datoExistente) {
                    // Si ya existe, actualiza los valores
                    $datoExistente->update([
                        'meta' => $meta,
                        'entidad_responsable' => $entidad_responsable,
                        'indicador' => $indicador,
                        'tipo_de_meta' => $tipo_de_meta,
                        'total_compromisos_2023' => $total_compromisos_2023,
                        'total_obligaciones' => $total_obligaciones,
                        'eficiencia_2023_avance_financiero_2023' => $eficiencia_2023_avance_financiero_2023,
                        'efectividad_2023' => $efectividad_2023,
                        'eficiencia_acumulada_avance_fisico' => $eficiencia_acumulada_avance_fisico
                    ]);
                } else {
                    // Si no existe, crea un nuevo registro
                    Pi::create([
                        'indicador_de_bienestar' => $indicador_de_bienestar,
                        'consecutivo_de_la_meta' => $consecutivo_de_la_meta,
                        'meta' => $meta,
                        'entidad_responsable' => $entidad_responsable,
                        'indicador' => $indicador,
                        'tipo_de_meta' => $tipo_de_meta,
                        'total_compromisos_2023' => $total_compromisos_2023,
                        'total_obligaciones' => $total_obligaciones,
                        'eficiencia_2023_avance_financiero_2023' => $eficiencia_2023_avance_financiero_2023,
                        'efectividad_2023' => $efectividad_2023,
                        'eficiencia_acumulada_avance_fisico' => $eficiencia_acumulada_avance_fisico
                    ]);
                }
            }
        }
    }
}