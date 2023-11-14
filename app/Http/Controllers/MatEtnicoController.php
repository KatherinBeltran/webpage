<?php

namespace App\Http\Controllers;

use App\Models\MatEtnico;
use Illuminate\Http\Request;

/**
 * Class MatEtnicoController
 * @package App\Http\Controllers
 */
class MatEtnicoController extends Controller
{
    public function __construct()
    {
        $this->middleware('can:mat-etnicos.index')->only('index');
        $this->middleware('can:mat-etnicos.create')->only('create', 'store');
        $this->middleware('can:mat-etnicos.show')->only('show');
        $this->middleware('can:mat-etnicos.edit')->only('edit', 'update');
        $this->middleware('can:mat-etnicos.destroy')->only('destroy');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $matEtnicos = MatEtnico::paginate(10000);

        return view('mat-etnico.index', compact('matEtnicos'))
            ->with('i', (request()->input('page', 1) - 1) * $matEtnicos->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $matEtnico = new MatEtnico();
        return view('mat-etnico.create', compact('matEtnico'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(MatEtnico::$rules);

        $matEtnico = MatEtnico::create($request->all());

        return redirect()->route('mat-etnicos.index')
            ->with('success', '<div class="alert alert-success alert-dismissible">
                                    <h5><i class="icon fas fa-check"></i> ¡Éxito!</h5>
                                    Registro matricula grupos etnicos creado exitosamente.
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
        $matEtnico = MatEtnico::find($id);

        return view('mat-etnico.show', compact('matEtnico'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $matEtnico = MatEtnico::find($id);

        return view('mat-etnico.edit', compact('matEtnico'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  MatEtnico $matEtnico
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, MatEtnico $matEtnico)
    {
        request()->validate(MatEtnico::$rules);

        $matEtnico->update($request->all());

        return redirect()->route('mat-etnicos.index')
            ->with('success', '<div class="alert alert-success alert-dismissible">
                                    <h5><i class="icon fas fa-check"></i> ¡Éxito!</h5>
                                    Registro matricula grupos etnicos actualizado exitosamente.
                                </div>');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $matEtnico = MatEtnico::find($id)->delete();

        return redirect()->route('mat-etnicos.index')
            ->with('success', '<div class="alert alert-success alert-dismissible">
                                    <h5><i class="icon fas fa-check"></i> ¡Éxito!</h5>
                                    Registro matricula grupos etnicos eliminado exitosamente.
                                </div>');
    }
}