<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Models\Platillo;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $categoria = Categoria::all();
        $platillo = Platillo::all();
        $platillost = Platillo::take(3)->get();
        return view('home',['categorias'=>$categoria,
        'platillos'=>$platillo, 'platillost'=>$platillost
    ]);
    }
}
