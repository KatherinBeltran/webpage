<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Excel;
use App\Models\CobBrutum;
use App\Models\CobNetum;
use App\Models\MatSector;
use App\Models\MatEtnico;
use App\Models\EstVenezolano;

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

            // Accede a la hoja 'MAT SECTOR'
            $matSector = $excel[0]; // Primer índice porque es la primera hoja

            // Accede a la hoja 'MAT ETNICOS'
            $matEtnicos = $excel[1]; // Segundo índice porque es la segunda hoja

            // Accede a la hoja 'EST. VENEZONALOS'
            $estVenezolanos = $excel[2]; // Tercer índice porque es la tercera hoja

            // Accede a la hoja 'COB BRUTA'
            $cobBruta = $excel[3]; // Cuarta índice porque es la cuarta hoja

            // Accede a la hoja 'COB NETA'
            $conNeta = $excel[4]; // Quinta índice porque es la quinta hoja

            // Maneja la hoja 'MAT SECTOR'
            $this->importarHojaMatSector($matSector);

            // Maneja la hoja 'MAT ETNICOS'
            $this->importarHojaMatEtnicos($matEtnicos);

            // Maneja la hoja 'EST. VENEZOLANOS'
            $this->importarHojaEstVenezolanos($estVenezolanos);
            
            // Maneja la hoja 'COB BRUTA'
            $this->importarHojaCobBruta($cobBruta);

            // Maneja la hoja 'COB NETA'
            $this->importarHojaCobNeta($conNeta);
        }

        return back();
    }

    private function importarHojaMatSector($hoja)
    {
        if (!empty($hoja) && is_array($hoja)) {
            // Itera sobre los datos desde la segunda fila (omitir la fila de encabezados)
            for ($i = 1; $i < count($hoja); $i++) {
                $entidad = $hoja[$i][0];

                // Verifica si la entidad es "SOACHA"
                if ($entidad === 'SOACHA') {
                    $grado = $hoja[$i][1];

                    // Itera sobre los años y valores correspondientes
                    for ($j = 2; $j < count($hoja[$i]); $j += 3) {
                        $año = $hoja[0][$j]; // Obtiene el año desde la fila de encabezados
                        $oficial = $hoja[$i][$j];
                        $contratada = $hoja[$i][$j + 1];
                        $privada = $hoja[$i][$j + 2];

                        // Busca si ya existe una fila con el mismo valor en 'entidad', 'grado' y 'año'
                        $datoExistente = MatSector::where('entidad', $entidad)
                            ->where('grado', $grado)
                            ->where('año', $año)
                            ->first();

                        if ($datoExistente) {
                            // Si ya existe, actualiza los valores
                            $datoExistente->update([
                                'oficial' => $oficial,
                                'contratada' => $contratada,
                                'privada' => $privada,
                            ]);
                        } else {
                            // Si no existe, crea un nuevo registro
                            MatSector::create([
                                'entidad' => $entidad,
                                'grado' => $grado,
                                'año' => $año,
                                'oficial' => $oficial,
                                'contratada' => $contratada,
                                'privada' => $privada,
                            ]);
                        }
                    }
                }
            }
        }
    }

    private function importarHojaMatEtnicos($hoja)
    {
        if (!empty($hoja) && is_array($hoja)) {
            // Itera sobre los datos desde la segunda fila (omitir la fila de encabezados)
            for ($i = 1; $i < count($hoja); $i++) {
                $entidad = $hoja[$i][0];

                // Agrega la condición para procesar solo cuando la entidad sea 'SOACHA'
                if ($entidad !== 'SOACHA') {
                    continue; // Salta a la siguiente iteración si no cumple la condición
                }

                $etnia = $hoja[$i][1];

                // Itera sobre los años y valores correspondientes
                for ($j = 2; $j < count($hoja[$i]); $j++) {
                    $año = $hoja[0][$j]; // Obtiene el año desde la fila de encabezados
                    $valor = $hoja[$i][$j];

                    // Busca si ya existe una fila con el mismo valor en 'entidad', 'etnia' y 'año'
                    $datoExistente = MatEtnico::where('entidad', $entidad)
                        ->where('etnia', $etnia)
                        ->where('año', $año)
                        ->first();

                    if ($datoExistente) {
                        // Si ya existe, actualiza los valores
                        $datoExistente->update([
                            'valor' => $valor,
                        ]);
                    } else {
                        // Si no existe, crea un nuevo registro
                        MatEtnico::create([
                            'entidad' => $entidad,
                            'etnia' => $etnia,
                            'año' => $año,
                            'valor' => $valor,
                        ]);
                    }
                }
            }
        }
    }

    private function importarHojaEstVenezolanos($hoja)
    {
        if (!empty($hoja) && is_array($hoja)) {
            // Itera sobre los datos desde la segunda fila (omitir la fila de encabezados)
            for ($i = 1; $i < count($hoja); $i++) {
                $entidad = $hoja[$i][0];

                // Verifica si la entidad es "SOACHA"
                if ($entidad === 'SOACHA') {
                    $grado = $hoja[$i][1];

                    // Itera sobre los años y valores correspondientes
                    for ($j = 2; $j < count($hoja[$i]); $j += 3) {
                        $año = $hoja[0][$j]; // Obtiene el año desde la fila de encabezados
                        $oficial = $hoja[$i][$j];
                        $contratada = $hoja[$i][$j + 1];
                        $privada = $hoja[$i][$j + 2];

                        // Busca si ya existe una fila con el mismo valor en 'entidad', 'grado' y 'año'
                        $datoExistente = EstVenezolano::where('entidad', $entidad)
                            ->where('grado', $grado)
                            ->where('año', $año)
                            ->first();

                        if ($datoExistente) {
                            // Si ya existe, actualiza los valores
                            $datoExistente->update([
                                'oficial' => $oficial,
                                'contratada' => $contratada,
                                'privada' => $privada,
                            ]);
                        } else {
                            // Si no existe, crea un nuevo registro
                            EstVenezolano::create([
                                'entidad' => $entidad,
                                'grado' => $grado,
                                'año' => $año,
                                'oficial' => $oficial,
                                'contratada' => $contratada,
                                'privada' => $privada,
                            ]);
                        }
                    }
                }
            }
        }
    }

    private function importarHojaCobBruta($hoja)
    {
        if (!empty($hoja) && is_array($hoja)) {
            // Itera sobre los datos desde la segunda fila (omitir la fila de encabezados)
            for ($i = 1; $i < count($hoja); $i++) {
                $nombre_etc = $hoja[$i][0];

                // Agrega la condición para filtrar por 'nombre_etc' igual a 'SOACHA'
                if ($nombre_etc !== 'SOACHA') {
                    continue; // Salta a la siguiente iteración si no cumple la condición
                }

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

                // Agrega la condición para filtrar por 'nombre_etc' igual a 'SOACHA'
                if ($nombre_etc !== 'SOACHA') {
                    continue; // Salta a la siguiente iteración si no cumple la condición
                }

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