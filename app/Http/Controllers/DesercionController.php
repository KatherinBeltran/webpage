<?php

namespace App\Http\Controllers;

use App\Models\Desercion;
use Illuminate\Http\Request;

/**
 * Class DesercionController
 * @package App\Http\Controllers
 */
class DesercionController extends Controller
{
    public function __construct()
    {
        $this->middleware('can:desercions.index')->only('index');
        $this->middleware('can:desercions.create')->only('create', 'store');
        $this->middleware('can:desercions.show')->only('show');
        $this->middleware('can:desercions.edit')->only('edit', 'update');
        $this->middleware('can:desercions.destroy')->only('destroy');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $desercions = Desercion::paginate(10000);

        return view('desercion.index', compact('desercions'))
            ->with('i', (request()->input('page', 1) - 1) * $desercions->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $desercion = new Desercion();
        return view('desercion.create', compact('desercion'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Desercion::$rules);

        $desercion = Desercion::create($request->all());

        return redirect()->route('desercions.index')
            ->with('success', '<div class="alert alert-success alert-dismissible">
                                    <h5><i class="icon fas fa-check"></i> ¡Éxito!</h5>
                                    Registro deserción intra anual sector oficial creado exitosamente.
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
        $desercion = Desercion::find($id);

        return view('desercion.show', compact('desercion'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $desercion = Desercion::find($id);

        return view('desercion.edit', compact('desercion'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Desercion $desercion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Desercion $desercion)
    {
        request()->validate(Desercion::$rules);

        $desercion->update($request->all());

        return redirect()->route('desercions.index')
            ->with('success', '<div class="alert alert-success alert-dismissible">
                                    <h5><i class="icon fas fa-check"></i> ¡Éxito!</h5>
                                    Registro deserción intra anual sector oficial actualizado exitosamente.
                                </div>');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $desercion = Desercion::find($id)->delete();

        return redirect()->route('desercions.index')
            ->with('success', '<div class="alert alert-success alert-dismissible">
                                    <h5><i class="icon fas fa-check"></i> ¡Éxito!</h5>
                                    Registro deserción intra anual sector oficial eliminado exitosamente.
                                </div>');
    }
}
