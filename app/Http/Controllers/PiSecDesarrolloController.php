<?php

namespace App\Http\Controllers;

use App\Models\Pi;
use Illuminate\Http\Request;

class PiSecDesarrolloController extends Controller
{
    public function __construct()
    {
        $this->middleware('can:pi-sec-desarrollos.index')->only('index');
        $this->middleware('can:pi-sec-desarrollos.create')->only('create', 'store');
        $this->middleware('can:pi-sec-desarrollos.show')->only('show');
        $this->middleware('can:pi-sec-desarrollos.edit')->only('edit', 'update');
        $this->middleware('can:pi-sec-desarrollos.destroy')->only('destroy');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pis = Pi::paginate(10000);

        return view('pi-sec-desarrollo.index', compact('pis'))
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
        return view('pi-sec-desarrollo.create', compact('pi'));
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

        return redirect()->route('pi-sec-desarrollos.index')
            ->with('success', '<div class="alert alert-success alert-dismissible">
                                    <h5><i class="icon fas fa-check"></i> ¡Éxito!</h5>
                                    Registro meta secretaría de desarrollo creado exitosamente.
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

        return view('pi-sec-desarrollo.show', compact('pi'));
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

        return view('pi-sec-desarrollo.edit', compact('pi'));
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

        return redirect()->route('pi-sec-desarrollos.index')
            ->with('success', '<div class="alert alert-success alert-dismissible">
                                    <h5><i class="icon fas fa-check"></i> ¡Éxito!</h5>
                                    Registro meta secretaría de desarrollo actualizado exitosamente.
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

        return redirect()->route('pi-sec-desarrollos.index')
            ->with('success', '<div class="alert alert-success alert-dismissible">
                                    <h5><i class="icon fas fa-check"></i> ¡Éxito!</h5>
                                    Registro meta secretaría de desarrollo eliminado exitosamente.
                                </div>');
    }
}