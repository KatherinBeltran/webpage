<?php

namespace App\Http\Controllers;

use App\Models\MatSector;
use Illuminate\Http\Request;

/**
 * Class MatSectorController
 * @package App\Http\Controllers
 */
class MatSectorController extends Controller
{
    public function __construct()
    {
        $this->middleware('can:mat-sectors.index')->only('index');
        $this->middleware('can:mat-sectors.create')->only('create', 'store');
        $this->middleware('can:mat-sectors.show')->only('show');
        $this->middleware('can:mat-sectors.edit')->only('edit', 'update');
        $this->middleware('can:mat-sectors.destroy')->only('destroy');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $matSectors = MatSector::paginate(10000);

        return view('mat-sector.index', compact('matSectors'))
            ->with('i', (request()->input('page', 1) - 1) * $matSectors->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $matSector = new MatSector();
        return view('mat-sector.create', compact('matSector'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(MatSector::$rules);

        $matSector = MatSector::create($request->all());

        return redirect()->route('mat-sectors.index')
            ->with('success', '<div class="alert alert-success alert-dismissible">
                                    <h5><i class="icon fas fa-check"></i> ¡Éxito!</h5>
                                    Registro matrícula por grados según sector creado exitosamente.
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
        $matSector = MatSector::find($id);

        return view('mat-sector.show', compact('matSector'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $matSector = MatSector::find($id);

        return view('mat-sector.edit', compact('matSector'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  MatSector $matSector
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, MatSector $matSector)
    {
        request()->validate(MatSector::$rules);

        $matSector->update($request->all());

        return redirect()->route('mat-sectors.index')
            ->with('success', '<div class="alert alert-success alert-dismissible">
                                    <h5><i class="icon fas fa-check"></i> ¡Éxito!</h5>
                                    Registro matrícula por grados según sector actualizado exitosamente.
                                </div>');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $matSector = MatSector::find($id)->delete();

        return redirect()->route('mat-sectors.index')
            ->with('success', '<div class="alert alert-success alert-dismissible">
                                    <h5><i class="icon fas fa-check"></i> ¡Éxito!</h5>
                                    Registro matrícula por grados según sector eliminado exitosamente.
                                </div>');
    }
}