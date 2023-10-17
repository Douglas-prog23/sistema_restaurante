<?php

namespace App\Http\Controllers;

use App\Models\Reservacione;
use Illuminate\Http\Request;

/**
 * Class ReservacioneController
 * @package App\Http\Controllers
 */
class ReservacioneController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $reservaciones = Reservacione::paginate();

        return view('reservacione.index', compact('reservaciones'))
            ->with('i', (request()->input('page', 1) - 1) * $reservaciones->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $reservacione = new Reservacione();
        return view('reservacione.create', compact('reservacione'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Reservacione::$rules);

        $reservacione = Reservacione::create($request->all());

        return redirect()->route('reservaciones.index')
            ->with('success', 'Reservacione created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $reservacione = Reservacione::find($id);

        return view('reservacione.show', compact('reservacione'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $reservacione = Reservacione::find($id);

        return view('reservacione.edit', compact('reservacione'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Reservacione $reservacione
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Reservacione $reservacione)
    {
        request()->validate(Reservacione::$rules);

        $reservacione->update($request->all());

        return redirect()->route('reservaciones.index')
            ->with('success', 'Reservacione updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $reservacione = Reservacione::find($id)->delete();

        return redirect()->route('reservaciones.index')
            ->with('success', 'Reservacione deleted successfully');
    }
}
