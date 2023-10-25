<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Excel;
use App\Models\Dato;

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
    
            $datos = Excel::toArray([], $path);
    
            if (!empty($datos) && is_array($datos)) {
                // Itera sobre los datos desde la segunda fila (omitir la fila de encabezados)
                for ($i = 1; $i < count($datos[0]); $i++) {
                    $fruta = $datos[0][$i][0];
                    $fruta_codigo = $datos[0][$i][1];
                    $cantidad = $datos[0][$i][2];
    
                    // Busca si ya existe una fila con el mismo valor en 'fruta' y 'fruta_codigo'
                    $datoExistente = Dato::where('fruta', $fruta)->where('fruta_codigo', $fruta_codigo)->first();
    
                    if ($datoExistente) {
                        // Si ya existe, actualiza los valores
                        $datoExistente->cantidad = $cantidad;
                        $datoExistente->save();
                    } else {
                        // Si no existe, crea un nuevo registro
                        Dato::create([
                            'fruta' => $fruta,
                            'fruta_codigo' => $fruta_codigo,
                            'cantidad' => $cantidad,
                        ]);
                    }
                }
            }
        }
        return back();
    }
}
