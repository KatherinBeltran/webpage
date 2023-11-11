<?php

namespace App\Http\Controllers;

use App\Models\CobNetum;
use Illuminate\Http\Request;

/**
 * Class CobNetumController
 * @package App\Http\Controllers
 */
class CobNetumController extends Controller
{
    public function __construct()
    {
        $this->middleware('can:cob-neta.index')->only('index');
        $this->middleware('can:cob-neta.create')->only('create', 'store');
        $this->middleware('can:cob-neta.show')->only('show');
        $this->middleware('can:cob-neta.edit')->only('edit', 'update');
        $this->middleware('can:cob-neta.destroy')->only('destroy');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cobNeta = CobNetum::paginate(10000);

        return view('cob-netum.index', compact('cobNeta'))
            ->with('i', (request()->input('page', 1) - 1) * $cobNeta->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cobNetum = new CobNetum();
        return view('cob-netum.create', compact('cobNetum'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(CobNetum::$rules);

        $cobNetum = CobNetum::create($request->all());

        return redirect()->route('cob-neta.index')
            ->with('success', '<div class="alert alert-success alert-dismissible">
                                    <h5><i class="icon fas fa-check"></i> ¡Éxito!</h5>
                                    Registro cobertura neta creado exitosamente.
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
        $cobNetum = CobNetum::find($id);

        return view('cob-netum.show', compact('cobNetum'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cobNetum = CobNetum::find($id);

        return view('cob-netum.edit', compact('cobNetum'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  CobNetum $cobNetum
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CobNetum $cobNetum)
    {
        request()->validate(CobNetum::$rules);

        $cobNetum->update($request->all());

        return redirect()->route('cob-neta.index')
            ->with('success', '<div class="alert alert-success alert-dismissible">
                                    <h5><i class="icon fas fa-check"></i> ¡Éxito!</h5>
                                    Registro cobertura neta actualizado exitosamente.
                                </div>');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $cobNetum = CobNetum::find($id)->delete();

        return redirect()->route('cob-neta.index')
            ->with('success', '<div class="alert alert-success alert-dismissible">
                                    <h5><i class="icon fas fa-check"></i> ¡Éxito!</h5>
                                    Registro cobertura neta eliminado exitosamente.
                                </div>');
    }
}