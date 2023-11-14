<?php

namespace App\Http\Controllers;

use App\Models\MatSectorZona;
use Illuminate\Http\Request;

/**
 * Class MatSectorZonaController
 * @package App\Http\Controllers
 */
class MatSectorZonaController extends Controller
{
    public function __construct()
    {
        $this->middleware('can:mat-sector-zonas.index')->only('index');
        $this->middleware('can:mat-sector-zonas.create')->only('create', 'store');
        $this->middleware('can:mat-sector-zonas.show')->only('show');
        $this->middleware('can:mat-sector-zonas.edit')->only('edit', 'update');
        $this->middleware('can:mat-sector-zonas.destroy')->only('destroy');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $matSectorZonas = MatSectorZona::paginate(10000);

        return view('mat-sector-zona.index', compact('matSectorZonas'))
            ->with('i', (request()->input('page', 1) - 1) * $matSectorZonas->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $matSectorZona = new MatSectorZona();
        return view('mat-sector-zona.create', compact('matSectorZona'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(MatSectorZona::$rules);

        $matSectorZona = MatSectorZona::create($request->all());

        return redirect()->route('mat-sector-zonas.index')
            ->with('success', '<div class="alert alert-success alert-dismissible">
                                    <h5><i class="icon fas fa-check"></i> ¡Éxito!</h5>
                                    Registro matricula por grados según sector zona creado exitosamente.
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
        $matSectorZona = MatSectorZona::find($id);

        return view('mat-sector-zona.show', compact('matSectorZona'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $matSectorZona = MatSectorZona::find($id);

        return view('mat-sector-zona.edit', compact('matSectorZona'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  MatSectorZona $matSectorZona
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, MatSectorZona $matSectorZona)
    {
        request()->validate(MatSectorZona::$rules);

        $matSectorZona->update($request->all());

        return redirect()->route('mat-sector-zonas.index')
            ->with('success', '<div class="alert alert-success alert-dismissible">
                                    <h5><i class="icon fas fa-check"></i> ¡Éxito!</h5>
                                    Registro matricula por grados según sector zona actualizado exitosamente.
                                </div>');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $matSectorZona = MatSectorZona::find($id)->delete();

        return redirect()->route('mat-sector-zonas.index')
            ->with('success', '<div class="alert alert-success alert-dismissible">
                                    <h5><i class="icon fas fa-check"></i> ¡Éxito!</h5>
                                    Registro matricula por grados según sector zona eliminado exitosamente.
                                </div>');
    }
}