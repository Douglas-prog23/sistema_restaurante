<?php

namespace App\Http\Controllers;


use App\Models\Categoria;
use App\Models\Platillo;
use Illuminate\Http\Request;

/**
 * Class PlatilloController
 * @package App\Http\Controllers
 */
class PlatilloController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $platillos = Platillo::paginate();

        return view('platillo.index', compact('platillos'))
            ->with('i', (request()->input('page', 1) - 1) * $platillos->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $platillo = new Platillo();
        $categorias=Categoria::pluck('nombre','id');
        return view('platillo.create', compact('platillo','categorias'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $newPost = new Platillo();
        request()->validate(Platillo::$rules);

        if($request->hasFile('imagen')){
           $file = $request->file('imagen');
           $destionation ='img/featureds/';
           $filename = time().'-'.$file->getClientOriginalName();
           $upload=$file->move($destionation,$filename);
           $newPost->imagen = $filename;

          
        }

        $platillo = Platillo::create($request->all());

        return redirect()->route('platillos.index')
            ->with('success', 'Platillo created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $platillo = Platillo::find($id);

        return view('platillo.show', compact('platillo'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $platillo = Platillo::find($id);
        $categorias=Categoria::pluck('nombre','id');
        return view('platillo.edit', compact('platillo','categorias'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Platillo $platillo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Platillo $platillo)
    {
        request()->validate(Platillo::$rules);

        $platillo->update($request->all());

        return redirect()->route('platillos.index')
            ->with('success', 'Platillo updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $platillo = Platillo::find($id)->delete();

        return redirect()->route('platillos.index')
            ->with('success', 'Platillo deleted successfully');
    }
}
