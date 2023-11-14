<?php

namespace App\Http\Controllers;

use App\Models\TraGrado;
use Illuminate\Http\Request;

/**
 * Class TraGradoController
 * @package App\Http\Controllers
 */
class TraGradoController extends Controller
{
    public function __construct()
    {
        $this->middleware('can:tra-grados.index')->only('index');
        $this->middleware('can:tra-grados.create')->only('create', 'store');
        $this->middleware('can:tra-grados.show')->only('show');
        $this->middleware('can:tra-grados.edit')->only('edit', 'update');
        $this->middleware('can:tra-grados.destroy')->only('destroy');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $traGrados = TraGrado::paginate(10000);

        return view('tra-grado.index', compact('traGrados'))
            ->with('i', (request()->input('page', 1) - 1) * $traGrados->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $traGrado = new TraGrado();
        return view('tra-grado.create', compact('traGrado'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(TraGrado::$rules);

        $traGrado = TraGrado::create($request->all());

        return redirect()->route('tra-grados.index')
            ->with('success', '<div class="alert alert-success alert-dismissible">
                                    <h5><i class="icon fas fa-check"></i> ¡Éxito!</h5>
                                    Registro trayectoria por grados creado exitosamente.
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
        $traGrado = TraGrado::find($id);

        return view('tra-grado.show', compact('traGrado'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $traGrado = TraGrado::find($id);

        return view('tra-grado.edit', compact('traGrado'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  TraGrado $traGrado
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TraGrado $traGrado)
    {
        request()->validate(TraGrado::$rules);

        $traGrado->update($request->all());

        return redirect()->route('tra-grados.index')
            ->with('success', '<div class="alert alert-success alert-dismissible">
                                    <h5><i class="icon fas fa-check"></i> ¡Éxito!</h5>
                                    Registro trayectoria por grados actualizado exitosamente.
                                </div>');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $traGrado = TraGrado::find($id)->delete();

        return redirect()->route('tra-grados.index')
            ->with('success', '<div class="alert alert-success alert-dismissible">
                                    <h5><i class="icon fas fa-check"></i> ¡Éxito!</h5>
                                    Registro trayectoria por grados eliminado exitosamente.
                                </div>');
    }
}