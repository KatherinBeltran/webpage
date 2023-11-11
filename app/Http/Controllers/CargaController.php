<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Excel;
use App\Models\CobBrutum;
use App\Models\CobNetum;

class CargaController extends Controller
{
    public function __construct()
    {
        $this->middleware('can:cargar.index')->only('index');
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('carga');
    }

    public function importar(Request $request)
    {
        if ($request->hasFile('fileDatos')) {
            $path = $request->file('fileDatos')->getRealPath();
    
            // Carga el archivo Excel y obtén un array de todas las hojas
            $excel = Excel::toArray([], $path);
    
            // Accede a la hoja 'COB BRUTA'
            $cobBruta = $excel[0]; // Primer índice porque es la primera hoja
    
            // Accede a la hoja 'CON_NETA'
            $conNeta = $excel[1]; // Segundo índice porque es la segunda hoja
    
            // Maneja la hoja 'COB BRUTA'
            $this->importarHojaCobBruta($cobBruta);
    
            // Maneja la hoja 'CON_NETA'
            $this->importarHojaCobNeta($conNeta);
        }
    
        return back();
    }
    

    private function importarHojaCobBruta($hoja)
    {
        if (!empty($hoja) && is_array($hoja)) {
            // Itera sobre los datos desde la segunda fila (omitir la fila de encabezados)
            for ($i = 1; $i < count($hoja); $i++) {
                $nombre_etc = $hoja[$i][0];
                $año = $hoja[$i][1];
                $cobertura_bruta_transicion = $hoja[$i][2];
                $cobertura_bruta_primaria = $hoja[$i][3];
                $cobertura_bruta_secundaria = $hoja[$i][4];
                $cobertura_bruta_media = $hoja[$i][5];
                $cobertura_bruta_basica = $hoja[$i][6];
                $cobertura_bruta = $hoja[$i][7];

                // Busca si ya existe una fila con el mismo valor en 'fruta' y 'fruta_codigo'
                $datoExistente = CobBrutum::where('nombre_etc', $nombre_etc)->where('año', $año)->first();

                if ($datoExistente) {
                    // Si ya existe, actualiza los valores
                    $datoExistente->update([
                        'cobertura_bruta_transicion' => $cobertura_bruta_transicion,
                        'cobertura_bruta_secundaria' => $cobertura_bruta_secundaria,
                        'cobertura_bruta_media' => $cobertura_bruta_media,
                        'cobertura_bruta_basica' => $cobertura_bruta_basica,
                        'cobertura_bruta' => $cobertura_bruta
                    ]);
                } else {
                    // Si no existe, crea un nuevo registro
                    CobBrutum::create([
                        'nombre_etc' => $nombre_etc,
                        'año' => $año,
                        'cobertura_bruta_transicion' => $cobertura_bruta,
                        'cobertura_bruta_primaria' => $cobertura_bruta_primaria,
                        'cobertura_bruta_secundaria' => $cobertura_bruta_secundaria,
                        'cobertura_bruta_media' => $cobertura_bruta_media,
                        'cobertura_bruta_basica' => $cobertura_bruta_basica,
                        'cobertura_bruta' => $cobertura_bruta
                    ]);
                }
            }
        }
    }

    private function importarHojaCobNeta($hoja)
    {
        if (!empty($hoja) && is_array($hoja)) {
            // Itera sobre los hoja desde la segunda fila (omitir la fila de encabezados)
            for ($i = 1; $i < count($hoja); $i++) {
                $nombre_etc = $hoja[$i][0];
                $año = $hoja[$i][1];
                $cobertura_neta_transicion = $hoja[$i][2];
                $cobertura_neta_primaria = $hoja[$i][3];
                $cobertura_neta_secundaria = $hoja[$i][4];
                $cobertura_neta_media = $hoja[$i][5];
                $cobertura_neta_basica = $hoja[$i][6];
                $cobertura_neta = $hoja[$i][7];    

                // Busca si ya existe una fila con el mismo valor en 'fruta' y 'fruta_codigo'
                $datoExistente = CobNetum::where('nombre_etc', $nombre_etc)->where('año', $año)->first();

                if ($datoExistente) {
                    // Si ya existe, actualiza los valores
                    $datoExistente->update([
                        'cobertura_neta_transicion' => $cobertura_neta_transicion,
                        'cobertura_neta_secundaria' => $cobertura_neta_secundaria,
                        'cobertura_neta_media' => $cobertura_neta_media,
                        'cobertura_neta_basica' => $cobertura_neta_basica,
                        'cobertura_neta' => $cobertura_neta
                    ]);
                } else {
                    // Si no existe, crea un nuevo registro
                    CobNetum::create([
                        'nombre_etc' => $nombre_etc,
                        'año' => $año,
                        'cobertura_neta_transicion' => $cobertura_neta,
                        'cobertura_neta_primaria' => $cobertura_neta_primaria,
                        'cobertura_neta_secundaria' => $cobertura_neta_secundaria,
                        'cobertura_neta_media' => $cobertura_neta_media,
                        'cobertura_neta_basica' => $cobertura_neta_basica,
                        'cobertura_neta' => $cobertura_neta
                    ]);
                }
            }
        }
    }
}