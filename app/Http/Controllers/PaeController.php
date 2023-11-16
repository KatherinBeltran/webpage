<?php

namespace App\Http\Controllers;

use App\Models\Pae;
use Illuminate\Http\Request;

/**
 * Class PaeController
 * @package App\Http\Controllers
 */
class PaeController extends Controller
{
    public function __construct()
    {
        $this->middleware('can:paes.index')->only('index');
        $this->middleware('can:paes.create')->only('create', 'store');
        $this->middleware('can:paes.show')->only('show');
        $this->middleware('can:paes.edit')->only('edit', 'update');
        $this->middleware('can:paes.destroy')->only('destroy');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $paes = Pae::paginate(10000);

        return view('pae.index', compact('paes'))
            ->with('i', (request()->input('page', 1) - 1) * $paes->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pae = new Pae();
        return view('pae.create', compact('pae'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Pae::$rules);

        $pae = Pae::create($request->all());

        return redirect()->route('paes.index')
            ->with('success', '<div class="alert alert-success alert-dismissible">
                                    <h5><i class="icon fas fa-check"></i> ¡Éxito!</h5>
                                    Registro programa de alimentación escolar creado exitosamente.
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
        $pae = Pae::find($id);

        return view('pae.show', compact('pae'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pae = Pae::find($id);

        return view('pae.edit', compact('pae'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Pae $pae
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pae $pae)
    {
        request()->validate(Pae::$rules);

        $pae->update($request->all());

        return redirect()->route('paes.index')
            ->with('success', '<div class="alert alert-success alert-dismissible">
                                    <h5><i class="icon fas fa-check"></i> ¡Éxito!</h5>
                                    Registro programa de alimentación escolar actualizado exitosamente.
                                </div>');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $pae = Pae::find($id)->delete();

        return redirect()->route('paes.index')
            ->with('success', '<div class="alert alert-success alert-dismissible">
                                    <h5><i class="icon fas fa-check"></i> ¡Éxito!</h5>
                                    Registro programa de alimentación escolar eliminado exitosamente.
                                </div>');
    }
}