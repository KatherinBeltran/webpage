<?php

namespace App\Http\Controllers;

use App\Models\EstVenezolano;
use Illuminate\Http\Request;

/**
 * Class EstVenezolanoController
 * @package App\Http\Controllers
 */
class EstVenezolanoController extends Controller
{
    public function __construct()
    {
        $this->middleware('can:est-venezolanos.index')->only('index');
        $this->middleware('can:est-venezolanos.create')->only('create', 'store');
        $this->middleware('can:est-venezolanos.show')->only('show');
        $this->middleware('can:est-venezolanos.edit')->only('edit', 'update');
        $this->middleware('can:est-venezolanos.destroy')->only('destroy');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $estVenezolanos = EstVenezolano::paginate(10000);

        return view('est-venezolano.index', compact('estVenezolanos'))
            ->with('i', (request()->input('page', 1) - 1) * $estVenezolanos->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $estVenezolano = new EstVenezolano();
        return view('est-venezolano.create', compact('estVenezolano'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(EstVenezolano::$rules);

        $estVenezolano = EstVenezolano::create($request->all());

        return redirect()->route('est-venezolanos.index')
            ->with('success', '<div class="alert alert-success alert-dismissible">
                                    <h5><i class="icon fas fa-check"></i> ¡Éxito!</h5>
                                    Registro matrícula estudiantes venezolanos creado exitosamente.
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
        $estVenezolano = EstVenezolano::find($id);

        return view('est-venezolano.show', compact('estVenezolano'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $estVenezolano = EstVenezolano::find($id);

        return view('est-venezolano.edit', compact('estVenezolano'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  EstVenezolano $estVenezolano
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, EstVenezolano $estVenezolano)
    {
        request()->validate(EstVenezolano::$rules);

        $estVenezolano->update($request->all());

        return redirect()->route('est-venezolanos.index')
            ->with('success', '<div class="alert alert-success alert-dismissible">
                                    <h5><i class="icon fas fa-check"></i> ¡Éxito!</h5>
                                    Registro matrícula estudiantes venezolanos actualizado exitosamente.
                                </div>');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $estVenezolano = EstVenezolano::find($id)->delete();

        return redirect()->route('est-venezolanos.index')
            ->with('success', '<div class="alert alert-success alert-dismissible">
                                    <h5><i class="icon fas fa-check"></i> ¡Éxito!</h5>
                                    Registro matrícula estudiantes venezolanos eliminado exitosamente.
                                </div>');
    }
}