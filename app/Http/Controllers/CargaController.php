<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Excel;
use App\Models\CobBrutum;
use App\Models\CobNetum;
use App\Models\MatSector;
use App\Models\MatEtnico;
use App\Models\EstVenezolano;
use App\Models\TraGrado;
use App\Models\Extraedad;
use App\Models\PobDiscapacidad;
use App\Models\Desercion;
use App\Models\FueSistema;
use App\Models\Eficiencium;
use App\Models\Pae;
use App\Models\AfiVacunacion;
use App\Models\Pi;

class CargaController extends Controller
{
    public function __construct()
    {
        $user = auth()->user();

        if ($user && $user->can('sec-gen-cargar.index')) {
            // Solo tiene acceso a 'sec-sal-cargar.index'
            $this->middleware('can:sec-gen-cargar.index')->only('index');
        } elseif ($user && $user->can('sec-gob-cargar.index')) {
            // Solo tiene acceso a 'sec-sal-cargar.index'
            $this->middleware('can:sec-gob-cargar.index')->only('index');
        } elseif ($user && $user->can('sec-sal-cargar.index')) {
            // Solo tiene acceso a 'sec-sal-cargar.index'
            $this->middleware('can:sec-sal-cargar.index')->only('index');
        } elseif ($user && $user->can('sec-pla-cargar.index')) {
            // Solo tiene acceso a 'sec-sal-cargar.index'
            $this->middleware('can:sec-pla-cargar.index')->only('index');
        }elseif ($user && $user->can('sec-hac-cargar.index')) {
            // Solo tiene acceso a 'sec-edu-cargar.index'
            $this->middleware('can:sec-hac-cargar.index')->only('index');
        }elseif ($user && $user->can('sec-des-cargar.index')) {
            // Solo tiene acceso a 'sec-edu-cargar.index'
            $this->middleware('can:sec-des-cargar.index')->only('index');
        }elseif ($user && $user->can('sec-edu-cargar.index')) {
            // Solo tiene acceso a 'sec-edu-cargar.index'
            $this->middleware('can:sec-edu-cargar.index')->only('index');
        }elseif ($user && $user->can('sec-inf-cargar.index')) {
            // Solo tiene acceso a 'sec-edu-cargar.index'
            $this->middleware('can:sec-inf-cargar.index')->only('index');
        }elseif ($user && $user->can('sec-mov-cargar.index')) {
        // Solo tiene acceso a 'sec-edu-cargar.index'
        $this->middleware('can:sec-mov-cargar.index')->only('index');
        }
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
            'MAT SECTOR' => 'importarHojaMatSector',
            'MAT ETNICOS' => 'importarHojaMatEtnicos',
            'EXTRAEDAD' => 'importarHojaExtraedad',
            'EST. VENEZOLANOS' => 'importarHojaEstVenezolanos',
            'TRAYECTORIA GRADO' => 'importarHojaTraGrado',
            'POB DISCAPACIDAD' => 'importarHojaPobDiscapacidad',
            'COB BRUTA' => 'importarHojaCobBruta',
            'COB NETA' => 'importarHojaCobNeta',
            'DESERCION' => 'importarHojaDesercion',
            'FUERA SISTEMA' => 'importarHojaFueSistema',
            'EFICIENCIA' => 'importarHojaEficiencia',
            'PAE' => 'importarHojaPae',
            'AFI. VACUNACION' => 'importarHojaAfiVacunacion',
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
                    $matricula = $hoja[$i][$j];

                    // Busca si ya existe una fila con el mismo valor en 'entidad', 'etnia' y 'año'
                    $datoExistente = MatEtnico::where('entidad', $entidad)
                        ->where('etnia', $etnia)
                        ->where('año', $año)
                        ->first();

                    if ($datoExistente) {
                        // Si ya existe, actualiza los valores
                        $datoExistente->update([
                            'matricula' => $matricula,
                        ]);
                    } else {
                        // Si no existe, crea un nuevo registro
                        MatEtnico::create([
                            'entidad' => $entidad,
                            'etnia' => $etnia,
                            'año' => $año,
                            'matricula' => $matricula,
                        ]);
                    }
                }
            }
        }
    }

    private function importarHojaExtraedad($hoja)
    {
        if (!empty($hoja) && is_array($hoja)) {
            // Itera sobre los datos desde la segunda fila (omitir la fila de encabezados)
            for ($i = 1; $i < count($hoja); $i++) {
                $entidad = $hoja[$i][0];

                // Agrega la condición para procesar solo cuando la entidad sea 'SOACHA'
                if ($entidad !== 'SOACHA') {
                    continue; // Salta a la siguiente iteración si no cumple la condición
                }

                $grado = $hoja[$i][1];

                // Itera sobre las edades y valores correspondientes
                for ($j = 2; $j < count($hoja[$i]); $j++) {
                    $edad = $hoja[0][$j]; // Obtiene la edad desde la fila de encabezados
                    $matricula = $hoja[$i][$j];

                    // Busca si ya existe una fila con el mismo valor en 'entidad', 'grado' y 'edad'
                    $datoExistente = Extraedad::where('entidad', $entidad)
                        ->where('grado', $grado)
                        ->where('edad', $edad)
                        ->first();

                    if ($datoExistente) {
                        // Si ya existe, actualiza los valores
                        $datoExistente->update([
                            'matricula' => $matricula,
                        ]);
                    } else {
                        // Si no existe, crea un nuevo registro
                        Extraedad::create([
                            'entidad' => $entidad,
                            'grado' => $grado,
                            'edad' => $edad,
                            'matricula' => $matricula,
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

    private function importarHojaTraGrado($hoja)
    {
        if (!empty($hoja) && is_array($hoja)) {
            // Itera sobre los datos desde la segunda fila (omitir la fila de encabezados)
            for ($i = 1; $i < count($hoja); $i++) {
                $entidad = $hoja[$i][0];

                // Agrega la condición para procesar solo cuando la entidad sea 'SOACHA'
                if ($entidad !== 'SOACHA') {
                    continue; // Salta a la siguiente iteración si no cumple la condición
                }

                $grado = $hoja[$i][1];

                // Itera sobre los años y valores correspondientes
                for ($j = 2; $j < count($hoja[$i]); $j++) {
                    $año = $hoja[0][$j]; // Obtiene el año desde la fila de encabezados
                    $matricula = $hoja[$i][$j];

                    // Busca si ya existe una fila con el mismo valor en 'entidad', 'grado' y 'año'
                    $datoExistente = TraGrado::where('entidad', $entidad)
                        ->where('grado', $grado)
                        ->where('año', $año)
                        ->first();

                    if ($datoExistente) {
                        // Si ya existe, actualiza los valores
                        $datoExistente->update([
                            'matricula' => $matricula,
                        ]);
                    } else {
                        // Si no existe, crea un nuevo registro
                        TraGrado::create([
                            'entidad' => $entidad,
                            'grado' => $grado,
                            'año' => $año,
                            'matricula' => $matricula,
                        ]);
                    }
                }
            }
        }
    }

    private function importarHojaPobDiscapacidad($hoja)
    {
        if (!empty($hoja) && is_array($hoja)) {
            // Itera sobre los datos desde la segunda fila (omitir la fila de encabezados)
            for ($i = 1; $i < count($hoja); $i++) {
                $entidad = $hoja[$i][0];

                // Agrega la condición para procesar solo cuando la entidad sea 'SOACHA'
                if ($entidad !== 'SOACHA') {
                    continue; // Salta a la siguiente iteración si no cumple la condición
                }

                $sector = $hoja[$i][1];

                // Itera sobre los años y valores correspondientes
                for ($j = 2; $j < count($hoja[$i]); $j++) {
                    $discapacidad = $hoja[0][$j]; // Obtiene el discapacidad desde la fila de encabezados
                    $matricula = $hoja[$i][$j];

                    // Busca si ya existe una fila con el mismo valor en 'entidad', 'sector' y 'discapacidad'
                    $datoExistente = PobDiscapacidad::where('entidad', $entidad)
                        ->where('sector', $sector)
                        ->where('discapacidad', $discapacidad)
                        ->first();

                    if ($datoExistente) {
                        // Si ya existe, actualiza los valores
                        $datoExistente->update([
                            'matricula' => $matricula,
                        ]);
                    } else {
                        // Si no existe, crea un nuevo registro
                        PobDiscapacidad::create([
                            'entidad' => $entidad,
                            'sector' => $sector,
                            'discapacidad' => $discapacidad,
                            'matricula' => $matricula,
                        ]);
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

    private function importarHojaDesercion($hoja)
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

                $desercion_transicion = $hoja[$i][2];
                $desercion_primaria = $hoja[$i][3];
                $desercion_secundaria = $hoja[$i][4];
                $desercion_media = $hoja[$i][5];  

                // Busca si ya existe una fila con el mismo valor en 'fruta' y 'fruta_codigo'
                $datoExistente = Desercion::where('nombre_etc', $nombre_etc)->where('año', $año)->first();

                if ($datoExistente) {
                    // Si ya existe, actualiza los valores
                    $datoExistente->update([
                        'desercion_transicion' => $desercion_transicion,
                        'desercion_primaria' => $desercion_primaria,
                        'desercion_secundaria' => $desercion_secundaria,
                        'desercion_media' => $desercion_media,
                    ]);
                } else {
                    // Si no existe, crea un nuevo registro
                    Desercion::create([
                        'nombre_etc' => $nombre_etc,
                        'año' => $año,
                        'desercion_transicion' => $desercion_transicion,
                        'desercion_primaria' => $desercion_primaria,
                        'desercion_secundaria' => $desercion_secundaria,
                        'desercion_media' => $desercion_media,
                    ]);
                }
            }
        }
    }

    private function importarHojaFueSistema($hoja)
    {
        if (!empty($hoja) && is_array($hoja)) {
            // Itera sobre los datos desde la segunda fila (omitir la fila de encabezados)
            for ($i = 1; $i < count($hoja); $i++) {
                $entidad = $hoja[$i][0];

                // Agrega la condición para procesar solo cuando la entidad sea 'SOACHA'
                if ($entidad !== 'SOACHA') {
                    continue; // Salta a la siguiente iteración si no cumple la condición
                }

                $sector = $hoja[$i][1];

                // Itera sobre los años y valores correspondientes
                for ($j = 2; $j < count($hoja[$i]); $j++) {
                    $año = $hoja[0][$j]; // Obtiene el año desde la fila de encabezados
                    $desercion = $hoja[$i][$j];

                    // Busca si ya existe una fila con el mismo valor en 'entidad', 'sector' y 'año'
                    $datoExistente = FueSistema::where('entidad', $entidad)
                        ->where('sector', $sector)
                        ->where('año', $año)
                        ->first();

                    if ($datoExistente) {
                        // Si ya existe, actualiza los valores
                        $datoExistente->update([
                            'matricula' => $desercion,
                        ]);
                    } else {
                        // Si no existe, crea un nuevo registro
                        FueSistema::create([
                            'entidad' => $entidad,
                            'sector' => $sector,
                            'año' => $año,
                            'desercion' => $desercion,
                        ]);
                    }
                }
            }
        }
    }

    private function importarHojaEficiencia($hoja)
    {
        if (!empty($hoja) && is_array($hoja)) {
            // Itera sobre los datos desde la segunda fila (omitir la fila de encabezados)
            for ($i = 1; $i < count($hoja); $i++) {
                $nombre_etc = $hoja[$i][0];

                // Verifica si la nombre_etc es "SOACHA"
                if ($nombre_etc === 'SOACHA') {
                    $año = $hoja[$i][1];

                    // Itera sobre los años y valores correspondientes
                    for ($j = 2; $j < count($hoja[$i]); $j += 3) {
                        $sector = $hoja[0][$j]; // Obtiene el sector desde la fila de encabezados
                        $aprobado = $hoja[$i][$j];
                        $desertor = $hoja[$i][$j + 1];
                        $reprobado = $hoja[$i][$j + 2];

                        // Busca si ya existe una fila con el mismo valor en 'nombre_etc', 'año' y 'sector'
                        $datoExistente = Eficiencium::where('nombre_etc', $nombre_etc)
                            ->where('año', $año)
                            ->where('sector', $sector)
                            ->first();

                        if ($datoExistente) {
                            // Si ya existe, actualiza los valores
                            $datoExistente->update([
                                'aprobado' => $aprobado,
                                'desertor' => $desertor,
                                'reprobado' => $reprobado,
                            ]);
                        } else {
                            // Si no existe, crea un nuevo registro
                            Eficiencium::create([
                                'nombre_etc' => $nombre_etc,
                                'año' => $año,
                                'sector' => $sector,
                                'aprobado' => $aprobado,
                                'desertor' => $desertor,
                                'reprobado' => $reprobado,
                            ]);
                        }
                    }
                }
            }
        }
    }

    private function importarHojaPae($hoja)
    {
        if (!empty($hoja) && is_array($hoja)) {
            // Itera sobre los datos desde la segunda fila (omitir la fila de encabezados)
            for ($i = 1; $i < count($hoja); $i++) {
                $institucion = $hoja[$i][0];
                $sede = $hoja[$i][1];

                // Itera sobre los meses y valores correspondientes
                for ($j = 2; $j < count($hoja[$i]); $j++) {
                    $mes = $hoja[0][$j]; // Obtiene el mes desde la fila de encabezados
                    $registro = $hoja[$i][$j];

                    // Busca si ya existe una fila con el mismo valor en 'institucion', 'sede' y 'mes'
                    $datoExistente = Pae::where('institucion', $institucion)
                        ->where('sede', $sede)
                        ->where('mes', $mes)
                        ->first();

                    if ($datoExistente) {
                        // Si ya existe, actualiza los valores
                        $datoExistente->update([
                            'registro' => $registro,
                        ]);
                    } else {
                        // Si no existe, crea un nuevo registro
                        Pae::create([
                            'institucion' => $institucion,
                            'sede' => $sede,
                            'mes' => $mes,
                            'registro' => $registro,
                        ]);
                    }
                }
            }
        }
    }

    private function importarHojaAfiVacunacion($hoja)
    {
        if (!empty($hoja) && is_array($hoja)) {
            // Itera sobre los datos desde la segunda fila (omitir la fila de encabezados)
            for ($i = 2; $i < count($hoja); $i++) {
                $indicadores_pts = $hoja[$i][0];

                // Itera sobre los años y valores correspondientes
                for ($j = 1; $j < count($hoja[$i]); $j += 3) {
                    $año = $hoja[0][$j]; // Obtiene el año desde la fila de encabezados
                    $numerador = $hoja[$i][$j];
                    $denominador = $hoja[$i][$j + 1];
                    $indicador = $hoja[$i][$j + 2];

                    // Busca si ya existe una fila con el mismo valor en 'indicadores_pts', 'año' y 'año'
                    $datoExistente = AfiVacunacion::where('indicadores_pts', $indicadores_pts)
                        ->where('año', $año)
                        ->first();

                    if ($datoExistente) {
                        // Si ya existe, actualiza los valores
                        $datoExistente->update([
                            'numerador' => $numerador,
                            'denominador' => $denominador,
                            'indicador' => $indicador,
                        ]);
                    } else {
                        // Si no existe, crea un nuevo registro
                        AfiVacunacion::create([
                            'indicadores_pts' => $indicadores_pts,
                            'año' => $año,
                            'numerador' => $numerador,
                            'denominador' => $denominador,
                            'indicador' => $indicador,
                        ]);
                    }
                }
            }
        }
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