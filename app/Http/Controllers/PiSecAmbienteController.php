<?php

namespace App\Http\Controllers;

use App\Models\Pi;
use Illuminate\Http\Request;

class PiSecAmbienteController extends Controller
{
    public function __construct()
    {
        $this->middleware('can:pi-sec-ambientes.index')->only('index');
        $this->middleware('can:pi-sec-ambientes.create')->only('create', 'store');
        $this->middleware('can:pi-sec-ambientes.show')->only('show');
        $this->middleware('can:pi-sec-ambientes.edit')->only('edit', 'update');
        $this->middleware('can:pi-sec-ambientes.destroy')->only('destroy');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pis = Pi::paginate(10000);

        return view('pi-sec-ambiente.index', compact('pis'))
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
        return view('pi-sec-ambiente.create', compact('pi'));
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

        return redirect()->route('pi-sec-ambientes.index')
            ->with('success', '<div class="alert alert-success alert-dismissible">
                                    <h5><i class="icon fas fa-check"></i> ¡Éxito!</h5>
                                    Registro meta secretaría de ambiente creado exitosamente.
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

        return view('pi-sec-ambiente.show', compact('pi'));
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

        return view('pi-sec-ambiente.edit', compact('pi'));
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

        return redirect()->route('pi-sec-ambientes.index')
            ->with('success', '<div class="alert alert-success alert-dismissible">
                                    <h5><i class="icon fas fa-check"></i> ¡Éxito!</h5>
                                    Registro meta secretaría de ambiente actualizado exitosamente.
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

        return redirect()->route('pi-sec-ambientes.index')
            ->with('success', '<div class="alert alert-success alert-dismissible">
                                    <h5><i class="icon fas fa-check"></i> ¡Éxito!</h5>
                                    Registro meta secretaría de ambiente eliminado exitosamente.
                                </div>');
    }
}