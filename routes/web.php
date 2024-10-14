<?php

use App\Http\Controllers\Admin\PhotoController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return redirect()->route('photos.index');
});


// Route::get('photos', [PhotoController::class, 'index']);
// Route::post('photos', [PhotoController::class, 'store']);
// Route::delete('photos', [PhotoController::class, 'destroy']);

/*
    By using Route::resource, Laravel automatically generates all the necessary routes for standard CRUD operations for the Photo model. 
    This means there is no need to manually define each individual route for actions like index, store, show, update, and destroy, 
    making the code cleaner and easier to manage.
*/
Route::resource('photos', PhotoController::class, [
    'names' => [
        'index' => 'photos.index',
        'show' => 'photos.show',
        'store' => 'photos.store',
        'update' => 'photos.update',
        'destroy' => 'photos.destroy'
    ]
]);


