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
Route::get('login', [NewController::class, 'displaylogin'] );
Route::get('/', [NewController::class, 'displaydash'] );
Route::get('/', [NewController::Class,'viewdashData']);
Route::get('profile/id/{id}', [NewController::Class,'viewdashproData']);
Route::get('profilereq/id/{id}', [NewController::Class,'viewdashreqData']);
Route::get('acceptuser/id/{id}', [NewController::Class,'acceptuser']);
Route::get('acceptreq/id/{id}', [NewController::Class,'Acceptreq']);
Route::get('utable', [NewController::class, 'displayUTables'] );
Route::get('stable', [NewController::class, 'displaySTables'] );
Route::get('utable', [NewController::Class,'viewData']);
Route::get('/delete/id/{id}', [NewController::class, 'deleteData']);
Route::get('create', [NewController::Class,'Viewadd']);
Route::post('create', [NewController::class, 'insert_user']);
Route::get('/edit/id/{id}', [NewController::class, 'editData']);
Route::put('/update/id/{id}', [NewController::class, 'updateData']);
Route::get('etable', [NewController::class, 'displayETables'] );
Route::get('etable', [NewController::Class,'viewElderData']);
Route::get('createElder', [NewController::Class,'Viewaddd']);
Route::post('createElder', [NewController::class, 'createElderData']);
Route::get('/delete/id/{id}', [NewController::class, 'deleteElderData']);
Route::get('/edit/id/{id}', [NewController::class, 'editElderData']);
Route::put('/updateElder/id/{id}', [NewController::class, 'updateElderData']);
Route::post('login', [NewController::Class, 'viewlogindata']);
