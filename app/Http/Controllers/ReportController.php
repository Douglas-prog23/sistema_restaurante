<?php

namespace App\Http\Controllers;

use Barryvdh\DomPDF\Facade\Pdf ;
use App\Models\Categoria;
use App\Models\Mesa;
use App\Models\Platillo;
use App\Models\Reservacione;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function reporteUno() { 

      $data = Platillo::select( 
        'platillos.id',
        "platillos.nombre", 
        "platillos.categoria",   
        "platillos.precio",
        "platillos.estado",
        'platillos.stock',   
        "categorias.nombre as categoria")->join   ("categorias",  "categorias.id", "="  ,  "platillos.categoria") ->get();

    $pdf = PDF::loadView('reporte.reporte',compact('data'));

    return $pdf->download('Reporte_de_platillos.pdf');
           
    
    }

    public function reporteDos() { 

      $data = Reservacione::select( 
        'reservaciones.id_cliente',
        "reservaciones.id_mesa", 
        "reservaciones.fecha",   
        "reservaciones.num_personas",
        "reservaciones.ocasion",
        'reservaciones.comentario',
        'reservaciones.hora',
        'reservaciones.estado',   
        "users.name as id_cliente")->join   ("users",  "users.id", "="  ,  "reservaciones.id_cliente") ->get();

    $pdf = PDF::loadView('reporte.reporte2',compact('data'));

    return $pdf->download('Reporte_de_reservaciones.pdf');
           
    
    }

    public function reporteTres() { 

      $data = Mesa::all( );

    $pdf = PDF::loadView('reporte.reporte3',compact('data'));

    return $pdf->download('Reporte_de_mesas.pdf');
           
    
    }
}
