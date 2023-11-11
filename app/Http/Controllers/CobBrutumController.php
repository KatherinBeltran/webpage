<?php

namespace App\Http\Controllers;

use App\Models\CobBrutum;
use Illuminate\Http\Request;

/**
 * Class CobBrutumController
 * @package App\Http\Controllers
 */
class CobBrutumController extends Controller
{
    public function __construct()
    {
        $this->middleware('can:cob-bruta.index')->only('index');
        $this->middleware('can:cob-bruta.create')->only('create', 'store');
        $this->middleware('can:cob-bruta.show')->only('show');
        $this->middleware('can:cob-bruta.edit')->only('edit', 'update');
        $this->middleware('can:cob-bruta.destroy')->only('destroy');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cobBruta = CobBrutum::paginate(10000);

        return view('cob-brutum.index', compact('cobBruta'))
            ->with('i', (request()->input('page', 1) - 1) * $cobBruta->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cobBrutum = new CobBrutum();
        return view('cob-brutum.create', compact('cobBrutum'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(CobBrutum::$rules);

        $cobBrutum = CobBrutum::create($request->all());

        return redirect()->route('cob-bruta.index')
            ->with('success', '<div class="alert alert-success alert-dismissible">
                                    <h5><i class="icon fas fa-check"></i> ¡Éxito!</h5>
                                    Registro cobertura bruta creado exitosamente.
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
        $cobBrutum = CobBrutum::find($id);

        return view('cob-brutum.show', compact('cobBrutum'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cobBrutum = CobBrutum::find($id);

        return view('cob-brutum.edit', compact('cobBrutum'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  CobBrutum $cobBrutum
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CobBrutum $cobBrutum)
    {
        request()->validate(CobBrutum::$rules);

        $cobBrutum->update($request->all());

        return redirect()->route('cob-bruta.index')
            ->with('success', '<div class="alert alert-success alert-dismissible">
                                    <h5><i class="icon fas fa-check"></i> ¡Éxito!</h5>
                                    Registro cobertura bruta actualizado exitosamente.
                                </div>');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $cobBrutum = CobBrutum::find($id)->delete();

        return redirect()->route('cob-bruta.index')
            ->with('success', '<div class="alert alert-success alert-dismissible">
                                    <h5><i class="icon fas fa-check"></i> ¡Éxito!</h5>
                                    Registro cobertura bruta eliminado exitosamente.
                                </div>');
    }
}