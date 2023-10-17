<?php

namespace App\Http\Controllers;

use App\Models\DetallePlatillo;
use Illuminate\Http\Request;

/**
 * Class DetallePlatilloController
 * @package App\Http\Controllers
 */
class DetallePlatilloController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $detallePlatillos = DetallePlatillo::paginate();

        return view('detalle-platillo.index', compact('detallePlatillos'))
            ->with('i', (request()->input('page', 1) - 1) * $detallePlatillos->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $detallePlatillo = new DetallePlatillo();
        return view('detalle-platillo.create', compact('detallePlatillo'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(DetallePlatillo::$rules);

        $detallePlatillo = DetallePlatillo::create($request->all());

        return redirect()->route('detalle-platillos.index')
            ->with('success', 'DetallePlatillo created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $detallePlatillo = DetallePlatillo::find($id);

        return view('detalle-platillo.show', compact('detallePlatillo'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $detallePlatillo = DetallePlatillo::find($id);

        return view('detalle-platillo.edit', compact('detallePlatillo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  DetallePlatillo $detallePlatillo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DetallePlatillo $detallePlatillo)
    {
        request()->validate(DetallePlatillo::$rules);

        $detallePlatillo->update($request->all());

        return redirect()->route('detalle-platillos.index')
            ->with('success', 'DetallePlatillo updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $detallePlatillo = DetallePlatillo::find($id)->delete();

        return redirect()->route('detalle-platillos.index')
            ->with('success', 'DetallePlatillo deleted successfully');
    }
}
