<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewController;

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

Route::get('Home', [NewController::class, 'displayHome'] );

 ##################### CRUD ###########################################




// Route::get('/edit/id/{id}', [NewController::class, 'editData']);
// Route::put('/update/id/{id}', [NewController::class, 'updateData']);

 
###############################################################################

Route::get('utable', [NewController::class, 'displayUTables'] );
Route::get('stable', [NewController::class, 'displaySTables'] );
Route::get('etable', [NewController::class, 'displayETables'] );

Route::get('utable', [NewController::Class,'viewData']);
Route::get('/delete/id/{id}', [NewController::class, 'deleteData']);
Route::get('create', [NewController::Class,'Viewadd']);
Route::post('create', [NewController::class, 'createData']);