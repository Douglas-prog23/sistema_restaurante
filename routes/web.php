<?php

use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\DetallePedidoController;
use App\Http\Controllers\DetallePlatilloController;
use App\Http\Controllers\FacturaController;
use App\Http\Controllers\IngredienteController;
use App\Http\Controllers\MesaController;
use App\Http\Controllers\PlatilloController;
use App\Http\Controllers\ReservacioneController;
use App\Http\Controllers\RestauranteController;
use App\Http\Controllers\PedidoController;
use App\Http\Controllers\RoleController;
use App\Models\DetallePedido;
use App\Models\DetallePlatillo;
use App\Models\Mesa;
use App\Models\Pedido;
use App\Models\Reservacione;
use App\Models\Restaurante;
use App\Models\Role;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//  return view('home');
// });

Route::get('/', [App\Http\Controllers\HomeController::class, 'index']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/menu', [App\Http\Controllers\HomeController::class, 'menu'])->name('menu');
Route::post('reservaciones', '\App\Http\Controllers\ReservacioneController@storecli')->name('storecli');

//Route::resource('/home',HomeController::class)->names('home');

//routas para la categorias
Route::group(['middleware'=>['auth', 'checkRole:1,2']], function(){
    Route::resource('categorias',CategoriaController::class);
    Route::resource('mesas',MesaController::class);
    Route::resource('platillos',PlatilloController::class);
    Route::resource('pedidos',PedidoController::class);
    Route::resource('reservaciones',ReservacioneController::class);
    Route::resource('restaurantes',RestauranteController::class);
    Route::resource('roles',RoleController::class);
    Route::get('/admin', function () {
        return view('admin');
       })->name('admin');
});

//rutas para los platillos
Route::resource('detalle-pedidos',DetallePedidoController::class);

Route::resource('detalle-platillos',DetallePlatilloController::class);

Route::resource('facturas',FacturaController::class);

/////////////no necesaria
Route::resource('ingredientes',IngredienteController::class);
/////////////////////////////////


