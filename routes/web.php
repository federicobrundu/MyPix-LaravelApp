<?php

use App\Http\Controllers\Admin\PhotoController;
use Illuminate\Support\Facades\Route;
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

Route::get('/', function () {
    return view('welcome');
});


// Route::get('photos', [PhotoController::class, 'index']);
// Route::post('photos', [PhotoController::class, 'store']);
// Route::delete('photos', [PhotoController::class, 'destroy']);

/*
    By using Route::resource, Laravel automatically generates all the necessary routes for standard CRUD operations for the Photo model. 
    This means there is no need to manually define each individual route for actions like index, store, show, update, and destroy, 
    making the code cleaner and easier to manage.
*/
Route::resource('photos', [PhotoController::class]);

