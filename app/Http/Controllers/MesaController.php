<?php

namespace App\Http\Controllers;

use App\Models\Mesa;
use Illuminate\Http\Request;

/**
 * Class MesaController
 * @package App\Http\Controllers
 */
class MesaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mesas = Mesa::paginate();

        return view('mesas.index', compact('mesas'))
            ->with('i', (request()->input('page', 1) - 1) * $mesas->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $mesa = new Mesa();
        return view('mesas.create', compact('mesa'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate(Mesa::storeRules());
        // request()->validate(Mesa::$rules);

        $mesa = Mesa::create($request->all());

        return redirect()->route('mesas.index')
            ->with('success', 'Mesa created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $mesa = Mesa::find($id);

        return view('mesas.show', compact('mesa'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $mesa = Mesa::find($id);

        return view('mesas.edit', compact('mesa'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Mesa $mesa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Mesa $mesa)
    {
        $request->validate(Mesa::updateRules($mesa->id));
        // request()->validate(Mesa::$rules);

        $mesa->update($request->all());

        return redirect()->route('mesas.index')
            ->with('success', 'Mesa updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $mesa = Mesa::find($id)->delete();

        return redirect()->route('mesas.index')
            ->with('success', 'Mesa deleted successfully');
    }
}
