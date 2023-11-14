<?php

namespace App\Http\Controllers;

use App\Models\Extraedad;
use Illuminate\Http\Request;

/**
 * Class ExtraedadController
 * @package App\Http\Controllers
 */
class ExtraedadController extends Controller
{
    public function __construct()
    {
        $this->middleware('can:extraedads.index')->only('index');
        $this->middleware('can:extraedads.create')->only('create', 'store');
        $this->middleware('can:extraedads.show')->only('show');
        $this->middleware('can:extraedads.edit')->only('edit', 'update');
        $this->middleware('can:extraedads.destroy')->only('destroy');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $extraedads = Extraedad::paginate(10000);

        return view('extraedad.index', compact('extraedads'))
            ->with('i', (request()->input('page', 1) - 1) * $extraedads->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $extraedad = new Extraedad();
        return view('extraedad.create', compact('extraedad'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Extraedad::$rules);

        $extraedad = Extraedad::create($request->all());

        return redirect()->route('extraedads.index')
            ->with('success', '<div class="alert alert-success alert-dismissible">
                                    <h5><i class="icon fas fa-check"></i> ¡Éxito!</h5>
                                    Registro matrícula según grados y edad creado exitosamente.
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
        $extraedad = Extraedad::find($id);

        return view('extraedad.show', compact('extraedad'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $extraedad = Extraedad::find($id);

        return view('extraedad.edit', compact('extraedad'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Extraedad $extraedad
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Extraedad $extraedad)
    {
        request()->validate(Extraedad::$rules);

        $extraedad->update($request->all());

        return redirect()->route('extraedads.index')
            ->with('success', '<div class="alert alert-success alert-dismissible">
                                    <h5><i class="icon fas fa-check"></i> ¡Éxito!</h5>
                                    Registro matrícula según grados y edad actualizado exitosamente.
                                </div>');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $extraedad = Extraedad::find($id)->delete();

        return redirect()->route('extraedads.index')
            ->with('success', '<div class="alert alert-success alert-dismissible">
                                    <h5><i class="icon fas fa-check"></i> ¡Éxito!</h5>
                                    Registro matrícula según grados y edad eliminado exitosamente.
                                </div>');
    }
}