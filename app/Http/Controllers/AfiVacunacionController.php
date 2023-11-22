<?php

namespace App\Http\Controllers;

use App\Models\AfiVacunacion;
use Illuminate\Http\Request;

/**
 * Class AfiVacunacionController
 * @package App\Http\Controllers
 */
class AfiVacunacionController extends Controller
{
    public function __construct()
    {
        $this->middleware('can:afi-vacunacions.index')->only('index');
        $this->middleware('can:afi-vacunacions.create')->only('create', 'store');
        $this->middleware('can:afi-vacunacions.show')->only('show');
        $this->middleware('can:afi-vacunacions.edit')->only('edit', 'update');
        $this->middleware('can:afi-vacunacions.destroy')->only('destroy');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $afiVacunacions = AfiVacunacion::paginate(10000);

        return view('afi-vacunacion.index', compact('afiVacunacions'))
            ->with('i', (request()->input('page', 1) - 1) * $afiVacunacions->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $afiVacunacion = new AfiVacunacion();
        return view('afi-vacunacion.create', compact('afiVacunacion'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(AfiVacunacion::$rules);

        $afiVacunacion = AfiVacunacion::create($request->all());

        return redirect()->route('afi-vacunacions.index')
            ->with('success', '<div class="alert alert-success alert-dismissible">
                                    <h5><i class="icon fas fa-check"></i> ¡Éxito!</h5>
                                    Registro afiliación y vacunación creado exitosamente.
                                </div>');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $afiVacunacion = AfiVacunacion::find($id);

        return view('afi-vacunacion.show', compact('afiVacunacion'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $afiVacunacion = AfiVacunacion::find($id);

        return view('afi-vacunacion.edit', compact('afiVacunacion'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  AfiVacunacion $afiVacunacion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AfiVacunacion $afiVacunacion)
    {
        request()->validate(AfiVacunacion::$rules);

        $afiVacunacion->update($request->all());

        return redirect()->route('afi-vacunacions.index')
            ->with('success', '<div class="alert alert-success alert-dismissible">
                                    <h5><i class="icon fas fa-check"></i> ¡Éxito!</h5>
                                    Registro afiliación y vacunación actualizado exitosamente.
                                </div>');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $afiVacunacion = AfiVacunacion::find($id)->delete();

        return redirect()->route('afi-vacunacions.index')
            ->with('success', '<div class="alert alert-success alert-dismissible">
                                    <h5><i class="icon fas fa-check"></i> ¡Éxito!</h5>
                                    Registro afiliación y vacunación eliminado exitosamente.
                                </div>');
    }
}