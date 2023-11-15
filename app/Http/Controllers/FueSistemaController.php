<?php

namespace App\Http\Controllers;

use App\Models\FueSistema;
use Illuminate\Http\Request;

/**
 * Class FueSistemaController
 * @package App\Http\Controllers
 */
class FueSistemaController extends Controller
{
    public function __construct()
    {
        $this->middleware('can:fue-sistemas.index')->only('index');
        $this->middleware('can:fue-sistemas.create')->only('create', 'store');
        $this->middleware('can:fue-sistemas.show')->only('show');
        $this->middleware('can:fue-sistemas.edit')->only('edit', 'update');
        $this->middleware('can:fue-sistemas.destroy')->only('destroy');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $fueSistemas = FueSistema::paginate(10000);

        return view('fue-sistema.index', compact('fueSistemas'))
            ->with('i', (request()->input('page', 1) - 1) * $fueSistemas->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $fueSistema = new FueSistema();
        return view('fue-sistema.create', compact('fueSistema'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(FueSistema::$rules);

        $fueSistema = FueSistema::create($request->all());

        return redirect()->route('fue-sistemas.index')
            ->with('success', '<div class="alert alert-success alert-dismissible">
                                    <h5><i class="icon fas fa-check"></i> ¡Éxito!</h5>
                                    Registro estimación población por fuera del sistema educativo creado exitosamente.
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
        $fueSistema = FueSistema::find($id);

        return view('fue-sistema.show', compact('fueSistema'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $fueSistema = FueSistema::find($id);

        return view('fue-sistema.edit', compact('fueSistema'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  FueSistema $fueSistema
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, FueSistema $fueSistema)
    {
        request()->validate(FueSistema::$rules);

        $fueSistema->update($request->all());

        return redirect()->route('fue-sistemas.index')
            ->with('success', '<div class="alert alert-success alert-dismissible">
                                    <h5><i class="icon fas fa-check"></i> ¡Éxito!</h5>
                                    Registro estimación población por fuera del sistema educativo actualizado exitosamente.
                                </div>');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $fueSistema = FueSistema::find($id)->delete();

        return redirect()->route('fue-sistemas.index')
            ->with('success', '<div class="alert alert-success alert-dismissible">
                                    <h5><i class="icon fas fa-check"></i> ¡Éxito!</h5>
                                    Registro estimación población por fuera del sistema educativo eliminado exitosamente.
                                </div>');
    }
}