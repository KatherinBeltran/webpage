<?php

namespace App\Http\Controllers;

use App\Models\Pi;
use Illuminate\Http\Request;

class PiSecHaciendaController extends Controller
{
    public function __construct()
    {
        $this->middleware('can:pi-sec-haciendas.index')->only('index');
        $this->middleware('can:pi-sec-haciendas.create')->only('create', 'store');
        $this->middleware('can:pi-sec-haciendas.show')->only('show');
        $this->middleware('can:pi-sec-haciendas.edit')->only('edit', 'update');
        $this->middleware('can:pi-sec-haciendas.destroy')->only('destroy');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pis = Pi::paginate(10000);

        return view('pi-sec-hacienda.index', compact('pis'))
            ->with('i', (request()->input('page', 1) - 1) * $pis->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pi = new Pi();
        return view('pi-sec-hacienda.create', compact('pi'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Pi::$rules);

        $pi = Pi::create($request->all());

        return redirect()->route('pi-sec-haciendas.index')
            ->with('success', '<div class="alert alert-success alert-dismissible">
                                    <h5><i class="icon fas fa-check"></i> ¡Éxito!</h5>
                                    Registro meta secretaría de hacienda creado exitosamente.
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
        $pi = Pi::find($id);

        return view('pi-sec-hacienda.show', compact('pi'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pi = Pi::find($id);

        return view('pi-sec-hacienda.edit', compact('pi'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Pi $pi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pi $pi)
    {
        request()->validate(Pi::$rules);

        $pi->update($request->all());

        return redirect()->route('pi-sec-haciendas.index')
            ->with('success', '<div class="alert alert-success alert-dismissible">
                                    <h5><i class="icon fas fa-check"></i> ¡Éxito!</h5>
                                    Registro meta secretaría de hacienda actualizado exitosamente.
                                </div>');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $pi = Pi::find($id)->delete();

        return redirect()->route('pi-sec-haciendas.index')
            ->with('success', '<div class="alert alert-success alert-dismissible">
                                    <h5><i class="icon fas fa-check"></i> ¡Éxito!</h5>
                                    Registro meta secretaría de hacienda eliminado exitosamente.
                                </div>');
    }
}