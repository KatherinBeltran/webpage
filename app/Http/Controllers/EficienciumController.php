<?php

namespace App\Http\Controllers;

use App\Models\Eficiencium;
use Illuminate\Http\Request;

/**
 * Class EficienciumController
 * @package App\Http\Controllers
 */
class EficienciumController extends Controller
{
    public function __construct()
    {
        $this->middleware('can:eficiencia.index')->only('index');
        $this->middleware('can:eficiencia.create')->only('create', 'store');
        $this->middleware('can:eficiencia.show')->only('show');
        $this->middleware('can:eficiencia.edit')->only('edit', 'update');
        $this->middleware('can:eficiencia.destroy')->only('destroy');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $eficiencia = Eficiencium::paginate(10000);

        return view('eficiencium.index', compact('eficiencia'))
            ->with('i', (request()->input('page', 1) - 1) * $eficiencia->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $eficiencium = new Eficiencium();
        return view('eficiencium.create', compact('eficiencium'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Eficiencium::$rules);

        $eficiencium = Eficiencium::create($request->all());

        return redirect()->route('eficiencia.index')
            ->with('success', '<div class="alert alert-success alert-dismissible">
                                    <h5><i class="icon fas fa-check"></i> ¡Éxito!</h5>
                                    Registro tasa eficiencia interna total creado exitosamente.
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
        $eficiencium = Eficiencium::find($id);

        return view('eficiencium.show', compact('eficiencium'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $eficiencium = Eficiencium::find($id);

        return view('eficiencium.edit', compact('eficiencium'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Eficiencium $eficiencium
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Eficiencium $eficiencium)
    {
        request()->validate(Eficiencium::$rules);

        $eficiencium->update($request->all());

        return redirect()->route('eficiencia.index')
            ->with('success', '<div class="alert alert-success alert-dismissible">
                                    <h5><i class="icon fas fa-check"></i> ¡Éxito!</h5>
                                    Registro tasa eficiencia interna total actualizado exitosamente.
                                </div>');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $eficiencium = Eficiencium::find($id)->delete();

        return redirect()->route('eficiencia.index')
            ->with('success', '<div class="alert alert-success alert-dismissible">
                                    <h5><i class="icon fas fa-check"></i> ¡Éxito!</h5>
                                    Registro tasa eficiencia interna total eliminado exitosamente.
                                </div>');
    }
}