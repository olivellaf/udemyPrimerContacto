<?php

use Illuminate\Support\Facades\Route;

/* Controllers */
use App\Http\Controllers\FruitsController;
use App\Http\Controllers\NotesController;

/* Middlewares */
use App\Http\Middleware\IsAdminMiddleware;

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

Route::get('/hello-world', function () {
    return view('hello-world');
});

/* TRYING POST METHOD */
Route::post('/hello-world', function () {
    return 'Hello World by POST';
});

Route::get('/contact', function () {
    return view('contact');
});

/* Use MATCH and tell them which methods do you want that this URL responds,
** or use ANY for the route works with all http methods
*/
Route::any('/contact', function () {
    return view('contact.contact');
});

/* Send variables
** Use "?" if want to make the parameter NOT required
** Use "where" for trying to "validate" if will be required.
*/
Route::get('/product/{id?}/{type?}', function ( $id = '2500', $type = null ) {
    /*
    return view('product', array(
        'id' => $id,
        'type' => $type,
    ));

    Another way, more polite
    */

    return view('product.product')
        ->with('id', $id)
        ->with('type', $type)
        ->with('attributes', array('Color', 'Talla', 'Peso', 'Precio', 'Stock'));

})->where([
    'id' => '[0-9]+',
    'type' => '[A-Za-z]+'
]);


/* Learning about route groups */
Route::prefix('fshop')->group(function() {

    Route::get('/fruits', [FruitsController::class, 'getIndex']);
    Route::get('/oranges/{admin?}', [FruitsController::class, 'getOranges'])
        ->middleware(IsAdminMiddleware::class)
        ->name('oranges2'); // give a name to the route!
    Route::get('/pears', [FruitsController::class, 'anyPears']);

});

Route::post('/getform', [FruitsController::class, 'getFormData']);

Route::get('/notes', [NotesController::class, 'getIndex']);
Route::get('/notes/note/{id}', [NotesController::class, 'getNoteFromID']);


/* New route for Controller, this is how its done now. */


/*
Trying to get some automatized routes, but not working since version 5.2 of Laravel.
Route::controller('fruits', 'FruitsController');
*/
