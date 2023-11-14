<?php

namespace App\Http\Controllers;

use App\Models\PobDiscapacidad;
use Illuminate\Http\Request;

/**
 * Class PobDiscapacidadController
 * @package App\Http\Controllers
 */
class PobDiscapacidadController extends Controller
{
    public function __construct()
    {
        $this->middleware('can:pob-discapacidads.index')->only('index');
        $this->middleware('can:pob-discapacidads.create')->only('create', 'store');
        $this->middleware('can:pob-discapacidads.show')->only('show');
        $this->middleware('can:pob-discapacidads.edit')->only('edit', 'update');
        $this->middleware('can:pob-discapacidads.destroy')->only('destroy');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pobDiscapacidads = PobDiscapacidad::paginate(10000);

        return view('pob-discapacidad.index', compact('pobDiscapacidads'))
            ->with('i', (request()->input('page', 1) - 1) * $pobDiscapacidads->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pobDiscapacidad = new PobDiscapacidad();
        return view('pob-discapacidad.create', compact('pobDiscapacidad'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(PobDiscapacidad::$rules);

        $pobDiscapacidad = PobDiscapacidad::create($request->all());

        return redirect()->route('pob-discapacidads.index')
            ->with('success', '<div class="alert alert-success alert-dismissible">
                                    <h5><i class="icon fas fa-check"></i> ¡Éxito!</h5>
                                    Registro matrícula población discapacidad creado exitosamente.
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
        $pobDiscapacidad = PobDiscapacidad::find($id);

        return view('pob-discapacidad.show', compact('pobDiscapacidad'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pobDiscapacidad = PobDiscapacidad::find($id);

        return view('pob-discapacidad.edit', compact('pobDiscapacidad'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  PobDiscapacidad $pobDiscapacidad
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PobDiscapacidad $pobDiscapacidad)
    {
        request()->validate(PobDiscapacidad::$rules);

        $pobDiscapacidad->update($request->all());

        return redirect()->route('pob-discapacidads.index')
            ->with('success', '<div class="alert alert-success alert-dismissible">
                                    <h5><i class="icon fas fa-check"></i> ¡Éxito!</h5>
                                    Registro matrícula población discapacidad actualizado exitosamente.
                                </div>');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $pobDiscapacidad = PobDiscapacidad::find($id)->delete();

        return redirect()->route('pob-discapacidads.index')
            ->with('success', '<div class="alert alert-success alert-dismissible">
                                    <h5><i class="icon fas fa-check"></i> ¡Éxito!</h5>
                                    Registro matrícula población discapacidad eliminado exitosamente.
                                </div>');
    }
}
