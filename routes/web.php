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

//rutas de los reportes
Route::get('reporte', '\App\Http\Controllers\ReportController@reporteUno')->name('reporte');
Route::get('reporte2', [App\Http\Controllers\ReportController::class, 'reporteDos'])->name('reporte2');
Route::get('reporte3', [App\Http\Controllers\ReportController::class, 'reporteTres'])->name('reporte3');
Route::get('reporte4', [App\Http\Controllers\ReportController::class, 'reporteCuatro'])->name('reporte4');
//

Route::get('/', [App\Http\Controllers\HomeController::class, 'index']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/menu', [App\Http\Controllers\PlatilloController::class, 'menu'])->name('menu');
Route::get('/menu/buscar',[App\Http\Controllers\PlatilloController::class, 'buscar'])->name('buscar');
Route::get('/shopping-cart', [PlatilloController::class, 'platilloCart'])->name('shopping.cart');
Route::get('/menu/{id}', [App\Http\Controllers\PlatilloController::class, 'addPlatillotoCart'])->name('addplatillo.to.cart');
///ruta para almacenar pedidos en la base de datos tabla pedidos
// Route::get('/menu/{id}', [App\Http\Controllers\PedidoController::class, 'create'])->name('addplatillo.to.cart');
///
Route::patch('/update-shopping-cart', [PlatilloController::class, 'updateCart'])->name('update.shopping.cart');
Route::delete('/delete-cart-product/codigo', [PlatilloController::class, 'deleteProduct'])->name('delete.cart.product');
Route::post('reservacione', '\App\Http\Controllers\ReservacioneController@storecli')->name('storecli');

//Route::resource('/home',HomeController::class)->names('home');

//routas para la categorias
Route::group(['middleware'=>['auth', 'checkRole:1,2']], function(){
    Route::get('usuario/create', '\App\Http\Controllers\UsuarioController@create')->name('usuario.create');
    Route::post('usuario', '\App\Http\Controllers\UsuarioController@store')->name('usuario.save');
    Route::get('usuario/{user}/edit', '\App\Http\Controllers\UsuarioController@edit')->name('usuario.edit');
    Route::put('usuario/{user}', '\App\Http\Controllers\UsuarioController@update')->name('usuario.update');
    Route::get('usuario', '\App\Http\Controllers\UsuarioController@index')->name('usuario.index');
    Route::patch('/pedidos/{pedido}/actualizar-estado', [PedidoController::class, 'actualizarEstado'])
    ->name('pedidos.estado');
    // Route::get('cursos', 'index')->name('curso.index');
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


