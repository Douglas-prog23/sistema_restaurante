<?php

namespace App\Http\Controllers;

use App\Models\Ingrediente;
use Illuminate\Http\Request;

/**
 * Class IngredienteController
 * @package App\Http\Controllers
 */
class IngredienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ingredientes = Ingrediente::paginate();

        return view('ingrediente.index', compact('ingredientes'))
            ->with('i', (request()->input('page', 1) - 1) * $ingredientes->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $ingrediente = new Ingrediente();
        return view('ingrediente.create', compact('ingrediente'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Ingrediente::$rules);

        $ingrediente = Ingrediente::create($request->all());

        return redirect()->route('ingredientes.index')
            ->with('success', 'Ingrediente created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $ingrediente = Ingrediente::find($id);

        return view('ingrediente.show', compact('ingrediente'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $ingrediente = Ingrediente::find($id);

        return view('ingrediente.edit', compact('ingrediente'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Ingrediente $ingrediente
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ingrediente $ingrediente)
    {
        request()->validate(Ingrediente::$rules);

        $ingrediente->update($request->all());

        return redirect()->route('ingredientes.index')
            ->with('success', 'Ingrediente updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $ingrediente = Ingrediente::find($id)->delete();

        return redirect()->route('ingredientes.index')
            ->with('success', 'Ingrediente deleted successfully');
    }
}
