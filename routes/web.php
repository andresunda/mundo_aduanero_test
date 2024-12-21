<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
// Auth Controller

Route::post('login', 'AuthController@login')->name('login');
Route::get('/', 'AuthController@index');
Route::get('/login', 'AuthController@index');

Route::get('registro', 'AuthController@registro')->name('registro');
Route::post('register', 'AuthController@register')->name('register');
Route::get('paquete', 'AuthController@paquete')->name('paquete');

Route::get('finalizar', 'AuthController@finalizar')->name('finalizar');







// Demo routes
Route::get('/datatables', 'PagesController@datatables');
Route::get('/ktdatatables', 'PagesController@ktDatatables');
Route::get('/select2', 'PagesController@select2');
Route::get('/icons/custom-icons', 'PagesController@customIcons');
Route::get('/icons/flaticon', 'PagesController@flaticon');
Route::get('/icons/fontawesome', 'PagesController@fontawesome');
Route::get('/icons/lineawesome', 'PagesController@lineawesome');
Route::get('/icons/socicons', 'PagesController@socicons');
Route::get('/icons/svg', 'PagesController@svg');

// Quick search dummy route to display html elements in search dropdown (header search)
Route::get('/quick-search', 'PagesController@quickSearch')->name('quick-search');

Route::group(['middleware' => ['auth']], function () {
    //

//User --------------------------------------------------------------------------------
Route::get('dash-board', 'UserController@dashboard')->name('dashboard');


Route::get('dash-board', 'UserController@dash_board')->name('dash_board');
Route::get('perfil', 'UserController@perfil')->name('perfil');

Route::get('contacto', 'UserController@contacto')->name('contacto');

//User Solicitud-------------------------------------------------------------------------
Route::get('solicitud/{id}', 'UserController@solicitud')->name('solicitud');

Route::get('aceptar/{id}', 'UserController@aceptar')->name('aceptar');
Route::get('eliminar/{id}', 'UserController@eliminar')->name('eliminar');


//Scroll----------------------------------------------------------------------------------

Route::get('nombres/buscador','ScrollController@buscador');


//Andres Jr

Route::post('change_password', 'UserController@change_password')->name('change_password');
Route::get('passwordC', 'UserController@passwordC')->name('passwordC');
Route::post('Foto', 'UserController@Foto')->name('Foto');
//Ruta para actualizar/editar datos
Route::post('guardar_cambios' , 'UserController@guardar_cambios')->name('guardar_cambios');
Route::get('empresas', 'UserController@empresas')->name('empresas');
Route::get('foto_eliminar','UserController@foto_eliminar')->name('foto_eliminar');
});

// Images
Route::get('/get-imagen/{path}/{nivel}/{carpeta}/{img}', function(Request $request, $imagen){
   // return $request->nivel;
    $path = storage_path("app/$request->path/"). $request->nivel . '/'. $request->carpeta . '/' . $request->img;
   // $path = str_replace("/","\\", $path);
    $file = File::get($path);
    $type = File::mimeType($path);

    $response = Response::make($file, 200);
    $response->header("Content-Type", $type);
    return $response;
});