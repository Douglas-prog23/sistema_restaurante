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
        $request->validate(Platillo::storeRules());
        // request()->validate(Platillo::$rules);

      $platillo = Platillo::create($request->all());

       if ($request->hasFile('imagen')) {
        $file = $request->file('imagen');
        $rutaguardarimg = 'img/imgen';
        //obtenemos el nombre del archivo
        $filename = time().'-'.$file->getClientOriginalExtension();
        //indicamos donde queremos guardar la imagen y le asignamos un nombre al mismo
        $guardarimg = $request->file('imagen')->move($rutaguardarimg, $filename);
        $platillo['imagen']= $guardarimg;
       }
       $platillo->save();
       
      
       
        return redirect()->route('platillos.index')
            ->with('success', 'Platillo Creado Satisfactoriamente.');

            // if ($request->hasFile('imagen')) {
            //     $file = $request->file('imagen');
            //     $name = time().$file->getClientOriginalName();
            //     $file->move(public_path().'/images/', $name);
            //     $path = $file->storeAs('public/imagen',$name);
            //     $platillo['imagen'] = $path;
            //     }
            //     $platillo->save();
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
        $request->validate(Platillo::updateRules($platillo->id));
        $platillo->update($request->all());

        if ($request->hasFile('imagen')) {
            $file = $request->file('imagen');
            $rutaguardarimg = 'img/imgen';
            $filename = time() . '-' . $file->getClientOriginalName();
            $guardarimg = $request->file('imagen')->move($rutaguardarimg, $filename);
            $platillo->imagen = $guardarimg;
            $platillo->save();
        }
    
        return redirect()->route('platillos.index')
            ->with('success', 'Platillo Actualizado Satisfactoriamente.');
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
            ->with('success', 'Platillo Eliminado Satisfactoriamente');
    }
}
