<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hola-mundo', function () {
    return 'Hello World';
});

/* TRYING POST METHOD */
Route::post('/hola-mundo', function () {
    return 'Hello World by POST';
});

Route::get('/contact', function () {
    return view('contact');
});

/* Use MATCH and tell them which methods do you want that this URL responds,
** or use ANY for the route works with all http methods
*/
Route::any('/contact', function () {
    return view('contact');
});

/* Send variables
** Use "?" if want to make the parameter NOT required
** Use "where" for trying to "validate" if will be required.
*/
Route::get('/product/{id?}/{type?}', function ( $id = '2500', $type = 'simple' ) {
    /*
    return view('product', array(
        'id' => $id,
        'type' => $type,
    ));

    Another way, more polite
    */

    return view('product')
        ->with('id', $id)
        ->with('type', $type);

})->where([
    'id' => '[0-9]+',
    'type' => '[A-Za-z]+'
]);
