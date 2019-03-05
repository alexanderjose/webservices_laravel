<?php

use Illuminate\Http\Request;
use App\Article;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('articles', 'ArticleController@index');
Route::get('articles/{article}', 'ArticleController@show');
Route::post('articles', 'ArticleController@store');
Route::put('articles/{article}', 'ArticleController@update');
Route::delete('articles/{article}', 'ArticleController@delete');

// Modulo de Seriales
Route::get(
  'seriales/{tipo_solicitud}/{estatus_solicitud}/{serie_decimal}/{serie_hexadecimal}/',
  'SerialController@listado'
);
Route::get('seriales/{serial}', 'SerialController@detalle');

Route::get(
    'seriales_home', function(){
      return view('seriales_home');
    }
);

Route::get(
    'seriales/combos/{tipo_solicitud}/{estatus_solicitud}/',
    'SerialController@getCombosFiltros'
);
